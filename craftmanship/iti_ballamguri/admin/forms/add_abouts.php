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

    if (empty($_FILES["image"]["name"])) {

        
        $data = [

            'head' =>$head,
            'title' =>$title,
            'description' =>$description,
            'date_uploaded' =>$today,
            
        ];
        $count= $crud ->Count("about_us","1");
       
        if($count<1){
            $create = $crud->Create($data,"about_us");

            if($create) {
                $_SESSION['message']= '<script>alert("Data Uploaded!");</script>';
                echo '<script>window.location.assign("../view_abouts.php");</script>';
            }
        } else {
            
            $create =$crud->Create($data,"about_us");
       
            $_SESSION['message']= '<script>alert("Data Added!");</script>';
            echo '<script>window.location.assign("../view_abouts.php");</script>';
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
          echo '<script>alert("Sorry, your file was not uploaded.");</script>';
           echo '<script>window.location.assign("../add_abouts.php");</script>';
        // if everything is ok, try to upload file
        } else {

            if (move_uploaded_file($_FILES["image"]["tmp_name"], "../".$target_file)) {

              // $_SESSION['message']= "The file ". basename( $_FILES["aboutImage"]["name"]). " has been uploaded.";
                $data = [
                    'image' => $target_file,
                     'head' =>$head,
                    'title' =>$title,
                    'description' =>$description,
                    'date_uploaded' =>$today
                    
                    
                ];
                $count= $crud ->Count("about_us","1");
                
                if($count<1){
                    $create = $crud->Create($data,"about_us");

                    if($create) {
                        $_SESSION['message']= '<script>alert("Image Uploaded!");</script>';
                        echo '<script>window.location.assign("../view_abouts.php");</script>';
                    }
                } else {
                    
                    $update =$crud->Create($data,"about_us");
               
                    $_SESSION['message']= '<script>alert("Post Uploaded with Image");</script>';
                    echo '<script>window.location.assign("../view_abouts.php");</script>';
                }

            } else {
                $_SESSION['message']= "Sorry, there was an error uploading your file.";
            }
        }
    }
}
?>