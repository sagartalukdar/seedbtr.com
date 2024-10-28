<?php 
include '../classes/Crud.php';


$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("area_infrastructure","`id`='$dataId'");

if ($readEnquiry) {

	$data['total_area']= $readEnquiry[0]['TotalArea'];
	$data['covered_area']= $readEnquiry[0]['CoveredArea'];
	$data['classroom_area']= $readEnquiry[0]['TotalClassRoomsArea'];
	$data['workshop_area']= $readEnquiry[0]['TotalWorkshopsArea'];
	$data['drawing_hall']= $readEnquiry[0]['DrawingHall'];
	$data['audio_hall']= $readEnquiry[0]['AudioVisualHall'];
	$data['computer_lab']= $readEnquiry[0]['ComputerLab'];
	$data['library']= $readEnquiry[0]['Library'];
	$data['image']= $readEnquiry[0]['image'];
	$data['date_uploaded']= $readEnquiry[0]['date_uploaded'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>