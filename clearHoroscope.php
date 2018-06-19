<?php 
session_start();

if($_SERVER["REQUEST_METHOD"] == "DELETE"){

unset($_SESSION['birthNumber']);
echo "true";

}
?>