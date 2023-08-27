<?php session_start ();
if(($_SESSION["login"]!=7))
{
	header("location:a_auth.php");
}
?>
    <style>
a:hover {
  background-color: red;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body  style="background-image: url('p.jpg');
background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;">
<h1 style = "text-align: center ;
Font-size : 100px;color:red; margin-bottom:40px;"> Admin section </h1>
<br>
<br>
<?php echo '<p><a href="add_forum.php"  style="
  color: white;
  margin-top:10px;
  position:relative;
  font-size: 40px;
  text-align: center;
  border-radius: 22px;
  width: 25%;
  left: 35%;
  padding: 15px 25px;
  text-decoration: none;
  display: inline-block;">For adding new book</a></p>';?>
<br>
<br>
<?php echo '<p><a href="del_forum.php"  style="
  color: white;
  margin-top:10px;
  position:relative;
  font-size: 40px;
  text-align: center;
  border-radius: 22px;
  width: 25%;
  left: 35%;
  padding: 15px 25px;
  text-decoration: none;
  display: inline-block;">For deleting a book</a></p>';?>
<br>
<br>
<?php echo '<p><a href="view_un.php"  style="
  color: white;
  margin-top:10px;
  position:relative;
  font-size: 40px;
  text-align: center;
  border-radius: 22px;
  width: 25%;
  left: 35%;
  padding: 15px 25px;
  text-decoration: none;
  display: inline-block;">view unreturned book history</a></p>';?>
<br>
<br>
<?php echo '<p><a href="/sms/student.php"  style="
  color: white;
  margin-top:10px;
  position:relative;
  font-size: 40px;
  text-align: center;
  border-radius: 22px;
  width: 25%;
  left: 35%;
  padding: 15px 25px;
  text-decoration: none;
  display: inline-block;">student database</a></p>';?>
<br><br>
<?php echo '<p><a href="view_lib.php"  style="
  color: white;
  margin-top:10px;
  position:relative;
  font-size: 40px;
  text-align: center;
  border-radius: 22px;
  width: 25%;
  left: 35%;
  padding: 15px 25px;
  text-decoration: none;
  display: inline-block;">view full library</a></p>';?>
<br><br>
<?php echo '<p><a href="view_login.php"  style="
  color: white;
  margin-top:10px;
  position:relative;
  font-size: 40px;
  text-align: center;
  border-radius: 22px;
  width: 25%;
  left: 35%;
  padding: 15px 25px;
  text-decoration: none;
  display: inline-block;">view all registered user log in</a></p>';?>
  <br><br>
  <?php echo '<p><a href="history.php"  style="
  color: white;
  margin-top:10px;
  position:relative;
  font-size: 40px;
  text-align: center;
  border-radius: 22px;
  width: 25%;
  left: 35%;
  padding: 15px 25px;
  text-decoration: none;
  display: inline-block;">history</a></p>';?>
</body>
</html>