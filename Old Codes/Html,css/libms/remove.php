<style>
a:hover {
  background-color: red;
}
</style>
<?php session_start ();
if(($_SESSION["login"]!=7))
{
	header("location:/libms/a_auth.php");
}
?>
<?php
$con=mysqli_connect("localhost","root","","school");
$rollno=$_GET['rollno'];
$sql = "select * from student where rollno = '$rollno'";
$rs = mysqli_query($con, $sql);
$num =mysqli_num_rows($rs);
if($num)
{
    $sql = "DELETE FROM student WHERE rollno = '$rollno'";
    $rs = mysqli_query($con, $sql);
    echo ' <p style = "text-align: center ;margin-top:50px;
    Font-size : 40px;color:red; margin-bottom:30px;">roll number deleted</p>';
}
else
{
    echo' <p style = "text-align: center ;margin-top:50px;
    Font-size : 40px;color:red; margin-bottom:30px;">roll number does not exist </p>';
}
?>
<?php echo '<a href="student.php" style="
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
  display: inline-block;">Go to homepage</a>';?>
<body style="background-image: url('/libms/p.jpg');
background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;"> </body>