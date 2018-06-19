<?php

session_start();
include 'calculateHoroscope.php';

//funktion för att få värdet i $_SESSION
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if ($_POST["datum"] != "" && $_SESSION['birthNumber'] == ""){
        
        $datum = $_POST["datum"];
        $_SESSION['birthNumber']=getSign($datum);
        //$_SESSION['birthNumber']=$datum;
        echo "true";   
    } else {
        echo "false";
    }
    
} else {
    echo "false"; 
}
 
?>