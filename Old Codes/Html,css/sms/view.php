<?php session_start ();
if(($_SESSION["login"]!=7))
{
	header("location:/libms/a_auth.php");
}
?>
<html>
<head>
    <h1  style = "text-align: center ;
Font-size : 100px;color:red; margin-bottom:80px;"> view Student's name </h1>
</head>
<body  style="background-image: url('/libms/p.jpg');
background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;">
<form action ="show.php" style='background-color: red;
  color: white;
  position:relative;
  font-size: 40px;
  text-align: center;
  border-radius: 22px;
  width: 25%;
  left: 35%;
  padding: 15px 25px;
  display: inline-block;' >
roll number : <input name ='rollno' style= ' font-size: 40px;'>
<br>
<input type = "submit" value = "submit"  style= 'font-size: 40px;color:white;background-color: brown;'>
</form>
</body>
</html>