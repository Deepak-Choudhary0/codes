<html>
<head>
<style>
body {
  background-image: url('bookingsuccessful.png');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
</head>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectIT592";

$conn = new mysqli($servername, $username, $password, $dbname);

$Name=$_GET["PassengerName"];
$ID=$_GET["PassengerID"];
$Age=$_GET["PassengerAge"];
$Address=$_GET["PassengerAddress"];
$Contact=$_GET["Passengercontact"];
$BookingDate = $_GET["TicketBookingDate"];
$StartingPoint= $_GET["startingpoint"];
$EndPoint= $_GET["endpoint"];
$sql = "INSERT INTO bus_ticket_booking_system VALUES ('$Name',$ID,'$Age','$Address','$Contact','$BookingDate','$StartingPoint','$EndPoint',0);";
$result=mysqli_query($conn,$sql);
$query = "UPDATE `bus_ticket_booking_system` SET Price=( SELECT Price FROM ticket_price WHERE StartingPoint='$StartingPoint' AND EndPoint='$EndPoint')
 WHERE StartingPoint='$StartingPoint' AND EndPoint='$EndPoint'";
$results=mysqli_query($conn,$query);


if ($result==1){
    echo"<h3 style='text-align:center'>YOUR TICKET BOOK SUCCESSFULLY....!!!</h3>";
}
else{
    "Data cannot be entered...";
}

$conn->close();
?>

<CENTER>
<a href="index.php"><button>Go to Home Page</button></a><br><br>
<a href="first.php"><button>BOOK ANOTHER TICKET</button></a><br><br>
</CENTER>