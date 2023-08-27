ticket booked<br><br>
<center>
<?PHP 
session_start();
$id=$_SESSION['id'];
$name=$_SESSION['name'];
$age=$_SESSION['age'];
$contact=$_SESSION['contact'];
$rid=$_SESSION['rid'];
$date=$_SESSION['date'];
$servername = "localhost";
$username = "root";
$password ="";
$database ="railways";
$conn = mysqli_connect($servername, $username, $password, $database);
$sql="select id from passenger;";
$result = mysqli_query($conn, $sql);
$sql="INSERT INTO `passenger` VALUES ($id,'$name',$age,$contact,$rid,'$date');";
$result = mysqli_query($conn, $sql);
while($result){
    echo "<br><br> Success Ticket Confirmed <br> Your Ticket Details :- <br><br><br>";
    echo "Ticket ID : $id <br> Passenger Name : $name <br> Passenger Age : $age <br> Contact No. : $contact <br> Route ID : $rid <br> Date : $date <br>" ;  
    echo "<br><br><br><br><a href='index.php' style='text-decoration: none;'><button style='color:red;padding:2px'>Go to Home Page</button></a>";
    break;
    session_abort();
}
?>
</center>