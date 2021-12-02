<html>
<head><title>MLB Statistical Database - Add Pitcher</title></head>
<body>
<h2>Add a New Batter</h2>
<form action="insertbatter.php" method=post>
First Name: <input type=text name="firstName" size=20><br><br>
Last Name: <input type=text name="lastName" size=20><br><br>

Number: <input type=text name="number" size=3><br><br>
Salary: <input type=text name="salary" size=9><br><br>
DL: <input type=checkbox name="DL" size=2><br><br>
GP: <input type=text name="GP" size=4><br><br>
<?php

if(isset($_COOKIE["username"]))
{

echo "<form action=\"insertbatter.php\" method=post>";

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
      echo "<p>You need to enter a players last name. </p>"; 
   }
} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>"; 
   
}
?>
<br><br>
<label for="position">Position:</label>
  <select name="position" id="position">
    <option value="1st Base">1st Base</option>
    <option value="2nd Base">2nd Base</option>
    <option value="3rd Base">3rd Base</option>
    <option value="Shortstop">Shortstop</option>
    <option value="Backcatcher">Backcatcher</option>
    <option value="Left Field">Left Field</option>
    <option value="Right Field">Right Field</option>
    <option value="Center Field">Center Field</option>
    </select>
<br><br>
At Bats: <input type=text name="AB" size=4><br><br>
Hits: <input type=text name="H" size=4><br><br>
Walks: <input type=text name="BB" size=4><br><br>
Hit by Pitch: <input type=text name="HBP" size=4><br><br>
Runs Batted In: <input type=text name="RBI" size=4><br><br>
Home Runs: <input type=text name="HR" size=4><br><br>
Stolen Bases: <input type=text name="SB" size=4><br><br>
<input type=submit name="submit" value="Insert"></form> 
</body>
</html>

