<?php


$con = mysqli_connect("localhost","u355669643_kokrajhar","Craftmanship@2023","u355669643_kokrajhar");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if($_POST['id']){
$id=$_POST['id'];
if($id==0){
	echo "<option>Select </option>";
}else{
	$sql = mysqli_query($con,"SELECT * FROM `trainee_details` WHERE trainee_id='$id'");
	while($row = mysqli_fetch_array($sql)){
		echo '<option value="'.$row['trade'].'">'.$row['trade'].'</option>';
		}
	}
}
?>