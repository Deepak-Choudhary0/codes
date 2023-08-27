<?php session_start ();
if(($_SESSION["login"]!=7))
{
	header("location:a_auth.php");
}
?>
<?php
$con=mysqli_connect("localhost","root","","school");
$sql = "SELECT * FROM user ";
$rs = $con->query($sql);
$con->close();
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>LOGIN DATA</title>
    <style>
table, th, td {
  border:1px solid black;
}
    </style>
</head>
 
<body>
    <section>
        <h1 style = "text-align: center ;
Font-size : 100px;color:red; margin-bottom:80px;">USER LOGIN DATA</h1>
        <table style="width:100%">
            <tr>
                <th style='font-size:50px;color:red;'>ROLL NUMBER</th>
                <th style='font-size:50px;color:red;'>PASSWORD</th>
            </tr>
            <?php
                while($rows=$rs->fetch_assoc())
                {
            ?>
            <tr>
                <td style='font-size:30px;color:red;'><?php echo $rows['rollno'];?></td>
                <td style='font-size:30px;color:red;'><?php echo $rows['pass'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
<?php echo '<a href="home.php" style="
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
  display: inline-block;">Go to homepage</a>';?>
</body>
<style>
a:hover {
  background-color: black;
}
</style>
</html>