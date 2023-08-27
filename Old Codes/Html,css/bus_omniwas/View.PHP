<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectIT592";

$conn = new mysqli($servername, $username, $password, $dbname);
$ID=$_GET["PassengerID"];
$sql = "select * from bus_ticket_booking_system where PassengerID=$ID;";

$result=mysqli_query($conn,$sql);
if ($result){
    echo"<h3 style='text-align:center'>PASSENGER DATA IS !!!</h3>";
    echo "<table>
    <th>Passenger Name</th><br>
      <th>Passenger ID</th><br>
      <th>Passenger Age</th>
      <th>Passenger Address</th>
      <th>Passenger Contact</th>
      <th>Ticket Booking Date</th>
      <th>Starting Point</th>  
      <th>End Point</th>  
      <th>Ticket Price</th> 
    </Table>";
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
        </tr>";
}}
else{
    "Ticket cannot be booked...";
}
$conn->close();
?>
<br><br>
<br><br>
<CENTER>
<a href="index.php" style="text-decoration: none;"><button>Go to Home Page</button></a><br><br>
</CENTER>