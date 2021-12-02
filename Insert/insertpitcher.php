<?php

if (isset($_COOKIE["username"])) { 
   $username = $_COOKIE["username"];
   $password = $_COOKIE["password"];

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username); 
   if($mysqli->connect_errno) {
   		echo "Connection Issue!";
   		exit; 
   }

   $sql = "INSERT into PITCHER (lastName, starterCloser) values    
   ($_POST[lastName]','$_POST[starterCloser]')";

   $sql = "insert into PLAYER (firstName, lastName, number, salary, DL, GP) values    
   ('$_POST[firstName]','$_POST[lastName]','$_POST[number]','$_POST[salary]', '$_POST[DL]', '$_POST[GP]')";
   $sql2 = "insert into PITCHER (lastName, starterCloser, wins, losses, runsAllowed, ERA, SO) values
   ('$_POST[lastName]', '$_POST[starterCloser]', '$_POST[wins]', 
   '$_POST[losses]', '$_POST[runsAllowed]', '$_POST[ERA]', '$_POST[SO]')";
   $sql3 = "insert into PLAYSFOR (lastName, teamName) values ('$_POST[lastName]','$_POST[teamName]')";

   if($conn->query($sql)) {
      if($conn->query($sql2)) {
         if($conn->query($sql3)) {
            echo "<h3> Pitcher Added </h3>";
	 }
      }
   } else {
      $err = $conn->errno; 
      if($err == 1062) {
	 echo "<p>Pitcher name: $_POST[lastName] already exists</p>"; 
      } else {
	 echo "<p>error number $err</p>"; 
      }
   }
   echo "<a href=\"../Pages/pitchers.php\">Return</a> to Pitchers."; 
} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>"; 
}

?>
