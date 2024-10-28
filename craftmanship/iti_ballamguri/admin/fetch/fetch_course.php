<?php 
include '../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("courses","`id`='$dataId'");

if ($readEnquiry) {

	$data['image']= $readEnquiry[0]['image'];
	$data['head']= $readEnquiry[0]['head'];
	$data['title']= $readEnquiry[0]['title'];
	$data['description']= $readEnquiry[0]['description'];
	$data['fee']= $readEnquiry[0]['course_fee'];
	$data['eligibility']= $readEnquiry[0]['eligibility'];
	$data['seat']= $readEnquiry[0]['seat_availability'];
	$data['duration']= $readEnquiry[0]['duration'];
	// $data['seat']= $readEnquiry[0]['seat_availability'];
	$data['date_uploaded']= $readEnquiry[0]['date_uploaded'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>