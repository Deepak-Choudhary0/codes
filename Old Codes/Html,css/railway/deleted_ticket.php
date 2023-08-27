<!DOCTYPE html>
<html>
<head>
    <title>Deleted Station Information</title>
</head>
<body>
<center>
<h1>Ticket Information Deletion Status</h1> <br><br>
<?php
error_reporting(0);
ini_set('display_errors', 0);
$servername = "localhost";
$username = "root";
$password ="";
$database ="railways";
$input= $_GET["id"];
$conn = mysqli_connect($servername, $username, $password, $database);
$sql="delete from passenger where `id`='$input';";
$res=mysqli_query($conn,$sql);
if ($res==1){
    echo "Ticket of ID no $input Cancelled<br><br> Your Money Will Be refuned Shortly;";
}
session_start();
$uname=$_SESSION['uname'];
$pass=$_SESSION['pass'];
echo "<a href='index.php' style='text-decoration: none;'><button style='color:red;padding:2px'>Go to Home Page</button></a><br><br>";
?>
</center>
</body>
</html>