<?php 
include '../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("newsticker","`id`='$dataId'");

if ($readEnquiry) {

	$data['image']= $readEnquiry[0]['pdf'];
	$data['news']= $readEnquiry[0]['news'];
	$data['date_uploaded']= $readEnquiry[0]['date_uploaded'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>