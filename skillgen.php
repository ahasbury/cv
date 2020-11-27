<?php



$hostlink = "http://192.168.1.9:3000/";
//$hostlink = "http://localhost:3000/";
$wrkfile = "skill.csv";
$skilltxt = fopen($wrkfile, 'r');
$slinep = fgetcsv($skilltxt);
$wrkfilesr = "srate.csv";
$skilltxtsr = fopen($wrkfilesr, 'r');
$slinepsr = fgetcsv($skilltxtsr);

foreach ($slinepsr as $csvloop){
$csvsplit = preg_split("|=|", $csvloop);

$srate = ($csvsplit[1]);
$stxt = ($csvsplit[0]);
//$slinkhlc = ($hostlink . $slinkt);
echo "<tr class=\"cvskglst\">";
echo "<td>$stxt</td>";
echo "<td class=\"cvskltxclr\";>";
for ($slg = 0; ;$slg++, 10) {
    
    if($slg == $srate){    
        break;
    }
      echo "#";
//    echo "<img class=\"cvimgp2\" src=\"grndotnew.ico\"</img>";
    }
       

for ($slr = $srate; ;$slr++) {
   
if($slr == 10){
    break;
}
echo "-";
//    echo "<img class=\"cvimgp2\" src=\"reddot.ico\"</img>";           
 
    }
    
echo "</td>" ;   
echo "</tr>";
}

//echo                        "</table>";
            

//echo            "</div>";   
                
//echo "</table>";
//echo "<div style=\"height:25px\"></div>";
//echo "<div class=\"siframediv\">";
//echo "<iframe src=\"$slinkhlc\" name=\"siframe\" class=\"siframe\"></iframe>";
//echo "</div>";
         ?>
            

         