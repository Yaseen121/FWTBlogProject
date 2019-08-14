<?php
	session_start();
	$myUsername = "Yaseen";
	$myPassword = "123456";
	if(empty($_POST["name"]) || empty($_POST["pass"])){
		header("location: login.html");
	} else {
		$username = $_POST["name"];
		$password = $_POST["pass"];

		if ($username==$myUsername and $password==$myPassword) {
			$_SESSION['logged_in'] = true;
			header("location: addentry.html");
		} else {
			echo "<script type='text/javascript'>
				alert('Wrong Username or Password entered. Try again.');
				window.location.href='login.html';
			</script>";
		}
	}
?>
<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
</html>