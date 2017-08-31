<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<body>
		<?php
			$user = $_GET['user'];
			$connection = new mysqli("localhost","root","tushar1997","HOSPMGMNT") or die("Connection Unsuccessful. Server Error");
			$fname = $_POST['fname'];
			$mname = $_POST['mname'];
			$lname = $_POST['lname'];
			$age = $_POST['age'];
			$sex = $_POST['sex'];
			$allergies = $_POST['allergies'];
			$bloodGroup = $_POST['bloodGroup'];
			$address = $_POST['address'];
			$nationality = $_POST['nationality'];
			$religion = $_POST['religion'];
			$email = $_POST['email'];
			$countryCode = $_POST['countryCode'];
			$contactNumber = $_POST['contactNumber'];
			$eContactName = $_POST['eContactName'];
			$eContactCountryCode = $_POST['eContactCountryCode'];
			$eContactNumber = $_POST['eContactNumber'];
			
			if(!isset($sex)){
				$_SESSION['sexSet'] = false;
				$connection->close();
				header("Location: patientReg.php?user=$user");
			}
			
			else if(strcmp((string)$nationality,"noSelection") == 0){
				$_SESSION['nationalitySet'] = false;
				$connection->close();
				header("Location: patientReg.php?user=$user");
			}
			else if(strcmp((string)$religion,"noSelection") == 0){
				$_SESSION['religionSet'] = false;
				$connection->close();
				header("Location: patientReg.php?user=$user");
			}
			
			$result = $connection->query("SELECT max(ID) FROM TEST_PATIENT");
			if(!$result){
				die("Unable to select previous id");
			}
			else {
				$row = $result->fetch_assoc();
				$id = (int)$row['max(ID)'] + 1;
				
				$result = $connection->query("INSERT INTO TEST_PATIENT VALUES ($id,'$fname','$mname','$lname',$age,'$sex','$allergies','$bloodGroup','$address','$nationality','$religion','$email','$contactNumber','$countryCode','$eContactName','$eContactNumber','$eContactCountryCode')");
				
				if(!$result){
					die("Couldn't add patient to database");
				}
				else {
					header("Location: adminHome.php?user=$user");
				}
			}
			
			$connection->close();
		?>
	</body>
</html>
