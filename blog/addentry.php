<?php
	session_start();
	if (($_SESSION['logged_in']) && (!empty($_POST['submit']))){
		if ((!empty($_POST["Title"])) && (!empty($_POST["Body"]))){
			$host   =   "localhost";
			$user   =   "root";
			$pass   =   "root";
			$port   =   3306;
			$db   =   "mys30";


			$Title = addslashes($_POST['Title']);
			$Body  = addslashes($_POST['Body']);
			$dateOfEntry = date('D, M jS, Y, g:i a T');

			//$link = mysql_connect ( $host , $user , $pass );
			$link = mysqli_init();
			$db_selected = mysqli_real_connect($link, $host, $user, $pass, $db, $port);
			if (! $db_selected ) {
				die ( 'Can\'t use $db : '  .  mysqli_error ());
			}

			//Insert stuff to table
			$query = "INSERT INTO entries(title, entry, entry_date) VALUES ('$Title', '$Body', '$dateOfEntry')";
			mysqli_query($link, $query);
			mysqli_close ( $link );
			header("location: viewBlog.php");
		} else {
			echo "<script type='text/javascript'>
			alert('Please enter something into both Title and Body');
			window.location.href='addentry.html';
			</script>";
		}

	} else {
		$_SESSION['logged_in']=false;
		header("location: login.html");
	}
?>
<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
	<title>Add an Entry</title>
</head>
</html>
