<?php 
include '../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("background","`id`='$dataId'");

if ($readEnquiry) {

	$data['image1']= $readEnquiry[0]['image1'];
	$data['image2']= $readEnquiry[0]['image2'];
	$data['head']= $readEnquiry[0]['head'];
	$data['title']= $readEnquiry[0]['title'];
	$data['description']= $readEnquiry[0]['description'];
	$data['date_uploaded']= $readEnquiry[0]['date_uploaded'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>