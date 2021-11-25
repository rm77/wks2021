<?php

session_start();

if (!isset($_SESSION['id_token'])) {

	echo "not authenticated";
?>
<br><br>
<a href="auth.php">Login</a>
<?php
    exit;
}


echo "authenticated";

print_r($_SESSION['user']);


