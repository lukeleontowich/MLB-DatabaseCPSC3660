<html>
<head><title>MLB Statistical Database - Add Team</title></head>
<body>
<h2>Add a New Team</h2>
<form action="insertteam.php" method=post>
City: <input type=text name="city" size=32><br><br>
Team Name: <input type=text name="teamName" size=32><br><br>
Manager: <input type=text name="manager" size=32><br><br>
<label for="myfile">Team Logo:</label>
<input type="file" id="myfile" name="logofilepath"><br><br>
<?php

if(isset($_COOKIE["username"]))
{
	echo "<form action=\"insertteam.php\" method=post>";
   $username = $_COOKIE["username"];
   $password = $_COOKIE["password"];	

	

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
   echo $_POST['my_html_input_tag'];
   $sql = "select leagueName from LEAGUE"; 
   $result = $conn->query($sql);
   if($result->num_rows != 0)
   {
      echo "League Name: <select name=\"leagueName\">";
      
      while($val = $result->fetch_assoc())
      {
	 			echo "<option value='$val[leagueName]'>$val[leagueName]</option>"; 
      }
      echo "</select><br><br>"; 
   }
   else
   {
      echo "<p>You need to enter a League name. </p>"; 
   }
} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>"; 
   
}
?>

<input type=submit name="submit" value="Insert"></form> 
</body>
</html>
