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
		<?php
			if($_SESSION['loggedIn']){
				echo "<span color='red'>User has already logged in from another device</span>";
			}
			$_SESSION['loggedIn'] = false;
		?>
		<form action="verifyAdmin.php" method="POST" autocomplete=no>
			<label>Administrator ID : </label>
			<input type="text" name="user" placeholder="Enter Username..." id="user" autofocus required></input>
			<?php
				if($_SESSION['admin']['error']=="userError"){
					echo "Incorrect Username";
					$_SESSION['admin']['error'] = "";
					$_SESSION['user'] = "";
				}
			?>
			<br>
			<label>Password : </label><input type="password" name="pass" placeholder="Enter password..." id="pass" required/>
			<?php
				if($_SESSION['admin']['error']=="passError"){
					echo "Incorrect Password";
					$_SESSION['admin']['error'] = "";
				}
			?>
			<br>
			<input type="submit" value="Verify Admin" />
		</form>
	</body>
</html>
