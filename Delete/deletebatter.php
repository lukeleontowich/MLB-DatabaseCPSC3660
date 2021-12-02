<?php

if (isset($_COOKIE["username"])) {
      
	$username = $_COOKIE["username"];
	$password = $_COOKIE["password"];

	$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
	$sql = "delete from BATTER where lastName = '$_POST[lastName]'";
	$sql2 = "delete from PLAYSFOR where lastName = '$_POST[lastName]'";
	$sql3 = "delete from PLAYER where lastName='$_POST[lastName]'"; 
	if($conn->query($sql))  { 
		if ($conn->query($sql2)) {
			if ($conn->query($sql3)) {
				echo "<h3> Batter Deleted </h3>";
			} else {
				$err = $conn->errno;
				$errtxt = $conn->error;
				echo "<h3> Error deleting batter. Error in delete PLAYER </h3>";
				echo "<h3> Error Code: $err. $errtxt";
			}
		} else {
			$err = $conn->errno;
			$errtxt = $conn->error;
			echo "<h3> Error deleting batter. Error in delete PLAYSFOR </h3>";
			echo "<h3> Error Code: $err. $errtxt";
		}
	} else {
		$err = $conn->errno;
		$errtxt = $conn->error;
		echo "<h3> Error deleting batter. Error in delete BATTER </h3>";
		echo "<h3> Error Code: $err. $errtxt";
	}
	echo "<a href=\"../Pages/batters.php\">Return</a> to Batters.";
} else {
	echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
}
?>
