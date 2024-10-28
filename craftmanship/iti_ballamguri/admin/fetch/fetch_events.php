<?php 
include '../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("events","`id`='$dataId'");

if ($readEnquiry) {

	$data['image']= $readEnquiry[0]['image'];
	$data['head']= $readEnquiry[0]['head'];
	$data['title']= $readEnquiry[0]['title'];
	$data['description']= $readEnquiry[0]['description'];
	$data['venue']= $readEnquiry[0]['venue'];
	$data['date_uploaded']= $readEnquiry[0]['date_uploaded'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>