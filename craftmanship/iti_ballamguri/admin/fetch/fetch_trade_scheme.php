<?php 
include '../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("tradescheme","`id`='$dataId'");

if ($readEnquiry) {

	
	$data['scheme']= $readEnquiry[0]['scheme'];
	$data['certificate']= $readEnquiry[0]['certificate'];
	$data['seats']= $readEnquiry[0]['total_seats'];
	$data['image']= $readEnquiry[0]['image'];
	// $data['status']= $readEnquiry[0]['status'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>