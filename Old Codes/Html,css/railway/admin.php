admins can edit info here
<!DOCTYPE html>
<html>
<head>
    <style>
    table, th, td {
        border: 1px solid black;
        text-align:center;
        font-weight: bold;
    }
    tr:hover {background-color: #D6EEEE;}
    </style>
    <title>Railway Admin</title>
</head>
<body>
    <center>
    <div>
    <h1 style="text-align:center;color:green;font-size:65px;">Railway Admin Management</h1><br>
    <?php
        session_start();
        error_reporting(0);
        ini_set('display_errors', 0);
        $host="localhost";
        $user="root";
        $pw="";
        $db="railways";
        $conn = mysqli_connect($host,$user,$pw,$db);
        $admin_id=$_GET['uname'];
        $pass=$_GET['pass'];
        $sql = "select * from admin where username='$admin_id' && pass='$pass';";
        $rs = mysqli_query($conn, $sql);
        $num =mysqli_num_rows($rs);
        if($num==0){
            echo " <p style = 'color:red;font-size: 40px;text-align: center'>Given information is not correct</p> ";
            }
        else{
            $_SESSION['uname']=$admin_id;
            $_SESSION['pass']=$pass;
            $uname=$_SESSION['uname'];
            $pass=$_SESSION['pass'];
            $sql="SELECT * FROM `admin` where username = '$uname';";
            $conn = mysqli_connect($host,$user,$pw,$db);
            $result = mysqli_query($conn, $sql);
            echo "<table width=80%>
                <tr>
                    <th>Admin Id</th>
                    <th>User Name</th>
                    <th>Name</th>
                    <th>Password</th>
                    <th>DOB</th>
                    <th>Age</th>
                    <th>Email Id</th>
                </tr>";
            while($row=mysqli_fetch_array($result)){
                $_SESSION["id"]=$row[0];
                echo "<tr>
                    <td>$row[0]</td>
                    <td>$row[1]</td>
                    <td>$row[2]</td>
                    <td >";
                echo str_repeat('*',strlen($row[3]));
                echo "</td>
                    <td>$row[4]</td>
                    <td>$row[5]</td>
                    <td>$row[6]</td>
                </tr></table><br><br><br>";
            }
            echo '<a href="./add_train.php" style="text-decoration: none;"><button style="text-decoration: none;text-align:center;color:blue;font-size:25px;"> Add Train information</button></a><br><br>
            <a href="./del_train.php" style="text-decoration: none;"><button style="text-decoration: none;text-align:center;font-size:25px;">Delete Train information</button></a><br><br>
            <a href="./add_route.php" style="text-decoration: none;"><button style="text-decoration: none;text-align:center;color:blue;font-size:25px;"> Add Route information</button></a><br><br>
            <a href="./del_route.php" style="text-decoration: none;"><button style="text-decoration: none;text-align:center;font-size:25px;">Delete Route information</button></a><br><br>
            <a href="./add_station.php" style="text-decoration: none;"><button style="text-decoration: none;text-align:center;color:blue;font-size:25px;"> Add Station information</button></a><br><br>
            <a href="./del_station.php" style="text-decoration: none;"><button style="text-decoration: none;text-align:center;font-size:25px;">Delete Station information</button></a>';
        }
    ?>
    <br><br>
    <a href="index.php" style="text-decoration: none;"><button style="color:red;padding:2px;text-decoration: none;text-align:center;color:red;font-size:25px"><b>Home</b></button></a>
</div>
    </center>
</body>
</html>