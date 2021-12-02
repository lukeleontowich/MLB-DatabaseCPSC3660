<?php

if (isset($_COOKIE["username"])) { 

   	$username = $_COOKIE["username"];
   	$password = $_COOKIE["password"];

   	$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username); 

	$sql = "INSERT INTO PLAYER (firstName, lastName, number, salary, DL, GP) 
	        VALUES ('$_POST[firstName]', '$_POST[lastName]', '$_POST[number]', 
					'$_POST[salary]', '$_POST[DL]', '$_POST[GP]')";

	$OBP = ($_POST[H] + $_POST[BB]) / ($_POST[AB] + $_POST[BB]);

	$sql2 = "INSERT INTO BATTER (lastName, position, H, HBP, AB, HR, RBI, OBP, BB, SB)
			 VALUES ('$_POST[lastName]', '$_POST[position]', '$_POST[H]',
					 '$_POST[HBP]','$_POST[AB]', '$_POST[HR]', '$_POST[RBI]', $OBP,
 					 '$_POST[BB]','$_POST[SB]')";
	$sql3 = "INSERT INTO PLAYSFOR (lastName, teamName)
			 VALUES('$_POST[lastName]', '$_POST[teamName]')";

	if ($conn->query($sql)) {
		if ($conn->query($sql2)) {
			if ($conn->query($sql3)) {
				echo "<h3> Batter Added! </h3>";
			} else {
				$err = $conn->errno;
				$errtxt = $conn->error;
				echo "<h3> Error inserting batter. Error in INSERT INTO PLAYSFOR</h3>";
				echo "<h3> Error Code: $err. $errtxt";
			}
		} else {
			$err = $conn->errno;
			$errtxt = $conn->error;
			echo "<h3> Error inserting batter. Error in INSERT INTO BATTER</h3>";
			echo "<h3> Error Code: $err. $errtxt";
		}
	} else {
		$err = $conn->errno;
		$errtxt = $conn->error;
		echo "<h3> Error inserting batter. Error in INSERT INTO PLAYER</h3>";
		echo "<h3> Error Code: $err. $errtxt";
	}
	echo "<a href=\"../Pages/batters.php\">Return</a> to Batters.";

} else {
	//echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";s

}

?>
