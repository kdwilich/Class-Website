

<!doctype html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Login</title>
		<link rel="icon" href="favicon.ico">
      </head>
  
  <body class="bg-dark">
  
	<div class="card bg-dark border-white">
		<div class="card-header">
		
			<h1 class="text-white">Welcome to ISYS 4453 Class Page!</h1>
			<br>
			<h3 class="text-white">Please log in here: </h3>
			<br>
		<center>
		</div>
		<div class="card-body bg-dark ">
		
			<div class="form-group">
				
				<form action="checklogin.php"	method="POST">
					<div class="form-group col-md-6 text-white">
					Username: <br>
					<input type="text"	name="txtUser"	class="form-control">
					</div>
					
					<br><br>
					<div class="form-group col-md-6 text-white">
					Password: <br>
					<input type="password"	name="txtPass"	class="form-control">
					</div>
					<br><br>
					
					<div class="form-group col-md-8 test-white">
					<input type="submit" value="Login"	class="btn btn-primary">
					</div>
				</form>
				<form action="signup.php" method="POST">
					<div class="form-group col-md-8">
					<input type="submit" value="Register" class="btn btn-primary">
					</div>
				</form>
							</div>
		</div>
	</div>
	</center>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>