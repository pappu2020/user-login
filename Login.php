<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<body>
<div class="box">
	<h2>Login</h2>
	<form action="">
		<div class="input-box">
			<label for="username">username</label>
			<input type="text" name="username" autocomplete="off" required>
			
		</div>
		<div class="input-box">
			<label for="email">Email</label>
			<input type="email" name="email" autocomplete="off" required>
			
			</div>
			<div class="input-box">
			<label for="password">password</label>
			<input type="password" name="password" autocomplete="off" required=>
			
			</div>
			<input type="submit" value="save">
			</form>
			</div> 
</body>
</html>
<?php
extract($_REQUEST);

$file=fopen("Logininfo.txt", "a");
fwrite($file, "name :");
fwrite($file, $username . "\n");
fwrite($file, "Email :");
fwrite($file, $email . "\n");
fwrite($file, "Password :");
fwrite($file, $password . "\n");
fclose($file);
?>

