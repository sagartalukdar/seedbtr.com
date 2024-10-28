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
            'trainee_name' =>$trainee,
            'attendance_month' =>$selectMonth,
            'trade' =>$city,
            'percentage' =>$percentage,
            // 'status' =>$status,
           ];
        $count= $crud ->Count("attendence_trainee_details","`trainee_name`='$trainee' AND `attendance_month`='$selectMonth'");
       
        if($count<1){
            $create = $crud->Create($data,"attendence_trainee_details");

            if($create) {
                $_SESSION['message']= '<script>alert("Data Uploaded!");</script>';
                echo '<script>window.location.assign("../view-attendance-trainee.php");</script>';
            }
        } else {
            
            $_SESSION['message']= '<script>alert("Data Already Exists!");</script>';
            echo '<script>window.location.assign("../view-attendance-trainee.php");</script>';
        }

    
}
?>