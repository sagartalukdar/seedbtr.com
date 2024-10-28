<?php 
include '../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("faculty_details","`faculty_id`='$dataId'");

if ($readEnquiry) {

	$data['image']= $readEnquiry[0]['image'];
	$data['fullName']= $readEnquiry[0]['full_name'];
	$data['designation']= $readEnquiry[0]['designation'];
	$data['qualification']= $readEnquiry[0]['qualification'];
	$data['trade']= $readEnquiry[0]['trade'];
	$data['date_of_joining']= $readEnquiry[0]['date_of_joining'];
	$data['post']= $readEnquiry[0]['post'];
	$data['cti']= $readEnquiry[0]['CTI_trained'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>