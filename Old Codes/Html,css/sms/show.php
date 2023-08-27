<?php session_start ();
if(($_SESSION["login"]!=7))
{
	header("location:/libms/a_auth.php");
}
?>
<?php
$con=mysqli_connect("localhost","root","","school");
$rollno=$_GET['rollno'];
$sql = "SELECT * FROM student WHERE rollno = '$rollno'";
$rs = mysqli_query($con, $sql);
$num =mysqli_num_rows($rs);
if($num==0)
{
    echo '<p style = "text-align: center ;margin-top:50px;
    Font-size : 40px;color:red; margin-bottom:30px;"> this roll number does not exist </p>';
    exit();
}
$con->close();
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Student details</title>
    <style>
table, th, td {
  border:1px solid black;
}
    </style>
</head>
 
<body>
    <section>
        <h1 style = "text-align: center ;
Font-size : 100px;color:red; margin-bottom:80px;">Student info:</h1>
        <table style="width:100%">
            <tr>
                <th style='font-size:50px;color:red;'>Roll number</th>
                <th style='font-size:50px;color:red;'>Name</th>
                <th style='font-size:50px;color:red;'>Age</th>
                <th style='font-size:50px;color:red;'>Dept</th>
                <th style='font-size:50px;color:red;'>Semester</th>
            </tr>
            <?php
                while($rows=$rs->fetch_assoc())
                {
            ?>
            <tr>
                <td style='font-size:30px;color:red;'><?php echo $rows['rollno'];?></td>
                <td style='font-size:30px;color:red;'><?php echo $rows['name'];?></td>
                <td style='font-size:30px;color:red;'><?php echo $rows['age'];?></td>
                <td style='font-size:30px;color:red;'><?php echo $rows['dept'];?></td>
                <td style='font-size:30px;color:red;'><?php echo $rows['semester'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
    <br><br>
    <?php echo '<a href="view.php" style="
  color: red;
  margin-top:50px;
  position:relative;
  font-size: 40px;
  text-align: center;
  border-radius: 22px;
  width: 25%;
  left: 35%;
  padding: 15px 25px;
  text-decoration: none;
  display: inline-block;">View student</a>';?>
    <br><br>
<?php echo '<a href="student.php" style="
  color: red;
  margin-top:50px;
  position:relative;
  font-size: 40px;
  text-align: center;
  border-radius: 22px;
  width: 25%;
  left: 35%;
  padding: 15px 25px;
  text-decoration: none;
  display: inline-block;">Go to Student Database homepage</a>';?>
<br><br>
<?php echo '<a href="/libms/home.php" style="
  color: red;
  margin-top:50px;
  position:relative;
  font-size: 40px;
  text-align: center;
  border-radius: 22px;
  width: 25%;
  left: 35%;
  padding: 15px 25px;
  text-decoration: none;
  display: inline-block;">Go to Library Database homepage</a>';?>
</body>
<style>
a:hover {
  background-color: black;
}
</style>
</html>