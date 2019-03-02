<?php

	session_start();
	
	$user = $_SESSION["user"];
	$question = $_POST["txtQuestion"];		
	
	$sql = "INSERT INTO QUESTIONS VALUES( null, '$user', '$question' )";
	
	
	$host = "localhost";
	$myuser = "maks740";
	$mypass = "maks740";
	$db 	= "maks740";

	$con = mysqli_connect( $host, $myuser, $mypass, $db );
	mysqli_query( $con, $sql );
	
	// safely prepare SQL insert
	
	mysqli_close($con);
	
	header("Location: http://74.117.171.117/~maks740/finalProject/forum.php");
	
?>
