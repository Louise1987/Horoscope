<?php
session_start();

//kollar om värde är satt i POST
$date = $_POST["birthNumber"];


$starSign = array(
array(
"tecken" =>1,'stenbocken',
"datum" => 2212 - 1901),
array(
"tecken" =>2, 'Vattumannen',
"datum" => 2001 - 1802),
array(
"tecken" =>3, 'Fiskar',
"datum" => 1902 - 2003),
array(
"tecken" =>4, 'Vädur',
"datum" => 2103 - 1904),
array(
"tecken" =>5,'Oxen',
"datum" => 2004 - 2005),
array(
"tecken" =>6,'Tvilling'
"datum" => 2105 - 2106),
array(
'Kräfta'=>7, 
"datum" => 2206 - 2207),
array(
'Lejonet'=>8, 
"datum" => 2306 - 2208), 
array(
'Jungfrun'=>9, 
"datum" => 2308 - 2209),
array(
'Vågen'=>10, 
"datum" => 2309 - 2210),
array(
'Skorpionen'=>11, 
"datum" => 2310 - 2111),
array(
'Skytten'=> 12,
"datum" => 2211 - 2112));


    $query=$_POST["birthNumber"];
    foreach ($starSign as $key => $sign)
    {
        if ($query == $key)
        {
            echo $sign;
        }
    }

//Om värde sparat i POST stämmer mot array
if (isset($_POST["birthNumber"]) && !empty($_GET["birthNumber"])) {
    echo "ditt födelse datum är $date";
function sortDates( $)

//Datum matchar inte mot array
}else{
echo "Du har skrivit ett ogiltligt datum"; //skapa funktion att jämföra datum mot sen
}
    
    

// else {
//   (!empty($_POST["birthNumber"])) 
   


// while (list($var, $val) = each($starSign)) {
//     print "$var is $val\n";
// }

// $date = $_GET["birthNumber"];
// if (isset($_GET["birthNumber"]) && !empty($_GET["birthNumber"])) {
// echo "ditt födelse datum är $date";
// }else{
// echo "Du har skrivit ett ogiltligt datum"; //skapa funktion att jämföra datum mot sen
// }

?>