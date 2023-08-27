<style>
a:hover {
  background-color: red;
}
</style>
<body style="background-image: url('/libms/p.jpg');
background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;"></body>
<?php session_start ();
if(($_SESSION["login"]!=7))
{
	header("location:/libms/a_auth.php");
}
?>
<h1  style = "text-align: center ;
Font-size : 100px;color:red; margin-bottom:80px;">Student Database management system</h1>
<br><br>
    <?php echo '<a href="add.php" style="
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
  display: inline-block;" >For Adding student name</a>';?>
    <br><br>
    <?php echo '<a href="del.php" style="
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
  display: inline-block;">For Deleting student name</a>';?>
    <br><br>
    <?php echo '<a href="view.php" style="
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
  display: inline-block;">For viewing student name</a>';?>
    <br><br>
    <?php echo '<a href="whole.php" style="
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
  display: inline-block;" >View All Student Info</a>';?>