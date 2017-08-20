<!DOCTYPE html>
<html>
	<head>
		<title>Verified Hospital Administrator</title>
		<meta charset="UTF-8" lang="en" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
		<link href="" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<?php
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			$connection = new mysqli("localhost","root","tushar1997","HOSPMGMNT") or die("Verification unsuccessful");
			$result = $connection->query("SELECT Password FROM `ADMIN` WHERE Username='$user'");
			if(!$result){
				echo "Couldn't fetch login details from database ".$connection->error();	
			}
			else {
				$row = $result->fetch_array();
				if($pass != $row[0] || !isset($user) || !isset($pass)){
					header("Location: admin.html");
				}
				else if($pass == $row[0]){
					$result = $connection->query("UPDATE `ADMIN` SET LoggedIn='T' WHERE Username='$user'");
					if(!$result){
						header("Location: admin.html");
					}
					else {
						header("Location: adminHome.html");
					}
				}
			}
			$connection->close();
		?>
		<a href="login.php"><input type="button" id="signout" value="Sign out" /></a>
		<script type="text/javascript">
			/*var b = document.getElementById("signout");
			b.onclick = function() {
				
			};*/
		</script>
	</body>
</html>
