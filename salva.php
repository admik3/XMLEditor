<?php
$name = $_GET["name"];
$ceo = $_GET["ceo"];
$dateCreated = $_GET["dateCreated"];
$state = $_GET["state"];
$street = $_GET["street"];
$city = $_GET["city"];
$zip = $_GET["zip"];
$modifica = $_GET["modifica"];

$xml = new SimpleXMLElement("companies.xml", 0, true);
foreach($xml->company as $comp)
{
    if($comp->name == $_GET["modifica"])
    {
        $comp->name = $name;
        $comp->ceo = $ceo;
        $comp->dateCreated = $dateCreated;
        $comp->address->state = $state;
        $comp->address->street = $street;
        $comp->address->city = $city;
        $comp->address->zip = $zip;
        header("Location: index.php");
        break;
    }
}
$xml->asXML("companies.xml");
?>