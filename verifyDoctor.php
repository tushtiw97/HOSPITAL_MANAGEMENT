<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<body>
		Please Wait..
		<?php
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			
			$connection = new mysqli("localhost","root","tushar1997","HOSPMGMNT") or die("Connection to database unsuccessful");
			
			$result = $connection->query("SELECT * FROM TEST_DOCTOR_LOGIN WHERE Username='$user'");
			
			if(!$result) {
				$_SESSION['doctor']['error'] = "userError";
				header("Location: doctor.php");
			}
			else {
				$row = $result->fetch_assoc();
				if(strcmp($row['Password'],$pass) == 0) {
					if(strcmp($row['Authenticated'],"F") == 0) {
						echo "<br><u><i><b style='color:red'>You have not been authenticated by the Administrator yet. Please contact the hospital administrator for further assistance</b></i></u>";
						echo "<br><a href='doctorLogout.php'><button>Log Out</button></a>";
					}
					else {
						$result = $connection->query("UPDATE TEST_DOCTOR_LOGIN SET LoggedIn='T' WHERE Username='$user'");
						header("Location: doctorHome.php");
					}
				}
				else {
					$_SESSION['doctor']['error'] = "passError";
					header("Location: doctor.php");
				}
			}
			
			$connection->close();
		?>
	</body>	
</html>
