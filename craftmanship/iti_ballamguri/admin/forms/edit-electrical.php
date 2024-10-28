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

if(isset($_POST['submit'])){
    extract($_POST);

    if (empty($_FILES["image"]["name"])) {
        $data = [
          
                    
                    'electric_load' =>$electric_load,
                    'Date_of_Connection' =>$date,
                    'Connection_name' =>$connect_name,
                    'date_uploaded' =>$date_uploaded,
                   
            
        ];
        $count= $crud ->Count("electric_power_supply","`id`='$electric_id'");
        if($count==1){
            $update =$crud->Update("electric_power_supply",$data,"`id`='$electric_id'");
       
            $_SESSION['message']= '<script>alert("Data Updated!");</script>';
            echo '<script>window.location.assign("../view-electric.php");</script>';
        } else {
            echo '<script>alert("Something Went Wrong!");</script>';
            echo '<script>window.location.assign("../view-electric.php");</script>';
        }
    } else {
        $target_dir = "images/index/";
        $target_file = $target_dir . md5(time()).basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else{
            $uploadOk = 0;
        } 
            // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
         
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
          $_SESSION['message']= '<script>alert("Sorry, your file was not uploaded.");</script>';
        // if everything is ok, try to upload file
        } else {

            if (move_uploaded_file($_FILES["image"]["tmp_name"], "../".$target_file)) {

                // $_SESSION['message']= "The file ". basename( $_FILES["aboutImage"]["name"]). " has been uploaded.";
                $data = [
                    'image' => $target_file,
                    
                    'electric_load' =>$electric_load,
                    'Date_of_Connection' =>$date,
                    'Connection_name' =>$connect_name,
                    'date_uploaded' =>$date_uploaded,
                   
                    
                ];
                
                $count= $crud ->Count("electric_power_supply","`id`='$electric_id'");
               
                if($count==1){
                    $update =$crud->Update("electric_power_supply",$data,"`id`='$electric_id'");
               
                    $_SESSION['message']= '<script>alert("Data Updated!");</script>';
                    echo '<script>window.location.assign("../view-electric.php");</script>';
                } else {
                    echo '<script>alert("Something Went Wrong!");</script>';
                    echo '<script>window.location.assign("../view-electric.php");</script>';
                }

            } else {
                $_SESSION['message']= "Sorry, there was an error uploading your file.";
            }
        }
    }
}
?>