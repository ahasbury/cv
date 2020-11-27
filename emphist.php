<?php
// if (!function_exists('whlst')) { 
// function whlst(){
$hostlink = "http://192.168.1.9:3000/";
//$hostlink = "http://localhost:3000/";
$wrkfile = "wh.csv";
$whcsvo = fopen($wrkfile, 'r');
$slinep = fgetcsv($whcsvo);

foreach ($slinep as $csvloop){
$csvsplit = preg_split("|=|", $csvloop);    
//$elink = ($hostlink . $csvsplit[0]);
//$ebut = ("<td class=\"wetabletd\"><a href=\"$elink\" class=\"minfbt1\" target=\"siframe\">$csvsplit[2]</a></td>");
$ebut = ("<td class=\"wetabletd\" class=\"minfbt1\">$csvsplit[2]</td>");
echo "<tr class=\"wetable2\"><td class=\"wetable2\">$csvsplit[1]</td>";
echo  $ebut;
echo "<td>$csvsplit[3]</td>";

echo "</td>";
echo "</tr>";    
  

        } 
//echo "<td><a href=\"$slink\" class=\"minfbt1\">More Info</a></td>";
//    }
//echo "</td>";
//echo "</tr>";    
    
// }


?>