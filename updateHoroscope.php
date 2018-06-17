<?php 
session_start();
include 'calculateHoroscope.php';


//$datum sätter stjärntecknet
//kolla om session finns ska den uppdatera annars ska den inte uppdatera.

if($_SERVER["REQUEST_METHOD"] == "PUT"){
//echo("{$_SESSION['test']}");

    die(var_dump($_POST['datum']));
    //om SESSION är sparad
    if (isset($_SESSION["datum"]) && (!empty($_POST['datum']))){

    $_SESSION['datum'] = $_POST["datum"];
        
        echo "true"; 

    //om SESSION inte är sparad
    } else if
         (!isset($_POST["datum"])){ 
         //|| ($_SESSION["datum"]) != ""){

        echo "false";
    }    
    else {
    echo "false";
}
}

?>