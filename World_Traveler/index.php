<?php
  
$riel = 2103942;
$kyat = 19092;
$krones = 109;
$lek = 9094;

echo "At the start of the transaction you had the following: $riel - riel, $kyat - kyat, $krones - krones and $lek - lek.\n";

//Exchange rates to USD.
$riel_to_usd = 0.00024;
$kyat_to_usd = 0.00054;
$krones_to_usd = 0.10;
$lek_to_usd = 0.0088;

$usd_from_riel = $riel * $riel_to_usd;
echo "Your riel was exchanged for $usd_from_riel USD.\n";
$usd_from_kyat = $kyat * $kyat_to_usd;
echo "Your kyat was exchanged for $usd_from_kyat USD.\n";
$usd_from_krones = $krones * $krones_to_usd;
echo "Your krones was exchanged for $usd_from_krones USD.\n";
$usd_from_lek = $lek * $lek_to_usd;
echo "Your lek was exchanged for $usd_from_lek USD.\n";


$final_amount = $usd_from_riel + $usd_from_kyat + $usd_from_krones + $usd_from_lek - 4;
$final_amount_rounded = round($final_amount, 2);
echo "After deducting the transaction fee ($1 per transaction), you will be recieving $final_amount_rounded USD.";