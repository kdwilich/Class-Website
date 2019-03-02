<?php

        $user = $_POST["txtUser"];
        $pass = $_POST["txtPass"];


        $sql = "SELECT COUNT(*) AS MYCOUNT FROM USERS WHERE USERNAME = '$user' AND PASSWORD = '$pass' ";
			   

        $host = "localhost";
        $myuser = "maks740";
        $mypass = "maks740";
        $db     = "maks740";

        $con = mysqli_connect( $host, $myuser, $mypass, $db );



        $rs = mysqli_query( $con, $sql );

        $row = mysqli_fetch_assoc($rs);

        if ( $row["MYCOUNT"] == 1 ) {
				
				$sqlUserInfo = "SELECT * FROM USERS WHERE USERNAME='$user'";
				$rs = mysqli_query($con,$sqlUserInfo);
				$row = mysqli_fetch_assoc($rs);
				
                //start a user session
                session_start();

                $_SESSION["user"] = $user;
				$_SESSION["fullName"] = $row["FULLNAME"];
				$_SESSION["admin"] = $row["ADMIN_ACCESS"];
				echo $_SESSION["fullName"];
                header( "location: ./home.php" );

                //redirect to next page


        } else {
				header( "location: ./login.php?status=fail" );

        }

		
		
        mysqli_close($con);



?>