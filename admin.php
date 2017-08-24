<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Administrator Log-In</title>
		<meta charset="UTF-8" lang="en" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
		<link href="" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<form action="verifyAdmin.php" method="POST" autocomplete=false>
			<label>Administrator ID : </label><input type="text" name="user" placeholder="Enter username..." id="user" autofocus required/>
			<?php
				if(isset($_SESSION['admin']['error']) && $_SESSION['admin']['error']=="userError"){
					echo "Incorrect Username";
				}
			?>
			<br>
			<label>Password : </label><input type="password" name="pass" placeholder="Enter password..." id="pass" required/>
			<?php
				if(isset($_SESSION['admin']['error']) && $_SESSION['admin']['error']=="passError"){
					echo "Incorrect Password";
				}
			?>
			<br>
			<input type="submit" value="Verify Admin" />
		</form>
	</body>
</html>
