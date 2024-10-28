<?php 
include '../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("about_btr","`id`='1'");

if ($readEnquiry) {

	$data['em']= $readEnquiry[0]['em'];
	$data['em_name']= $readEnquiry[0]['em_name'];
	$data['em_description']= $readEnquiry[0]['em_description'];
	$data['em_address']= $readEnquiry[0]['em_address'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>