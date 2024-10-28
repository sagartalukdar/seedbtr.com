<?php 
include '../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("tenders","`id`='$dataId'");

if ($readEnquiry) {
    $data['image']= $readEnquiry[0]['image'];
	$data['tenderno']= $readEnquiry[0]['tenderno'];
	$data['title']= $readEnquiry[0]['title'];
	$data['date_uploaded']= $readEnquiry[0]['date_uploaded'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>