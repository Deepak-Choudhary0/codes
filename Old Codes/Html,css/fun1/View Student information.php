<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="./css/style.css">
        <title></title>
    </head>
<body>
    <nav class='navbar bg-dark'>
        <div class="container">
         <h1 class='logo lg-heading text-light'>View Student information</h1>
         <ul class='nav-items'>
             <li class="nav-item"><a href="./View.php">View Student information</a></li>
             <li class="nav-item"><a href="./Add New Student.php">Add New Student</a></li>
             <li class="nav-item"><a href="./Delete student information.php">Delete student information</a></li>
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
$input = $_POST["rr"];

// echo $input;

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);


//  sql query to be executed
$sql="SELECT * FROM `student` WHERE `roll`='$input';";

$result = mysqli_query($conn, $sql);

$num =mysqli_num_rows($result);
// echo $num;




        echo "<table width=100%>
            <tr>
            <th>Student Name</th>
                <th>Roll No</th>
                <th>Department</th>
                <th>Age</th>
                <th>marks 1</th>
                <th>marks 2</th>
                <th>marks 3</th>
            </tr>";
        while($row=mysqli_fetch_array($result)){
            echo "<tr>
                <td>$row[0]</td>
                <td>$row[1]</td>
                <td>$row[2]</td>
                <td>$row[3]</td>
                <td>$row[4]</td>
                <td>$row[5]</td>
                <td>$row[6]</td>
            </tr>";}
        echo "</table>";
        ?>
        <a href="index.php"><button value="Home" >Go to Home Page</button>
   
</body>
</html>  

