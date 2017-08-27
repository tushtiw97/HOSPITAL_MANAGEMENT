<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Doctor HomePage</title>
		<meta charset="UTF-8" lang="en" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
		<link href="" type="text/css" rel="stylesheet" />
	</head>
	<body>
		Welcome, Doctor!
		<br><br>
		<form action="doctorLogout.php" method="POST"><input type="submit" value="Log Out" /></form>
	</body>
</html>
