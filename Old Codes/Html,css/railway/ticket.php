<html>
<head>
    <style>
        body {
        background-image: url('book.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed; 
        background-size: 100% 100%;
        }
        table, th, td {
        border: 1px solid black ;
        text-align:center;
        }
        tr:hover {
            background-color: #D6EEEE;
        }
        tr{
            width:500px;
            text-align:center;
        }
        td{
            width:270px;
            text-align:center;
        }
        form{
            height: 250px;
            width: 900px;
            background-color: white;
        }
        h1{
            font-size: 250%;
        }
    </style>
    <tite>Book ticket</title><br><br><br>
</head>
<body>
    <CENTER>
    <h1>BOOK TICKET</h1>
        <form action ="./ticket_confirm.php";>
        <?php
        session_start();
        error_reporting(0);
        ini_set('display_errors', 0);
        $servername = "localhost";
        $username = "root";
        $password ="";
        $database ="railways";
        $conn = mysqli_connect($servername, $username, $password, $database);
        
        echo "
        <table width=60%>
        <tr>
            <th>Enter</td>
            <th>Details</td>
        </tr>
        <tr>
            <td> Passenger Name:</td>
            <td width =70%><input name='name' style='text-align:center;color:lightgreen;font-size:25px;width:100%;'></td>
        </tr>
        <tr>
            <td> Passenger Age: </td>
            <td width =70%><input name ='age' type = 'number' min='0' max='100' style='text-align:center;color:lightgreen;font-size:25px;width:100%;'></td>
        </tr>
        <tr>
            <td> Passenger Contact No.: </td>
            <td width =70%><input name ='contact' type = 'number' min='1000000000' max='9999999999' style='text-align:center;color:lightgreen;font-size:25px;width:100%;'></td>
        </tr>";
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
        ON train.train_no = route.train_no;";
        echo "<tr>
                <td >Route ID:</td>";
        echo "<td><select name='rid' style='width:100%;';>";
        $result= mysqli_query($conn, $sql);
        $flag=0;
        while($row=mysqli_fetch_array($result)){
            $rid=$row[0]+1;
            $sql1="select station_name
            from route inner join station
            on station.station_id = route.station_id
            where route_id = '$rid';";
            $result1 = mysqli_query($conn, $sql1);
            $row1=mysqli_fetch_array($result1);
            echo "<option value='$row[0]'>$row[0],$row[6],$row1[0]</option>";
            $flag+=1;
            if($flag==9){
                break;
            }
        }
        echo "</td></select></tr>";
        echo "
        <tr>
            <td> Ticket Booking Date: </td>
            <td width =70%><input type='date' name='date' placeholder='yyyy-mm-dd' value='' min='2022-11-26' max='2022-12-31' style='width:100%;text-align:center;color:lightgreen;font-size:25px;'></td>
        </tr>";
        
        
        
        //echo "Ticket Booking Date: <input type="date" name="date" placeholder="yyyy-mm-dd" value="" min="2022-11-15" max="2022-12-31"><br><br> <br><br>";
        
        echo "</table>
        <br>
        <input type='submit' style='text-align:center;color:brown;font-size:25px;' value='Submit' >
        <br><br>";
        ?>
        </form>
        <br><br><h3>
            Check your Route here incase if you don't Know :- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='route.php'><button>Get Route Info</button></a><br><br>
        </h3>
        <br><br><h3>
            Check your Tickets here incase if you have already Booked :- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='view_ticket.php'><button>Get Ticket Booked</button></a><br><br>
        </h3>
    </CENTER>
</body>
</html>