<?php

//if (!function_exists('siframe')) { 
//function siframe($slinkhtm){

$hostlink = "http://localhost:3000/";
$wrkfile = "skill.csv";
$skilltxt = fopen($wrkfile, 'r');
$slinep = fgetcsv($skilltxt);


foreach ($slinep as $csvloop){
$csvsplit = preg_split("|=|", $csvloop);
$slinkds = ($csvsplit[0]);
$slinkt = ($csvsplit[3]);
$slinkhlc = ($hostlink . $slinkt);
$slinkhtm = (array ("link" => "<td><a href=\"$slinkhlc\" class=\"minfbt1\" target=\"siframe\">$slinkds</a></td>"));
for ($slinkhtm; ;$slinkhtm++, 10){
    break;
}
return array ($slinkhtm);
}

//static $slinkhtm;
//return array ($slinkhtm['link']);

?>
