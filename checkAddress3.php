<?php
$request_doc_template = <<<EOT
<?xml version="1.0"?>
<AddressValidateRequest USERID="300ASONS2245">
	<Revision>1</Revision>
	<Address ID="0">
		<Address1>12175 Visionary Way </Address1>
		<Address2></Address2>
		<City>YFishers</City>
		<State>IN</State>
		<Zip5></Zip5>
		<Zip4/>
	</Address>
</AddressValidateRequest>
EOT;

$doc_string = preg_replace('/[\t\n]/','',$request_doc_template);
$doc_string=urlencode($doc_string);

$url="http://production.shippingapis.com/ShippingAPI.dll?API=Verify&XML=" . $doc_string;

$response = file_get_contents($url);

$xml=simplexml_load_string($response) or die("Error: Connot createobject");
//print_r($xml);

echo "address1:". $xml->Address->Address1 . "\n";
echo "address2:". $xml->Address->Address2 . "\n";
echo "City:". $xml->Address->City . "\n";
echo "State:". $xml->Address->State . "\n";
echo "Zip5:". $xml->Address->Zip5 . "\n";
echo "Zip4:". $xml->Address->Zip4 . "\n";
