<style>
a:hover {
  background-color: red;
}
</style>
<?php session_start ();
if(($_SESSION["login"]!=5))
{
	header("location:u_auth.php");
}
$con = mysqli_connect('localhost', 'root', '','school');
$id=$_GET['id'];
$rollno=$_SESSION['rollno'];
$borrowed_date=$_GET['today'];
$sql = "select * from student where rollno = '$rollno'";
$rs = mysqli_query($con, $sql);
$num =mysqli_num_rows($rs);
if($num==0)
{
    echo '<p style = "text-align: center ;margin-top:50px;
    Font-size : 40px;color:red; margin-bottom:30px;"> $rollno does not exist</p>';
}
else
{
    $sql = "select * from book where id = '$id'";
    $rs = mysqli_query($con, $sql);
    $num =mysqli_num_rows($rs);
    if($num==0)
{
    echo '<p style = "text-align: center ;margin-top:50px;
    Font-size : 40px;color:red; margin-bottom:30px;">this book $id does not exist</p>';
}
else
{
    $sql = "select * from current_unreturned_book where rollno = '$rollno' && id = '$id' ";
    $rs = mysqli_query($con, $sql);
    $num =mysqli_num_rows($rs);
    if($num==1)
    {
        echo'<p style = "text-align: center ;margin-top:50px;
        Font-size : 40px;color:red; margin-bottom:30px;"> $rollno cannot take this book is = $id again</p>';
    }
    else 
    {
        $sqlo = "select * from book where quantity like '0' && id='$id'";
        $rso = mysqli_query($con, $sqlo);
        $num =mysqli_num_rows($rso);
        if($num==1)
        {
            echo'<p style = "text-align: center ;margin-top:50px;
            Font-size : 40px;color:red; margin-bottom:30px;"> Since quantity of book is zero, $rollno cannot take this book</p>';
        }
        else{
    $sql = "INSERT INTO current_unreturned_book (id,rollno,borrowed_date) VALUES ('$id', '$rollno', '$borrowed_date')";
    $rs = mysqli_query($con, $sql);
    echo '<p style = "text-align: center ;margin-top:50px;
    Font-size : 40px;color:red; margin-bottom:30px;"> this book $id rented</p>';
    $sqlit="update current_unreturned_book set due_date=date_add(borrowed_date,interval 15 day)";
    $rs1 = mysqli_query($con, $sqlit);
    $sqlitti="update book set quantity=quantity-1 where id = '$id'";
    $rs1 = mysqli_query($con, $sqlitti);
}
}}}
?>
<?php echo '<a href="home.php" style="
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