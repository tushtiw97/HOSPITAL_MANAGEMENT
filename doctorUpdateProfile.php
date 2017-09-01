<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Update Profile</title>
		<meta charset="UTF-8" lang="en" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
		<link href="" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<?php
			$user = $_GET['user'];
			$connection = new mysqli("localhost","root","tushar1997","HOSPMGMNT");
			if(!$connection){
				echo "Connection unsuccessful";
				$connection->close();
			}
			else {
				$result = $connection->query("SELECT * FROM TEST_DOCTOR WHERE ID IN (SELECT ID FROM TEST_DOCTOR_LOGIN WHERE Username='$user')");
				
				if(!$result){
					echo "Unable to fetch Data";
					$connection->close();
				}
				else {
					$row = $result->fetch_assoc();
					echo "<table>";
					echo "<tr><td>Name : </td><td>".$row['FirstName'].' '.$row['LastName']."</td><td><a href='verifyDoctorProfileUpdate.php?var=name&updated=f&user=$user'><button>Update</button></a></td></tr>";
					echo "<tr><td>Sex : </td><td>".$row['Sex']."</td><td><a href='verifyDoctorProfileUpdate.php?var=sex&updated=f&user=$user'><button>Update</button></a></td></tr>";
					echo "<tr><td>Address : </td><td>".$row['Address']."</td><td><a href='verifyDoctorProfileUpdate.php?var=addr&updated=f&user=$user'><button>Update</button></a></td></tr>";
					echo "<tr><td>Joining Date : </td><td>".$row['DateOfJoining']."</td><td><a href='verifyDoctorProfileUpdate.php?var=date&updated=f&user=$user'><button>Update</button></a></td></tr>";
					echo "<tr><td>Specialization : </td><td>".$row['Specialization']."</td><td><a href='verifyDoctorProfileUpdate.php?var=spec&updated=f&user=$user'><button>Update</button></a></td></tr>";
					echo "<tr><td>Qualification : </td><td>".$row['Qualification']."</td><td><a href='verifyDoctorProfileUpdate.php?var=qual&updated=f&user=$user'><button>Update</button></a></td></tr>";
					echo "<tr><td>Nationality : </td><td>".$row['Nationality']."</td><td><a href='verifyDoctorProfileUpdate.php?var=nat&updated=f&user=$user'><button>Update</button></a></td></tr>";
					echo "<tr><td>Department : </td><td>".$row['Department']."</td><td><a href='verifyDoctorProfileUpdate.php?var=dept&updated=f&user=$user'><button>Update</button></a></td></tr>";
					echo "<tr><td>Contact Number : </td><td>".$row['countryCode'].$row['contactNumber']."</td><td><a href='verifyDoctorProfileUpdate.php?var=cont&updated=f&user=$user'><button>Update</button></a></td></tr>";
					echo "<tr><td>Email : </td><td>".$row['Email']."</td><td><a href='verifyDoctorProfileUpdate.php?var=email&updated=f&user=$user'><button>Update</button></a></td></tr>";
					echo "</table>";
					echo "<table><tr><td><a href='doctorHome.php?user=$user'><button>Home</button></a></td></tr></table>";
				}
			}
		?>
	</body>
</html>
