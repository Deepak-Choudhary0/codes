<?php session_start ();
if(($_SESSION["login"]!=7))
{
	header("location:a_auth.php");
}
?>
<?php
$con=mysqli_connect("localhost","root","","school");
$sql = "SELECT * FROM current_unreturned_book ";
$rs = $con->query($sql);
$con->close();
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Unreturned Book History</title>
    <style>
table, th, td {
  border:1px solid black;
}
    </style>
</head>
 
<body>
    <section>
        <h1  style = "text-align: center ;
Font-size : 100px;color:red; margin-bottom:80px;">Unreturned Book History</h1>
        <table style="width:100%">
            <tr>
                <th style='font-size:50px;color:red;'>BOOK ID</th>
                <th style='font-size:50px;color:red;'>ROLL NUMBER</th>
                <th style='font-size:50px;color:red;'>DATE OF BORROW</th>
                <th style='font-size:50px;color:red;'>DUE DATE</th>
            </tr>
            <?php
                while($rows=$rs->fetch_assoc())
                {
            ?>
            <tr>
                <td style='font-size:30px;color:red;'><?php echo $rows['id'];?></td>
                <td style='font-size:30px;color:red;'><?php echo $rows['rollno'];?></td>
                <td style='font-size:30px;color:red;'><?php echo $rows['borrowed_date'];?></td>
                <td style='font-size:30px;color:red;'><?php echo $rows['due_date'];?></td>
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