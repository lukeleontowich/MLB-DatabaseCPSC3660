<?php

if (isset($_COOKIE["username"])) { 
   $username = $_COOKIE["username"];
   $password = $_COOKIE["password"];

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username); 
   if($mysqli->connect_errno) {
   		echo "Connection Issue!";
   		exit; 
   }
   $sql = "INSERT into PLAYER (firstName, lastName, number, salary) values    
   ('$_POST[firstName]','$_POST[lastName]','$_POST[number]','$_POST[salary]')"; 
   if($conn->query($sql)) {
	echo "<h3> Player Added </h3>";
   }
   else {
      $err = $conn->errno; 
      if($err == 1062) {
	 echo "<p>Player name: $_POST[lastName] already exists</p>"; 
      } else {
	 echo "<p>error number $err</p>"; 
      }
   }
   echo "<a href=\"../main.php\">Return</a> to Home Page."; 
} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"../index.php\">Login First</a></p>"; 
}

?>
