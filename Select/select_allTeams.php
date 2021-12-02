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
  $teams;
  $team_count;
  
	if (isset($_COOKIE["username"])) { 
   		$username = $_COOKIE["username"];
   		$password = $_COOKIE["password"];

   		$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username); 
   		if($mysqli->connect_errno) {
   			echo "Connection Issue!";
   			exit; 
   		}
		$sql = "SELECT * FROM TEAM;";
        $sql2 = "SELECT count(*) FROM TEAM;";
   		if($conn->query($sql) && $conn->query($sql2)) {
            $result = $conn->query($sql);
            $teams = $result->fetch_assoc();
            $team_count = $conn->query($sql2);
   		}
   		else {
			echo "<h3> DID NOT WORK </h3>";
   		}
	} else {
   		echo "<h3>You are not logged in!</h3><p> <a href=\"../index.php\">Login First</a></p>"; 
	}
$rows = $team_count / 4;
if ($team_count % 4 != 0) {
    $rows = $rows + 1;
}
?>

</body>
</html>