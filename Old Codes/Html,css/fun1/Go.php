<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="./css/style.css">
        <title> </title>
    </head>
<body>
    <nav class='navbar bg-dark'>
        <div class="container">
         <h1 class='logo lg-heading text-light'>New Student added</h1>
         <ul class='nav-items'>
             <li class="nav-item"><a href="./Add New Student.php">Add New Student</a></li>
             <li class="nav-item"><a href="./View.php">View Student information</a></li>
             <li class="nav-item"><a href="./Delete1.php">Delete student information</a></li>
         </ul>
     </div>  
     </nav>
        </div>
    </div>
</section>
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
        
        $sql="insert into student values('$n','$r','$d',$a,$m1,$m2,$m3)";
        $res=mysqli_query($conn, $sql);
        
        if ($res==1){

            echo "<p style=text-align:center;color:brown;font-size:25px;><br><br>";
            echo "<div style=color:black;text-align:center;font-size:20px;> Name : $n <br> Roll No : $r <br> Department : $d <br> Age : $a <br> Marks 1 : $m1 <br> Marks 2 : $m2 <br> Marks 3 : $m3 <br><br>" ;  
        }
        ?>
   
</body>
</html>  