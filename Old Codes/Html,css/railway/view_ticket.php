<!DOCTYPE html>
<html>
<head>
    <title>View Ticket Information</title>
</head>
<body>
<center>
<form action="viewed_ticket.php";>  
    <h1>Enter Ticket ID to View</h1>
    <p ><br>
    Ticket ID : <input name="no"><br><br>
    <input type="submit" style="text-align:center;color:brown;font-size:25px"; >
    </p>
</form>
<?php
session_start();
error_reporting(0);
ini_set('display_errors', 0);
$uname=$_SESSION['uname'];
$pass=$_SESSION['pass'];
echo "<a href='index.php' style='text-decoration: none;'><button style='color:red;padding:2px'>Go to Home Page</button></a><br><br>";
?>
</center>
</body>
</html>