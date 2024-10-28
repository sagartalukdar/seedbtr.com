<?php 
include '../classes/Crud.php';


$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("trade_infrastructure","`id`='$dataId'");

if ($readEnquiry) {

	
	$data['trade']= $readEnquiry[0]['Trade'];
	$data['unit']= $readEnquiry[0]['Unit'];
	$data['classroom_area']= $readEnquiry[0]['ClassRoomArea'];
	$data['total_classroom_area']= $readEnquiry[0]['TotalClassRoom'];
	$data['workshop_area']= $readEnquiry[0]['WorkshopArea'];
	$data['total_workshop_area']= $readEnquiry[0]['Total_WorkshopArea'];
	$data['image']= $readEnquiry[0]['image'];
	$data['date_uploaded']= $readEnquiry[0]['date_uploaded'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>