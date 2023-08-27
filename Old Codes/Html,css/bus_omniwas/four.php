<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectIT592";

$conn = new mysqli($servername, $username, $password, $dbname);


$query = "select * from bus_ticket_booking_system";
$data = mysqli_query($conn,$query);
$total= mysqli_num_rows($data);
echo  $total;
?>
