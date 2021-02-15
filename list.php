<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "verify";

$conn = mysqli_connect($server, $username, $password, $dbname);

if ($conn->connect_errno) {
  printf("Connect failed: %s\n", $conn->connect_error);
  exit();
}
  if ($result = $conn->query("SELECT * FROM address LIMIT 10")) {
        while ($row = mysqli_fetch_assoc($result)){
           echo $row['address1']." ". $row['address2']." ".$row['city']." ".$row['state']." ". $row['zip5']." ".$row['zip4']."<br>";
        }
    $result->close();
}
  ?>
</body>
</html>