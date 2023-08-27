<?php session_start ();
if(($_SESSION["login"]!=7))
{
	header("location:a_auth.php");
}
?>
<html>
<head>
    <h1 style = "text-align: center ;
Font-size : 100px;color:red; margin-bottom:80px;"> BOOK </h1>
</head>
<body  style="background-image: url('p.jpg');
background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;">
<form action ="add.php" style='background-color: red;
  color: white;
  position:relative;
  font-size: 40px;
  text-align: center;
  border-radius: 22px;
  width: 25%;
  left: 35%;
  padding: 15px 25px;
  display: inline-block;'  >
Book ID : <input name ='id' style= ' font-size: 40px;'>
<br>
Book name: <input name='tittle' style= ' font-size: 40px;'>
<br>
Author : <input name ='author' style= ' font-size: 40px;'>
<br>
Language: <input name ='language' style= ' font-size: 40px;'>
<br>
Page: <input name = 'page' style= ' font-size: 40px;'>
<br>
Publisher: <input name = 'publisher' style= ' font-size: 40px;'>
<br>
Quantity: <input name = 'quantity' style= ' font-size: 40px;'>
<br>
<input type = "submit" value = "submit" style= 'font-size: 40px;color:white;background-color: brown;'>
</form>
</body>
</html>