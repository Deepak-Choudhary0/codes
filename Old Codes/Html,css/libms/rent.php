<?php session_start ();
if(($_SESSION["login"]!=5))
{
	header("location:u_auth.php");
}
    ?>
<html>
<head>
    <h1  style = "text-align: center ;
Font-size : 100px;color:red; margin-bottom:80px;"> Rent a book </h1>
</head>
<body  style="background-image: url('p.jpg');
background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;">
<form action ="renting.php"  style='background-color: red;
  color: white;
  position:relative;
  font-size: 40px;
  text-align: center;
  border-radius: 22px;
  width: 25%;
  left: 35%;
  padding: 15px 25px;
  display: inline-block;'>
BOOK ID : <input name ='id'>
<br>
TODAY'S DATE: <input type ='date' name='today'  style= ' font-size: 40px;'>
<br>
<input type = "submit" value = "submit"  style= 'font-size: 40px;color:white;background-color: brown;'>
</form>
</body>
</html>