<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  $league;
  
	if (isset($_COOKIE["username"])) { 
   		$username = $_COOKIE["username"];
   		$password = $_COOKIE["password"];

   		$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username); 
   		if($mysqli->connect_errno) {
   			echo "Connection Issue!";
   			exit; 
   		}
		$sql = "SELECT * FROM LEAGUE as L
		where L.LeagueName = $_GET[league];";
		//$result = $conn->query($sql);
   		if($conn->query($sql)) {
            $league = $conn->query($sql);
   		}
   		else {
			echo "<h3> DID NOT WORK </h3>";
   		}
	} else {
   		echo "<h3>You are not logged in!</h3><p> <a href=\"../index.php\">Login First</a></p>"; 
	}

echo "<div class=\"row\">
 									 <div class=\"column\">
    								<span class=\"container\">
      							<img src=\"../TeamLogos/American.png\" alt=\"Avatar\" class=\"image\">
    								</span>
  								</div>
  								<div class=\"column\">";  

 
	if (isset($_COOKIE["username"])) { 
   		$username = $_COOKIE["username"];
   		$password = $_COOKIE["password"];

   		$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username); 
   		if($mysqli->connect_errno) {
   			echo "Connection Issue!";
   			exit; 
   		}
		$sql = "SELECT * FROM LEAGUE as L
		where L.leagueName = $_GET[league]";

   		if($conn->query($sql)) {
            $result = $conn->query($sql);
            $leagueValues = $result->fetch_assoc();
            
            echo "<h2><p style='font-size: 50px;'>$leagueValues[leagueName]</p></h2>
            <h3>Est. $leagueValues[ESTdate]</h3>
            <h3>DH allowed: $leagueValues[DHallowed]</h3>";
            
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
<h3>Standings</h3>
<table id="myTable">
  <tr class="header">
    <th style="width:5%;">City</th>
    <th style="width:5%;">Team Name</th>
    <th style="width:5%;">Wins</th>
    <th style="width:5%;">Losses</th>
    <th style="width:10%;">Manager</th>
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
		/*$sql = "SELECT * FROM PLAYER as PL, PITCHER as P
		where PL.lastName = P.lastName and PL.LastName in
            (SELECT lastName FROM PLAYSFOR
            where teamName = $_GET[team])";
		*/
		$sql = "SELECT * FROM LEAGUE as L, TEAM as T
		where T.leagueName = L.leagueName and T.leagueName=$_GET[league]
		ORDER BY losses";
		$result = $conn->query($sql);
   		if($conn->query($sql)) {
			while ($rec = $result->fetch_assoc()) {
				echo "  <tr><td>$rec[city]</td>
						<td>$rec[teamName]</td>
						<td>$rec[wins]</td>
						<td>$rec[losses]</td>
						<td>$rec[manager]</td>
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

