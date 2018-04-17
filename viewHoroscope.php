<?php

if(isset($_GET['birthNumber'])){

print_r($_GET);
if (isset($_GET["sign"])) echo "sign is set\n";
if($_GET["sign"] ==="") "sign is empty\n";
}
?>