<?php 
session_start();

if($_SERVER["REQUEST_METHOD"] == "DELETE"){

unset($_SESSION['datum']);
echo "true";

}
?>