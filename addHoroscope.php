<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

if($_POST["personnr"] == null && $_SESSION["starSign"] == null){
    echo "<p>Skriv in personnummer</p>";
}
else if($_SESSION["starSign"] == null){
    if($wrongDate != "<p>Fel datum</p>"){
        $_SESSION["starSign"] = $starSign->printSign();
        echo "true";
    } else {
        echo $wrongDate;
    }
    }
    else if($_SESSION["starSign"] != null){
        echo "<p>Du har ett sparat horoskop. Uppdatera datum på knappen uppdatera</p>";
    }
}
else{
    echo "<p>Not requested by POST</p>";
}

?>


