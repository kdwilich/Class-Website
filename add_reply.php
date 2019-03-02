<?php
	session_start();
	
	$message = $_POST["reply"];	
	$user = $_SESSION["user"];	
	$reply = $_POST["txtReply"];	
	
	$sql = "INSERT INTO REPLY VALUES( '$message', null, '$user', '$reply' )";
	
	$host = "localhost";
	$myuser = "maks740";
	$mypass = "maks740";
	$db 	= "maks740";

	$con = mysqli_connect( $host, $myuser, $mypass, $db );
	mysqli_query( $con, $sql );
	
	// safely prepare SQL insert
	
	mysqli_close( $con );
	
	header( "location: ./forum.php?reply=$message" );

	
?>
