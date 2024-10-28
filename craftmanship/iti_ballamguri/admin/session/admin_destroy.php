<?php
session_start();


    unset($_SESSION[$appNameLower . '_email']);
    unset($_SESSION['this_admin_id']);
    unset($_SESSION['this_admin_name']);
    unset($_SESSION['this_admin_username']);
    unset($_SESSION['userType']);
    
    // session_destroy();
    header('location: ../login.php');
    exit();

?>
