<?php 
session_start();
error_reporting(E_ALL);

if (empty($_SESSION['this_user_id'])) {
   $_SESSION['errorLogin'] = "Access Denied!";
   header('location: login.php');
   exit();
} else {
   include '../classes/Crud.php';
   $crud = new Crud();
   date_default_timezone_set("Asia/Kolkata");
   $today = date("Y-m-d");
   $time = date("H:i:s");
   $sessionName =  $_SESSION['this_user_name'];
   $userType = $_SESSION['userType'];
   $userID = $_SESSION['this_user_id'];

   $ID = $_GET['id'];
   $ifExists = $crud->Count("about_compet","`id`='$ID'");
   if ($ifExists>0) {
       $crud->Delete("about_compet","`id`='$ID'");
        echo '<script>alert("File Has Been Removed.");</script>';
       echo '<script>window.location.assign("../logo_compet.php");</script>';
   }
   else{
        echo '<script>alert("File Does Not Exist");</script>';

        echo '<script>window.location.assign("../logo_compet.php");</script>';
   }
}

?>