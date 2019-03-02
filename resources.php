
<html>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<title>Resources</title>
		<link rel="icon" href="favicon.ico">
	</head>
	
	<body class="bg-secondary">
	<!-- Navigation to other pages -->
		<div class="card-header bg-dark">
			<!-- Navigation to other pages -->
			<h1 class="text-white" style="float:left">Course Resources</h1>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-end">
			<a class="navbar-brand" href="home.php">Home</a>
			<a class="navbar-brand" href="resources.php">Resources</a>
			<a class="navbar-brand" href="forum.php">Forum</a>
			<a class="navbar-brand" href="recordings.php">Recordings</a>			
			</nav>
			
		</div>
		
		<br>
		
		
		<!-- create this form to create new submissions to the page only if the user is an admin -->
					
			<div style="margin-left:20%;">
				<form method="POST" action="new_resource.php">
					<input type="text" name="link" placeholder="Link">
					<input type="text" name="name" placeholder="Name">
					<input type="text" name="content" placeholder="Content" maxlength="150">
					<input type="submit" value="Upload">
				</form>
			</div>
			<br>
		
				
		<table style="margin-left:15%;">	
							<tr></tr>
					
								<td style="padding:50px;">
					<h4></h4>
					<iframe src="" width="560" height="315" frameborder="0" allowfullscreen></iframe>
					<br><b>Description: </b> <br>
				</td>
								<td style="padding:50px;">
					<h4></h4>
					<iframe src="" width="560" height="315" frameborder="0" allowfullscreen></iframe>
					<br><b>Description: </b> <br>
				</td>
									<tr></tr>
					
								<td style="padding:50px;">
					<h4>What are mainframes?</h4>
					<iframe src="//www.youtube.com/embed/ximv-PwAKnc" width="560" height="315" frameborder="0" allowfullscreen></iframe>
					<br><b>Description: </b>Here is some information about mainframes <br>
				</td>
								<td style="padding:50px;">
					<h4>HTML Introduction</h4>
					<iframe src="//www.youtube.com/embed/UB1O30fR-EE" width="560" height="315" frameborder="0" allowfullscreen></iframe>
					<br><b>Description: </b>This video goes into the basics of HTML. <br>
				</td>
									<tr></tr>
					
								<td style="padding:50px;">
					<h4>PHP Basics</h4>
					<iframe src="https://www.youtube.com/embed/ZdP0KM49IVk" width="560" height="315" frameborder="0" allowfullscreen></iframe>
					<br><b>Description: </b>Start learning PHP by getting an understanding of the basics. <br>
				</td>
								<td style="padding:50px;">
					<h4>z/OS Basics</h4>
					<iframe src="https://www.youtube.com/embed/txOyar__9q0" width="560" height="315" frameborder="0" allowfullscreen></iframe>
					<br><b>Description: </b>This video shows how to access and navigate through the z/OS system <br>
				</td>
								
		</table>
				
		<br><br>
		<h3 style="margin-left:15%">Syllabus</h3>
		<embed src="http://74.117.171.117/~maks740/finalProject/Course%20Syllabus%20.pdf" style="margin-left:15%" width="70%" height="100%" type='application/pdf'>
	
	</body>

</html>









