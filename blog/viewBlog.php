<?php
	session_start();
?>
<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
	<body>
		<div id="container">
			<div id="banner">
				Yaseen's Blog!
			</div>
			<div id="navigation">
				<a class="active" href="http://webprojects.eecs.qmul.ac.uk/mys30/blog/"><img src="Home.png" width="20px" height="auto">Home</a>
				<?php
				if($_SESSION['logged_in']) {
					echo '<a href="addentry.html"><img src="AddEntry.png" width="20px" height="auto">Add Entry</a>';
					echo '<a href="logout.php"><img src="Login.png" width="25px" height="auto">Logout</a>';
				}  else {
					echo '<a href="login.html"><img src="AddEntry.png" width="20px" height="auto">Login to Add Entry</a>';
					echo '<a href="login.html"><img src="Login.png" width="25px" height="auto">Login</a>';
				}
				?>
			</div>
			<div id="content">
				<div id="main">
				<?php
					$host   =   "localhost";
					$user   =   "root";
					$pass   =   "root";
					$port   =   3306;
					$db   =   "mys30";

					$link = mysqli_init();
					$db_selected = mysqli_real_connect($link, $host, $user, $pass, $db, $port);
					if (! $db_selected ) {
						die ( 'Can\'t use $db : '  .  mysqli_error ());
					}

					$query="SELECT * FROM entries";
					$result=mysqli_query($link, $query);
					$numOfEntries=mysqli_num_rows($result);
					if ($numOfEntries==0){
						$_SESSION['logged_in']=false;
						header("location: login.html");
					}else {

						$i=$numOfEntries-1;
						while ($i >= 0) {
							mysqli_data_seek($result, $i);
							$rowData = mysqli_fetch_row($result);
							$title = $rowData[2];
							$post  = $rowData[3];
							$date  = $rowData[1];
							// $title = mysqli_data_seek($result, $i, "title");
							// $post  = mysqli_data_seek($result, $i, "entry");
							// $date  = mysqli_data_seek($result, $i, "entry_date");
							echo "<h2 id=\"$title\" class=\"title\">".$title."</h2><h4 id=\"date\">".$date."</h4><p id=\"body\">".$post."</p><hr/><br />";
							$i--;
						}
					}
				?>
				</div>
				<div id="archive">
					<?php
						$query="SELECT * FROM entries";
						$result=mysqli_query($link, $query);
						$num=mysqli_num_rows($result);
						$i=$num-1;
						echo "<h2>Archive</h2><ul>";
						while ($i >= 0) {
							mysqli_data_seek($result, $i);
							$rowData = mysqli_fetch_row($result);
							$title = $rowData[2];
							echo ("<li><a href=\"#$title\">".$title."</a></li>");
							$i--;
						}
						echo "</ul>";
						mysqli_close ( $link );
					?>
				</div>
			</div>
			<div id="footer">
				Copyright &copy; 2017 Yaseen Sultan
			</div>
		</div>
	</body>
</html>
