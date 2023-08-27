<!DOCTYPE html>
<html>
<head>
    <title>Delete Route Information</title>
</head>
<body>
<center>
<form action="deleted_route.php";>  
    <h1>Enter Route ID to Delete</h1>
    <p ><br>
    Route ID : <input name="no"><br><br>
    <input type="submit" style="text-align:center;color:brown;font-size:25px"; >
    </p>
</form>
<?php
session_start();
error_reporting(0);
ini_set('display_errors', 0);
$uname=$_SESSION['uname'];
$pass=$_SESSION['pass'];
echo "<a href='index.php' style='text-decoration: none;'><button style='color:red;padding:2px'>Go to Home Page</button></a><br><br>
<a href='./admin.php?uname=$uname&pass=$pass' style='text-decoration: none;'><button>Admin</button></a>";
?>
</center>
</body>
</html>