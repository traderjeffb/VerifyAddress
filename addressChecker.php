<?php
echo$_GET['address1']??'';
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip5 = $_POST['zip5'];
$zip4 = $_POST['zip4'];



$user = '300ASONS2245';
$xml_data = "<AddressValidateRequest USERID='$user'>" .
"<Revision>1</Revision>".
"<Address ID='0'>" .
"<Address1>$address1></Address1>" .
"<Address2>$address2</Address2>" .
"<City>$city</City>" .
"<State>$state</State>" .
"<Zip5>$zip5</Zip5>" .
"<Zip4>$zip4</Zip4>" . 
"</Address>" .
"</AddressValidateRequest>";

$url = "https:// secure.shippingapis.com /ShippingAPI.dll? API=Verify";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POSTFIELDS,
                'XML=' . $xml_data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 300);
    $output = curl_exec($ch);
    echo curl_error($ch);
    curl_close($ch);


    echo "$xml_data";
    header("refresh:2; url=index.php");