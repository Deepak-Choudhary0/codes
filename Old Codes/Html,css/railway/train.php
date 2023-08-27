<html lang="en">
<head>
    <style>
        table, th, td {
            border: 1px solid black;
        }
        tr:hover {background-color: #D6EEEE;}
        #book {
            text-align: center;
            color: green;
            font-size: large;
            font-weight: bolder;
        }
    </style>
    <title>Train Details</title>
</head>
<body>
    <center>
    <br><br><h1>Train Details</h1><br><br>
    <?php
        session_start();
        error_reporting(0);
        ini_set('display_errors', 0);
        $servername = "localhost";
        $username = "root";
        $password ="";
        $database ="railways";
        $conn = mysqli_connect($servername, $username, $password, $database);
        if($conn){
            $query=" select * from train;";
            echo "<table width=80%>
            <tr>
                <th>Train Number</th>
                <th>Train Name</th>
                <th>Price per 10 KM(In Rupees)</th>
            </tr>";
            $result = mysqli_query($conn, $query);
            while($row=mysqli_fetch_array($result)){
                echo "<tr>
                    <td style='text-align: center;'>$row[0]</td>
                    <td style='text-align: center;'>$row[1]</td>
                    <td id='book'>$row[2]</td>
                </tr>";
            }
            echo "</table><BR><BR>";
        }
    ?>
    <br><br><a href='ticket.php'><button>Book</button></a><br><br>
    <a href="index.php"><button>Go to Home Page</button></a><br><br>
    </center>
</body>
</html>