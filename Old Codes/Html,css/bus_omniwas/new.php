<html>
<head>
<CENTER>
    <tite>UPDATE TICKET PRICE</title>
</CENTER>
</head>
<body>
<CENTER>
<form action ='update.php'>
<h3 style='text-align:center'>ENTER NEW PRICE TO UPDATE TICKET PRICE!!</h3>
STARTING FROM: <select name = 'startingpoint'>
  <option value='Guwahati'>Guwahati</option>
  <option value='MizoramUniversity'>MizoramUniversity</option>
  <option value='Aizawl'>Aizawl</option>
  <option value='Shillong'>Shillong</option>
  <option value='Patna'>Patna</option>
  </select>
TO END POINT:<select name = 'endpoint'>
  <option value='Guwahati'>Guwahati</option>
  <option value='MizoramUniversity'>MizoramUniversity</option>
  <option value='Aizawl'>Aizawl</option>
  <option value='Shillong'>Shillong</option>
  <option value='Patna'>Patna</option>
  </select><br><br>
NEW PRICE: <input name ='TicketPrice'><br><br>
<input type = "submit"value = "submit">
</CENTER>
</form>
</body>
</html>