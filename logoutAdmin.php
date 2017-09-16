<?php
	session_start();
	$connection = new mysqli("localhost","root","tushar1997","HOSPMGMNT") or die("Connection unsuccessful");
	$user = $_GET['user'];
	$user1 = $_SESSION['currentAdmin'];
	echo $user1;
	$result = $connection->query("UPDATE `ADMIN` SET LoggedIn='F' WHERE Username='$user1'");
	if(!$result){
		echo "Couldn't log out";
	}
	else {
		header("Location: login.php");
	}
	$connection->close();
?>
