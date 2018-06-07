<?php
session_start();
include 'calculateHoroscope.php';

// if($_SERVER["REQUEST_METHOD"] == "POST"){
//     $datum = $_POST["birthNumber"];

$_SESSION['birthNumber'];
    echo "true";




//Om värde sparat i POST stämmer mot värde i calculateHoroscope.php


 

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