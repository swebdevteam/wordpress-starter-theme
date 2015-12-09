<?php

// SOAP Request to RealPage
$client = new SoapClient('http://OneSite.RealPage.com/WebServices/CrossFire/AvailabilityAndPricing/Unit.asmx?WSDL', array("trace" => 1, "exception" => 0)); 
$authentication = array(
  'UserName'=>'SDevelopment',
  'Password'=>'SDevelopment1234',
  'SiteID' => '3570218',
  'PmcID' => '1049405'
);

$checkdate = new DateTime();
$checkdate->add(new DateInterval('P1Y'));

$listCriteriaXML = '<List xmlns="http://realpage.com/webservices">
  <listCriteria>
    <ListCriterion>
      <Name>DateNeeded</Name>
      <SingleValue>'.$checkdate->format('Y-m-d').'</SingleValue>
    </ListCriterion>
    <ListCriterion>
      <Name>limitresults</Name>
      <SingleValue>false</SingleValue>
    </ListCriterion>
  </listCriteria>
</List>';
$listCriteria = new SoapVar($listCriteriaXML, XSD_ANYXML);

$headers = new SoapHeader('http://realpage.com/webservices','UserAuthInfo',$authentication,false);
$client->__setSoapHeaders(array($headers));
$response = $client->List($listCriteria);

// echo "REQUEST:\n" . $client->__getLastRequest() . "\n";

// Response
$array = json_decode(json_encode((array)$response->ListResult->UnitObject), TRUE);

// JSON Data Array
$data = array();

if(isset($array[0])) {
  // Parse Response
  foreach ($array as $key => $unit) {
    $floorplancode = $unit['FloorPlan']['FloorPlanCode'];
    $unitData = array(
      "UnitName" => $unit['FloorPlan']['FloorPlanCode'],
      "UnitNumber" => $unit['Address']['UnitNumber'],
      "Rent" => $unit['BaseRentAmount'], // was UnitMarketRent
      "DateAvailable" => $unit['Availability']['MadeReadyDate'],
      "UnitId" => $unit['Address']['UnitID']
    );
    $data[$floorplancode][] = $unitData;
  }
} else {
  // Parse Response
  $unit = $array;
  $floorplancode = $unit['FloorPlan']['FloorPlanCode'];
  $unitData = array(
    "UnitName" => $unit['FloorPlan']['FloorPlanCode'],
    "UnitNumber" => $unit['Address']['UnitNumber'],
    "Rent" => $unit['BaseRentAmount'],
    "DateAvailable" => $unit['Availability']['MadeReadyDate'],
    "UnitId" => $unit['Address']['UnitID']
  );
  $data[$floorplancode][] = $unitData;
}

// Return JSON Data
$jsonData = json_encode($data, JSON_NUMERIC_CHECK);

// Save File
file_put_contents('unit-list.json', $jsonData);

// print_r($array);

?>