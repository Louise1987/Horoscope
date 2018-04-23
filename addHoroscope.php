<?php
session_start();
include 'calculateHoroscope.php'; 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $datum = $_POST['birthNumber'];

    
//Om input lämnas tomt
}if (empty($_POST['birthNumber']))
echo "<p>Du måste skriva ett datum</p>";

// if(!isset($SESSION['birthNumber'])){
// print_r($_POST['birthNumber']);

//     $_SESSION['birthNumber'] = getSign($datum);
//     
// }

//Om värde sparat i POST stämmer mot calculateHoroscope.php
if (isset($_SESSION["birthNumber"])) {
   $_SESSION['birthNumber'] = getSign($datum);
//Datum matchar inte
}else{
echo "Du har skrivit ett ogiltligt datum!"; 
 }




?>