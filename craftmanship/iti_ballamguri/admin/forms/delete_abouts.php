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

   $ID = $_GET['id'];
   $ifExists = $crud->Count("about_us","`id`='$ID'");
   if ($ifExists>0) {
       $crud->Delete("about_us","`id`='$ID'");
        echo '<script>alert("File Has Been Removed.");</script>';
       echo '<script>window.location.assign("../view_abouts.php");</script>';
   }
   else{
        echo '<script>alert("File Does Not Exist");</script>';

        echo '<script>window.location.assign("../view_abouts.php");</script>';
   }
}

?>