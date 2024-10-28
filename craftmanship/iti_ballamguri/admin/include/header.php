<?php 
session_start();
if (empty($_SESSION['this_admin_id'])) {
   $_SESSION['errorLogin'] = "Access Denied!";
   header('location:login.php');
   exit();
} else {
   include 'classes/Crud.php';
   $crud = new Crud();
   date_default_timezone_set("Asia/Kolkata");
   $today = date("Y-m-d");
   $time = date("H:i:s");
   
   $filename = basename($_SERVER['PHP_SELF']);
   $pathinfo = pathinfo($filename);
   $pageName = basename($filename, '.' . $pathinfo['extension']);
   $pageName = ucwords(str_replace("-"," ",$pageName));
   $pageName = ucwords(str_replace("_"," ",$pageName));

   $sessionName =  $_SESSION['this_admin_username'];
   // $userType = $_SESSION['userType'];
   $userID = $_SESSION['this_admin_id'];
   $read = $crud->Read("about_us","1");
   $read2 = $crud->Read("photos","1");
   $read3 = $crud->Read("events","1");
   $read4 = $crud->Read("courses","1");
   $read5 = $crud->Read("newsupdates","1");
   $read6 = $crud->Read("slider","1");
   
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $pageName;?> - ITI Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!--  CSS  -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>