
<!-- Desktop en tablet menu-->

      <div class="navbar-default navbar-static-top navbar-fixed-top hidden-xs" role="navigation">
       <div class="container">
           
<?php
if (empty($_SESSION)) { session_start(); }
if ($_SESSION['type'] == 'gast') {

$html = '<span class="loginbtn">';
$html .= '<button type="button" class="btn btn-default btn-sm navbar-right navbar-btn hidden-xs" data-toggle="modal" data-target="#loginmodal"><span class="glyphicon glyphicon-log-in"></span> Login</button>';
$html .= '</span>';

}

else {
$html = '<span class="loginbtn" style="display:none">';
$html .= '<button type="button" class="btn btn-default btn-sm navbar-right navbar-btn hidden-xs" data-toggle="modal" data-target="#loginmodal"><span class="glyphicon glyphicon-log-in"></span> Login</button>';
$html .= '</span>';

}           

echo $html;
require 'backend/profielbtn.php';
?>           
          
           <div class="navbar-header">
            <img src="img/logo.png" class="img-responsive navbar-left" alt=""> 
          </div>  
    
        
           <div class="navbar-collapse collapse">
                 
     <!--Dropdown-->           
                           
              <ul class="nav navbar-nav">
                 <li><a class="btn btn-link visible-xs" role="button" data-toggle="modal" data-target="#loginmodal">Leden login</a><hr></li>
                 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Over OBK <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a class="btn btn-link" role="button" onclick="">Algemene informatie</a></li>
                    <li><a class="btn btn-link" role="button" onclick="">Historie</a></li>
                    <li><a class="btn btn-link" role="button" onclick="">Muziekcentrum</a></li>

                  </ul>
                </li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Onderdelen <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a class="btn btn-link" role="button" onclick="ShowInfo('orkest')">Harmonieorkest</a></li>
                    <li><a class="btn btn-link" role="button" onclick="ShowInfo('drumband')">Drumband</a></li>
                    <li><a class="btn btn-link" role="button" onclick="ShowInfo('twirl')">Twirling</a></li>
                  </ul>
                </li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Opleiding <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a class="btn btn-link" role="button" onclick="">Muziekles en examens</a></li>
                    <li><a class="btn btn-link" role="button" onclick="">AMV</a></li>
                    <li><a class="btn btn-link" role="button" onclick="ShowInfo('jeugd')">Opleidingsorkesten</a></li>
                    <li><a class="btn btn-link" role="button" onclick="">Slagwerkopleiding</a></li>
                  </ul>
                </li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Contact <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a class="btn btn-link" role="button" onclick="">Lid worden</a></li>
                    <li><a class="btn btn-link" role="button" onclick="">Steun OBK</a></li>
                    <li><a class="btn btn-link" role="button" onclick="">Houd mij op de hoogte</a></li>
                    <li><a class="btn btn-link" role="button" onclick="">Bestuur en commissies</a></li>
                    <li><a class="btn btn-link" role="button" onclick="">Adres en route</a></li>
                  </ul>
                </li>
             </ul>
             <ul class="nav navbar-nav">
                <li><a class="btn btn-link" role="button" onclick="">Tickets <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
             </ul>

   <form class="navbar-form" role="search">
     <div class="input-group col-sm-3">
      <input type="text" class="form-control input-sm" placeholder="Nieuws">
       <span class="input-group-btn">
       <button class="btn btn-default btn-sm" type="button"><span class="glyphicon glyphicon-search"></span></button>
      </span></div></form>    
                 
      </div>
      </div>
       </div> <!--Navbar-->

<!-- Mobile menu-->

      <div class="navbar-default navbar-static-top show-xs" role="navigation">
               
              <button type="button" class="btn navbar-toggle navbar-right navbar-btn" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

          
<?php
require 'backend/profielbtn.php';
?>    
          <div class="navbar-header">
          <img src="img/logo.png" class="img-responsive navbar-left" alt=""> 
          </div>  

 <div class="navbar-collapse collapse">
<ul class="nav navbar-nav">

<?php
    if ($_SESSION['type'] == 'gast') {
        $html = '<div class="loginbtn visible-xs">';
        $html .= '<span class="loginbtn"><li><a class="btn btn-link" role="button" data-toggle="modal" data-target="#loginmodal"><span class="glyphicon glyphicon-log-in"></span> Leden login</a><hr></li>';
        $html .= '</span></div>';    
    }
    else {
        $html = '<div class="loginbtn visible-xs">';
        $html .= '<span class="loginbtn" style="display:none"><li><a class="btn btn-link" role="button" data-toggle="modal" data-target="#loginmodal"><span class="glyphicon glyphicon-log-in"></span> Leden login</a><hr></li>';
        $html .= '</span></div>';    
        
    }
    echo $html;
?>
<!--Dropdown-->   
                 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Over OBK <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a class="btn btn-link" role="button" onclick="">Algemene informatie</a></li>
                    <li><a class="btn btn-link" role="button" onclick="">Historie</a></li>
                    <li><a class="btn btn-link" role="button" onclick="">Muziekcentrum</a></li>

                  </ul>
                </li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Onderdelen <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a class="btn btn-link" role="button" onclick="ShowInfo('orkest')">Harmonieorkest</a></li>
                    <li><a class="btn btn-link" role="button" onclick="ShowInfo('drumband')">Drumband</a></li>
                    <li><a class="btn btn-link" role="button" onclick="ShowInfo('twirl')">Twirling</a></li>
                  </ul>
                </li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Opleiding <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a class="btn btn-link" role="button" onclick="">Muziekles en examens</a></li>
                    <li><a class="btn btn-link" role="button" onclick="">AMV</a></li>
                    <li><a class="btn btn-link" role="button" onclick="ShowInfo('jeugd')">Opleidingsorkesten</a></li>
                    <li><a class="btn btn-link" role="button" onclick="">Slagwerkopleiding</a></li>
                  </ul>
                </li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Contact <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a class="btn btn-link" role="button" onclick="">Lid worden</a></li>
                    <li><a class="btn btn-link" role="button" onclick="">Steun OBK</a></li>
                    <li><a class="btn btn-link" role="button" onclick="">Houd mij op de hoogte</a></li>
                    <li><a class="btn btn-link" role="button" onclick="">Bestuur en commissies</a></li>
                    <li><a class="btn btn-link" role="button" onclick="">Adres en route</a></li>
                  </ul>
                </li>
             </ul>
             <ul class="nav navbar-nav">
                <li><a class="btn btn-link" role="button" onclick="">Tickets bestellen <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
             </ul>
   
    <form class="navbar-form " role="search">
     <div class="input-group col-sm-3">
      <input type="text" class="form-control" placeholder="Nieuws">
       <span class="input-group-btn">
       <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
      </span></div></form>
        
    
           </div>
       </div> <!--Navbar-->
