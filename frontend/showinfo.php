<?php

$sql = 'SELECT * FROM t_info';
$result = mysql_query($sql) or die (mysql_error);

while ($row = mysql_fetch_array($result)) {
    
    $info_id = $row['info_id'];
    $item = $row['item'];
    $titel = $row['titel'];
    $text = $row['text'];
   
$html = '<div class="info">';
$html .= '<div id="collapse' . $item . '" class="collapse">';

$html .= '<div class="col-sm-8 bg-blue uitlijnen">';
$html .= '<button type="button" class="close" aria-hidden="true" data-toggle="collapse" data-parent="#accordion" href="#collapse' . $item . '">&times;</button>';
$html .= '<h3>' . $titel . '</h3>';

$html .= $text; 
$html .= '<br><br><center><a class="btn btn-default btn-xs" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse' . $item . '"><span class="glyphicon glyphicon-collapse-up"></span>Sluiten</a></p></center>';
$html .= '</div>';  
 
$html .= '<div class="col-sm-4">';

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
 
       $html .= '<center><p><a href="' . $medialocation .'" title="' . $mediatitle . '"><img src="' . $mediathumb . '" class="onderdeelimg"></a></p>';
    }

    if ($mediatype == 'youtube') {
        
        $html .= '<center><iframe width="240" height="120" src="//www.youtube.com/embed/' . $medialocation . '?mode=transparent&modestbranding=0&rel=0&showinfo=0&showsearch=0&controls=2&autohide=1" frameborder="0" allowfullscreen></iframe></a></center>';
   }
  }
 }
$html .= '</div>';
$html .= '</div>';

$html .= '</div>';
$html .= '</div>';
 

echo $html;

}

?>     