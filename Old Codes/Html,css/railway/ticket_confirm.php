<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table, th, td {
            border: 1px solid black;
            text-align:center;
        }
        tr:hover {
            background-color: #D6EEEE;
        }
        #book {
            text-align: center;
            color: green;
            font-size: large;
        }
        h3,button{
            text-align: center;
            color: green;
            font-weight: bold;
        }
    </style>
    <title>Document</title>
</head>
<body>
    ticket_confirm
    <br><br>
    <center>
    <?PHP 
    session_start();
    $name=$_GET["name"];
    $age=$_GET["age"];
    $contact=$_GET["contact"];
    $rid=$_GET["rid"];
    $date=$_GET["date"];
    if(strlen($name)==0 or strlen($age)==0 or strlen($contact)==0 or strlen($rid)==0 or strlen($date)==0){
        echo"Enter All Fields";
        echo "<br><br><a href='ticket.php'><button style='color:red;padding:2px;text-decoration: none;text-align:center;color:red;font-size:25px'><b>Try Again</b></button></a>";
    }
    else{
        $servername = "localhost";
        $username = "root";
        $password ="";
        $database ="railways";
        $conn = mysqli_connect($servername, $username, $password, $database);
        //for id
        $sql="select id from passenger;";
        $result = mysqli_query($conn, $sql);
        $flag=1;
        while($row=mysqli_fetch_array($result)){
            $flag+=1;
        }
        $id=$flag;
        $sql="select
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
        where route_id = '$rid';";
        echo "<table width=80%>
            <tr>
                <th>Passenger ID</th>
                <th>Passenger Name</th>
                <th>Age</th>
                <th>Contact</th>
                <th>Date</th>
                <th>Route Id</th>
                <th>Train Number</th>
                <th>Train Name</th>
                <th>Station Id</th>
                <th>Arrival Time(In Military Time)</th>
                <th>Departure Time(In Military Time)</th>
                <th>Station Name</th>
                <th>Destination</th>
                <th>Price(In Rupees)</th>
        </tr>";
        $rid1=$rid+1;
        $sql1="select station_name
        from route inner join station
        on station.station_id = route.station_id
        where route_id = '$rid1';";
        $result = mysqli_query($conn, $sql);
        $row=mysqli_fetch_array($result);
        $result1 = mysqli_query($conn, $sql1);
        $row1=mysqli_fetch_array($result1);
        $destination=$row1[0];
        echo "<tr>
                    <td>$id</td>
                    <td>$name</td>
                    <td>$age</td>
                    <td>$contact</td>
                    <td>$date</td>
                    <td>$row[0]</td>
                    <td>$row[1]</td>
                    <td>$row[2]</td>
                    <td>$row[3]</td>
                    <td style='text-align: center;'>$row[4]</td>
                    <td style='text-align: center;'>$row[5]</td>
                    <td>$row[6]</td>
                    <td>$destination</td>
                    <td id='book'>$row[8]</td>
                </tr>";
        echo "</table>";
        $_SESSION['id']=$id;
        $_SESSION['name']=$name;
        $_SESSION['age']=$age;
        $_SESSION['contact']=$contact;
        $_SESSION['rid']=$rid;
        $_SESSION['date']=$date;
        echo "<br><br><br><br><h1>Payment Gateway</h1> <h3>Proceed to Pay $row[8] </h3>
        <a href='ticket_booked.php'><button>Pay</button></a><br><br>
        <br><br>
        <a href='index.php'><button>Go to Home Page</button></a><br><br>";
    }
    ?>
    </center>
</body>
</html>