<?php 
include '../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("attendence_trainee_details","`attendence_traineeID`='$dataId'");

if ($readEnquiry) {

	$data['trainee']= $readEnquiry[0]['trainee_name'];
	$data['trade']= $readEnquiry[0]['trade'];
	$data['attendanceMonth'] = str_replace(array("\r", "\n"), '', $readEnquiry[0]['attendance_month']);
	// $data['attendence_month'] = str_replace(array("\r", "\n"), '', $readEnquiry[0]['attendence_month']);
	$data['percentage']= $readEnquiry[0]['percentage'];
	$data['status']= $readEnquiry[0]['status'];
	

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>