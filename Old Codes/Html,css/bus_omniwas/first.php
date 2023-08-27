<html>
<head>
<CENTER>
    <tite><h1>BOOK TICKET</h1></title><br><br><br>
</CENTER>
</head>
<body>
<style>
body {
  background-image: url('book.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
<CENTER>
<form action ="insert.php">
  <FONT COLOR= purple>
Passenger Name: <input name="PassengerName"><br><br>
Passenger ID: <input name ="PassengerID"><br><br>
Passenger Age: <input name ="PassengerAge"><br><br>
Passenger Address: <input name ="PassengerAddress"><br><br>
Passenger Contact No.: <input name ="Passengercontact"><br><br>
Ticket Booking Date: <input type = "date" name = "TicketBookingDate"><br><br>


STARTING FROM: <select name = "startingpoint">
  <option value="Guwahati">Guwahati</option>
  <option value="MizoramUniversity">MizoramUniversity</option>
  <option value="Aizawl">Aizawl</option>
  <option value="Shillong">Shillong</option>
  <option value="Patna">Patna</option>
  </select>
TO END POINT:<select name = "endpoint">
  <option value="Guwahati">Guwahati</option>
  <option value="MizoramUniversity">MizoramUniversity</option>
  <option value="Aizawl">Aizawl</option>
  <option value="Shillong">Shillong</option>
  <option value="Patna">Patna</option>
  </select><br><br>
<input type = "submit" value = "SUBMIT">
</CENTER>
</form>
</body>
</html>