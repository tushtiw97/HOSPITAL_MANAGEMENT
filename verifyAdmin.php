<?php
	session_start();	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Verifying Hospital Administrator</title>
		<meta charset="UTF-8" lang="en" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
		<link href="" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<?php
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			$connection = new mysqli("localhost","root","tushar1997","HOSPMGMNT") or die("Verification unsuccessful");
			$result = $connection->query("SELECT * FROM `ADMIN` WHERE Username='$user'");
			if(!$result){
				$_SESSION['admin']['error'] = "userError";
				echo "Couldn't fetch login details from database ".$connection->error();
				header('Location: admin.php');	
			}
			else {
				$row = $result->fetch_assoc();
				if(strcmp((string)$row['LoggedIn'],'T') == 0){
					$_SESSION['loggedIn'] = true;
					header('Location: admin.php');
				}
				else if(strcmp((string)$pass,(string)$row['Password']) == 0){
					$result = $connection->query("UPDATE `ADMIN` SET LoggedIn='T' WHERE Username='$user'");
					if(!$result){
						header("Location: admin.php");
					}
					else {
						$_SESSION['currentAdmin'] = $user;
						header("Location: adminHome.php?user=$user");
					}
				}
				else if(strcmp((string)$pass,(string)$row['Password']) != 0){
					$_SESSION['admin']['error'] = "passError";
					header("Location: admin.php");
				}
			}
			$connection->close();
		?>
	</body>
</html>
