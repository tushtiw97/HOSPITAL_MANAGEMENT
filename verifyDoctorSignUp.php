<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Registration in progress</title>
		<meta charset="UTF-8" lang="en" />
		<meta name="viewport" content="width=device-width,  initial-scale=1.0, user-scalable=no" />
	</head>
	<body>
		<?php
			$fname = $_POST['fname'];
			$mname = $_POST['mname'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			$countryCode = $_POST['countryCode'];
			$contactNumber = $_POST['contactNumber'];
			
			$connection = new mysqli("localhost","root","tushar1997","HOSPMGMNT");
			if(!$connection){
				echo "Cannot register doctor's credentials";
				$connection->close();
			}
			else {
				$result = $connection->query("SELECT max(ID) from TEST_DOCTOR");
				if(!$result){
					echo "Couldn't fetch doctor ID";
					$connection->close();
				}
				else {
					$row = $result->fetch_assoc();
					$id = $row['max(ID)'] + 1;
					$result = $connection->query("INSERT INTO TEST_DOCTOR VALUES ($id,'$fname','$mname','$lname','NA','NA','NA','NA','NA','NA','NA','$countryCode','$contactNumber','$email')");
					
					if(!$result){
						echo "Couldn't insert doctor credentials";
						$connection->close();
					}
					else {
						$connection->close();
						$connection = new mysqli("localhost","root","tushar1997","HOSPMGMNT");
						
						if(!$connection){
							echo "Couldn't connect to doctor login table";
							$connection->close();
						}
						else {
							$result = $connection->query("SELECT * FROM TEST_DOCTOR_LOGIN");
							if(!$result){
								echo "Couldn't connect to check existing user";
								$connection->close();
							}
							else {
								while($row = $result->fetch_assoc()){
									if($row['Username'] == $user){
										$connection->close();
										header("Location: doctorSignUp.php?existingUser=t");
									}
								}
								$result = $connection->query("INSERT INTO TEST_DOCTOR_LOGIN VALUES ($id,'$user','$pass','F','F')");
							
								if(!$result){
									echo "Couldn't add username and password";
									$connection->close();
								}
								else {
									$connection->close();
									echo "You have successfully registered as a new doctor. Please await Administrator's authentication<br>";
									echo "<a href='login.php'><button>Continue to Login page</button></a>";
								}
							}
						}
					}
				}
			}
		?>
	</body>
</html>
