 <!-- Carousel !-->

<?php  
 
 $sql = 'SELECT * FROM t_carousel';
 $result = mysql_query($sql);
 $count = mysql_num_rows($result);

 $firstslide = TRUE;

 $html = '<div id="myCarousel" class="carousel caption slide hidden-xs" data-ride="carousel">';
 $html .= '<ol class="carousel-indicators">';
 
  for ($i=0;$i<$count;$i++) {
    $html .= '<li data-target="#myCarousel" data-slide-to="' . $i . '"></li>';
  }   
  $html .= '</ol>';
  $html .= '<div class="carousel-inner">';

while ($row = mysql_fetch_array($result)) {

$img = $row['image'];
$text = $row['header_text']; 
$button = $row['button'];
$agenda = $row['agenda'];
    
  if ($firstslide==TRUE) {
   $html .= '<div class="item active">';
   $firstslide = FALSE;
  }

  else {
  $html .= '<div class="item">';
  }

  $html .= '<img src="' . $img . '">';
  $html .= '<div class="carousel-caption">';
  $html .= '<h2>' . $text .'.</h2>';

  if ($agenda == 1){
      $agendasql = 'SELECT date_format(date, "%d-%m-%Y") AS date, text, aanvang, plaats, onderdeel_id FROM t_agenda WHERE public = 1 AND DATEDIFF(date, now()) >= 0 ORDER BY date LIMIT 3';
      $agendaresult = mysql_query($agendasql);
   while ($agendarow = mysql_fetch_array($agendaresult)) {
    $date = $agendarow['date'];
    $agendatext = $agendarow['text'];
         $html .= '<h4><p>' . $date . ' - ' . $agendatext . '</p></h4>';
   }
  }

  $html .= '<p>';
  
  if ($button == 'link') {
      $html .= '<a class="btn btn-lg btn-primary" href="#" role="button">Lees meer';

  }
  if ($button == 'ticket') {
      $html .= '<a class="btn btn-lg btn-danger" href="#" role="button">Bestel tickets';

  }
  if ($button == 'agenda') {
      $html .= '<a class="btn btn-lg btn-default" href="#" role="button">Volledige agenda';
  }

   $html .= '</a></p>';
   $html .= '</div>';
   $html .= '</div>';
 
  }
$html .= '</div>';
$html .= '<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>';
$html .= '<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>';
$html .= '</div>';

$html .= '</div>';

 echo $html; 
 
?>