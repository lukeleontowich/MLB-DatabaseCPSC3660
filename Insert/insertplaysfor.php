<?php

if (isset($_COOKIE["username"])) { 
   $username = $_COOKIE["username"];
   $password = $_COOKIE["password"];

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username); 
   if($mysqli->connect_errno) {
   		echo "Connection Issue!";
   		exit; 
   }
   $sql = "INSERT into PLAYSFOR (lastName, teamName) values    
   ('$_POST[lastName]','$_POST[teamName]')"; 
   if($conn->query($sql)) {
	echo "<h3> Plays For Added </h3>";
   }
   else {
      $err = $conn->errno; 
      if($err == 1062) {
	 echo "<p>Plays For already Exists</p>"; 
      } else {
	 echo "<p>error number $err</p>"; 
      }
   }
   echo "<a href=\"main.php\">Return</a> to Home Page."; 
} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"../index.php\">Login First</a></p>"; 
}

?>
