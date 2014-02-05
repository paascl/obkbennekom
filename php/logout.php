<?php
    if (empty($_SESSION)) { session_start(); }
        $_SESSION['type'] = 'gast';
        unset($_SESSION['user_id']);
        unset($_SESSION['user_naam']);
        unset($_SESSION['user_lid_id']);
       
?>

