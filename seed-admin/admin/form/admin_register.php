<?php

include '../classes/Crud.php';


$crud = new Crud();


date_default_timezone_set('Asia/Kolkata');
	$connection = new DbConfig();
	$con = $connection -> connect();
	$user=$_POST['uname'];
	$email=$_POST['email'];
	$password=$_POST['pwd'];
    $login_date = date('Y-m-d');
	$salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; // random string

	$hash = hash('sha512', $password . $salt);

      $smt = $con -> prepare("INSERT INTO `logo_admin` ( `username`, `email`, `password`, `join date`) VALUES ('$user', '$email', '$hash','$login_date')");

			$smt -> execute();
			if($smt==true){
        echo "user inserted successfully";
        header("location: ../index.php");
}
           else{
        echo "user insertion error";
        header("location: ../admin_register.php");
    }

	

?>
