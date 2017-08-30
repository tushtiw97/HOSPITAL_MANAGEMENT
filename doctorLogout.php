<?php
	session_start();
	$connection = new mysqli("localhost","root","tushar1997","HOSPMGMNT") or die("Couldn't Connect");
	$user = $_GET['user'];
	$result = $connection->query("UPDATE TEST_DOCTOR_LOGIN SET LoggedIn='F' WHERE Username='$user'");
	if(!$result) {
		$connection->close();
		die("Couldn't Log Out");
	}
	else {
		$connection->close();
		header("Location: login.php");
	}
?>
