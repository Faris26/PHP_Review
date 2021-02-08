<?php 
session_start();
$_SESSIO= [];
session_unset();
session_destroy();
header("Location: Login.php");
exit;
?>