<html>
<head><title>MLB Statistical Database</title></head>
<body>


<?php

if(isset($_COOKIE["username"])) {

   echo "<form action=\"deletepitcher.php\" method=post>";

   $username = $_COOKIE["username"];
   $password = $_COOKIE["password"];	

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
   
   $sql = "select lastName from PITCHER"; 
   $result = $conn->query($sql);
   if($result->num_rows != 0)
   {
      echo "Player Last Name: <select name=\"lastName\">";
      
      while($val = $result->fetch_assoc())
      {
	 echo "<option value='$val[lastName]'>$val[lastName]</option>"; 
	 
      }
      echo "</select>"; 
      echo "<input type=submit name=\"submit\" value=\"Delete\">"; 
   }
   else
   {
      echo "<p>You need to enter a players last name. </p>"; 
   }

   echo "</form>";
} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>"; 
   
}
?>


 
</body>
</html>
