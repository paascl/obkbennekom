
 <!-- Agenda --!>

<?php

 $sql = 'SELECT date_format(date, "%d-%m-%Y") AS date, text, aanvang, plaats, onderdeel_id FROM t_agenda WHERE public = 1 AND DATEDIFF(date, now()) >= 0 ORDER BY date_format(date, "%Y-%m-%d") ASC LIMIT 5';
 $result = mysql_query($sql);

$html = '<div class="col-sm-4 uitlijnen">';
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
     $onderdeel_id = $row['onderdeel_id'];

   $onderdeelsql = "SELECT name, default_thumb FROM t_onderdelen WHERE onderdeel_id = $onderdeel_id";
   $onderdeelresult = mysql_query($onderdeelsql);
   $onderdeelrow = mysql_fetch_array($onderdeelresult);
   $onderdeel = $onderdeelrow['name'];
   $onderdeel_thumb = $onderdeelrow['default_thumb'];

   $html .= '<tr title="<img src = &#34' . $onderdeel_thumb . '&#34 class=&#34 popoverthumb &#34><b> '. $onderdeel . '</b>" rel="popover" data-placement="top" data-content="<b>Aanvang: </b>' . $aanvang . '<p><b>Plaats: </b>' . $plaats . '">';

if ($date == date('d-m-Y')) {
   $html .= '<td><font color="RED"><strong>' . $date . '</a></strong></font></td><td><font color="RED"><strong>' . $text . ' (vandaag)</strong></font></td></tr>';
}
   else { $html .= '<td>' . $date . '</a></td><td>' . $text . '</td></tr>';
}   
 }

$html .= '</table>';
$html .= '</div>';
$html .= '<center><p><a href="#">Volledige agenda</a></center>';
$html .= '</div>';
$html .= '</div>';

echo $html;
?>