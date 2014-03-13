<?php

require 'dbconnect.php';
require 'check_input.php';

    $Mail = check_input($_POST['email']);

    $sql = "SELECT login FROM t_users WHERE login = $Mail";
    $result  = mysql_query($sql);
    $row = mysql_fetch_array($result);

    if (isset($row['login']) || empty($Mail)) {
       $arrJson = array('status' => 'error');
       echo json_encode($arrJson);
    }

    else {
     if (empty($_SESSION)) { session_start(); }
     $user_id = $_SESSION['user_id'];
     $updatesql = "UPDATE t_users SET login = $Mail WHERE user_id = $user_id";
     mysql_query ($updatesql);

        $arrJson = array('status' => 'success');
        echo json_encode($arrJson);
        $_SESSION['login'] = str_replace("'", "", $Mail); 
         }
mysql_close($conn);

?>


