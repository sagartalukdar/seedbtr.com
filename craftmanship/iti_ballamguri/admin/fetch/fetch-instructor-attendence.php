<?php 
include '../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("attendence_instructors_details","`attendence_InstructorID`='$dataId'");

if ($readEnquiry) {

	$data['instructorName']= $readEnquiry[0]['instructor_name'];
	$data['attendanceMonth'] = str_replace(array("\r", "\n"), '', $readEnquiry[0]['attendence_month']);
	// $data['attendence_month'] = str_replace(array("\r", "\n"), '', $readEnquiry[0]['attendence_month']);
	$data['percentage']= $readEnquiry[0]['percentage'];
	$data['status']= $readEnquiry[0]['status'];
	

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>