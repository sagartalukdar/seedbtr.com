<?php 
include '../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("notice","`id`='$dataId'");

if ($readEnquiry) {

	
	$data['notice']= $readEnquiry[0]['notice'];
	
	$data['description']= strip_tags($readEnquiry[0]['description']);
	$data['date_uploaded']= $readEnquiry[0]['date_uploaded'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>