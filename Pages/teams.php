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

/* Container needed to position the overlay. Adjust the width as needed */
.container {
  position: relative;
  width: 100%;
  max-width: 100px;
  max-height: 100px;
}

/* Make the image to responsive */
.image {
  display: inline;
  width: 100%;
  height: auto;
}

img {
  border-radius: 50%;
}

/* The overlay effect - lays on top of the container and over the image */
.overlay {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1;
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 20px;
  text-align: center;
}

/* When you mouse over the container, fade in the overlay title */
.container:hover .overlay {
  opacity: 1;
}

/* Three image containers (use 25% for four, and 50% for two, etc) */
.column {
  float: left;
  width: 25%;
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

<body style="background-color: #F1F4FA;">
<?php
  include "../Utility/NavigationBar.php";
	

?>
<br>
<button type="button"><a href="../Insert/insert_team.php">Add Team</a></button>
<button type="button"><a href="../Update/update_team.php">Update Team Stats</a></button>
<button type="button"><a href="../Delete/delete_team.php">Remove Team</a></button>
<br>

<?php
  //include "../Select/select_allTeams.php";
if (isset($_COOKIE["username"])) { 


	$username = $_COOKIE["username"];
	$password = $_COOKIE["password"];

	$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username); 
	if ($conn->connect_errno) {
		echo "Connection Problem!";
		exit;
	}

	$sql = "SELECT * FROM TEAM";

	$result = $conn->query($sql);

  $cntr = 0;
	while ($val = $result->fetch_assoc()) {
    if ($cntr % 4 == 0) {
      echo "<div class = \"row\">";
    }
		echo " <div class=\"column\">
    				<span class=\"container\">
      				<a href = \"../Select/select_team.php?team='$val[teamName]'\">
      					<img src=\"../TeamLogos/$val[logofilepath]\" alt=\"Avatar\" class=\"image\">
      	<div class=\"overlay\">$val[city] $val[teamName]</div>
      </a>
    </span>
  </div>";
    if (($cntr + 1) % 4 === 0 && $cntr !== 0) {
      echo "</div>";
    }
		$cntr++;
	}

} else {
	//echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";s

}
?>

