<?php

$xml=simplexml_load_file("file.xml") or die("Error: Cannot Create Object");
echo"A";
if (isset($_POST['submit'])) {    
 // $oldAddress1 =($_POST['oldAddress1']);
  $address1 = $_POST['address1'];
  $address2 = $_POST['address2'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip5 = $_POST['zip5'];
  $zip4 = $_POST['zip4'];
echo"b";
    $xslstr = '<xsl:transform xmlns:xsl="http://production.shippingapis.com/ShippingAPI.dll?API=Verify&XML=" version="1.0">
               <xsl:output version="1.0" encoding="UTF-8" indent="yes" />
               <xsl:strip-space elements="*"/>
echo "one";
                    <xsl:template match="@*|node()">
                      <xsl:copy>
                        <xsl:apply-templates select="@*|node()"/>
                      </xsl:copy>
                    </xsl:template>
echo"two";
                    <xsl:template match="AddressValidateRequest[address1=\''.$oldAddress1.'\']">
                        <xsl:copy>
                        <AddressValidateRequest USERID="300ASONS2245">
                        <Revision>1</Revision>
                        <Address ID="0">
                          <Address1>'.$address1.'</Address1>
                          <Address2>'.$address2.'</Address2>
                          <City>'.$city.'</City>
                          <State>'.$state.'</State>
                          <Zip5>'.$zip5.'</Zip5>
                          <zip4>'.$zip4.'<Zip4/>
                        </Address>
                      </AddressValidateRequest>
                        </xsl:copy>
                    </xsl:template>
echo "three";
                </xsl:transform>';

    $xsl = new DOMDocument;
    $xsl->loadXML($xslstr);

    // Configure the transformer
    $proc = new XSLTProcessor;
    $proc->importStyleSheet($xsl); 
echo"4";
    // Transform XML source
    $newXml = $proc->transformToXML($xml);

    // Save into new file
    file_put_contents("Form_php.xml", $newXml);
}

if(isset($_POST['search'])) {
    //query the document
    $address1 =  $_POST['address1'];

    $query = $xml->xpath("/AddressValidateRequest/Address[address1 = '$address1']");
    $array=$query;

    $count=0;
    $size=count($array);

    echo "<center>";
    echo '<form id="addressform" name="addressform" method="post">';    
    while($count!=count($array)){
        foreach ($array[$count]->children() as $child) {
            $getElementTag=$child->getName();
            echo '<label>'.$getElementTag.'</label>'." ";
            echo '<input type="text" name="'. $getElementTag .'" value= "'.$child.'" size="30"></intput>';
            echo "<br>";
            echo "<br>";
        }
        $count++;
    }
    echo '<input type="hidden" name="oldAddress1" value="'.$name.'"></input>';
    echo '<input type="submit" name="modify" value="Update Record">'.'<br>';


echo "</form>";
echo "***************************";
echo "</center>";
}

?>