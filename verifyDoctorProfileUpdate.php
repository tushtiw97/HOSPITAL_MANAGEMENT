<?php
	session_start();
?>

<!DOCTYPE html->
<html>
	<head>
		<title>Update <?php echo $_GET['var']; ?></title>
		<meta charset="UTF-8" lang="en" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
		<link href="" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<?php
			$var = $_GET['var'];
			$updated = $_GET['updated'];
			$user = $_GET['user'];
			$val1 = $_GET['val1'];
			$val2 = $_GET['val2'];
			$val3 = $_GET['val3'];
			
			$connection = new mysqli("localhost","root","tushar1997","HOSPMGMNT");
			
			if(!$connection){
				echo "Couldn't connect";
			}
			else {
				if($var == 'name'){
					if($updated == 't'){
						$connection = new mysqli("localhost","root","tushar1997","HOSPMGMNT");
						if(!$connection){
							$connection->close();
							echo "Updation Failed. Could Not Connect";
						}
						else {
							$result = $connection->query("UPDATE TEST_DOCTOR SET FirstName='$val1',MiddleName='$val2',LastName='$val3' WHERE ID in (SELECT ID FROM TEST_DOCTOR_LOGIN WHERE Username='$user')");
							
							if(!$result){
								$connection->close();
								echo "Updation Failed. No result returned";
							}
							else {
								echo "<table>";
								echo "<tr><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
								echo "</table>";
								$connection->close();
							}
						}
					}
					else {
						echo "<table>";
						echo "<form method='GET' action='verifyDoctorProfileUpdate.php?user=$user&updated=t&var=$var'>";
						echo "<tr><input type='text' name='val1' value='$val1' /></tr>";
						echo "<tr><input type='text' name='val2' value='$val2' /></tr>";
						echo "<tr><input type='text' name='val3' value='$val3' /></tr>";
						echo "<tr><input type='hidden' name='user' value='$user' /></tr>";
						echo "<tr><input type='hidden' name='updated' value='t' /></tr>";
						echo "<tr><input type='hidden' name='var' value='$var' /></tr>";
						echo "<tr><td><input type='submit' value='Save' />";
						echo "</td></form><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
						echo "</table>";
					}
				}
				else if($var == 'sex'){
					if($updated == 't'){
						$connection = new mysqli("localhost","root","tushar1997","HOSPMGMNT");
						
						if(!$connection){
							$connection->close();
							echo "Cannot Connect";
						}
						else {
							$result = $connection->query("UPDATE TEST_DOCTOR SET Sex='$val1' WHERE ID IN (SELECT ID FROM TEST_DOCTOR_LOGIN WHERE Username='$user')");
							if(!$result){
								echo "Cannot Update";
								$connection->close();
							}
							else {
								echo "<table>";
								echo "<tr><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
								echo "</table>";
								$connection->close();
							}
						}
					}
					else {
						echo "<table>";
						echo "<form action='verifyDoctorProfileUpdate.php' method='GET'>";
						echo "<tr><input type='radio' name='val1' value='Male'> Male</input></tr>";
						echo "<tr><input type='radio' name='val1' value='Female'> Female</input></tr>";
						echo "<tr><input type='radio' name='val1' value='Unknown'> Somewhere in between</input></tr>";
						echo "<tr><input type='hidden' name='var' value='$var' /></tr>";
						echo "<tr><input type='hidden' name='user' value='$user' /></tr>";
						echo "<tr><input type='hidden' name='updated' value='t' /></tr>";
						echo "<tr><td><input type='submit' value='Save' />";
						echo "</td></form><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
						echo "</table>";
					}
				}
				else if($var == 'addr'){
					if($updated == 't'){
						$connection = new mysqli("localhost","root","tushar1997","HOSPMGMNT");
						if(!$connection){
							echo "Cannot Connect";
							$connection->close();
						}
						else {
							$result = $connection->query("UPDATE TEST_DOCTOR SET Address='$val1' WHERE ID IN (SELECT ID FROM TEST_DOCTOR_LOGIN WHERE Username='$user')");
							if(!$result){
								echo "Cannot Update";
								$connection->close();
							}
							else {
								echo "<table>";
								echo "<tr><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
								echo "</table>";
								$connection->close();
							}
						}
					}
					else {
						echo "<table>";
						echo "<form method='GET' action='verifyDoctorProfileUpdate.php'>";
						echo "<tr><input type='textarea' name='val1' value='$val1' /></tr>";
						echo "<tr><input type='hidden' name='var' value='$var' /></tr>";
						echo "<tr><input type='hidden' name='user' value='$user' /></tr>";
						echo "<tr><input type='hidden' name='updated' value='t' /></tr>";
						echo "<tr><td><input type='submit' value='Save' />";
						echo "</td></form><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
						echo "</table>";
					}
				}
				else if($var == 'date'){
					if($updated == 't'){
						$connection = new mysqli("localhost","root","tushar1997","HOSPMGMNT");
						if(!$connection){
							echo "Cannot Connect";
							$connection->close();
						}
						else {
							$result = $connection->query("UPDATE TEST_DOCTOR SET DateOfJoining='$val1' WHERE ID IN (SELECT ID FROM TEST_DOCTOR_LOGIN WHERE Username='$user')");
							if(!$result){
								echo "Cannot Update";
								$connection->close();
							}
							else {
								echo "<table>";
								echo "<tr><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
								echo "</table>";
								$connection->close();
							}
						}
					}
					else {
						echo "<table>";
						echo "<form action='verifyDoctorProfileUpdate.php' method='GET'>";
						echo "<tr><input type='hidden' name='user' value='$user' /></tr>";
						echo "<tr><input type='hidden' name='var' value='$var' /></tr>";
						echo "<tr><input type='hidden' name='updated' value='t' /></tr>";
						echo "<tr><input type='text' name='val1' value='$val1' /></tr>";
						echo "<tr><td><input type='submit' value='Save' />";
						echo "</td></form><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
						echo "</table>";
					}
				}
				else if($var == 'spec'){
					if($updated == 't'){
						$connection = new mysqli("localhost","root","tushar1997","HOSPMGMNT");
						if(!$connection){
							echo "Cannot Connect";
							$connection->close();
						}
						else {
							$result = $connection->query("UPDATE TEST_DOCTOR SET Specialization='$val1' WHERE ID IN (SELECT ID FROM TEST_DOCTOR_LOGIN WHERE Username='$user')");
							if(!$result){
								echo "Cannot Update";
								$connection->close();
							}
							else {
								$connection->close();
								echo "<table>";
								echo "<tr><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
								echo "</table>";
							}
						}
					}
					else {
						echo "<table>";
						echo "<form method='GET' action='verifyDoctorProfileUpdate.php'>";
						echo "<tr><input type='hidden' name='var' value='$var' /></tr>";
						echo "<tr><input type='hidden' name='user' value='$user' /></tr>";
						echo "<tr><input type='hidden' name='updated' value='t' /></tr>";
						echo "<select name='val1'>";
						echo "<option value='Spec1'>Specialization 1</option>";
						echo "<option value='Spec2'>Specialization 2</option>";
						echo "<option value='Spec3'>Specialization 3</option>";
						echo "<option value='Spec4'>Specialization 4</option>";
						echo "<option value='Spec5'>Specialization 5</option>";
						echo "</select>";
						echo "<tr><td><input type='submit' value='Save' />";
						echo "</td></form><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
						echo "</table>";
					}
				}
				else if($var == 'qual'){
					if($updated == 't'){
						$connection = new mysqli("localhost","root","tushar1997","HOSPMGMNT");
						if(!$connection){
							echo "Cannot Connect";
							$connection->close();
						}
						else {
							$result = $connection->query("UPDATE TEST_DOCTOR SET Qualification='$val1' WHERE ID IN (SELECT ID FROM TEST_DOCTOR_LOGIN WHERE Username='$user')");
							if(!$result){
								echo "Cannot Update";
								$connection->close();
							}
							else {
								$connection->close();
								echo "<table>";
								echo "<tr><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
								echo "</table>";
							}
						}
					}
					else {
						echo "<table>";
						echo "<form method='GET' action='verifyDoctorProfileUpdate.php'>";
						echo "<tr><input type='hidden' name='var' value='$var' /></tr>";
						echo "<tr><input type='hidden' name='user' value='$user' /></tr>";
						echo "<tr><input type='hidden' name='updated' value='t' /></tr>";
						echo "<select name='val1'>";
						echo "<option value='Qual1'>Qualification 1</option>";
						echo "<option value='Qual2'>Qualification 2</option>";
						echo "<option value='Qual3'>Qualification 3</option>";
						echo "<option value='Qual4'>Qualification 4</option>";
						echo "<option value='Qual5'>Qualification 5</option>";
						echo "</select>";
						echo "<tr><td><input type='submit' value='Save' />";
						echo "</td></form><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
						echo "</table>";
					}
				}
				else if($var == 'nat'){
					if($updated == 't'){
						$connection = new mysqli("localhost","root","tushar1997","HOSPMGMNT");
						if(!$connection){
							echo "Cannot Connect";
							$connection->close();
						}
						else {
							$result = $connection->query("UPDATE TEST_DOCTOR SET Nationality='$val1' WHERE ID IN (SELECT ID FROM TEST_DOCTOR_LOGIN WHERE Username='$user')");
							if(!$result){
								echo "Cannot Update";
								$connection->close();
							}
							else {
								$connection->close();
								echo "<table>";
								echo "<tr><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
								echo "</table>";
							}
						}
					}
					else {
						echo "<table>";
						echo "<form method='GET' action='verifyDoctorProfileUpdate.php'>";
						echo "<tr><input type='hidden' name='var' value='$var' /></tr>";
						echo "<tr><input type='hidden' name='user' value='$user' /></tr>";
						echo "<tr><input type='hidden' name='updated' value='t' /></tr>";
						echo "<select name='val1'>";
						echo "<option value='Nat1'>Nationality 1</option>";
						echo "<option value='Nat2'>Nationality 2</option>";
						echo "<option value='Nat3'>Nationality 3</option>";
						echo "<option value='Nat4'>Nationality 4</option>";
						echo "<option value='Nat5'>Nationaloty 5</option>";
						echo "</select>";
						echo "<tr><td><input type='submit' value='Save' />";
						echo "</td></form><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
						echo "</table>";
					}
				}
				else if($var == 'dept'){
					if($updated == 't'){
						$connection = new mysqli("localhost","root","tushar1997","HOSPMGMNT");
						if(!$connection){
							echo "Cannot Connect";
							$connection->close();
						}
						else {
							$result = $connection->query("UPDATE TEST_DOCTOR SET Department='$val1' WHERE ID IN (SELECT ID FROM TEST_DOCTOR_LOGIN WHERE Username='$user')");
							if(!$result){
								echo "Cannot Update";
								$connection->close();
							}
							else {
								$connection->close();
								echo "<table>";
								echo "<tr><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
								echo "</table>";
							}
						}
					}
					else {
						echo "<table>";
						echo "<form method='GET' action='verifyDoctorProfileUpdate.php'>";
						echo "<tr><input type='hidden' name='var' value='$var' /></tr>";
						echo "<tr><input type='hidden' name='user' value='$user' /></tr>";
						echo "<tr><input type='hidden' name='updated' value='t' /></tr>";
						echo "<select name='val1'>";
						echo "<option value='Dept1'>Department 1</option>";
						echo "<option value='Dept2'>Department 2</option>";
						echo "<option value='Dept3'>Department 3</option>";
						echo "<option value='Dept4'>Department 4</option>";
						echo "<option value='Dept5'>Department 5</option>";
						echo "</select>";
						echo "<tr><td><input type='submit' value='Save' />";
						echo "</td></form><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
						echo "</table>";
					}
				}
				else if($var == 'cont'){
					if($updated == 't'){
						$connection = new mysqli("localhost","root","tushar1997","HOSPMGMNT");
						if(!$connection){
							echo "Cannot Connect";
							$connection->close();
						}
						else {
							$result = $connection->query("UPDATE TEST_DOCTOR SET ContactNumber='$val2',CountryCode='$val1' WHERE ID IN (SELECT ID FROM TEST_DOCTOR_LOGIN WHERE Username='$user')");
							if(!$result){
								echo "Cannot Update";
								$connection->close();
							}
							else {
								echo "<table>";
								echo "<tr><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
								echo "</table>";
								$connection->close();
							}
						}
					}
					else {
						echo "<table>";
						echo "<form method='GET' action='verifyDoctorProfileUpdate.php'>";
						echo "<tr><input type='hidden' name='var' value='$var' /></tr>";
						echo "<tr><input type='hidden' name='user' value='$user' /></tr>";
						echo "<tr><input type='hidden' name='updated' value='t' /></tr>";
						echo "<tr><input type='text' name='val1' value='$val1' /></tr>";
						echo "<tr><input type='text' name='val2' value='$val2' /></tr>";
						echo "<tr><td><input type='submit' value='Save' />";
						echo "</td></form><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
						echo "</table>";
					}
				}
				else if($var == 'email'){
					if($updated == 't'){
						$connection = new mysqli("localhost","root","tushar1997","HOSPMGMNT");
						if(!$connection){
							echo "Cannot Connect";
							$connection->close();
						}
						else {
							$result = $connection->query("UPDATE TEST_DOCTOR SET Email='$val1' WHERE ID IN (SELECT ID FROM TEST_DOCTOR_LOGIN WHERE Username='$user')");
							if(!$result){
								echo "Cannot Update";
								$connection->close();
							}
							else {
								echo "<table>";
								echo "<tr><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
								echo "</table>";
								$connection->close();
							}
						}
					}
					else {
						echo "<table>";
						echo "<form method='GET' action='verifyDoctorProfileUpdate.php'>";
						echo "<tr><input type='hidden' name='var' value='$var' /></tr>";
						echo "<tr><input type='hidden' name='user' value='$user' /></tr>";
						echo "<tr><input type='hidden' name='updated' value='t' /></tr>";
						echo "<tr><input type='email' name='val1' value='$val1' /></tr>";
						echo "<tr><td><input type='submit' value='Save' />";
						echo "</td></form><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
						echo "</table>";
					}
				}
				$connection->close();
			}
		?>
	</body>
</html>
