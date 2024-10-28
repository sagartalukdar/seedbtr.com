<?php 
include '../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("about_btr","`id`='1'");

if ($readEnquiry) {

	$data['cem']= $readEnquiry[0]['cem'];
	$data['cem_name']= $readEnquiry[0]['cem_name'];
	$data['cem_description']= $readEnquiry[0]['cem_description'];
	$data['cem_address']= $readEnquiry[0]['cem_address'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>