<?php 
session_start();

$_SESSION["birthNumber"] = getSign($datum);
echo "true";




?>