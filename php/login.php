<?php

include ('dbconnectonline.php');
include ('check_input.php');

    $Login = check_input($_POST['login']);
    $Password = check_input($_POST['password']);

    $sql = "SELECT user_id, naam, lid_id FROM t_users WHERE login = $Login AND password  = $Password";
    $result  = mysql_query($sql);
    $row = mysql_fetch_array($result);

    if (empty($row['user_id'])) {
       echo json_encode('loginerror');
    }

    else {
        session_start();
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['user_naam'] = $row['naam'];
        $_SESSION['user_lid_id'] = $row['lid_id'];
        echo json_encode('loginsuccess');
         }

     mysql_close($conn);
?>


