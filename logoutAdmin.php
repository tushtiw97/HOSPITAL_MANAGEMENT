<?php
	$connection = new mysqli("localhost","root","tushar1997","HOSPMGMNT") or die("Connection unsuccessful");
	$user = $_GET['user'];
	echo var_dump($user);
	$result = $connection->query("UPDATE `ADMIN` SET LoggedIn='F' WHERE Username='$user'");
	if(!$result){
		echo "Couldn't log out";
	}
	else {
		header("Location: login.php");
	}
	$connection->close();
?>
