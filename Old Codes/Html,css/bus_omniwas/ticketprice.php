<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectit592";

$conn = new mysqli($servername, $username, $password, $dbname);

$StartingPoint= $_GET["startingpoint"];
$EndPoint= $_GET["endpoint"];
$Price= $_GET["price"];

$sql = "INSERT INTO ticket_price VALUES ('$StartingPoint','$EndPoint',$Price);";

$result=mysqli_query($conn,$sql);




if ($result==1){
    echo"<h3 style='text-align:center'>ROUTE    ADDED    SUCCESSFULLY....!!!</h3>";
}
else{
    "Data cannot be entered...";
}
$conn->close();
?>