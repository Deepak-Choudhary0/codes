<body style="background-image: url('/libms/p.jpg');
background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;"> </body>
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
$con = mysqli_connect('localhost', 'root', '','school');
$rollno=$_GET['rollno'];
$name=$_GET['name'];
$age=$_GET['age'];
$dept=$_GET['dept'];
$semester = $_GET['semester'];
$sql = "select * from student where rollno = '$rollno'";
$rs = mysqli_query($con, $sql);
$num =mysqli_num_rows($rs);
if($num)
{
    echo '<p style = "text-align: center ;margin-top:50px;
    Font-size : 40px;color:red; margin-bottom:30px;"> roll number already exist </p>';
}
else
{
    $sql = "INSERT INTO student (rollno,name,age,dept,semester) VALUES ('$rollno', '$name', '$age', '$dept', '$semester')";
    $rs = mysqli_query($con, $sql);
    echo ' <p   style = "text-align: center ;margin-top:50px;
    Font-size : 40px;color:red; margin-bottom:30px;">roll number inserted </p>';
}
?>
<br><br>
<?php echo '<a href="add.php" style="
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
  display: inline-block;">For adding student</a>';?>
<br><br>
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
  display: inline-block;">Go to student database homepage</a>';?>
<br><br>
<?php echo '<a href="/libms/home.php" style="
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
  display: inline-block;">Go to Library Homepage</a>';?>
  