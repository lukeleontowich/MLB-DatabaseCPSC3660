<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../TeamLogos/MLB.png">
    <title>batters</title>
<style>
#myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

#myTable {
  border-collapse: collapse; /* Collapse borders */
  width: 100%; /* Full-width */
  border: 1px solid #ddd; /* Add a grey border */
  font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
  text-align: left; /* Left-align text */
  padding: 12px; /* Add padding */
}

#myTable tr {
  /* Add a bottom border to all table rows */
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  /* Add a grey background color to the table header and on hover */
  background-color: #f1f1f1;
}
</style>
</head>

<body style="background-color: #F1F4FA;">
<?php
  include "../Utility/NavigationBar.php";
?>
<br>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for batters..">
<button><a href="../Insert/insert_batter.php">Add Batter</a></button>
<button><a href="../Update/update_batter.php">Update Batter</a></button>
<button><a href="../Delete/delete_batter.php">Delete Batter</a></button>
<br><br>

<table id="myTable">
  <tr class="header">
    <th style="width:5%;">Number</th>
    <th style="width:10%;">First Name</th>
    <th style="width:10%;">Last Name</th>
    <th style="width:5%;">Team</th>
    <th style="width:5%;">Salary</th>
    <th style="width:5%;">GP</th>
    <th style="width:5%;">DL</th>
    <th style="width:5%;">AB</th>
    <th style="width:5%;">H</th>
    <th style="width:5%;">BB</th>
    <th style="width:5%;">HBP</th>
    <th style="width:5%;">RBI</th>
    <th style="width:5%;">HR</th>
    <th style="width:5%;">SB</th>
    <th style="width:5%;">OBP</th>
    <th style="width:5%;">Position</th>
  </tr>
  <?php
    include "../Select/select_batter.php";
  ?>
</table>

<body>
</body>
</html>
