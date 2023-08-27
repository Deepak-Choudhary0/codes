<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectIT592";
$conn = new mysqli($servername, $username, $password, $dbname);
$ID=$_GET["PassengerID"];
$sql = "delete from bus_ticket_booking_system where PassengerID='$ID';";
$result=mysqli_query($conn,$sql);
if ($result){
    echo"<h3 style='text-align:center'>TICKET IS  CANCELLED!!!</h3>";
}
else{
    "TICKET CANNOT BE CANCELLED...";
}
$conn->close();
?>