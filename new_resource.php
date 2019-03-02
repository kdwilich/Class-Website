<?php
	session_start();
	
	$link = $_POST["link"];
	$name = $_POST["name"];
	$content = $_POST["content"];
		
	$sql = "INSERT INTO RESOURCES VALUES( '$link', '$name', '$content', null )";
	
    $host = "localhost";
	$myuser = "maks740";
	$mypass = "maks740";
	$db     = "maks740";

	$con = mysqli_connect( $host, $myuser, $mypass, $db );
	mysqli_query( $con, $sql );
		
	
    mysqli_close( $con );
	
	
	header("Location: http://74.117.171.117/~maks740/finalProject/resources.php");
	
?>


