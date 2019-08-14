<?xml version="1.0" encoding="iso-8859-1"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xml:lang="en" lang="en" xmlns=" http://www.w3.org/1999/xhtml">
<head>
	<title>Create Table</title>
</head>
	<body>
		<?php
			$host   =   "localhost";
			$user   =   "root";
			$pass   =   "root";
			$port   =   3306;
			$db   =   "mys30";
			$link = mysqli_init();
			$db_selected = mysqli_real_connect($link, $host, $user, $pass, $db, $port);
			//$db_selected  =  mysqli_select_db( $link , "mys30");
			if (! $db_selected ) {
				die ( 'Can\'t use $db : '  .  mysqli_error ());
			}

			// Destroys and creates a table:
			$query="DROP TABLE IF EXISTS entries";
			mysqli_query($link, $query);
			$query="CREATE TABLE entries	( post_id INT AUTO_INCREMENT PRIMARY KEY, entry_date TINYTEXT, title TINYTEXT,  entry MEDIUMTEXT)";
			mysqli_query($link, $query);
			echo "Table created";
			mysqli_close ($link);
		?>
	</body>
</html>
