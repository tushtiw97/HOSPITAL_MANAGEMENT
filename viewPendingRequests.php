<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Pending Requests</title>
		<meta charset="UTF-8" lang="en" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
		<link href="" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<?php
			$username = $_GET['user'];
			$connection = new mysqli("localhost","root","tushar1997","HOSPMGMNT");
			if(!$connection){
				echo "Connection Unsuccessful";
				$connection->close();
			}
			else {
				$result = $connection->query("SELECT ID,Username FROM TEST_DOCTOR_LOGIN WHERE Authenticated='F'");
				if(!$result){
					echo "Unable to fetch requests";
					$connection->close();
				}
				else {
					echo "Pending Requests :-";
					echo "<br>";
					echo "<table>";
					echo "<tr><th>Doctor ID</th><th>Username</th><th> </th></tr>";
					while($row = $result->fetch_assoc()){
						$user = $row['Username'];
						echo "<tr><td>".$row['ID']."</td><td>".$row['Username']."</td><td><a href='doctorAuthenticationPending.php?user=$user'><button>Authenticate</button></a></td></tr>";
					}
					echo "</table>";
				}
				echo "<a href='adminHome.php?user=$username'><button>Home</button></a>";
				$connection->close();
			}
		?>
	</body>
</html>
