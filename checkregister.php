<?php

	if( empty($_POST["txtUser"]) || empty($_POST["txtPass"]) || empty($_POST["txtFullName"]))
	{
		echo "test";
		header( "Location: ./signup.php?status=fail" );
	}
	$user = $_POST["txtUser"];
	$pass = $_POST["txtPass"];
	$name = $_POST["txtFullName"];

	$sqlCheckUser = "SELECT COUNT(*) AS MYCOUNT
	FROM USERS WHERE USERNAME = '$user'";




	$sql = "INSERT INTO USERS VALUES('$user',0,'$pass', '$name' )";

	$host = "localhost";
	$myuser = "maks740";
	$mypass = "maks740";
	$db     = "maks740";

	$con = mysqli_connect( $host, $myuser, $mypass, $db );



	$rs = mysqli_query( $con, $sqlCheckUser  );

	$row = mysqli_fetch_assoc($rs);

	if ( $row["MYCOUNT"] != 0 ) {
			mysqli_close($con);
			echo "this is some text";
			header( "Location: ./signup.php?status=dup" );

			//redirect to next page



	}

	mysqli_query( $con, $sql  );

	mysqli_close($con);
	//header( "Location: ./login.php" );



?>
