<!DOCTYPE html>
<html>
<head>
    <title>Deleted Station Information</title>
</head>
<body>
<center>
<h1>Station Information Deletion Status</h1> <br><br>
<?php
error_reporting(0);
ini_set('display_errors', 0);
$servername = "localhost";
$username = "root";
$password ="";
$database ="railways";
$input= $_GET["no"];
$conn = mysqli_connect($servername, $username, $password, $database);
$flag=0;
$sql="SELECT * FROM `station`;";
$result = mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($result)){
    if($input==$row[0]){
        $flag=1;
        echo "$row[0] Found...";
    }}
if($flag==1){
    $sql="delete from station where `station_id`='$input';";
    $res=mysqli_query($conn,$sql);
    if ($res==1){
        echo "Station ID $input Deleted<br><br>";
    }
}
else{
    echo "<h1>Station ID $input Not Found in Railway Database...</h1> <br><br> <br><br>";
}
session_start();
$uname=$_SESSION['uname'];
$pass=$_SESSION['pass'];
echo "<a href='index.php' style='text-decoration: none;'><button style='color:red;padding:2px'>Go to Home Page</button></a><br><br>
<a href='./admin.php?uname=$uname&pass=$pass' style='text-decoration: none;'><button>Admin</button></a>";
?>
</center>
</body>
</html>