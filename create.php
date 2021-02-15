<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "verify";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn)
  {
    echo "NOT connected";
  }
  else
  {
    echo "You are connected to the database" . "<br>";
  }
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip5 = $_POST['zip5'];
    $zip4 = $_POST['zip4'];

    $query = "INSERT INTO address ( address1, address2, city,state, zip5, zip4) VALUES('$address1', '$address2', '$city','$state', '$zip5', '$zip4')";

    if(!mysqli_query($conn,$query))
    {
      echo 'Database NOT updated';
    }
    else
    {
      echo "Database Updated";
    }  
      header("refresh:2; url=index.php");
  
    