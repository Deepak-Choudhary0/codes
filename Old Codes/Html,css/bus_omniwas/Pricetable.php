<style  >
  th,td  {border:3px solid black}

</style>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectIT592";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "select * from 	ticket_price";

$result=mysqli_query($conn,$sql);


if ($result){
    
    echo"<h3 style='text-align:center;border:3px solid black;margin: 50px 50px 75px 100px; width:80%;text-align: center; font-size: 80px; '>PRICE TABLE !!!</h3>";
    
    echo "<table   style='border:3px solid black;margin: 50px 50px 75px 100px; width:80%;text-align: center; font-size: 30px;'>
    <tr>
      <th>Starting Point</th>  
      <th>End Point</th>  
      <th>Ticket Price</th>  
    </tr>";
    while($row=mysqli_fetch_array($result)){
        echo "<tr>
        <td>$row[0]</td>
        <td>$row[1]</td>
        <td>$row[2]</td>
        </tr>";}
        echo "</table>";
}
$conn->close();
?>


