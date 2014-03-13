<?php

require 'dbconnect.php';

    $Pass1 = $_POST['pass1'];
    $Pass2 = $_POST['pass2'];

    if ($Pass1 != $Pass2) {
       $arrJson = array('status' => 'error');
       echo json_encode($arrJson);
    }

    elseif (strlen($Pass1) < 8 or strlen($Pass1) > 15) {
       $arrJson = array('status' => 'error2');
       echo json_encode($arrJson);
   
    }

    else {
     if (empty($_SESSION)) { session_start(); }
     $user_id = $_SESSION['user_id'];
        $password = password_hash(md5($Pass1), PASSWORD_DEFAULT);
        $sql = "UPDATE t_users SET password = '$password' WHERE user_id = $user_id";
        mysql_query($sql) or die(MYSQL_ERROR);
        $arrJson = array('status' => 'success');
        echo json_encode($arrJson);
         }
mysql_close($conn);

?>


