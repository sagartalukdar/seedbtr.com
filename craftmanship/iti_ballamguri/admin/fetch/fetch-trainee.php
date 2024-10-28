<?php 
include '../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("trainee_details","`trainee_id`='$dataId'");

if ($readEnquiry) {

	$data['fullName']= $readEnquiry[0]['full_name'];
	$data['fatherName']= $readEnquiry[0]['father_name'];
	$data['dob']= $readEnquiry[0]['dob'];
	$data['gender']= $readEnquiry[0]['gender'];
	$data['caste']= $readEnquiry[0]['caste'];
	$data['trade']= $readEnquiry[0]['trade'];
	$data['shift']= $readEnquiry[0]['shift'];
	$data['courseSession']= $readEnquiry[0]['course_session'];
	$data['image']= $readEnquiry[0]['image'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>