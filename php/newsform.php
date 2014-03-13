<?php

require 'dbconnect.php';
require 'check_input.php';

    $Naam = check_input($_POST['naam']);
    $Mail = check_input($_POST['email']);

    if (isset($Naam) and isset($Mail)) {

    $sql = "SELECT email FROM t_newsleden WHERE email = $Mail";
    $result  = mysql_query($sql);
    $row = mysql_fetch_array($result);

    if (isset($row['email'])) {
       $arrJson = array('status' => 'error');
       echo json_encode($arrJson);
    }

    else {
     $insertsql = "INSERT INTO t_newsleden (naam, email) VALUES ($Naam, $Mail)";
     mysql_query ($insertsql);

        $arrJson = array('status' => 'success');
        echo json_encode($arrJson);
    } }
mysql_close($conn);

?>