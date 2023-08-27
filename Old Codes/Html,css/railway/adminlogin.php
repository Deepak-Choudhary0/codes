login asked from admin
<!DOCTYPE html>
<html>
<head>
    <style>
    body{
        background-image: url('index_rail.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed; 
        background-size: 100% 100%;
        padding: 10px;
    }
    table, th, td {
        border: 1px solid black ;
        text-align:center;
    }
    tr:hover {
        background-color: #D6EEEE;
    }
    form{
        height: 250px;
        width: 620px;
        background-color: white;
    }
    h1{
        font-size: 250%;
    }
    </style>
    <title>Add Student Information</title>
</head>
<body>
<center>
<?php
        error_reporting(0);
        ini_set('display_errors', 0);
        ?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<form action="admin.php";>
    <h1>Admin Login</h1>
    <table width=60%>
    <tr>
        <th>Enter</td>
        <th>Details</td>
    </tr>
    <tr>
        <td>User Name:</td>
        <td width =70%><input name='uname' style="text-align:center;color:lightgreen;font-size:25px;"></td>
    </tr>
    <tr>
        <td>Password:</td>
        <td><input type='password' name='pass' style="text-align:center;color:lightgreen;font-size:25px;"></td>
    </tr>
    </table>
    <br>
    <input type="submit" style="text-align:center;color:brown;font-size:25px;" value="Submit" >
    <br><br>
</form>
<br><br>
<a href="index.php" style="text-decoration: none;"><button style="color:red;padding:2px;text-decoration: none;text-align:center;color:red;font-size:25px"><b>Go to Home Page</b></button></a>
</body>
</html>