<?php
session_start();
session_unset();
session_destroy();
 
header("Location: view_login.php");
exit();
?>