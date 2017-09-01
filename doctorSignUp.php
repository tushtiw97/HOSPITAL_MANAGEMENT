<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Register as New Doctor</title>
		<meta charset="UTF-8" lang="en" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
		<link href="" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<?php
			$userExists = $_GET['existingUser'];
		?>
		<form action="verifyDoctorSignUp.php" method="POST">
			Welcome to Doctor's signup page. Just register your username, email, contact details, and your identification. Your account will be verified by the administrator the very same day.
			<br><br><b>Fields marked with (</b><span style="color:red">*</span><b>) are mandatory</b><br>
			<h4>Please inter the following details :- </h4><br>
			<label>First Name<span style="color:red">*</span> : </label><input type="text" name="fname" placeholder="First Name" required />
			<br>
			<label>Middle Name : </label><input type="text" name="mname" placeholder="Middle Name (optional)" />
			<br>
			<label>Last Name<span style="color:red">*</span> : </label><input type="text" name="lname" placeholder="Last Name" required />
			<br>
			<label>Email<span style="color:red">*</span> : </label><input type="email" name="email" placeholder="email@example.com" required />
			<br>
			<label>Username<span style="color:red">*</span> : </label><input type="text" name="user" placeholder="Desired Username" required />
			<?php
				if($userExists == 't'){
					echo "<span style='color:red'>Username already in use</span>";
				}
			?>
			<br>
			<label>Password<span style="color:red">*</span> : </label><input type="password" name="pass" placeholder="Password" required />
			<br>
			<label>Country Code<span style="color:red">*</span> : </label><input type="text" name="countryCode" placeholder="Country Code" required />
			<br>
			<label>Contact Number<span style="color:red">*</span> : </label><input type="text" name="contactNumber" placeholder="Contact Number" required />
			<br>
			<input type="submit" value="Sign Up" />
		</form>
	</body>
</html>
