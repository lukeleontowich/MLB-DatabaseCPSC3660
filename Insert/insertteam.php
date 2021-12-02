<?php

if (isset($_COOKIE["username"])) { 
   $username = $_COOKIE["username"];
   $password = $_COOKIE["password"];

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username); 
   if($mysqli->connect_errno) {
   		echo "Connection Issue!";
   		exit; 
   }
   $sql = "insert into TEAM (city, teamName, leagueName, manager, logofilepath) values    
   ('$_POST[city]','$_POST[teamName]','$_POST[leagueName]','$_POST[manager]', '$_POST[logofilepath]')"; 
   if($conn->query($sql)) {
	echo "<h3> $_POST[city] $_POST[teamName] Added </h3>";
   }
   else {
      $err = $conn->errno; 
      if($err == 1062) {
	 echo "<p>Team $_POST[teamName] already exists</p>"; 
      } else {
	 echo "<p>error number $err</p>"; 
      }
   }
   echo "<a href=\"../Pages/teams.php\">Return</a> to Teams."; 
} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>"; 
}

?>
