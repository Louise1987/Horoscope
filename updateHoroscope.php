
<?php 

parse_str(file_get_contents("php://input"), $_PUT);
include 'calculateHoroscope.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'PUT' && $_PUT["datum"] != "") {
    if ($_SESSION['birthNumber'] != "") {
        $newDate = $_PUT['datum'];
       $_SESSION['birthNumber']=getSign($newDate);
        echo "true";
    } else {
        echo "false";        
    }
    
} else {
    echo "false";
}
?>
