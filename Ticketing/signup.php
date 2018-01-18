<?php
session_start();
require_once("control.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body style="height:250px;">
	<div class="Container" style="background:url('../img/bg_tile.jpg') grey no-repeat center center; width:500px; margin:0 auto; top:50%; height:200px; text-align: center; padding-top:80px; float: middle;">

	<form action="signup.php" method="post">
		<?php
			$tick->signup();
		?>
	
	<div>
	<label>USERNAME</label>
	<input type="text" name="usname" placeholder="your phone number">
	</div>

	<p></p>
	<label>PASSWORD</label>
	<input type="password" name="pword">

	<p></p>
	<input type="submit" name="signup" value="DONE">

</form>
</div>

</body>
</html>

