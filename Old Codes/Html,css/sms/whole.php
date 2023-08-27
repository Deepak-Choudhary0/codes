<?php
$con=mysqli_connect("localhost","root","","school");
$sql = "SELECT * FROM student ";
$rs = $con->query($sql);
$con->close();
?>
<?php session_start ();
if(($_SESSION["login"]!=7))
{
	header("location:/libms/a_auth.php");
}
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>STUDENT DATABASE</title>
    <style>
table, th, td {
  border:1px solid black;
}
    </style>
</head>
 
<body>
    <section>
        <h1 style = "text-align: center ;
Font-size : 100px;color:red; margin-bottom:80px;">Student Database</h1>
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
<?php echo '<a href="student.php"  style="
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
  display: inline-block;">Go to Student database homepage</a>';?>
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
  display: inline-block;">Go to library database homepage</a>';?>
</body>
<style>
a:hover {
  background-color: black;
}
</style>
</html>