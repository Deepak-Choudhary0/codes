<style>
a:hover {
  background-color: red;
}
</style>
<?php
 session_start ();
if(($_SESSION["login"]!=7))
{
	header("location:a_auth.php");
}
$con = mysqli_connect('localhost', 'root', '','school');
$id=$_GET['id'];
$tittle=$_GET['tittle'];
$author=$_GET['author'];
$language = $_GET['language'];
$page = $_GET['page'];
$publisher = $_GET['publisher'];
$quantity = $_GET['quantity'];
$sql = "select * from book where id = '$id'";
$rs = mysqli_query($con, $sql);
$num =mysqli_num_rows($rs);
if($num)
{
    echo '<p style = "text-align: center ;margin-top:50px;
    Font-size : 40px;color:red; margin-bottom:30px;"> this book id already exist</p>';
}
else
{
    $sql = "INSERT INTO book VALUES ('$id', '$tittle', '$author', '$language', '$page','$publisher','$quantity')";
    $rs = mysqli_query($con, $sql);
    echo '<p   style = "text-align: center ;margin-top:50px;
    Font-size : 40px;color:red; margin-bottom:30px;"> book inserted </p>';
}
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
<?php echo '<a href="add_forum.php"  style="
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
  display: inline-block;">To add a new book</a>';?>

  <body style="background-image: url('p.jpg');
background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;"> </body>