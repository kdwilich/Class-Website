<?php

	global $var;
	$var = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

?>
<html>

	<body>

		<h4>Reply!</h4>
		
		<form method="POST" action="add_reply.php">
		
			Reply the question here (200 characters max): 
			<br>
			<input type="text" name="txtReply">
			
			<br><br>
						
			<input type="hidden" value="<?php echo $var; ?>" name="url">
			
			<input type="submit" value="Reply">
			
			
			
			
		</form>
		
	</body>

</html>

