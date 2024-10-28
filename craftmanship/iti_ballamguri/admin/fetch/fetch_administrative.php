<?php 
include '../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("administrative_details","`administrative_id`='$dataId'");

if ($readEnquiry) {

	$data['staffName']= $readEnquiry[0]['staff_name'];
	$data['qualification']= $readEnquiry[0]['qualification'];
	$data['designation']= $readEnquiry[0]['designation'];
	$data['date_of_joining']= $readEnquiry[0]['date_of_joining'];
	$data['image']= $readEnquiry[0]['image'];
	$data['status']= $readEnquiry[0]['status'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>