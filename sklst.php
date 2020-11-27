<?php
 if (!function_exists('sklst')) { 
 function sklst(){

$hostlink = "http://localhost:3000/";
$wrkfile = "skill.csv";
$skilltxt = fopen($wrkfile, 'r');
$slinep = fgetcsv($skilltxt);
//$slrincount = $slroutcount;



foreach ($slinep as $csvloop){
$csvsplit = preg_split("|=|", $csvloop);    
$srate = ($csvsplit[1]);
//$slinkt = ($csvsplit[3]);
//$slrincount = count($csvsplit[0]);
//$linkds = ($csvsplit[0]);
//$slinkl = ($hostlink . $slinkt);

//echo "<tr class=\"tstable2\"><td><a href=\"$slinkl\" class=\"minfbt1\" target=\"siframe\">$linkds</a></td>";

//echo "<tr class=\"tstable2\">";
echo "<td>";


for ($slg = 0; ;$slg++, 10) {
    
    if($slg == $srate){    
        break;
    }
    echo "<img class=\"cvimgp2\" src=\"grndot.ico\"</img>";
    }

for ($slr = $srate; ;$slr++) {
   
if($slr == 10){
    break;
}
    echo "<img class=\"cvimgp2\" src=\"reddot.ico\"</img>";           
        }          
}        
echo "</td>";
//echo "</tr>";
    
}

}

 
//echo "</div>"; 
?>
