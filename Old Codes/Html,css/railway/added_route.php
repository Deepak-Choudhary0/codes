<!DOCTYPE html>
<html lang="en">
<head>
    <title>Route Information Added</title>
</head>
<body>
    <center>
    <h1>Route Information Added</h1> <br><br> <br><br>
    <?php
        session_start();
        error_reporting(0);
        ini_set('display_errors', 0);
        $no = $_GET["no"];
        $id = $_GET["id"];
        $at = $_GET["at"];
        $dt = $_GET["dt"];
        $p = $_GET["p"];
        $host="localhost";
        $user="root";
        $pw="";
        $db="railways";
        $conn = mysqli_connect($host,$user,$pw,$db);
        $sql="SELECT * FROM `route`;";
        $result = mysqli_query($conn, $sql);
        $flag=1;
        while($row=mysqli_fetch_array($result)){
            $flag+=1;
        }
        $sql="INSERT INTO `route`(`route_id`, `train_no`, `station_id`, `arrival_time`, `departure_time`, `price`) VALUES ($flag,$no,$id,$at,$dt,$p);";
        $res=mysqli_query($conn, $sql);
        if ($res){
            echo "Route ID : $flag <br> Train Number : $no <br> Station ID : $id <br> Arrival Time : $at <br> Departure Time : $dt <br> Price : $p <br> <br><br><br><br>" ;  
        }
        $uname=$_SESSION['uname'];
        $pass=$_SESSION['pass'];
        echo "<a href='index.php' style='text-decoration: none;'><button style='color:red;padding:2px'>Go to Home Page</button></a><br><br>
        <a href='./admin.php?uname=$uname&pass=$pass' style='text-decoration: none;'><button>Admin</button></a>";
    ?>
    </center>
</body>
</html>