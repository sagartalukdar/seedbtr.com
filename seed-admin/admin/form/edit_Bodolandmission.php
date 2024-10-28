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
}

if(isset($_POST['id'])){
    extract($_POST);

    if (empty($_FILES["image"]["name"])) {
        $data = [     
            'head' =>$head,
            'title' =>$title,
            'description' =>$text,        
        ];
        $count= $crud ->Count("bodoland_mission","`id`='$id'");
        if($count==1){
            $update =$crud->Update("bodoland_mission",$data,"`id`='$id'");
            $data["successMessage"]="data updated successfully.";
        } else {
            $data["errorMessage"]="Error updating data.";
        }
    } else {
        $target_dir = "images/bodolandMission/";
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
            $data["errorMessage"]="Something wrong with image.";
        } else {

            if (move_uploaded_file($_FILES["image"]["tmp_name"], "../".$target_file)) {

                // $_SESSION['message']= "The file ". basename( $_FILES["aboutImage"]["name"]). " has been uploaded.";
                $data = [
                    'image' => $target_file,
                    'head' =>$head,
                    'title' =>$title,
                    'description' =>$text,                               
                ];
                
                $count= $crud ->Count("bodoland_mission","`id`='$id'");
               
                if($count==1){
                    $update =$crud->Update("bodoland_mission",$data,"`id`='$id'");
               
                    $data["successMessage"]="Data updated successfully.";
                } else {
                    $data["errorMessage"]="error! id not matched.";
                }

            } else {
                $data["errorMessage"]="Sorry, there was an error uploading your file.";
            }
        }
    }
    echo json_encode($data);
}
?>