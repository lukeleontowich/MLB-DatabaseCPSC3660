<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../TeamLogos/MLB.png">
    <title>leagues</title>
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
  width: 80%;
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

<body style="background-color: #F1F4FA;">
<?php
  include "../Utility/NavigationBar.php";



	echo " <div class=\"column\">
    		<span class=\"container\">
      		<a href = \"../Select/select_leagueA.php?league='American'&filePath='American.png'\">
      		<img src=\"../TeamLogos/American.png\" alt=\"Avatar\" class=\"image\">
      	<div class=\"overlay\">American League</div>
      </a>
    </span>
  </div>";

	echo " <div class=\"column\">
    		<span class=\"container\">
      		<a href = \"../Select/select_leagueN.php?league='National'&filePath='National.png'\">
      		<img src=\"../TeamLogos/National.png\" alt=\"Avatar\" class=\"image\">
      	<div class=\"overlay\">National League</div>
      </a>
    </span>
  </div>";
?>


