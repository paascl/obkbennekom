<?php

echo '<div class="newsblock uitlijnen">';
echo '<div class="lastnews">Het laatste nieuws</div>';

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

    $html = '<div class="published uitlijnen">';
    $html .= 'Gepubliceerd op: ' . $date . '. Door: ' . $username . '.'; 
    $html .= '</div>';

    $html .= '<div class="media">';
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
       
        $html .= '<a class="pull-right visible-xs" href="' . $thumb . '">';
        $html .= '<img class="media-object mediaimgmobile" src="' . $location . '" alt="' . $mediatitle . '">';
        $html .= '</a>';

        $html .= '<a class="pull-left hidden-xs" href="' . $thumb . '">';
        $html .= '<img class="media-object mediaimgdesktop" src="' . $location . '" alt="' . $mediatitle . '">';
        $html .= '</a></div>';

           
       }

       if ($type == 'youtube') {
        $html .= '<a class="pull-right">';
        $html .= '<iframe width="320" height="192" src="//www.youtube.com/embed/' . $location . '?mode=transparent&modestbranding=0&rel=0&showinfo=0&showsearch=0&controls=2&autohide=1" frameborder="0" allowfullscreen></iframe></a>';   
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
        $html .= '<img class="media-object mediaimgmobile visible-xs" src="' . $defaultthumb . '">';
        $html .= '</a>';

        $html .= '<a class="pull-left" href="' . $defaultimage . '">';
        $html .= '<img class="media-object mediaimgdesktop hidden-xs" src="' . $defaultthumb . '">';
        $html .= '</a></div>';

    }

$html .= '<h3 class="media-heading">' . $title . '</h3>';
$html .= $text . ' '; 

if (isset($row['news_text'])) {
$html .= '<a class="btn btn-default btn-xs" role="button" onclick="OpenNews(' . $i . ')">Meer</a>';
}

$html .= '</div>';
$html .= '</div>';

if ($i < 4) {
$html .= '<hr>';
}

$i++;
echo $html;

}

echo '<center><p><a href="#">- Meer nieuws -</a></center></div>';

echo '</div>';

?>