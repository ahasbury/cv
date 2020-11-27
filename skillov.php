<?php

foreach ($slinep as $csvloop){
$csvsplit = preg_split("|=|", $csvloop);

//$srate = ($csvsplit[1]);
$slinkds = ($csvsplit[0]);
$slinkt = ($csvsplit[3]);
$slinkhlc = ($hostlink . $slinkt);

//echo "<tr class=\"tstable2\">";
$slinkhtm = ("<td class=\"tstabletd\"><a href=\"$slinkhlc\" class=\"minfbt1\" target=\"siframe\">$slinkds</a></td>");
//echo $slinkhtm;   
//echo "</td>" ;   
//echo "</tr>";


}


?>