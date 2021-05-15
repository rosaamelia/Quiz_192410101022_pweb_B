<?php
session_start();
$_SESSION=[];
session_unset();
session_destroy();

setcookie('username', '', time() - 3600 );
setcookie('password', '', time() - 3600 );

header('location: index.php');
exit;
?>