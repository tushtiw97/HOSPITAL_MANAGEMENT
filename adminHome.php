<!DOCTYPE html>
<html>
	<head>
		<title>Administrator</title>
		<meta charset="UTF-8" lang="en" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
		<link href="" type="text/javascript" rel="stylesheet" />
	</head>
	<body>
		Admin Home Page
		<?php
			$user = $_GET['user'];
		?>
		<br>
		<form action="patientReg.php" method="POST"><input type="submit" value="Register New Patient" /></form>
		<br>
		<a href="viewPendingRequests.php?user=<?php echo $user; ?>"><button>View Authentication Requests</button></a>
		<br><br><br>
		<form action="logoutAdmin.php?user=<?php echo $user; ?>" method="POST"><input type="submit" value="Log Out" /></form>
	</body>
</html>
