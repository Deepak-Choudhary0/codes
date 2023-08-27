<style  >
  th,td  {border:3px solid black}

</style>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectIT592";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "select * from bus_ticket_booking_system";

$result=mysqli_query($conn,$sql);


if ($result){
    
    echo"<h3 style='text-align:center;border:3px solid black;margin: 50px 50px 75px 100px; width:80%;text-align: center; font-size: 90px; '>PASSENGER DATA IS !!!</h3>";
    
    echo "<table   style='border:3px solid black;margin: 50px 50px 75px 100px; width:80%;text-align: center; font-size: 30px;'>
    <tr >
      <th>Passenger Name</th><br>
      <th>Passenger ID</th><br>
      <th>Passenger Age</th>
      <th>Passenger Address</th>
      <th>Passenger Contact</th>
      <th>Ticket Booking Date</th>
      <th>Starting Point</th>  
      <th>End Point</th>  
      <th>Ticket Price</th>  
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
        <td>$row[7]</td>
        <td>$row[8]</td>
        </tr>";}
        echo "</table>";
}
else{
    "Ticket cannot be booked...";
}
$conn->close();
?>


