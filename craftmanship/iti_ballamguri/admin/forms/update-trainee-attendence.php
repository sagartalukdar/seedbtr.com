<?php 
session_start();
error_reporting(E_ALL);

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

if(isset($_POST['id'])){
    extract($_POST);

        $data = [
            'trainee_name' =>$trainee,
            'trade' =>$trade,
            'attendance_month' =>$month,
            'percentage' =>$percentage,            
            'status' =>$status,        
        ];
        $count= $crud ->Count("attendence_trainee_details","`attendence_traineeID`='$id'");
        if($count==1){
            $update =$crud->Update("attendence_trainee_details",$data,"`attendence_traineeID`='$id'");
            $data["successMessage"]="data updated successfully.";
        } else {
            $data["errorMessage"]="Error updating data.";
        }

    echo json_encode($data);
}
?>