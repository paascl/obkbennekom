
<?php

if (empty($_SESSION)) { session_start(); } 

if (empty($_SESSION['user_id'])) {
    $avatar = 'default-user.png';
    $username = '';
    $html = '<span class="profielbtn pull-right" style="display:none">';
}

else {
    $avatar = $_SESSION['avatar'];
    $username = $_SESSION['user_naam'];
    $html = '<span class="profielbtn pull-right">';
}

$html .= '<div class="btn-group">';
$html .= '<button type="button" class="btn btn-link btn-sm navbar-btn dropdown-toggle" data-toggle="dropdown">';
$html .= '<img src="img/profiles/'. $avatar . '" width="25" height="25"> ' . $username . ' '; 
$html .= '<span class="caret"></span></button>';
$html .= '<ul class="dropdown-menu" role="menu">';
$html .= '<li><a href="#"><span class="glyphicon glyphicon-th-list"></span> Dashboard</a></li>';
$html .= '<li><a class="btn btn-default btn-link hidden-xs" href="../backend/editprofile.php" data-toggle="modal" data-target="#profilemodal"><span class="glyphicon glyphicon-user"></span> Profiel bewerken</a></li>';
$html .= '<li role="presentation" class="divider"></li>';
$html .= '<li><a class="btn btn-link logout" role="button"><span class="glyphicon glyphicon-log-out"></span> Uitloggen</a></li>';
$html .= '</ul>';
$html .= '</div>';
$html .= '</span>';

$html .= '<script src="../js/obkfrontend.js"></script>';


   echo $html;


