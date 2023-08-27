<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Information Added</title>
</head>
<body>
    <center>
    <h1>Student's Information Added</h1> <br><br> <br><br>
    <?php
        $n = $_GET["n"];
        $r = $_GET["r"];
        $d = $_GET["d"];
        $a = $_GET["a"];
        $m1 = $_GET["m1"];
        $m2 = $_GET["m2"];
        $m3 = $_GET["m3"];
        $host="localhost";
        $user="root";
        $pw="";
        $db="php";
        $conn = mysqli_connect($host,$user,$pw,$db);
        $sql="insert into student values('$r','$n',$a,'$d',$m1,$m2,$m3)";
        $res=mysqli_query($conn, $sql);
        if ($res){
            echo "Name : $n <br> Roll No : $r <br> Department : $d <br> Age : $a <br> Marks 1 : $m1 <br> Marks 2 : $m2 <br> Marks 3 : $m3 <br><br>" ;  
        }
    ?>
    <a href="index.php" style="text-decoration: none;"><button>Go to Home Page</button></a><br><br>
    <a href="./view.php" style="text-decoration: none;"><button> View Single Student's information</button></a><br><br>
    <a href="./view_all.php" style="text-decoration: none;"><button> View All Student's Information</button></a><br><br>
    <a href="./delete.php" style="text-decoration: none;"><button>Delete student's information</button></a>
    </center>
</body>
</html>