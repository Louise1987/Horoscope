<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "GET"){

    if(isset($_SESSION['birthNumber'])){

    
    print_r($_SESSION['birthNumber']);
    // echo "ditt datum";

    }else{
    // unset($_SESSION['datum']);
    echo "inget datum";
    }
}
?>
