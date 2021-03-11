<!DOCTYPE html>
<html>
<head>
	<title>Registration Form </title>
</head>
<body>

	<h1>Registration Form </h1>

	<?php
		$firstNameErr = $lastNameErr = $GenderErr = $EmailErr = $usernameErr = $passwordErr = $recoveryEmailErr = "";
		$firstName = ""; 
		$lastName = "";
		$male = "";
		$female = "";
		$Email = "";
		$username = "";
		$password = "";
		$recoveryEmail = "";

		

		if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_POST['fname'])) {
				$firstNameErr = "Please fill up the first name properly";
			}
			else {
				$firstName = $_POST['fname'];
			}

			if(empty($_POST['lname'])) {
				$lastNameErr = "Please fill up the last name properly";
			}
			else {
				$lastName = $_POST['lname'];
			}
			if(empty($_POST['male'])) {
				$maleErr = "Please fill up the gender properly";
			}
			else {
				$male = $_POST['male'];
			}

			if(empty($_POST['female'])) {
				$femaleErr = "Please fill up the gender properly";
			}
			else {
				$female = $_POST['female'];
			}

			if(empty($_POST['Email'])) {
				$EmailErr = "Please fill up the Email properly";
			}
			else {
				$Email = $_POST['Email'];
			}

			if(empty($_POST['username'])) {
				$usernameErr = "Please fill up the username properly";
			}
			else {
				$username = $_POST['username'];
			}
			if(empty($_POST['recoveryEmail'])) {
				$recoveryEmailErr = "Please fill up the recovery email properly";
			}
			else {
				$recoveryEmail = $_POST['recoveryEmail'];
			}

			

			if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$password)) {
  				$passwordErr = "wrong format";
			}
			else {
				$password = $_POST['password'];
			}
		}

		extract($_REQUEST);

      $file=fopen("registrationformdata.txt", "a");
      fwrite($file, "First name :");
      fwrite($file, $firstName . "\n");
      fwrite($file, "Last name :");
      fwrite($file, $lastName . "\n");
      fwrite($file, "gender :");
      fwrite($file, $male . $female . "\n");
      fwrite($file, "User name :");
      fwrite($file, $username . "\n");
      fwrite($file, "Email :");
      fwrite($file, $Email . "\n");
      fwrite($file, "Password :");
      fwrite($file, $password . "\n");
      fclose($file);
	  ?>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
		
		
		<label for="fname">First Name</label>
		<input type="text" name="fname" id="fname" value="<?php echo $firstName; ?>"> 
		

		<br>

		<label for="lname">Last Name</label>
		<input type="text" name="lname" id="lname" value="<?php echo $lastName ?>">
		<p><?php echo $lastNameErr; ?></p>
		
		<br>

		<label for="Gender: ">Gender</label>
        <label for="male">Male</label>
        <input type="radio" name="male" id="male" value="<?php echo $male?>">
        <label for="female">Female</label>
        <input type="radio" name="female" id="female" value="<?php echo $female?>">

		
		<br>

		<label for="Email">Email</label>
        <input type="email" name="Email" id="Email" value="<?php echo $Email?>">
        <br>

        <label for="username">User Name</label>
		<input type="text" name="username" id="username" value="<?php echo $username; ?>"> 

        <br>
        <label for="password">Password</label>
		<input type="text" name="password" id="password" value="<?php echo $password; ?>"> 

        <br>
        <label for="recoveryEmail">Recovery Email Address</label>
		<input type="text" name="recoveryEmail" id="recoveryEmail" value="<?php echo $recoveryEmail; ?>"> 

        <br>

		
		<input type="submit" value="Submit">

	</form>

</body>
</html>