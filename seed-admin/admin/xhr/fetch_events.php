<?php 
include '../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("events","`id`='$dataId'");

if ($readEnquiry) {

	$data['image']= $readEnquiry[0]['image'];
	$data['head']= $readEnquiry[0]['head'];
	$data['address']= $readEnquiry[0]['address'];
	$data['description']= $readEnquiry[0]['description'];
	$data['date_uploaded']= $readEnquiry[0]['date_uploaded'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>