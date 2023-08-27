<style>
a:hover {
  background-color: red;
}
</style>
<?php session_start ();
if(($_SESSION["login"]!=5))

	header("location:u_auth.php");
    ?>
    <h1  style = "text-align: center ;
Font-size : 100px;color:red; margin-bottom:80px;">What do you want to do</h1>
<?php echo '<a href="rent.php"  style="
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
    display: inline-block;">Rent a book</a><br><br>';?>
<?php echo '<a href="return.php"  style="
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
    display: inline-block;">Return a book</a>';?><br>
<?php echo '<a href="search.php"  style="
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
    display: inline-block;">Search book</a>';?><br>
<?php echo '<a href="u_viewlib.php"  style="
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
    display: inline-block;">View all books</a>';?>
<h3  style = "text-align: center ;color:red;">Note: To rent or return book, get book id from above link"To search book or view all books"</h3>
<body  style="background-image: url('p.jpg');
background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;"></body>