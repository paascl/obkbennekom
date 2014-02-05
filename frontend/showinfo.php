<?php

$sql = 'SELECT * FROM t_info';
$result = mysql_query($sql) or die (mysql_error);

while ($row = mysql_fetch_array($result)) {
    
    $info_id = $row['info_id'];
    $item = $row['item'];
    $titel = $row['titel'];
    $text = $row['text'];
   
$html = '<div id="collapse' . $item . '" class="panel-collapse collapse">';
$html .= '<div class="panel-body">';
$html .= '<div class="panel panel-default">';
$html .= '<div class="panel-heading">';
$html .= '<button type="button" class="close" aria-hidden="true" data-toggle="collapse" data-parent="#accordion" href="#collapse' . $item . '">&times;</button>';

$html .= '<div class="panel-title"><h3>' . $titel . '</h3></div>';
$html .= '<div class="panel-body">';
$html .= '<div class="col-sm-5">';

     $subinfosql = "SELECT * FROM t_subinfo WHERE info_id = $info_id";
     $subinforesult = mysql_query($subinfosql);
 
  if (mysql_num_rows($subinforesult) > 0) {

$html .= '<div class="panel panel-default hidden-xs">'; 
$html .= '<div class="panel-heading"><strong>Algemene info</strong></div>';
$html .= '<div class="panel-body">';
$html .= '</div>';

  $html .= '<table class="table">';

     while ($subinforow = mysql_fetch_array($subinforesult)) {

         $infotitle = $subinforow['title'];
         $infotext = $subinforow['text'];

            $html .= '<tr>';
            $html .= '<td><b>' . $infotitle . '</b></td>';
            $html .= '<td>' . $infotext . '</td>';
            $html .= '</tr>';
      }

    $html .= '</table>';
    $html .= '</div>';
 } 

 $mediasql = "SELECT * FROM t_infomedia WHERE info_id = $info_id";
 $mediaresult = mysql_query($mediasql);

$html .= '<div id="' . $item . '">';
if (mysql_num_rows($mediaresult) > 0) {
 while ($mediarow = mysql_fetch_array($mediaresult)) {
 
    $mediatype = $mediarow['type'];
    $medialocation = $mediarow['location'];
    $mediatitle = $mediarow['title'];
    $mediathumb = $mediarow['thumb'];
        
     
    if ($mediatype == 'foto') {  
 
        $html .= '<br></br>';
        $html .= '<center><p><a href="' . $medialocation .'" title="' . $mediatitle . '"><img src="' . $mediathumb . '" class="onderdeelimg"></a></p>';
    }

    if ($mediatype == 'youtube') {
        
        $html .= '<br></br>';
        $html .= '<center><iframe width="240" height="120" src="//www.youtube.com/embed/' . $medialocation . '?mode=transparent&modestbranding=0&rel=0&showinfo=0&showsearch=0&controls=2&autohide=1" frameborder="0" allowfullscreen></iframe></a></center>';
   }
  }
 }
$html .= '</div>';
$html .= '</div>';

$html .= '<div class="col-sm-7">';
$html .= $text; 
$html .= '<br><br><a class="btn btn-default btn-xs" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse' . $item . '">Sluiten</a></p></center>';


$html .= '</div>';
$html .= '</div>';
$html .= '</div>';
$html .= '</div>';
$html .= '</div>';
$html .= '</div>';        

echo $html;

}

?>     