<html>
<head><title>MLB Statistical Database - Add Pitcher</title></head>
<body>
<h2>Add New Pitcher</h2>
<form action="insertpitcher.php" method=post>
First Name: <input type=text name="firstName" size=20><br><br>
Last Name: <input type=text name="lastName" size=20><br><br>
Number: <input type=text name="number" size=3><br><br>
Salary: <input type=text name="salary" size=9><br><br>

<?php

if(isset($_COOKIE["username"]))
{

echo "<form action=\"insertpitcher.php\" method=post>";

   $username = $_COOKIE["username"];
   $password = $_COOKIE["password"];	



   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
    echo $_POST['my_html_input_tag'];
   $sql = "select teamName from TEAM"; 
   $result = $conn->query($sql);
   if($result->num_rows != 0)
   {
      echo "Team Name: <select name=\"teamName\">";
      
      while($val = $result->fetch_assoc())
      {
	 echo "<option value='$val[teamName]'>$val[teamName]</option>"; 
	 
      }
      echo "</select>"; 
   }
   else
   {
      echo "<p>You need to enter a Team name. </p>"; 
   }
} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>"; 
   
}
?>
<br><br>	
DL: <input type=checkbox name="DL" size=2><br><br>
GP: <input type=text name="GP" size=4><br><br>
StarterCloser: <input type=radio id="starter" name="starterCloser" value="Starter">
  <label for="starter">Starter</label>
  <input type=radio id="closer" name="starterCloser" value="Closer">
  <label for="closer">Closer</label><br><br>
Wins: <input type=text name="wins" size=3><br><br>
Losses: <input type=text name="losses" size=3><br><br>
RA: <input type=text name="runsAllowed" size=4><br><br>
ERA: <input type=text name="ERA" size=4><br><br>
SO: <input type=text name="SO" size=4><br><br>
<input type=submit name="submit" value="Insert"></form> 
</body>
</html>
