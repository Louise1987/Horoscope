<?php
session_start();
include 'calculateHoroscope.php';

// if($_SERVER["REQUEST_METHOD"] == "POST"){
//     $datum = $_POST["birthNumber"];

$datum = "0507";
echo "true";



//Om värde sparat i POST stämmer mot calculateHoroscope.php
// if (isset($_POST["birthNumber"])) {
   $_SESSION["birthNumber"] = getSign($datum);
   //print_r($horoscope);

// //Om input lämnas tomt
// if
// (empty($_POST["birthNumber"])) {
// echo "lyckades";
   
   
// //Datum matchar inte
// }else{
// echo "misslyckades"; 
//  }
// }
// }
?>