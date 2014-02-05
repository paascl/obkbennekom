<?php

$sql = 'SELECT * FROM t_news ORDER BY news_id DESC LIMIT 4';
$result = mysql_query($sql) or die (mysql_error);

$i = 1;

while ($row=mysql_fetch_array($result)) {

    $news_id = $row['news_id'];
    $title = $row['title'];
    $text = $row['kop_text'];
    $date = $row['date'];
    $username = $row['username'];
    $onderdeel_id = $row['onderdeel_id'];

    $html = '<div class="media">';
    $html .= '<div class="media-body">';
    $html .= '<div id="newsitem' . $i .'">';

    $mediasql = "SELECT * FROM t_newsmedia WHERE news_id = $news_id";
    $mediaresult = mysql_query($mediasql);

    if (mysql_num_rows($mediaresult) > 0) {
        $mediarow = mysql_fetch_array($mediaresult);
        $type = $mediarow ['type'];
        $location = $mediarow['location'];
        $thumb = $mediarow['thumb'];
        $mediatitle = $mediarow['title'];
    
       if ($type == 'foto') {

        $html .= '<a class="pull-right" href="' . $thumb . '">';
        $html .= '<img class="media-object mediaimg" src="' . $location . '" alt="' . $mediatitle . '">';
        $html .= '</a></div>';
           
       }

       if ($type == 'youtube') {
        $html .= '<a class="pull-right">';
        $html .= '<iframe width="320" height="180" src="//www.youtube.com/embed/' . $location . '?mode=transparent&modestbranding=0&rel=0&showinfo=0&showsearch=0&controls=2&autohide=1" frameborder="0" allowfullscreen></iframe></a>';   
        $html .= '</div>';
       }
    
    }

    else {
        $defaultimgsql = "SELECT default_image, default_thumb FROM t_onderdelen WHERE onderdeel_id = $onderdeel_id";
        $defaultimgresult = mysql_query($defaultimgsql);
        $defaultimgrow = mysql_fetch_array($defaultimgresult);
        $defaultthumb = $defaultimgrow['default_thumb'];
        $defaultimage = $defaultimgrow['default_image'];

        $html .= '<a class="pull-right" href="' . $defaultimage . '">';
        $html .= '<img class="media-object mediaimg" src="' . $defaultthumb . '">';
        $html .= '</a></div>';
    }

$html .= '<h4 class="media-heading">' . $title . '</h4>';
$html .= $text; 

if (isset($row['news-text'])) {
$html .= '<button type="button" class="btn btn-default btn-xs">Meer</button>';
}

$html .= '</div>';
$html .= '</div>';
$html .= '<br></br>';

$i++;
echo $html;

}

echo '<br></br><center><p><a href="#">- Meer nieuws -</a></center></div>';


?>