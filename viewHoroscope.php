<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "GET"){
    if($_SESSION == null){
        echo "<p>Inget Horoskop har sparats, skriv in nytt</p>";
    }
    else{
        echo ($_SESSION["horoskope"]);
    }
}
else{
    echo "<p>Not requested by GET</p>";
}

?>