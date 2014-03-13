<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="edge">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">

    <title>OBK Bennekom</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-social-buttons.css" rel="stylesheet">
    <link href="css/bootstrap-notify.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/blueimp-gallery.min.css" rel="stylesheet">
 
  </head>

<body data-spy="scroll">


<!--Blueimp image gallery-->

<div id="blueimp-gallery" class="blueimp-gallery">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>

<div class="modal modal-wide" id="profilemodal" tabindex="-1" role="dialog"></div>
         
<?php

include ('php/dbconnect.php');

   session_start();
 
if (empty($_SESSION)) {
    $_SESSION['type'] = 'gast';
    $stat_sql = 'INSERT INTO t_statistieken (time) VALUES (now())';
    mysql_query($stat_sql);
   
}
     
    include ('frontend/aangemeld.html');
    include ('/frontend/login.html'); 
    include ('/frontend/menu.php');
    
?>
<div class="container"> <!--Container-->
<div class="row"> <!--ROW-->
    <div class="col-sm-8">
            
<?php
    include ('frontend/carousel.php');
?>

    <div class="col-sm-4 hidden-xs uitlijnen"> 

<?php
    include ('frontend/onderdelen.html');
    include ('frontend/wordlid.html');
?>

<div id="showinfo">
        </div> <!--Showinfo--> 
</div> <!--Coll onderdelen-->
</div> <!--Row--> 
      
   <div class="row">
     
<?php
    include ('frontend/showinfo.php');
?>
     </div> <!--Coll-->  
     
<div class="row">
<div class="col-sm-8 bg-blue">

<?php
    include ('frontend/shownews.php');
    include ('frontend/agenda.php');
    include ('frontend/newsform.html');
    include ('frontend/right-footer.html');
    include ('frontend/footer.html');

 ?>

  
</div> <!--Row-->


<?php
  mysql_close($conn);
?>


    <div class='notifications bottom-right'></div>

</div> <!--Container-->

    <!-- JavaScript !-->
   
    <script src="js/jquery.js"></script>
    <script src="js/jquery.mobile.custom.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/bootstrap-notify.js"></script>
    <script src="js/blueimp-gallery.min.js"></script>
    <script src="js/jquery.bsAlerts.min.js"></script>
    <script src="js/obkfrontend.js"></script>
  </body>
</html>
