<?php

require 'dbconnect.php';
require 'check_input.php';

    $Login = check_input($_POST['login']);
    $Pass = mysql_real_escape_string($_POST['password']);

    $sql = "SELECT user_id, login, naam, lid_id, avatar, password FROM t_users WHERE login = $Login";
    $result  = mysql_query($sql) or die(MYSQL_ERROR);
    $row = mysql_fetch_array($result);

    if (password_verify(md5($Pass), $row['password'])) {
      if (empty($_SESSION)) { session_start(); }
      
       $avatar = $row['avatar'];
       if ($avatar == '') {
           $avatar = 'default-user.png';
       }
      
      $_SESSION['type'] = 'login';
      $_SESSION['user_id'] = $row['user_id'];
      $_SESSION['login'] = $row['login'];
      $_SESSION['user_naam'] = $row['naam'];
      $_SESSION['user_lid_id'] = $row['lid_id'];
      $_SESSION['avatar'] = $avatar;
      $arrJson = array('status' => 'loginsuccess', 'username' => $row['naam']);
      echo json_encode($arrJson);
     }

     else {
      $arrJson = array('status' => 'loginerror');
      echo json_encode($arrJson);
     }
mysql_close($conn);

?>


