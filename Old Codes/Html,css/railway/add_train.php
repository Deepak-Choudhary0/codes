<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black ;
}
tr:hover {background-color: #D6EEEE;}
</style>
    <title>Add Train Information</title>
</head>
<body>
    <?php 
    session_start();
    error_reporting(0);
    ini_set('display_errors', 0);
    ?>
<center>
<form action="added_train.php";>
    <h1>Enter Train Information To Add In Database</h1>
    <br>
    <table width=60%>
    <tr>
        <th>Data</td>
        <th>Entry</td>
    </tr>
    <tr>
        <td>Train Name:</td>
        <td width =70%><input name='n' style="text-align:center;color:lightgreen;font-size:25px;"></td>
    </tr>
    <tr>
        <td>Price per 10 km:</td>
        <td><input name='p' style="text-align:center;color:lightgreen;font-size:25px;"></td>
    </tr>
</table>
<br><br><br>
<input type="submit" style="text-align:center;color:brown;font-size:25px"; >
</form>
<br><br>
<?php
$uname=$_SESSION['uname'];
$pass=$_SESSION['pass'];
echo "<a href='index.php' style='text-decoration: none;'><button style='color:red;padding:2px'>Go to Home Page</button></a><br><br>
<a href='./admin.php?uname=$uname&pass=$pass' style='text-decoration: none;'><button>Admin</button></a>";
?>
</center>
</body>
</html>