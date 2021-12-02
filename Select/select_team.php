<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="../TeamLogos/MLB.png">
    <title>Teams</title>
<style>
    * {box-sizing: border-box}

.container {
  position: relative;
  width: 100%;
  max-width: 100px;
  max-height: 100px;
}

/* Make the image to responsive */
.image {
  display: inline;
  width: 50%;
  height: auto;
}

img {
  border-radius: 50%;
}
    #myTable {
  border-collapse: collapse; /* Collapse borders */
  width: 100%; /* Full-width */
  border: 1px solid #ddd; /* Add a grey border */
  font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
  text-align: left; /* Left-align text */
  padding: 12px; /* Add padding */
}

#myTable tr {
  /* Add a bottom border to all table rows */
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  /* Add a grey background color to the table header and on hover */
  background-color: #f1f1f1;
}
.column {
  float: left;
  width: 50%;
  padding: 5px;
}

/* Clear floats after image containers */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>
<?php
include "../Utility/NavigationBar.php";
?>


<?php
 
	if (isset($_COOKIE["username"])) { 
   		$username = $_COOKIE["username"];
   		$password = $_COOKIE["password"];

   		$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username); 
   		if($mysqli->connect_errno) {
   			echo "Connection Issue!";
   			exit; 
   		}
		$sql = "SELECT * FROM TEAM as T
		where T.teamName = $_GET[team]";

   		if($conn->query($sql)) {
            $result = $conn->query($sql);
            $teamValues = $result->fetch_assoc();
            //echo "$teamValues[teamName]";
						echo "<div class=\"row\">
 									 <div class=\"column\">
    								<span class=\"container\">
      							<img src=\"../TeamLogos/$teamValues[logofilepath]\" alt=\"Avatar\" class=\"image\">
    								</span>
  								</div>
  								<div class=\"column\">";     


            echo "<h2><p style='font-size: 50px;'>$teamValues[city]</p></h2>
            <h2><p style='font-size: 50px;'>$teamValues[teamName]</p></h2>
            <h3>Manager: $teamValues[manager]</h3>
            <h3>Wins: $teamValues[wins]</h3>
            <h3>Losses: $teamValues[losses]</h3>";
            
   		}
   		else {
			echo "<h3> DID NOT WORK </h3>";
   		}
           
	} else {
   		echo "<h3>You are not logged in!</h3><p> <a href=\"../index.php\">Login First</a></p>"; 
	}
?>
  </div>
</div>

<script>
document.write(a);
</script>
<h3>Pitchers</h3>
<table id="myTable">
  <tr class="header">
    <th style="width:5%;">Number</th>
    <th style="width:10%;">First Name</th>
    <th style="width:10%;">Last Name</th>
    <th style="width:5%;">Salary</th>
    <th style="width:5%;">GP</th>
    <th style="width:5%;">DL</th>
    <th style="width:5%;">Wins</th>
    <th style="width:5%;">Losses</th>
    <th style="width:5%;">ERA</th>
    <th style="width:5%;">RA</th>
    <th style="width:5%;">SO</th>
    <th style="width:5%;">Starter / Closer</th>
  </tr>

  <?php
	if (isset($_COOKIE["username"])) { 
   		$username = $_COOKIE["username"];
   		$password = $_COOKIE["password"];

   		$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username); 
   		if($mysqli->connect_errno) {
   			echo "Connection Issue!";
   			exit; 
   		}
		$sql = "SELECT * FROM PLAYER as PL, PITCHER as P, PLAYSFOR as PLSF
		where PL.lastName = P.lastName and PLSF.lastName = P.lastName and PLSF.teamName = $_GET[team]";
		$result = $conn->query($sql);
   		if($conn->query($sql)) {
			while ($rec = $result->fetch_assoc()) {
				$dl = "N";
				if ($rec[DL] == "on") {
					$dl = "Y";
				}
				echo "  <tr><td>$rec[number]</td>
						<td>$rec[firstName]</td>
						<td>$rec[lastName]</td>
						<td>$rec[salary]</td>
						<td>$rec[GP]</td>
						<td>$dl</td>
						<td>$rec[wins]</td>
						<td>$rec[losses]</td>
						<td>$rec[ERA]</td>
						<td>$rec[runsAllowed]</td>
						<td>$rec[SO]</td>
						<td>$rec[starterCloser]</td>
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
</table>

<h3>Batters</h3>
<table id="myTable">
  <tr class="header">
   <th style="width:5%;">Number</th>
    <th style="width:10%;">First Name</th>
    <th style="width:10%;">Last Name</th>
    <th style="width:5%;">Salary</th>
    <th style="width:5%;">GP</th>
    <th style="width:5%;">DL</th>
    <th style="width:5%;">AB</th>
    <th style="width:5%;">H</th>
    <th style="width:5%;">BB</th>
    <th style="width:5%;">HBP</th>
    <th style="width:5%;">RBI</th>
    <th style="width:5%;">HR</th>
    <th style="width:5%;">SB</th>
    <th style="width:5%;">OBP</th>
    <th style="width:5%;">Position</th>
  </tr>

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
		where PL.lastName = B.lastName and PLSF.lastName = B.lastName and PLSF.teamName = $_GET[team]";
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
</table>
</body>
</html>
