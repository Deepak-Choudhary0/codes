<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="./css/style.css">
        <title>TRAVEL WEBISTE | Contact Page </title>
    </head>
<body>
    <nav class='navbar bg-dark'>
        <div class="container">
         <h1 class='logo lg-heading text-light'>Delete</h1>
         <ul class='nav-items'>
             <li class="nav-item"><a href="./index.php">Home</a></li>
             <li class="nav-item"><a href="./Add New Student.php">Add New Student</a></li>
             <li class="nav-item"><a href="./View Student information.php">View Student information</a></li>
         </ul>
     </div>  
     </nav>
    </div>
    </div>
</section>

<?php
        // Connecting to the Database
         $servername = "localhost";
         $username = "root";
         $password ="";
         $database ="php";

         $input1 = $_POST["rd"];
        //  $rd = $_GET["rd"];
        
         echo $input1;

        // Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);


        $sql="delete from student where `roll`='$input1';";
        $res=mysqli_query($conn,$sql);
        if ($res==1)
        {
            echo "Roll NO $input1 Deleted<br>";
        }
        ?>

</body>
</html>  


