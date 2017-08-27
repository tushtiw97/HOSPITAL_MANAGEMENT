<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Doctor Login</title>
		<meta charset="UTF-8" lang="en" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
		<link rel="stylesheet" type="text/css" href="" />
	</head>
	<body>
		<form action="verifyDoctor.php" method="POST">
			<label>Username : </label><input type="text" name="user" placeholder="Enter Username" autofocus required/>
			<?php
				if(strcmp($_SESSION['doctor']['error'],"userError") == 0) {
					echo " <span style='color:red'>Invalid Username. Username does not exist</span>";
					$_SESSION['doctor']['error'] = "";
				}
			?>
			<br>
			<label>Password : </label><input type="password" name="pass" placeholder="Enter Password" required />
			<?php
				if(strcmp($_SESSION['doctor']['error'],"passError") == 0) {
					echo " <span style='color:red'>Password does not match Username</span>";
					$_SESSION['doctor']['error'] = "";
				}
			?>
			<br>
			<input type="submit" value="Log In" />
		</form>
	</body>
</html>
