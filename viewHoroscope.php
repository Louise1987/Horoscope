<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "GET"){

    if(isset($_SESSION['birthNumber'])){

    
    print_r($_SESSION['birthNumber']);
  

    }else{
    
    echo "inget datum";
    }
}
?>
