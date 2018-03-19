<?php
parse_str(file_get_contents("php://input"), $_PUT);
session_start();

if($_SERVER["REQUEST_METHOD"] == "PUT"){
    if($_SESSION["horoskope"] == null){
        echo "<p>Inget horoskop är sparat</p>";
    }
    else if($_PUT["personnr"] == null){
        echo "<p>Skriv in personnummer</p>";
    }
    else{
        $_POST["persnonr"] = $_PUT["personnr"];
        include 'calculateHoroscope.php';
        $falseCheck = $horoscope->printSign();

        if($falseCheck != "<p>Fel datum</p>"){
            $_SESSION["horoscope"] = $horoscope->printSign();
            $true = true;
            echo $true;
        }
        else{
            echo $falseCheck;
            session_destroy();
        }
    }
}
else{
    echo "<p>Not requested by PUT</p>";
}

?>