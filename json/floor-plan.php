<?php

// SOAP Request to RealPage
$client = new SoapClient('http://OneSite.RealPage.com/WebServices/CrossFire/AvailabilityAndPricing/FloorPlan.asmx?WSDL', array("trace" => 1, "exception" => 0)); 
$authentication = array(
  'UserName'=>'SDevelopment',
  'Password'=>'SDevelopment1234',
  'SiteID' => '3570218',
  'PmcID' => '1049405'
);
$headers = new SoapHeader('http://realpage.com/webservices','UserAuthInfo',$authentication,false);
$client->__setSoapHeaders(array($headers));
$response = $client->List();

// Response
$array = json_decode(json_encode((array)$response->ListResult->FloorPlanObject), TRUE);

// JSON Data Array
$data = array();

// Parse Response
foreach ($array as $key => $unit) {
  $floorplancode = $unit['FloorPlanCode'];
  $data[$floorplancode] = array(
    "RentMin" => $unit['RentMin'],
    "RentMax" => $unit['RentMax']
  );
}

// Return JSON Data
$jsonData = json_encode($data, JSON_NUMERIC_CHECK);

// Save File
file_put_contents('floor-plan.json', $jsonData);

?>