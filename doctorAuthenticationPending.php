<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Doctor Authentication</title>
		<meta charset="UTF-8" lang="en" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
		<link href="" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<?php
			$authUser = $_GET['authUser'];
			$user = $_GET['user'];
			$connection = new mysqli("localhost","root","tushar1997","HOSPMGMNT");
			if(!$connection){
				echo "Connection Unsuccessful";
				$connection->close();
			}
			else {
				$result = $connection->query("UPDATE TEST_DOCTOR_LOGIN SET Authenticated='T' WHERE Username='$authUser'");
				if(!$result){
					echo "Couldn't Authenticate";
					$connection->close();
				}
				else {
					echo "Authentication Successful<br>";
					$connection->close();
				}
				echo "<a href='viewPendingRequests.php?user=$user'><button>Back</button></a>";
			}
		?>
	</body>
</html>
