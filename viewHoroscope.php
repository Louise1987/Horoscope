<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "GET"){

if(isset($_SESSION['birthNumber'])){

print_r($_SESSION['birthNumber']);

// if (isset($_GET["sign"])) echo "sign is set\n";
// if($_GET["sign"] ==="") "sign is empty\n";
}
}
?>
