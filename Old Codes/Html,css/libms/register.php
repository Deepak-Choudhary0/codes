<style>
a:hover {
  background-color: red;
}
</style>
<?php
$con = mysqli_connect('localhost', 'root', '','school');
$rollno=$_GET['rollno'];
$pass=$_GET['pass'];
$sql = "select * from user where rollno = '$rollno'";
$rs = mysqli_query($con, $sql);
$num =mysqli_num_rows($rs);
if($num)
{
    echo '<p   style = "text-align: center ;margin-top:50px;
    Font-size : 40px;color:red; margin-bottom:30px;"> this roll number already registered</p>';
}
else
{
    $sqlq = "select * from student where rollno = '$rollno'";
$rsq = mysqli_query($con, $sqlq);
$numq =mysqli_num_rows($rsq);
if($numq==0)
{
    echo '<p   style = "text-align: center ;margin-top:50px;
    Font-size : 40px;color:red; margin-bottom:30px;"> you are not student here you will not be given access</p>';
}
else{
$sql = "INSERT INTO user VALUES ('$rollno', '$pass')";
    $rs = mysqli_query($con, $sql);
    echo '<p   style = "text-align: center ;margin-top:50px;
    Font-size : 40px;color:red; margin-bottom:30px;"> you registered</p>';
}}
?>
<?php echo '<a href="home.php"  style="
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
<br><br>
<?php echo '<a href="u_auth.php"  style="
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
  display: inline-block;">To logIn</a>';?>
  <body style="background-image: url('p.jpg');
background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;"> </body>