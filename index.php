<?php
	session_start();
	$_SESSION['admin']['error'] = '';
	$_SESSION['doctor']['error'] = '';
	$_SESSION['patient']['error'] = '';
	$_SESSION['user'] = '';
	$_SESSION['loggedIn'] = false;
	$_SESSION['sexSet'] = true;
	$_SESSION['nationalitySet'] = true;
	$_SESSION['religionSet'] = true;
	$_SESSION['currentAdmin'] = "";
	$_SESSION['currentDoctor'] = "";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Hospital Management | The Complete System</title>
		<meta charset="UTF-8" lang="en" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
		<link href="" type="text/css" rel="stylesheet">
		
		<!-- Enter the location of the CSS Stylesheet in the href attribute above -->
		
		
	</head>
	<body>
		<!-- Here starts the main body. Perform all changes to the webpages, but please, PLEASE DO NOT make any changes to the contents in the 'form' tag -->
		<a href="login.php"><input type="button" id="" class="" value="Log In/Sign Up"></a>
	</body>
</html>
