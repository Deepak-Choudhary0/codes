<?php
 session_start ();
if(($_SESSION["login"]!=7))
{
	header("location:a_auth.php");
}
$con=mysqli_connect("localhost","root","","school");
$sql = "SELECT * FROM book ";
$rs = $con->query($sql);
$con->close();
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>MOHENJO DARO LIBRARY</title>
    <style>
table, th, td {
  border:1px solid black;
}
    </style>
</head>
 
<body>
    <section>
        <h1  style = "text-align: center ;
Font-size : 100px;color:red; margin-bottom:80px;">MOHENJO DARO LIBRARY</h1>
        <table style="width:100%">
            <tr>
                <th style='font-size:50px;color:red;'>BOOK ID</th>
                <th style='font-size:50px;color:red;'>TITLE</th>
                <th style='font-size:50px;color:red;'>AUTHOR</th>
                <th style='font-size:50px;color:red;'>LANGUAGE</th>
                <th style='font-size:50px;color:red;'>PAGE</th>
                <th style='font-size:50px;color:red;'>PUBLISHER</th>
                <th style='font-size:50px;color:red;'>QUANTITY</th>
            </tr>
            <?php
                while($rows=$rs->fetch_assoc())
                {
            ?>
            <tr>
                <td style='font-size:30px;color:red;'><?php echo $rows['id'];?></td>
                <td style='font-size:30px;color:red;'><?php echo $rows['tittle'];?></td>
                <td style='font-size:30px;color:red;'><?php echo $rows['author'];?></td>
                <td style='font-size:30px;color:red;'><?php echo $rows['language'];?></td>
                <td style='font-size:30px;color:red;'><?php echo $rows['page'];?></td>
                <td style='font-size:30px;color:red;'><?php echo $rows['publisher'];?></td>
                <td style='font-size:30px;color:red;'><?php echo $rows['quantity'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
<?php echo '<a href="home.php"  style="
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
  display: inline-block;">Go to library homepage</a>';?>
</body>
<style>
a:hover {
  background-color: black;
}
</style>
</html>