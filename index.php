<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="TeamLogos/MLB.png">
    <title>Login</title>
</head>

<body style="background-color: #F1F4FA;">
<?php
  include "Utility/NavBarForMain.php";
?>
<?php
    echo "<p style='color: #223; font-size: 50px; text-align: center;'>MLB Statistical Database</p>";
?>
<form action="setpass.php" method=post>
<p style = 'font-size: 30px; text-align: center'>
Username: <input type=text name="username" size=15><br><br>
Password: <input type=password name="password" size=15><br><br>
<input type=submit value="Login">
</p>
</form>
</body>
</html>
