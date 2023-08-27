<html lang="en">
<head>
    <style>
        table, th, td {
            border: 1px solid black;
            text-align:center;
        }
        tr:hover {background-color: #D6EEEE;}
        #book {
            text-align: center;
            color: green;
            font-size: large;
        }
        h3{
            text-align: center;
            color: red;
        }
    </style>
    <title>Ticket Details</title>
</head>
<body>
    <center>
    <br><br><h1>Ticket Details</h1><br><br>
    <?php
        session_start();
        error_reporting(0);
        ini_set('display_errors', 0);
        $no=$_GET['no'];
        $servername = "localhost";
        $username = "root";
        $password ="";
        $database ="railways";
        $conn = mysqli_connect($servername, $username, $password, $database);
        if($conn){
            $query=" select * from passenger where id='$no';";
            echo "<table width=80%>
            <tr>
                <th>Ticket Id</th>
                <th>Passenger Name</th>
                <th>Age</th>
                <th>Contact</th>
                <th>Date</th>
            </tr>";
            $result = mysqli_query($conn, $query);
            while($row=mysqli_fetch_array($result)){
                $id=$row[0];
                echo "<tr>
                    <td>$row[0]</td>
                    <td>$row[1]</td>
                    <td>$row[2]</td>
                    <td>$row[3]</td>
                    <td style='text-align: center;'>$row[4]</td>
                </tr>";
            }
            echo "</table><BR><BR>";
        }
    ?>
    <br><br><?php echo "<form action='deleted_ticket.php'><button name='id' value='$id'>Cancel</button><br><br></form>
    <a href='.deleted.php'><button>Go to Home Page</button></a><br><br>";
    ?>
    </center>
</body>
</html>