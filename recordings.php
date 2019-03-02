

<html>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<title>Recordings</title>
		<link rel="icon" href="favicon.ico">
	
	</head>

	<body class="bg-secondary">
		<!-- Navigation to other pages -->
		<div class="card-header bg-dark">
			<!-- Navigation to other pages -->
			<h1 class="text-white" style="float:left">Lecture Recordings</h1>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-end">
			<a class="navbar-brand" href="home.php">Home</a>
			<a class="navbar-brand" href="resources.php">Resources</a>
			<a class="navbar-brand" href="forum.php">Forum</a>
			<a class="navbar-brand" href="recordings.php">Recordings</a>			
			</nav>
			
		</div>
		
		<br><br>
		<div style="margin-left:25%">
		
		<h3>This page is available for students to view recorded lectures.</h3>
		
		<!-- create this form to create new submissions to the page only if the user is an admin -->
					
			
			<form method="POST" action="upload.php">
				<input type="text" name="link" placeholder="Link">
				<input type="text" name="name" placeholder="Name">
				<input type="text" name="descr" placeholder="Description" maxlength="150">
				<input type="submit" value="Upload">
			</form>
				
		
				
		</div>
		<br><br>
		
		
		
		<table class="upload-table" style="margin-left:25%">
			<thead>
				<tr>
					<th scope="col"><h3><u>Link</u></h3></th>
					<th scope="col"><h3><u>Description</u></h3></th>
				</tr>
			
			
				 					<tr>
						<td> 
							<a href="www.youtube.com" class="text-light" style="font-size: 125%" target="_blank" class="hoverZoomLink">08-22-2018</a>
						</td>
						<td> 
							<div style="font-size: 125%">Overview class expectations, syllabus, and assignments. Begin learning z/OS basics.</div>
						</td>
					</tr>
										<tr>
						<td> 
							<a href="www.youtube.com" class="text-light" style="font-size: 125%" target="_blank" class="hoverZoomLink">08-29-2018</a>
						</td>
						<td> 
							<div style="font-size: 125%">Continue to overview z/OS basics and begin looking at Problem Set 1.</div>
						</td>
					</tr>
										<tr>
						<td> 
							<a href="www.youtube.com" class="text-light" style="font-size: 125%" target="_blank" class="hoverZoomLink">09-05-2018</a>
						</td>
						<td> 
							<div style="font-size: 125%">Go over problem set 2 and explain how mainframes operate.</div>
						</td>
					</tr>
										<tr>
						<td> 
							<a href="https://www.youtube.com" class="text-light" style="font-size: 125%" target="_blank" class="hoverZoomLink">09-12-2018</a>
						</td>
						<td> 
							<div style="font-size: 125%">Learn new concepts</div>
						</td>
					</tr>
										<tr>
						<td> 
							<a href="https://www.youtube.com/watch?v=ximv-PwAKnc" class="text-light" style="font-size: 125%" target="_blank" class="hoverZoomLink">09-19-2018</a>
						</td>
						<td> 
							<div style="font-size: 125%">Basics of Mainframes</div>
						</td>
					</tr>
										<tr>
						<td> 
							<a href="https://www.youtube.com/watch?v=ximv-PwAKnc" class="text-light" style="font-size: 125%" target="_blank" class="hoverZoomLink">9-26-2018</a>
						</td>
						<td> 
							<div style="font-size: 125%">Mainframe Introduction</div>
						</td>
					</tr>
										<tr>
						<td> 
							<a href="https://www.youtube.com/watch?v=ximv-PwAKnc" class="text-light" style="font-size: 125%" target="_blank" class="hoverZoomLink">What are mainframes?</a>
						</td>
						<td> 
							<div style="font-size: 125%">Mainframe Introduction</div>
						</td>
					</tr>
							</table>
		
		
	
	
	</body>
</html>















