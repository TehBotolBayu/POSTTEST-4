<?php
session_start();
error_reporting(E_ERROR);

$_SESSION["dt"] = [];
$_SESSION["url"] = [];
$_SESSION["title"] = [];
$_SESSION["filename"] = [];

$_SESSION['email'] = $_POST['email'];
$_SESSION['name'] = '';
$_SESSION['uname'] = ''; 
$_SESSION['date'] = '';
if(isset($_POST['sign_btn'])){
if($_POST['email'] == "ADMIN@gmail.com" && $_POST['password'] == "password"){
    header('Location: web_admin.php');
}
else if($_POST['email'] == "USER@gmail.com" && $_POST['password'] == "password"){
    header('Location: web_user.php');
}
else{
	echo "<script>
		alert('Sorry, Wrong Password!');
	</script>";
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="logstyle.css">
</head>
<body>
<div class="log">
	<div class="header">
		<h2>Sign In</h2>
	</div>
	<form method="post" action="">

		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>

		<div class="input-group">
			<button type="submit" class="btn" name="sign_btn">Sign In</button>
		</div>
	</form>
</div>
</body>
</html>