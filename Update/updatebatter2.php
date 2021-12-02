<?php
if (isset($_COOKIE["username"])) { 
	$username = $_COOKIE["username"];
	$password = $_COOKIE["password"];

	$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
	
	$sql = "UPDATE PLAYER as P
					SET number = '$_POST[number]',
							salary = '$_POST[salary]',
						  DL = '$_POST[DL]',
						  GP = '$_POST[GP]'
					WHERE P.lastName = '$_POST[lastName]'";

	$sql2 = "UPDATE BATTER as B
					 SET position = '$_POST[position]',
							 H = '$_POST[H]',
							 AB = '$_POST[AB]',
						   HR = '$_POST[HR]',
							 RBI = '$_POST[RBI]',
							 BB = '$_POST[BB]',
						   SB = '$_POST[SB]'
						WHERE B.lastName = '$_POST[lastName]'";
	
	$sql3 = "UPDATE PLAYSFOR
					 SET teamName = '$_POST[teamName]'
					 WHERE lastName = '$_POST[lastName]'";
	

	$result = $conn->query($sql);
	$result2 = $conn->query($sql2);
	$result3 = $conn->query($sql3);
	
	//  Check for errors
	if (!$result) {
		echo "<h3> Error updating batter (updating Player) </h3>";
		exit;
	}

	if (!$result2) {
		echo "<h3> Error updating batter (in update batter) </h3>";
		exit;
	}

	if (!$result3) {
		echo "<h3> Error Updating batter (in PLAYSFOR) </h3>";
		exit;
	}

	echo "<a href=\"../Pages/batters.php\">Return</a> to Batters.";

} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>"; 
}
?>
