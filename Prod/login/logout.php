<?php
// remove all session variables
session_start();
ob_start();
session_unset(); 

// destroy the session 
session_destroy(); 

header('Location: ../index.html');
exit();
?>