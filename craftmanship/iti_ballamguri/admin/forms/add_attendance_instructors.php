<?php 
session_start();
if (empty($_SESSION['this_admin_id'])) {
   $_SESSION['errorLogin'] = "Access Denied!";
   header('location: login.php');
   exit();
} else {
   include '../classes/Crud.php';
   $crud = new Crud();
   date_default_timezone_set("Asia/Kolkata");
   $today = date("Y-m-d");
   $time = date("H:i:s");
   $sessionName =  $_SESSION['this_admin_name'];
   $userType = $_SESSION['userType'];
   $userID = $_SESSION['this_admin_id'];
}

if(isset($_POST['ajax'])){

    extract($_POST);
            
        $data = [
            'instructor_name' =>$instructor,
            'attendence_month' =>$month,
            'percentage' =>$percentage,  
            'status' =>1,            
        ];
        $create = $crud->Create($data,"attendence_instructors_details");

        if($create) {
            $data["successMessage"]="Data Added";
        }else {
            $data["errorMessage"]="Error adding data";
        }

    echo json_encode($data);
    exit();
}
?>


