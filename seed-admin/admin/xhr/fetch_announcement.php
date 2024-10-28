<?php 
include '../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("about_bodolandseed","`id`='$dataId'");

if ($readEnquiry) {

	$data['image']= $readEnquiry[0]['image'];
	$data['head']= $readEnquiry[0]['head'];
	$data['title']= $readEnquiry[0]['title'];
	$data['description']= $readEnquiry[0]['description'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>