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

if(isset($_POST['submit'])){

    extract($_POST);
    $selectMonth=str_replace(array("\r", "\n"), '', $selectMonth);
        $data = [
            'instructor_name' =>$instructors,
            'attendence_month' =>$selectMonth,
            'percentage' =>$percentage
            // 'status' =>$status,
           ];
        $count= $crud ->Count("attendence_instructors_details","`instructor_name`='$instructors' AND `attendence_month`='$selectMonth'");
       
        if($count<1){
            $create = $crud->Create($data,"attendence_instructors_details");

            if($create) {
                $_SESSION['message']= '<script>alert("Data Uploaded!");</script>';
                echo '<script>window.location.assign("../view-attendance-instructors.php");</script>';
            }
        } else {
            
            $_SESSION['message']= '<script>alert("Data Already Exists!");</script>';
            echo '<script>window.location.assign("../view-attendance-instructors.php");</script>';
        }

    
}
?>