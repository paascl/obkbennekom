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

<?php
    include ('/frontend/login.html'); 
    include ('/frontend/menu.html');
?>


   
<div class="container"> <!--Container-->

<div class="row"> <!--ROW-->
    <div class="col-sm-10">
            
<?php
    include ('/frontend/carousel.php');
?>

    <div class="col-sm-2 hidden-xs"> 

<?php
    include ('frontend/onderdelen.html');
?>

    </div> <!--Coll onderdelen-->
</div> <!--Row--> 


  <div id="showinfo">
     <div class="row">
    <div class="col-sm-12">

    <br class="hidden-xs"></br>
    
<?php
    include ('frontend/showinfo.php');
?>
     </div> <!--Coll-->  
       </div> <!--Row-->
        </div> <!--Showinfo--> 
      <br></br>

<div class="row">
<div class="col-sm-8">

<?php
    include ('frontend/shownews.php');
    include ('frontend/agenda.php');
    include ('frontend/newsform.html');
    include ('frontend/socialmedia.html');
?>

  
</div> <!--Row-->

<!-- FOOTER -->

<div="row">
<?php
    include ('frontend/footer.html');
?>
</div>


</div> <!--Container-->

    <!-- JavaScript !-->
   
    <script src="js/jquery.js"></script>
    <script src="js/jquery.mobile.custom.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/holder.js"></script>
    <script src="js/blueimp-gallery.min.js"></script>
    <script src="js/jquery.bsAlerts.min.js"></script>
    <script src="js/obkfrontend.js"></script>

  </body>
</html>
