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

if(isset($_POST['ajax'])){

    extract($_POST);
    $data = []; 

    if(!empty($_FILES["sliderImage"]["name"])) {
        $target_dir = "images/index/";
        $target_file = $target_dir . md5(time()).basename($_FILES["sliderImage"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        $check = getimagesize($_FILES["sliderImage"]["tmp_name"]);
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

            if (move_uploaded_file($_FILES["sliderImage"]["tmp_name"], "../".$target_file)) {

              // $_SESSION['message']= "The file ". basename( $_FILES["aboutImage"]["name"]). " has been uploaded.";
                $data = [
                    'image' => $target_file,
                    'banner_title'=>$sliderText,                    
                    'date_uploaded' =>$sliderDate                    
                ];
               
                    $create = $crud->Create($data,"other_slider");

                    if($create) {
                        $data["successMessage"]="Image uploaded successfully.";
                    } else {
                        $data["errorMessage"]="Error uploading Image.";
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


