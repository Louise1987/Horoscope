<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "GET"){

    if(isset($_SESSION['datum'])){

    print_r($_SESSION['datum']);
    // echo "ditt datum";

    }else{
    // unset($_SESSION['datum']);
    echo "inget datum";
    }
}
?>
