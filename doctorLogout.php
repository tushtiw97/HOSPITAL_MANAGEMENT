<?php
	session_start();
	$connection = new mysqli("localhost","root","tushar1997","HOSPMGMNT") or die("Couldn't Connect");
	$result = $connection->query("UPDATE TEST_DOCTOR_LOGIN SET LoggedIn='F' WHERE LoggedIn='T'");
	if(!$result) {
		$connection->close();
		die("Couldn't Log Out");
	}
	else {
		$connection->close();
		header("Location: login.php");
	}
?>
