<?php
session_start();
include 'calculateHoroscope.php';

//funktion för att få värdet i $_SESSION i variabler $datum och $horoscope

$datum = "870507";
echo $datum;

$_SESSION['birthNumber']=getSign($datum);



   
 
// if($_SERVER["REQUEST_METHOD"] == "POST"){
//     $datum = $_POST["birthNumber"];




 

//Om ett horoscope redan finns sparat ska det inte skrivas över
// if (isset($_SESSION["birthNumber"] )){
// $_SESSION["birthNumber"] = $_POST["birthNumber"];
// }
   

    


// (empty($_POST["birthNumber"])) {
// echo "skriv in datum";
   
   
// //Datum matchar inte
// }else{
// echo "misslyckades"; 
//  }
 //}
 
?>