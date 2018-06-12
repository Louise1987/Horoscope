<?php
session_start();
include 'calculateHoroscope.php';

//funktion för att få värdet i $_SESSION
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $datum = $_POST["birthNumber"];

$datum = $_POST['birthNumber'];
echo $datum;

$_SESSION['birthNumber']=getSign($datum);
//räkna ut stjärntecken
//     if (isset($_SESSION[1])){
//     return $_SESSION[0];
// }
// return '';

   
}





 

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