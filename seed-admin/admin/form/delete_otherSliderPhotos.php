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

   if(isset($_POST['dataId'])){
      $ID=$_POST['dataId'];
      $ifExists = $crud->Count("other_slider","`id`='$ID'");
      if ($ifExists>0) {
          $crud->Delete("other_slider","`id`='$ID'");
          $data['successMessage']="Slider Image Deleted Successfully";
      }
      else{
         $data['errorMessage']="Error Deleting Image";
      }
      echo json_encode($data);
   }

}

?>