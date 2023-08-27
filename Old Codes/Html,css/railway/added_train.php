<!DOCTYPE html>
<html lang="en">
<head>
    <title>Train Information Added</title>
</head>
<body>
    <center>
    <h1>Train Information Added</h1> <br><br> <br><br>
    <?php
        session_start();
        error_reporting(0);
        ini_set('display_errors', 0);
        $n = $_GET["n"];
        $p = $_GET["p"];
        $host="localhost";
        $user="root";
        $pw="";
        $db="railways";
        $conn = mysqli_connect($host,$user,$pw,$db);
        $sql="SELECT * FROM `train`;";
        $result = mysqli_query($conn, $sql);
        $flag=101;
        while($row=mysqli_fetch_array($result)){
            $flag+=1;
        }
        $sql="INSERT INTO `train`(`train_no`, `train_name`, `price`) VALUES ('$flag','$n','$p');";
        $res=mysqli_query($conn, $sql);
        if ($res){
            echo "Train Number : $flag <br> Name : $n <br> Price per 10 km : $p <br> <br><br><br><br>" ;  
        }
        $uname=$_SESSION['uname'];
        $pass=$_SESSION['pass'];
        echo "<a href='index.php' style='text-decoration: none;'><button style='color:red;padding:2px'>Go to Home Page</button></a><br><br>
        <a href='./admin.php?uname=$uname&pass=$pass' style='text-decoration: none;'><button>Admin</button></a>";
    ?>
    </center>
</body>
</html>