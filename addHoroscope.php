<?php

session_start();
include 'calculateHoroscope.php';


if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if ($_POST["datum"] != "" && $_SESSION['birthNumber'] == ""){
        
        $datum = $_POST["datum"];
        $_SESSION['birthNumber']=getSign($datum);
        
        echo "true";   
    } else {
        echo "false";
    }
    
} else {
    echo "false"; 
}
 
?>