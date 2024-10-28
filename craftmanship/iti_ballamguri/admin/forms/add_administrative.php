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

if(isset($_POST['ajax'])){

    extract($_POST);

    if (empty($_FILES["image"]["name"])) {

        
        $data = [
            'staff_name' =>$staffName,
            'designation' =>$designation,
            'qualification' =>$qualification,
            'date_of_joining' =>$date_of_joining,           
            'status' =>1,  
        ];
        $create = $crud->Create($data,"administrative_details");

        if($create) {
            $data["successMessage"]="Data Added";
        }else {
            $data["errorMessage"]="Error adding data";
        }

    } else {
        $target_dir = "images/administrative/";
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
            $data["errorMessage"]="something wrong with file.";
        // if everything is ok, try to upload file
        } else {

            if (move_uploaded_file($_FILES["image"]["tmp_name"], "../".$target_file)) {

              // $_SESSION['message']= "The file ". basename( $_FILES["aboutImage"]["name"]). " has been uploaded.";
                $data = [
                    'image' => $target_file,
                    'staff_name' =>$staffName,
                    'designation' =>$designation,
                    'qualification' =>$qualification,
                    'date_of_joining' =>$date_of_joining,           
                    'status' =>1,    
                ];
               
                    $create = $crud->Create($data,"administrative_details");

                    if($create) {
                        $data["successMessage"]="Data uploaded successfully.";
                    } else {
                        $data["errorMessage"]="Error uploading Data.";
                    }                                 

            } else {
                $data["errorMessage"]="file can't move to the folder.";
            }
        }
    }
    echo json_encode($data);
    exit();
}
?>


