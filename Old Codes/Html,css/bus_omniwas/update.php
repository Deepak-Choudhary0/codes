<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectIT592";
$conn = new mysqli($servername, $username, $password, $dbname);
$StartingPoint= $_GET["startingpoint"];
$EndPoint= $_GET["endpoint"];
$price=$_GET["TicketPrice"];
$sql = "UPDATE `ticket_price` SET Price= $price WHERE StartingPoint='$StartingPoint' AND EndPoint='$EndPoint' ";
$result=mysqli_query($conn,$sql);
if ($result){
    echo"<h3 style='text-align:center'>TICKET PRICE UPDATED SUCCESSFULLY!!!</h3>";
}
else{
    "TICKET CANNOT BE CANCELLED...";
}
$conn->close();
?>





