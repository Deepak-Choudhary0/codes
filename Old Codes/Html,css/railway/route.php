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
    <title>Train Details</title>
</head>
<body>
    <center>
    <br><br><h1>Train Details</h1><br><br>
    <?php
    error_reporting(0);
    ini_set('display_errors', 0);
        $servername = "localhost";
        $username = "root";
        $password ="";
        $database ="railways";
        $conn = mysqli_connect($servername, $username, $password, $database);
        if($conn){
            $query=" select 
            route.route_id,
            route.train_no,
            train.train_name,
            route.station_id,
            route.arrival_time,
            route.departure_time,
            station.station_name,
            station.city,
            route.price
            FROM route INNER JOIN station
            ON station.station_id = route.station_id
            LEFT JOIN train 
            ON train.train_no = route.train_no
            ORDER BY route.route_id ASC;";
            echo "<table width=80%>
            <tr>
                <th>Route Id</th>
                <th>Train Number</th>
                <th>Train Name</th>
                <th>Station Id</th>
                <th>Arrival Time(In Military Time)</th>
                <th>Departure Time(In Military Time)</th>
                <th>Station Name</th>
                <th>City</th>
                <th>Price(In Rupees)</th>
            </tr>";
            $result = mysqli_query($conn, $query);
            while($row=mysqli_fetch_array($result)){
                echo "<tr>
                    <td>$row[0]</td>
                    <td>$row[1]</td>
                    <td>$row[2]</td>
                    <td>$row[3]</td>
                    <td style='text-align: center;'>$row[4]</td>
                    <td style='text-align: center;'>$row[5]</td>
                    <td>$row[6]</td>
                    <td>$row[7]</td>
                    <td id='book'>$row[8]</td>
                </tr>";
            }
            echo "</table><BR><BR>";
        }
    ?>
    <h3>Note:- Please Remember the Route it which you Want to book It will be Needed to book the ticket.
        <br><br>
        If you want to go one or more station then book ticket 2 or more times like if you want to go From Jaipur to Banaras.
        <br><br>
        There is no direct Train from Jaipur to Banaras , But you can buy ticket of id 5,6 & 7 or 1,2,3 & 4.
    </h3>
    <br><br><a href='ticket.php'><button>Book</button></a><br><br>
    <a href="index.php"><button>Go to Home Page</button></a><br><br>
    </center>
</body>
</html>