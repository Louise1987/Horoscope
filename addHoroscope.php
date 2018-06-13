<?php
session_start();
//include 'calculateHoroscope.php';
//funktion för att få värdet i $_SESSION
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if ($_POST["datum"] != "" Or $_SESSION['datum'] == ""){
        
        $datum = $_POST["datum"];
        //$_SESSION['datum']=getSign($datum);
        $_SESSION['datum']=$datum;
        echo "true";   
    } else {
        echo "false";
    }
    //kolla funktion matcha datum mot stjärntecken i calculateHoroscope
} else {
    echo "false"; 
}
 
?>