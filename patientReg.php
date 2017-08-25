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
		<h1>Required Fields (<span style="color:red">*</span>)</h1><br>
		<h4>Enter patient details :-</h4>
		<form action="verifyAndAddPatient.php" method="POST">
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
			<input type="radio" name="sex" value="male" >Male</input>
			<input type="radio" name="sex" value="felame" >Female</input>
			<input type="radio" name="sex" value="unknown" >Prefer not to disclose</input>
			<br>
			<label>Allergies (if any) : </label>
			<textarea name="allergies" ></textarea>
			<br>
			<label>Nationality<span style="color:red">*</span> : </label>
			<select required>
				<option value="noSelection" name="nationality">Select Nationality</option>
				<option value="indian" name="nationality">Indian</option>
				<option value="american" name="nationality">American</option>
				<option value="nIndian" name="nationality">North Indian</option>
				<option value="sIndian" name="nationality">South Indian</option>
				<option value="eIndian" name="nationality">East Indian</option>
			</select>
			<br>
			<label>Religion<span style="color:red">*</span> : </label>
			<select required>
				<option value="noSelection" name="religion">Select Nationality</option>
				<option value="hinduism" name="religion">Hinduism</option>
				<option value="islam" name="religion">Islam</option>
				<option value="jainism" name="religion">Jainism</option>
				<option value="buddhism" name="religion">Buddhism</option>
				<option value="sikhism" name="religion">Sikhism</option>
				<option value="christianity" name="religion">Christianity</option>
				<option value="satanism" name="religion">Satanism</option>
			</select>
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