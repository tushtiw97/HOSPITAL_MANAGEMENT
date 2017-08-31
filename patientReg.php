<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>New Patient | Patient Registration Form</title>
		<meta charset="UTF-8" lang="en" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
	</head>
	<body>
		<?php $user = $_GET['user']; ?>
		<h1>Required Fields (<span style="color:red">*</span>)</h1><br>
		<h4>Enter patient details :-</h4>
		<form action="verifyAndAddPatient.php?user=<?php echo $user; ?>" method="POST">
			<label>First Name<span style="color:red">*</span> : </label>
			<input type="text" name="fname" placeholder="First Name" autofocus required />
			<br>
			<label>Middle Name : </label>
			<input type="text" name="mname" placeholder="Middle Name (if exists)" />
			<br>
			<label>Last Name<span style="color:red">*</span> : </label>
			<input type="text" name="lname" placeholder="First Name" required />
			<br>
			<label>Age<span style="color:red">*</span> : </label>
			<input type="number" name="age" placeholder="Age" required />
			<br>
			<label>Sex<span style="color:red">*</span> : </label>
			<input type="radio" name="sex" value="male" required>Male</input>
			<input type="radio" name="sex" value="felame" required>Female</input>
			<input type="radio" name="sex" value="unknown" required>Prefer not to disclose</input>
			<?php
				if(!$_SESSION['sexSet']){
					echo "<span style='color:red'>Please specify patient's sex</span>";
					$_SESSION['sexSet'] = false;
				}
			?>
			<br>
			<label>Allergies (if any) : </label>
			<textarea name="allergies" ></textarea>
			<br>
			<label>Blood Group<span style="color:red">*</span> : </label>
			<input type="text" name="bloodGroup" placeholder="Blood Group" required/>
			<br>
			<label>Address<span style="color:red">*</span> : </label>
			<textarea name="address" required ></textarea>
			<br>
			<label>Nationality<span style="color:red">*</span> : </label>
			<select name="nationality">
				<option value="noSelection">Select Nationality</option>
				<option value="indian">Indian</option>
				<option value="american">American</option>
				<option value="nIndian">North Indian</option>
				<option value="sIndian">South Indian</option>
				<option value="eIndian">East Indian</option>
			</select>
			<?php
				if(!$_SESSION['nationalitySet']){
					echo "<span style='color:red'>Please select nationality</span>";
					$_SESSION['nationalitySet'] = true;
				}
			?>
			<br>
			<label>Religion<span style="color:red">*</span> : </label>
			<select name="religion">
				<option value="noSelection">Select Religion</option>
				<option value="hinduism">Hinduism</option>
				<option value="islam">Islam</option>
				<option value="jainism">Jainism</option>
				<option value="buddhism">Buddhism</option>
				<option value="sikhism">Sikhism</option>
				<option value="christianity">Christianity</option>
				<option value="satanism">Satanism</option>
			</select>
			<?php
				if(!$_SESSION['religionSet']){
					echo "<span style='color:red'>Please select religion</span>";
					$_SESSION['religionSet'] = true;
				}
			?>
			<br>
			<label>Email ID (if exists) : </label>
			<input type="email" name="email" placeholder="Email ID"></input>
			<br>
			<label>Country Code<span style="color:red">*</span> : </label>
			<input type="text" name="countryCode" placeholder="Country Code" required />
			<label>Contact Number<span style="color:red">*</span> : </label>
			<input type="text" name="contactNumber" placeholder="Contact Number" required />
			<br>
			<hr>
			<h4>Emergency Contact Details :-</h4>
			<br>
			<label>Emergency Contact's Name<span style="color:red">*</span> : </label>
			<input type="text" name="eContactName" placeholder="Name" required />
			<br>
			<label>Country Code<span style="color:red">*</span> : </label>
			<input type="text" name="eContactCountryCode" placeholder="Country Code" required />
			<label>Contact Number<span style="color:red">*</span> : </label>
			<input type="text" name="eContactNumber" placeholder="Contact Number" required />
			<br>
			<input type="submit" value="Register Patient" />
		</form>
	</body>
</html>
