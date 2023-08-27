<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Information Added</title>
</head>
<body>
    <center>
    <h1>Train Information Added</h1> <br><br> <br><br>
    <?php
        session_start();
        error_reporting(0);
        ini_set('display_errors', 0);
        $s = $_GET["s"];
        $c = $_GET["c"];
        $host="localhost";
        $user="root";
        $pw="";
        $db="railways";
        $conn = mysqli_connect($host,$user,$pw,$db);
        $sql="SELECT * FROM `station`;";
        $result = mysqli_query($conn, $sql);
        $flag=1;
        while($row=mysqli_fetch_array($result)){
            $flag+=1;
        }
        $sql="INSERT INTO `station`(`station_id`, `station_name`, `city`) VALUES ($flag,'$s','$c');";
        $res=mysqli_query($conn, $sql);
        if ($res){
            echo "Station ID : $flag <br> Station Name : $s <br> City : $c <br> <br><br><br><br>" ;  
        }
        $uname=$_SESSION['uname'];
        $pass=$_SESSION['pass'];
        echo "<a href='index.php' style='text-decoration: none;'><button style='color:red;padding:2px'>Go to Home Page</button></a><br><br>
        <a href='./admin.php?uname=$uname&pass=$pass' style='text-decoration: none;'><button>Admin</button></a>";
    ?>
    </center>
</body>
</html>