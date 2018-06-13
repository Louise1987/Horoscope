<?php 
include 'calculateHoroscope.php';

session_start();
//$datum sätter stjärntecknet
//kolla om session finns ska den uppdatera annars ska den inte uppdatera.

if($_SERVER["REQUEST_METHOD"] == "PUT"){

    if ($_POST["datum"] !== "" Or $_SESSION['datum'] == ""){
        echo "true";
    }
    else{
        echo "false";
}
}



?>