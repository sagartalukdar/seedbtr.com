<?php 
include '../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("photos","`id`='$dataId'");

if ($readEnquiry) {

	$data['image']= $readEnquiry[0]['image'];
	$data['description']= $readEnquiry[0]['description'];
	$data['date_uploaded']= $readEnquiry[0]['date_uploaded'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>