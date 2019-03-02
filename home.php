<html>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		
		<title>Home</title>
		<link rel="icon" href="favicon.ico">
		
		<style>		
			* {
			  box-sizing: border-box;
			}
			
			.column {
				border-radius: 10px;
				flaot: left;
				margin-left: 2%;
				width: 30.4%;
				padding: 15px;
				height: 540px;
				text-align: center;
			}
			
			.bg-image {
				filter: blur(0px);
				-webkit-filter: blur(0px); 
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
			}
			
			.bg-text {
				background-color: rgb(0,0,0); 
				background-color: rgba(0,0,0, 0.4); 
				color: white;
				font-weight: bold;
				border: 3px solid #f1f1f1;
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				z-index: 2;
				width: 80%;
				padding: 20px;
				text-align: center;
			}
		
		
		
		</style>	
		
		
	
	</head>
	<body class="bg-dark">
	
		<div class="card-header bg-dark">
			<!-- Navigation to other pages -->
			<h1 class="text-white" style="float:left">Intro to Enterprise Servers</h1>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-end">
			<a class="navbar-brand" href="contact.html">Contact</a>
			<a class="navbar-brand" href="logout.php">Logout</a>			
			</nav>
			
		</div>
	
	
		<div style="text-align:center">
			<br>
			<h1 class="text-white">Welcome to the ISYS 4453 class page, Admin!</h1>
			<h3 class="text-white">Currently logged in as: admin</h3>
			<br><br>
		</div>
				
				
		<div class="row">
			<a class="column bg-image" style="background:url(forum_blurry.png);" href="http://74.117.171.117/~maks740/finalProject/forum.php">
				<div class="bg-text">
					<h2>Class Forum</h2>
				</div>
			</a>
			<a class="column bg-image" style="background:url(lecture_blur.jpg);" href="http://74.117.171.117/~maks740/finalProject/recordings.php">
				<div class="bg-text">
					<h2>Lecture Recordings</h2>
				</div>
			</a>
			<a class="column bg-image" style="background:url(books_blur.jpg);" href="http://74.117.171.117/~maks740/finalProject/resources.php">
				<div class="bg-text">
					<h2>Class Resources</h2>
				</div>
			</a>
		</div>			
		
		

	</body>
	
</html>