<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body style="background-image: url('p.jpg');
background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;">
<?php
session_start ();
$con = mysqli_connect('localhost', 'root', '','school');
$admin_id=$_GET['admin_id'];
$pass=$_GET['pass'];
$sql = "select * from admin where admin_id='$admin_id' && pass='$pass'";
$rs = mysqli_query($con, $sql);
$num =mysqli_num_rows($rs);
if($num==0)
{
    echo " <p style = 'color:red;font-size: 40px;text-align: center'>Given information is not correct</p> ";
}
else
{
    echo '<p> <a href="admin.php"  style="
    margin-top:250px;
    color: white;
    position:relative;
    font-size: 40px;
    text-align: center;
    border-radius: 22px;
    width: 25%;
    left: 35%;
    padding: 15px 25px;
    text-decoration: none;
    display: inline-block;">Go to Admin Section</a><br><br></p>';
    $_SESSION["login"]="7";
}
?>
<?php echo '<p ><a href="home.php" style="
  color: white;
  margin-top:50px;
  position:relative;
  font-size: 40px;
  text-align: center;
  border-radius: 22px;
  width: 25%;
  left: 35%;
  padding: 15px 25px;
  text-decoration: none;
  display: inline-block;" >Go to Library Homepage</a></p>';?>
  <style>
a:hover {
  background-color: red;
}
</style>
</body>
</html>
