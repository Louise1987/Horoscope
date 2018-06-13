<?php 
include 'calculateHoroscope.php';

session_start();
//$datum sätter stjärntecknet
//kolla om session finns ska den uppdatera annars ska den inte uppdatera.

if($_SERVER["REQUEST_METHOD"] == "PUT"){

    if ($_POST["datum"] !== "" Or ($_SESSION['datum'] == "")){

        $datum = $_POST["datum"];
        $_SESSION['datum']=$datum;
        echo "true";   
    } else {
        echo "false";
    }    
    } else {
        echo "false";
}




?>