<?php 
include 'calculateHoroscope.php';

session_start();
//$datum sätter stjärntecknet
//kolla om session finns ska den uppdatera annars ska den inte uppdatera.

if($_SERVER["REQUEST_METHOD"] == "PUT"){

    //om SESSION är sparad
    if (isset($_POST["datum"]) && $_SESSION['datum'] == 1){

         $datum = $_POST["datum"];
        // $_SESSION['datum']=$datum;
        $_SESSION['datum']=$datum;
        echo "true"; 

    //om SESSION inte är sparad
    } else if
         (isset($_POST["datum"]) && $_SESSION["datum"] == 0){

        echo "false";
    }    
} else {
    echo "false";
}




?>