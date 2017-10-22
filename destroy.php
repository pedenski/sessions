<?php
session_start();
unset($_SESSION['counter']);
session_destroy();

?>

<a href="index.php"> Index </a>