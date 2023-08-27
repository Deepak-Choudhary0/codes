<style>
a:hover {
  background-color: red;
}
</style>
<?php
session_start ();
$con = mysqli_connect('localhost', 'root', '','school');
$rollno=$_GET['rollno'];
$pass=$_GET['pass'];
$sql = "select * from user where rollno='$rollno' && pass='$pass'";
$rs = mysqli_query($con, $sql);
$num =mysqli_num_rows($rs);
if($num==0)
{
    echo " <p style = 'color:red;font-size: 40px;text-align: center'>Given information is not correct </p>";
}
else
{
    $_SESSION["login"]="5";
    $_SESSION['rollno']=$_GET['rollno'];
    echo '<a href="user.php"  style="
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
    display: inline-block;">GO to User Section</a>';
}
?>
<br><br>
<?php echo '<a href="home.php"  style="
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
    display: inline-block;">Go to library homepage</a>';?>
    <body style="background-image: url('p.jpg');
background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;"></body>