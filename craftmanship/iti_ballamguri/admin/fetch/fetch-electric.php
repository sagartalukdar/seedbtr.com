<?php 
include '../classes/Crud.php';


$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("electric_power_supply","`id`='$dataId'");

if ($readEnquiry) {

	$data['electric_load']= $readEnquiry[0]['electric_load'];
	$data['connection_date']= $readEnquiry[0]['Date_of_Connection'];
	$data['connection_name']= $readEnquiry[0]['Connection_name'];
	$data['image']= $readEnquiry[0]['image'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>