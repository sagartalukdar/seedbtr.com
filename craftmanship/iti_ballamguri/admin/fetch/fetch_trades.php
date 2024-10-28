<?php 
include '../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("trades","`id`='$dataId'");

if ($readEnquiry) {

	$data['image']= $readEnquiry[0]['image'];
	$data['trade_name']= $readEnquiry[0]['trade_name'];
	$data['duration']= $readEnquiry[0]['duration'];
	$data['description']= $readEnquiry[0]['description'];
	$data['scheme']= $readEnquiry[0]['scheme'];
	$data['certificate']= $readEnquiry[0]['certificate'];
	$data['eligibility']= $readEnquiry[0]['eligibility'];
	$data['status']= $readEnquiry[0]['status'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>