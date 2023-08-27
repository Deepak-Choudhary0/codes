Informatio about train,route,station
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
            height: 74px;
            padding-bottom: 10px;
            padding-top: 10px;
            font-size: 300%;
            font-family: Arial, Helvetica, sans-serif;
            color: lightgreen;
            border: 2px solid black;
            margin: 10px;} 
    </style>
    <title>Railway Online</title>
</head>
<body>
    <center>
    <?php
        error_reporting(0);
        ini_set('display_errors', 0);
        ?>
    <div>
    <h1 style="text-align:center;color:lightgreen;font-size:65px;">Indain Railway's Online</h1> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <a href="./train.php" style="text-decoration: none;"><button style="text-decoration: none;text-align:center;color:black;font-size:25px;"> Get Train Information</button></a><br><br>
    <a href="./route.php" style="text-decoration: none;"><button style="text-decoration: none;text-align:center;color:black;font-size:25px;"> Get Route Information</button></a><br><br>
    <a href="./station.php" style="text-decoration: none;"><button style="text-decoration: none;text-align:center;color:black;font-size:25px;"> Get Station Information</button></a><br><br>
    <a href="./ticket.php" style="text-decoration: none;"><button style="text-decoration: none;text-align:center;color:black;font-size:25px;"> Book Ticket Online</button></a><br><br>
    <a href="index.php" style="text-decoration: none;"><button style="color:red;padding:2px;text-decoration: none;text-align:center;color:red;font-size:25px"><b>Go to Home Page</b></button></a>
    </div>
    </center>
</body>
</html>