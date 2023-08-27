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
    ?>
    <h1  style = "text-align: center ;
Font-size : 100px;color:red; margin-bottom:80px;"> Search a book<h1>
<br><br>
<?php echo '<a href="b_forum.php"  style="
    margin-top:250px;
    color: white;
    position:relative;
    font-size: 40px;
    text-align: center;
    border-radius: 22px;
    width: 25%;
    left: 35%;
    padding: 15px 25px;
    text-decoration: none;
    display: inline-block;">Search by BOOK name</a>';?>
<br><br>
<?php echo '<a href="a_forum.php"  style="
    margin-top:250px;
    color: white;
    position:relative;
    font-size: 40px;
    text-align: center;
    border-radius: 22px;
    width: 25%;
    left: 35%;
    padding: 15px 25px;
    text-decoration: none;
    display: inline-block;">Search by AUTHOR name</a>';?>
<body style="background-image: url('p.jpg');
background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;"></body>