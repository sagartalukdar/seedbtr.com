<?php 
session_start();
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
}

if(isset($_POST['submit'])){

    extract($_POST);

    if (empty($_FILES["aboutImage"]["name"])) {

        
        $data = [
            'head' =>$head,
            'title' =>$title,
            'address' =>$address,
            'description' =>$description,
            'date_uploaded' =>$today,
            
        ];
        $count= $crud ->Count("recentposts","1");
       
        if($count<1){
            $create = $crud->Create($data,"recentposts");

            if($create) {
                $_SESSION['message']= '<script>alert("Data Uploaded!");</script>';
                echo '<script>window.location.assign("../view_posts.php");</script>';
            }
        } else {
            
            $create =$crud->Create($data,"recentposts");
       
            $_SESSION['message']= '<script>alert("Data Added!");</script>';
            echo '<script>window.location.assign("../view_posts.php");</script>';
        }

    } else {
        $target_dir = "images/index/";
        $target_file = $target_dir . md5(time()).basename($_FILES["aboutImage"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        
        $check = getimagesize($_FILES["aboutImage"]["tmp_name"]);
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
           echo '<script>window.location.assign("../view_posts.php");</script>';
        // if everything is ok, try to upload file
        } else {

            if (move_uploaded_file($_FILES["aboutImage"]["tmp_name"], "../".$target_file)) {

              // $_SESSION['message']= "The file ". basename( $_FILES["aboutImage"]["name"]). " has been uploaded.";
                $data = [
                    'image' => $target_file,
                    'head' =>$head,
                    'title' =>$title,
                    'address' =>$address,
                    'description' =>$description,
                    'date_uploaded' =>$today,
                    
                    
                ];
                $count= $crud ->Count("recentposts","1");
                
                if($count<1){
                    $create = $crud->Create($data,"recentposts");

                    if($create) {
                        $_SESSION['message']= '<script>alert("Image Uploaded!");</script>';
                        echo '<script>window.location.assign("../view_posts.php");</script>';
                    }
                } else {
                    
                    $update =$crud->Create($data,"recentposts");
               
                    $_SESSION['message']= '<script>alert("Post Uploaded with Image");</script>';
                    echo '<script>window.location.assign("../view_posts.php");</script>';
                }

            } else {
                $_SESSION['message']= "Sorry, there was an error uploading your file.";
            }
        }
    }
}
?>