
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Forum</title>
	<link rel="icon" href="favicon.ico">
  </head>
  <body class="bg-secondary">
  
	<div class="card-header bg-dark">
			<!-- Navigation to other pages -->
			<h1 class="text-white" style="float:left">Forum</h1>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-end">
			<a class="navbar-brand" href="home.php">Home</a>
			<a class="navbar-brand" href="resources.php">Resources</a>
			<a class="navbar-brand" href="forum.php">Forum</a>
			<a class="navbar-brand" href="recordings.php">Recordings</a>			
			</nav>
			
	</div>
  
  
	
	
  
  


  

  <tbody class="">
      	<br>
	<!-- ASK QUETIONS -->
	<div style="margin-left:5%;">
	<h1>Need Help? Ask a Question:</h1>
		
		<form method="POST" action="question.php">
		
			<br>
			<input type="text" name="txtQuestion" class="form-control col-sm-2">
			
			<br>
			
			<input type="submit" value="Submit" class="btn btn-primary">
			
		</form>
	</div>
	<br><br><br>
	<!-- SHOW QUETIONS -->
	<table class="table table-dark" style="width:96%;margin-left:2%;margin-right:2%;">
	<thead>
    <tr>
      <th scope="col">Username</th>
      <th scope="col">Question</th>
	  <th scope="col"></th>
    </tr>
	</thead>
	
		
	
		<tr>
			<td> admin</td>
			<td> Example</td>
			<td> 4 replies</td>
			<td> <a href="forum.php?reply=1">Reply</td>
							<td><a href="deletemsg.php?msg=1">Delete</td>
					</tr>
			
	
		<tr>
			<td> maks744</td>
			<td> This is another example</td>
			<td> 4 replies</td>
			<td> <a href="forum.php?reply=2">Reply</td>
							<td><a href="deletemsg.php?msg=2">Delete</td>
					</tr>
			
	
		<tr>
			<td> mjschust</td>
			<td> Does this work?</td>
			<td> 0 replies</td>
			<td> <a href="forum.php?reply=5">Reply</td>
							<td><a href="deletemsg.php?msg=5">Delete</td>
					</tr>
			
	
		<tr>
			<td> admin</td>
			<td> How do I turn this thing off?</td>
			<td> 1 replies</td>
			<td> <a href="forum.php?reply=9">Reply</td>
							<td><a href="deletemsg.php?msg=9">Delete</td>
					</tr>
			
	
		<tr>
			<td> mjschuster</td>
			<td> How do I turn this thing on?</td>
			<td> 0 replies</td>
			<td> <a href="forum.php?reply=10">Reply</td>
							<td><a href="deletemsg.php?msg=10">Delete</td>
					</tr>
			
	
		<tr>
			<td> admin</td>
			<td> How do cars?</td>
			<td> 1 replies</td>
			<td> <a href="forum.php?reply=11">Reply</td>
							<td><a href="deletemsg.php?msg=11">Delete</td>
					</tr>
		    
  </tbody>
</table>



 

  
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>