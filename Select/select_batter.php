<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Players</title>
</head>
<body>
<?php
	if (isset($_COOKIE["username"])) { 
   		$username = $_COOKIE["username"];
   		$password = $_COOKIE["password"];

   		$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username); 
   		if($mysqli->connect_errno) {
   			echo "Connection Issue!";
   			exit; 
   		}
		$sql = "SELECT * FROM PLAYER as PL, BATTER as B, PLAYSFOR as PLSF
		where PL.lastName = B.lastName and PLSF.lastName = B.lastName";
		$result = $conn->query($sql);
   		if($conn->query($sql)) {
			while ($rec = $result->fetch_assoc()) {
				$roundOBP = number_format($rec[OBP], 2);
				$dl = "N";
				if ($rec[DL] == "on") {
					$dl = "Y";
				}
				echo "  <tr><td>$rec[number]</td>
						<td>$rec[firstName]</td>
						<td>$rec[lastName]</td>
						<td>$rec[teamName]</td>
						<td>$rec[salary]</td>
						<td>$rec[GP]</td>
						<td>$dl</td>
						<td>$rec[AB]</td>
						<td>$rec[H]</td>
						<td>$rec[BB]</td>
						<td>$rec[HBP]</td>
						<td>$rec[RBI]</td>
						<td>$rec[HR]</td>
						<td>$rec[SB]</td>
						<td>$roundOBP</td>
						<td>$rec[position]</td>
						</tr> </h5>";
			}
   		}
   		else {
			echo "<h3> DID NOT WORK </h3>";
   		}
	} else {
   		echo "<h3>You are not logged in!</h3><p> <a href=\"../index.php\">Login First</a></p>"; 
	}
?>
</body>
</html>
