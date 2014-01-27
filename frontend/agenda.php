
<?php

include ('php/dbconnect.php');

 $sql = 'SELECT date_format(date, "%d-%m-%Y") AS date, text, aanvang, plaats FROM t_agenda WHERE public = 1 AND DATEDIFF(date, now()) >= 0 ORDER BY date LIMIT 5';
 $result = mysql_query($sql);

$html = '<div class="col-sm-4">';
$html .= '<div class="panel panel-default">';
$html .= '<div class="panel-heading">';
$html .= '<h4 class="panel-title"><strong><span class="glyphicon glyphicon-calendar"></span> Activiteiten</strong></h4>';
$html .= '</div>';
$html .= '<div class="panel-body">'; 
$html .= '<table class="table">';

 while ($row = mysql_fetch_array($result)) {
     $date = $row['date'];
     $text = $row['text'];
     $aanvang = $row['aanvang'];
     $plaats = $row['plaats'];

   $html .= '<tr><td>' . $date . '</td><td>' . $text . '</td></tr>';

 }

$html .= '</table>';
$html .= '</div>';
$html .= '<center><p><a href="#">Volledige agenda</a></center>';
$html .= '</div>';
$html .= '</div>';

echo $html;
mysql_close ($conn);
?>