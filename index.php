<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>
<form action="create.php" method="post">

  <label for="address1">Address :</label>
  <input type="text" id="address1" name="address1"><br><br>

  <label for="address2">Address :</label>
  <input type="text" id="address2" name="address2"><br><br>

  <label for="city">City:</label>
  <input type="text" id="city" name="city"><br><br>

  <label for="state">State:</label>
  <input type="text" id="state" name="state"><br><br>

  <label for="zip5">Zipcode:</label>
  <input type="text" id="zip5" name="zip5"><br><br>

  <label for="zip4">Zipcode extention:</label>
  <input type="text" id="zip4" name="zip4"><br><br>
  <input type="submit" value="submit">
</form>
<div>

<form action="list.php" method="post">
  <input type="submit" value="List"name="List">
</form>
<p>Above the "submit" button enters the addresss into the database</p>
<p>The "List" button prints a list of all addresses to the screen.</p>
<P>------------------------------------</P>
<p>Below the "API" button was supposed to print out both the address entered and the address verified by the USPS.<br> The API section of code is hard coded so the address input does not function properly yet</p>
</div>


<form id="adressForm" name="addressForm" action="checkAddress.php" method="post">
<label for="address1">Address :</label>
  <input type="text" id="address1" name="address1"><br><br>

  <label for="address2">Address :</label>
  <input type="text" id="address2" name="address2"><br><br>

  <label for="city">City:</label>
  <input type="text" id="city" name="city"><br><br>

  <label for="state">State:</label>
  <input type="text" id="state" name="state"><br><br>

  <label for="zip5">Zipcode:</label>
  <input type="text" id="zip5" name="zip5"><br><br>

  <label for="zip4">Zipcode extention:</label>
  <input type="text" id="zip4" name="zip4"><br><br>
<input type="submit" value="API"name="API">
</form>

  </body>
</html>