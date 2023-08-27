<style>
a:hover {
  background-color: red;
}
</style>
<?php
session_start ();
if(($_SESSION["login"]!=5))
{
header("location:u_auth.php");
}
$con = mysqli_connect('localhost', 'root', '','school');
$id=$_GET['id'];
$rollno=$_SESSION['rollno'];
$sql = "select * from current_unreturned_book where rollno = '$rollno' && id='$id'";
$rs = mysqli_query($con, $sql);
$num =mysqli_num_rows($rs);
if($num==0)
{
    echo '<p style = "text-align: center ;margin-top:50px;
    Font-size : 40px;color:red; margin-bottom:30px;"> $rollno can not return this book id =$id because either roll number is wrong or book id  else $rollno have not rented book</p> ';
}
else
{
    $sqlk = "insert into history select * from current_unreturned_book where rollno='$rollno' && id='$id' ";
    $rsk = mysqli_query($con, $sqlk);
    $sql = "delete from current_unreturned_book where id = '$id' && rollno = '$rollno' ";
    $rs = mysqli_query($con, $sql);
    echo '<p style = "text-align: center ;margin-top:50px;
    Font-size : 40px;color:red; margin-bottom:30px;"> $rollno returned this book id = $id</p>';
    $sqlitti="update book set quantity=quantity+1 where id = '$id'";
    $rs1 = mysqli_query($con, $sqlitti);
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
  display: inline-block;">Go to library homepage</a>';?>
  <body style="background-image: url('p.jpg');
background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;"> </body>