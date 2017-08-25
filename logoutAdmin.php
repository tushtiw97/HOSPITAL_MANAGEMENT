<?php
	$connection = new mysqli("localhost","root","tushar1997","HOSPMGMNT") or die("Connection unsuccessful");
	$result = $connection->query("UPDATE `ADMIN` SET LoggedIn='F' WHERE LoggedIn='T'");
	if(!$result){
		echo "Couldn't log out";
	}
	else {
		session_destroy();
		header("Location: login.php");
	}
	$connection->close();
?>
