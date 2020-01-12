<?php

include "../Model/farm.class.php";

$farm = new Farm();
$farm->nameFarm = $_POST["nameFarm"];
$farm->socialState = $_POST["socialState"];
$farm->city = $_POST["city"];
$farm->CNPJ = $_POST["CNPJ"];
$farm->CEP = $_POST["CEP"];
$farm->telephone = $_POST["telephone"];
$farm->email = $_POST["email"];

echo $farm;
