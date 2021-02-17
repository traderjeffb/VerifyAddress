<?php

$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip5 = $_POST['zip5'];
$zip4 = $_POST['zip4'];

$xml = new DOMDocument('1.0', 'utf-8');
$xml->formatOutput = true;
$xml->preserveWhiteSpace = false;
$xml->load('file.xml');

$element = $xml->getElementsByTagName('AddressValidateRequest')->item(0);

//$timestamp = $element->getElementsByTagName('timestamp')->item(0);
$address1 = $element->getElementsByTagName('address1')->item(0);
$address2 = $element->getElementsByTagName('address2')->item(0);
$city = $element->getElementsByTagName('city')->item(0);
$state = $element->getElementsByTagName('state')->item(0);
$zip5 = $element->getElementsByTagName('zip5')->item(0);
$zip4 = $element->getElementsByTagName('zip4')->item(0);


$newItem = $xml->createElement('AddressValidateRequest');

//$newItem->appendChild($xml->createElement('timestamp', date("F j, Y, g:i a",time())));;

$newItem->appendChild($xml->createElement('address1', $_POST['address1']));
$newItem->appendChild($xml->createElement('address2', $_POST['addresss2']));
$newItem->appendChild($xml->createElement('city', $_POST['city']));
$newItem->appendChild($xml->createElement('state', $_POST['state']));
$newItem->appendChild($xml->createElement('zip5', $_POST['zip5']));
$newItem->appendChild($xml->createElement('zip4', $_POST['zip4']));


$xml->getElementsByTagName('Address')->item(0)->appendChild($newItem);

$xml->save('file.xml');

echo "Data has been written.";





// // prepare xml doc for query string
// $doc_string = preg_replace('/[\t\n]/', '', $request_doc_template);
// $doc_string = urlencode($doc_string);

// $url = "http://production.shippingapis.com/ShippingAPI.dll?API=Verify&XML=" . $doc_string;
// //echo $url . "\n\n";

// // perform the get
// $response = file_get_contents($url);

// $xml=simplexml_load_string($response) or die("Error: Cannot create object");
// //print_r($xml);

// echo "Address1: " . $xml->Address->Address1 . "\n";
// echo "Address2: " . $xml->Address->Address2 . "\n";
// echo "City: " . $xml->Address->City . "\n";
// echo "State: " . $xml->Address->State . "\n";
// echo "Zip5: " . $xml->Address->Zip5 . "\n";

?>