<?php

$cookie_name = 'acceptCookie';
$cookie_value = 'runCookie';
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/'); 

if(isset($COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

<p>Den här sidan använder cookie<p>


<form action='disclaimer.php' method='POST'>
<input type='submit' formaction='index.php' name='text'>Acceptera</input>
</form>



<?php
print_r($_POST['data']);

?>


