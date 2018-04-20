<?php 

//skapa Class för att loopa igenom och ge rätt stjärntecken

$starSign = array('Stenbocken'=>1, 
'Vattumannen'=>2, 
'Fiskar'=>3, 
'Vädur'=>4, 
'Oxen'=>5, 
'Tvilling'=>6, 
'Kräfta'=>7, 
'Lejonet'=>8, 
'Jungfrun'=>9, 
'Vågen'=>10, 
'Skorpionen'=>11, 
'Skytten'=>12);

while (list($var, $val) = each($starSign)) {
    print "$var is $val\n";
}




?>