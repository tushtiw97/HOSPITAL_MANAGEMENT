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
			
			$connection = new mysqli("localhost","root","tushar1997","HOSPMGMNT");
			
			if(!$connection){
				echo "Couldn't connect";
			}
			else {
				if($var == 'name'){
					if($updated == 't'){
						echo "<table>";
						echo "<tr><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
						echo "</table>";
					}
					else {
						echo "<table>";
						
						echo "<tr><td><a href='verifyDoctorProfileUpdate.php?user=$user&updated=t&var=$var'><button>Save</button></a></td><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
						echo "</table>";
					}
				}
				else if($var == 'sex'){
					if($updated == 't'){
						echo "<table>";
						
						echo "<tr><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
						echo "</table>";
					}
					else {
						echo "<table>";
						
						echo "<tr><td><a href='verifyDoctorProfileUpdate.php?user=$user&updated=t&var=$var'><button>Save</button></a></td><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
						echo "</table>";
					}
				}
				else if($var == 'addr'){
					if($updated == 't'){
						echo "<table>";
						
						echo "<tr><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
						echo "</table>";
					}
					else {
						echo "<table>";
						
						echo "<tr><td><a href='verifyDoctorProfileUpdate.php?user=$user&updated=t&var=$var'><button>Save</button></a></td><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
						echo "</table>";
					}
				}
				else if($var == 'date'){
					if($updated == 't'){
						echo "<table>";
						
						echo "<tr><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
						echo "</table>";
					}
					else {
						echo "<table>";
						
						echo "<tr><td><a href='verifyDoctorProfileUpdate.php?user=$user&updated=t&var=$var'><button>Save</button></a></td><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
						echo "</table>";
					}
				}
				else if($var == 'spec'){
					if($updated == 't'){
						echo "<table>";
						
						echo "<tr><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
						echo "</table>";
					}
					else {
						echo "<table>";
						
						echo "<tr><td><a href='verifyDoctorProfileUpdate.php?user=$user&updated=t&var=$var'><button>Save</button></a></td><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
						echo "</table>";
					}
				}
				else if($var == 'qual'){
					if($updated == 't'){
						echo "<table>";
						
						echo "<tr><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
						echo "</table>";
					}
					else {
						echo "<table>";
						
						echo "<tr><td><a href='verifyDoctorProfileUpdate.php?user=$user&updated=t&var=$var'><button>Save</button></a></td><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
						echo "</table>";
					}
				}
				else if($var == 'nat'){
					if($updated == 't'){
						echo "<table>";
						
						echo "<tr><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
						echo "</table>";
					}
					else {
						echo "<table>";
						
						echo "<tr><td><a href='verifyDoctorProfileUpdate.php?user=$user&updated=t&var=$var'><button>Save</button></a></td><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
						echo "</table>";
					}
				}
				else if($var == 'dept'){
					if($updated == 't'){
						echo "<table>";
						
						echo "<tr><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
						echo "</table>";
					}
					else {
						echo "<table>";
						
						echo "<tr><td><a href='verifyDoctorProfileUpdate.php?user=$user&updated=t&var=$var'><button>Save</button></a></td><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
						echo "</table>";
					}
				}
				else if($var == 'cont'){
					if($updated == 't'){
						echo "<table>";
						
						echo "<tr><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
						echo "</table>";
					}
					else {
						echo "<table>";
						
						echo "<tr><td><a href='verifyDoctorProfileUpdate.php?user=$user&updated=t&var=$var'><button>Save</button></a></td><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
						echo "</table>";
					}
				}
				else if($var == 'email'){
					if($updated == 't'){
						echo "<table>";
						
						echo "<tr><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
						echo "</table>";
					}
					else {
						echo "<table>";
						
						echo "<tr><td><a href='verifyDoctorProfileUpdate.php?user=$user&updated=t&var=$var'><button>Save</button></a></td><td><a href='doctorUpdateProfile.php?user=$user'><button>Back</button></a></td></tr>";
						echo "</table>";
					}
				}
				$connection->close();
			}
		?>
	</body>
</html>
