<?php
	session_start();
	$_SESSION['logged_in']=false;
	session_unset();
	session_destroy();
	header("location: login.html");
?>
<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
	<title>Logout</title>
</head>
</html>