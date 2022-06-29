<?php
  
$riel = 2103942;
$kyat = 19092;
$krones = 109;
$lek = 9094;

echo "At the start of the transaction you had the following: $riel - riel, $kyat - kyat, $krones - krones and $lek - lek.";

//Exchange rates to USD.
$riel_to_usd = 0.00024;
$kyat_to_usd = 0.00054;
$krones_to_usd = 0.10;
$lek_to_usd = 0.0088;

$usd_from_riel = $riel * $riel_to_usd;
$usd_from_kyat = 
