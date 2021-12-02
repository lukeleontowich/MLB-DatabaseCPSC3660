<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<style>
.topnav {
  background-color: #223;
  overflow: hidden;
}
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a:hover {
  background-color: red;
  color: white;
}
.topnav-right {
  float: right;
}
.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<?php
if (isset($_COOKIE["username"])) { 
	$username = $_COOKIE["username"];
}
?>
<body style="background-color: #F1F4FA;">
<div class="topnav">
    <a href="../main.php">Home</a>
    <div class="dropdown">
        <button class="dropbtn">Players
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
        <a href="../Pages/pitchers.php">Pitchers</a>
        <a href="../Pages/batters.php">Batters</a>
        </div>
    </div>
    <a href="../Pages/teams.php">Teams</a>
    <a href="../Pages/leagues.php">Leagues</a>
    <div class="topnav-right">
        <a href="../logout.php">Logout</a></p>
    </div>
</div>
</html>
