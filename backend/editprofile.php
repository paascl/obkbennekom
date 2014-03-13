
<?php

if (empty($_SESSION)) { session_start(); }

$html = '<script src="../js/jquery.form.js"></script>';
$html .= '<script src="../js/obkbackend.js"></script>';
$html .= '<script src="../js/jquery.bsAlerts.min.js"></script>';


$html .= '<div class="modal-dialog">';
$html .= '<div class="modal-content">';
$html .= '<div class="modal-header">';
$html .= '<button type="button" class="close" data-dismiss="modal">&times;</button>';
$html .= '<h4 class="modal-title">Profiel bewerken - ' . $_SESSION['user_naam'] . '</h4>';
$html .= '</div>';
$html .= '<div class="modal-body">';
$html .= '<div data-alerts="alerts" data-fade="3000"></div>';
$html .= '<table class="table table-hover">';
$html .= '<tr>';
$html .= '<td>Profielfoto</td>';

if ($_SESSION['avatar'] == 'default-user.png') {
$html .= '<td><div id="preview">';
$html .= '<img src="img/profiles/default-user.png" width="150" height="150px" class="img-thumbnail">';
$html .= '</div></td>';
}
else {
$html .= '<td>';
$html .= '<div id="preview">';
$html .= '<img src="img/profiles/' . $_SESSION['avatar'] . '" width="150" height="150px" class="img-thumbnail"></td>';
$html .= '</div></td>';
}


$html .= '<td>';
$html .= '<form id="imageform" method="post" enctype="multipart/form-data" action="../php/imageupload.php">'; 
$html .= '<input type="file" name="photoimg" id="photoimg" />';
$html .= '</form>';
$html .= '</td>';

$html .= '</tr>';
$html .= '<tr>';
$html .= '<td>Email adres</td>';
$html .= '<td><span class="emailfield">' . $_SESSION['login'] . '</span>';
$html .= '<form role="form">';
$html .= '<span class="emailform" style="display:none"><input type="email" class="form-control" id="inputEmail" placeholder="E-mail"></span>';
$html .= '<span class="opgeslagen" style="display:none">Opgeslagen!</span>';
$html .= '<span class="emailerror" style="display:none"> Voer een geldig email adres in. </span</td>';
$html .= '</form>';

$html .= '<td><button type="button" class="btn btn-primary btn-xs emailchange" data-toggle="button"><span class="glyphicon glyphicon-wrench"></span> Bewerken</button>';
$html .= '<span class="savemail" style="display:none">';
$html .= '<button type="button" class="btn btn-danger btn-xs emailsave"><span class="glyphicon glyphicon-save"></span> Opslaan</button></span></td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td>Wachtwoord</td>';
$html .= '<td><span class="passwordfield">*************</span>';
$html .= '<form role="form">';
$html .= '<span class="passwordform" style="display:none">';
$html .= '<input type="password" class="form-control" id="inputPass1" placeholder="Wachtwoord">';
$html .= '<input type="password" class="form-control" id="inputPass2" placeholder="Wachtwoord">';
$html .= '</span>';
$html .= '<span class="opgeslagenpassword" style="display:none">Opgeslagen!</span>';
$html .= '<span class="passworderror" style="display:none"> Vul 2 identieke wachtwoorden in. </span</td>';
$html .= '</form>';

$html .= '<td><button type="button" class="btn btn-primary btn-xs passwordchange"><span class="glyphicon glyphicon-wrench"></span> Bewerken</button>';
$html .= '<span class="savepass" style="display:none">';
$html .= '<button type="button" class="btn btn-danger btn-xs passwordsave"><span class="glyphicon glyphicon-save"></span> Opslaan</button></span></td>';
$html .= '</tr>';

$html .= '</table>';
$html .= '</div>';
$html .= '</div>';
$html .= '</div>';

echo $html;

?>