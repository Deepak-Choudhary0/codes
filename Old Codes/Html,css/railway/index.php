home page of indian railways
<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            background-image: url('index_rail.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed; 
            background-size: 100% 100%;
            padding: 10px;
        }
        h1{
            background-color: white;
            width: 800px;
            height: 60px;
            padding-bottom: 10px;
            padding-top: 10px;
            font-size: 300%;
            font-family: Arial, Helvetica, sans-serif;
            color: lightgreen;
            border: 2px solid black;
            margin: 10px;
        }
    </style>
    <title>Indian Railway Online</title>
</head>
<body>
    <center>
    <?php
        error_reporting(0);
        ini_set('display_errors', 0);
        ?>
    <h1>Indian Railway Online</h1> <br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <a href="./about.php" style="text-decoration: none;"><button style="text-decoration: none;text-align:center;color:green;font-size:25px;"> <b>About Indian Railways</b></button></a><br><br>
    <a href="./information.php" style="text-decoration: none;"><button style="text-decoration: none;text-align:center;color:green;font-size:25px;"> <b>Get Schedule Information</b></button></a><br><br>
    <a href="./ticket.php" style="text-decoration: none;"><button style="text-decoration: none;text-align:center;color:green;font-size:25px;"><b>Ticket Online</b></button></a><br><br>
    <a href="./adminlogin.php" style="text-decoration: none;"><button style="text-decoration: none;text-align:center;color:green;font-size:25px;"><b>Railway Admin Page</b></button></a><br><br>
    <!--<a href="index.php" style="text-decoration: none;"><button style="color:red;padding:2px;text-decoration: none;text-align:center;color:red;font-size:25px"><b>Go to Home Page</b></button></a>-->
    </center>
</body>
</html>
