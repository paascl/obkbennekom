
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">

    <title>OBK Bennekom</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
      <div class="navbar-default">
      <div class="container">

        <div class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
             <img src="img/logo.png" class="img-responsive">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
              <button type="button" class="btn btn-default navbar-right navbar-btn" >Login</button>

              
              <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">De vereniging <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Algemene informatie</a></li>
                    <li><a href="#">Harmonie orkest</a></li>
                    <li><a href="#">Drumband</a></li>
                    <li><a href="#">Majorettes</a></li>
                    <li><a href="#">Leerlingen</a></li>
                  </ul>
                </li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Nieuws <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Nieuwsjaarsconcert</a></li>
                    <li><a href="#">Goud voor drumband op WMC</a></li>
                    <li><a href="#">Koekjesactie</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Nieuwsarchief</a></li>
                  </ul>
                </li>
                <li><a href="#contact">Kaartverkoop</a></li>
                <li><a href="#contact">Lid worden</a></li>
 
                <li><a href="#contact">Contact</a></li>
              </ul>
    <form class="navbar-form " role="search">
     <div class="input-group col-lg-3">
      <input type="text" class="form-control" placeholder="Nieuws">
       <span class="input-group-btn">
       <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
      </span></div>
          </div>
         </div>
        </div>
       </div>
     
   
           <!-- Carousel
    ================================================== -->
 <div class="container">
    <div id="myCarousel" class="carousel caption" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/carousel/test2.JPG" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h2>Nieuwjaarsconcert.</h2>
              <p>10 Januari met een vliegtuigje</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Lees meer</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/carousel/test.JPG" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Nog een concert</h1>
              <p>Ergens nog een concert waarvoor kaarten besteld kan worden.</p>
              <p><a class="btn btn-lg btn-danger" href="#" role="button">Bestel kaarten</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/carousel/agenda1.JPG" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Aankomende activiteiten</h1>
              <p><h2>Nieuwjaarsconcert</h2><h3>10 Januari 2013</h3></p>
              <p><h2>Drumband in de wijk</h2><h3>3 Maart 2013</h3></p>
              <p><a class="btn btn-lg btn-default" href="#" role="button">Volledige agenda</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
        
     <!--Onderdelen-->

      <div class="panel-group" id="accordion">
       <div class="row">
        <div class="col-sm-3">
          <center>
            <h3>Orkest</h3>
          <img src="img/thumbs/orkest.jpg" class="onderdelenthumb img-rounded">
           <br><br><a class="btn btn-default" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOrkest">Informatie &raquo;</a></p></center>
         </div>
      
        <div class="col-sm-3">
         <center>
          <h3>Drumband</h3>
          <img src="img/thumbs/drumband.jpg" class ="onderdelenthumb img-rounded ">
          <br><br><a class="btn btn-default" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseDrumband">Informatie &raquo;</a></p></center>
        </div>
        <div class="col-sm-3">
         <center>
          <h3>Twirlgroep</h3>
          <img src="img/thumbs/twirl.jpg"class ="onderdelenthumb img-rounded ">
          <br><br><a class="btn btn-default" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwirl">Informatie &raquo;</a></p></center>
        </div>
        <div class="col-sm-3">
         <center>
           <h3>Leerlingen</h3>
           <img src="img/thumbs/jeugd.jpg" class ="onderdelenthumb img-rounded ">
          <br><br><a class="btn btn-default" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseJeugd">Informatie &raquo;</a></p></center>
        </div>
       </div> 
 
   <div class="row">
   <div class="col-sm-12">
     
<!--Orkest-->
       
   <div id="collapseOrkest" class="panel-collapse collapse">
   <div class="panel-body">
      <div class="panel panel-default">
  <div class="panel-heading"><h4><strong>Harmonie orkest</strong></h4></div>
  <div class="panel-body">
 <div class="col-sm-4">
  <div class="panel panel-default">
  <div class="panel-heading"><strong>Algemene info</strong></div>
  <div class="panel-body">
  </div>

  <table class="table">
    <tr>
    <td><b>Dirigent:</b></td>
    <td>Ghislain Bellefroid</td>
    </tr>
    <tr>
    <td><b>Aantal leden:</b></td>
    <td>55</td>
    </tr>
    <tr>
    <td><b>Repetitietijden:</b></td>
    <td>Dinsdag 19:45u - 22:00u</td>
    </tr>
  </table>
</div></div>
  <div class="col-sm-8">
Het harmonieorkest bestaat momenteel uit ongeveer 55 muzikanten en is opgebouwd volgens de traditionele klassieke harmoniebezetting met verschillende hout- en koperblaasinstrumenten en slagwerk. Het orkest speelt sinds 1991 in de eerste divisie (voorheen vaandelafdeling) van de KNFM.<br />
Het orkest is zich steeds meer aan het ontwikkelen naar een groot concerterend orkest. Deze ontwikkeling werd in 2007 al reeds beloond door deelname aan het topconcert concours in Venlo. De aankomende jaren hoopt het orkest hierin verder te groeien. De eigen jeugdopleiding, het nieuwe muziekcentrum en een aantrekkelijk en kwalitatief goed repertoire moeten hierin bijdragen. Naast de aantrekkingskracht op Bennekomse musici hoopt OBK, door de centrale ligging tussen grote plaatsen als Ede, Veenendaal en Wageningen, ook muzikanten uit de regio te trekken. OBK hoopt de aankomende jaren de toonaangevende muziekvereniging van de regio te worden. 
<br /><br />
Sinds 1999 staat het orkest onder de bezielende leiding van Ghislain Bellefroid. Onder zijn muzikale vleugels is de kwaliteit van het orkest gestegen en heeft OBK een gedurfd en uitdagend repertoire opgebouwd. Van het moderne ’Virtual Visions’ van Hans Kox tot de klassieke 5e Symfonie van Sjostakovich, van het Ierse ‘Riverdance’ tot de nederpop van Marco Borsato. 
<br /><br />
Op het jaarprogramma van het orkest staan meerdere concerten gepland. Het orkest wil zich over het jaar verspreid als een veelzijdig orkest presenteren. Laagdrempelig bij een familieconcert, klassiek bij het harmonieconcert, herkenbaar bij het kerstconcert en feestelijk bij het zomeravondconcert. 
<br /><br />
Naast het concerterend gebeuren is het orkest ook terug te vinden en te horen bij de sociale gebeurtenissen in Bennekom. Festiviteiten als Sinterklaas, Koninginnedag en de Bennekomse Vlegeldag worden door het orkest (samen met het slagwerkensemble en majorettegroep) opgeluisterd. 
<br /><br />
Het orkest repeteert op dinsdagavond van 19.45 uur tot 22.00 uur.<br /><br /><h2><small>Dirigent</small></h2>Ghislain Bellefroid studeerde orkestdirectie bij de Engelse dirigentenpedagoog Kerry Woodward en Hafa directie bij Jan Cober en Gert Buitenhuis. Na zijn studie volgde hij enkele cursussen en masterclasses bij:  Jorma Panula, Ed Spanjaard, Roberto Benzi en Arie van Beek. In 2009 volgde hij de bekende cursus bij Gianluigi Gelmetti en Maurizio Dones aan de "Academia Musicale Chigiana".<br /><br />
Eind 2009 won hij een auditie van het Residentie Orkest met als prijs een exclusieve masterclass van Edo de Waart. Bellefroid leidde al meerdere beroepsorkesten in binnen-en buitenland met repertoire van o.a. Beethoven, Verdi, Wagner, Bruckner en Stravinsky. <br /><br />Hij tracht in zijn muzikale benadering vernieuwend en verfrissend te zijn. Dit kan zijn door een bepaalde benadering van de partituur of de samenwerking met een bijzondere solist of kunstvorm. Op dit moment is Ghislain assistent van chefdirigent Jan Willem de Vriend.</div>
</div></div></div>
</div>
      
<!--Drumband-->
       
   <div id="collapseDrumband" class="panel-collapse collapse">
   <div class="panel-body">
      <div class="panel panel-default">
  <div class="panel-heading"><h4><strong>Drumband</strong></h4></div>
  <div class="panel-body">
 <div class="col-sm-4">
  <div class="panel panel-default">
  <div class="panel-heading"><strong>Algemene info</strong></div>
  <div class="panel-body">
  </div>

  <table class="table">
    <tr>
    <td><b>Instucteur:</b></td>
    <td>Willem Schoonheim</td>
    </tr>
    <tr>
    <td><b>Aantal leden:</b></td>
    <td>15</td>
    </tr>
    <tr>
    <td><b>Repetitietijden:</b></td>
    <td>Donderdag 20:00u - 22:00u</td>
    </tr>
  </table>
</div></div>
  <div class="col-sm-8">
Het slagwerkensemble telt zo’n 16 slagwerkers. Het ensemble toont zich graag bij diverse buitenoptredens. Met een breed scala aan straatmarsen presenteert het zich als een veelzijdig ensemble. De stijl van het slagwerkensemble bezit Schotse en Amerikaanse invloeden. Het ensemble beschikt niet over melodisch slaginstrumenten. Veel buitenoptredens worden samen met orkest en majorettes verzorgd.
Naast de buitenoptredens treedt het slagwerkensemble ook op bij concerten. Zij weet het publiek dan te boeien door vakkundig gebruik te maken van een uitgebreid instrumentarium en een afwisselend repertoire. Ook experimenten van beroemde slagwerkgroepen worden niet geschuwd. Creativiteit is het ensemble zeker toevertrouwd.
<br /><br />In juni 2008 is het slagwerkensemble afgereisd naar Chrudim (Tsjechië) om de bevolking kennis te laten maken met het slagwerk. Een verslag van deze reis is <a href="http://www.obkbennekom.nl/nieuws/158#bericht" class="default_a"><strong>hier</strong></a> te vinden.
<br /><br />Op zondag 12 juli 2009 debuteerde de drumband van OBK Bennekom op het WMC (World Music Contest) te Kerkrade. Met een score van 84.87 punten mag OBK terugkijken op een geslaagd debuut. 
<br /><br />
Het slagwerkensemble repeteert op donderdagavond van 20.00 uur tot 22.00 uur. Instructeur is Willem Schoonheim.<h2><small>Instructeur</small></h2>Willem is op 6 jarige leeftijd zelf besmet met het slagwerkvirus en heeft dit overgebracht op vele enthousiaste mensen. Op dit moment is Willem actief als studiodrummer, vaste drummer van Back4More en artistiek leider van 2 klassieke slagwerkensembles (waaronder OBK Bennekom) en is als docent nog werkzaam binnen verschillende muziekverenigingen.
Zijn achtergrond is klassiek geschoold maar met een grote passie voor drums. Door de jaren heen heeft hij met veel gerenommeerde musici mogen samenspelen welke hem gevormd hebben tot een brede en veelzijdige drummer/percussionist.</div>
</div>
</div></div></div>
</div>
<!--Twirl-->
       
   <div id="collapseTwirl" class="panel-collapse collapse">
   <div class="panel-body">
      <div class="panel panel-default">
  <div class="panel-heading"><h4><strong>Twirlers</strong></h4></div>
  <div class="panel-body">
 <div class="col-sm-4">
  <div class="panel panel-default">
  <div class="panel-heading"><strong>Algemene info</strong></div>
  <div class="panel-body">
  </div>

  <table class="table">
    <tr>
    <td><b>Instucteur:</b></td>
    <td>Ilse van Dam</td>
    </tr>
    <tr>
    <td><b>Aantal leden:</b></td>
    <td>22</td>
    </tr>
    <tr>
    <td><b>Repetitietijden:</b></td>
    <td>Woensdag 18:00u - 22:00u</td>
    </tr>
  </table>
</div></div>
  <div class="col-sm-8">
Behalve de orkesten en ensembles die zelf muziek maken heeft OBK ook een groep meisjes die muziek gebruiken voor dans en show. Niet alleen op straat bij marsoptredens maar ook in een zaal bij uitvoeringen of wedstrijden zijn deze meisjes actief. In de les wordt ook tijd besteed aan het behalen van certificaten die als leidraad dienen voor doorstroming binnen de vereniging. De groepen en solisten staan onder leiding van instructrice Ilse van Dam
</div>
</div></div></div>
</div>
<!--Jeugd-->
       
   <div id="collapseJeugd" class="panel-collapse collapse">
   <div class="panel-body">
      <div class="panel panel-default">
  <div class="panel-heading"><h4><strong>Jeugdopleiding</strong></h4></div>
  <div class="panel-body">
 <div class="col-sm-4">
  <div class="panel panel-default">
  <div class="panel-heading"><strong>Algemene info</strong></div>
  <div class="panel-body">
  </div>

  <table class="table">
    <tr>
    <td><b>Dirigent/docent:</b></td>
    <td>Hanna Koens</td>
    </tr>
    <tr>
    <td></td>
    <td>Gert Wensink</td>
    </tr>
    <tr>
   <tr>
    <td></td>
    <td>Ruud Roelofsen</td>
    </tr>
    <td><b>Aantal leden:</b></td>
    <td>70</td>
    </tr>
    
  </table>
</div></div>
  <div class="col-sm-8">
De vereniging verzorgt de opleiding van de jeugd, met als doel en uitgangspunt dat de leerlingen een volwaardig meespelend lid worden van OBK. Aan de hand van het raamleerplan van het NIB (Nederlands Instituut voor Blaasmuziek) geven gediplomeerde vakdocenten les in de verschillende instrumenten. Er zijn drie jeugdonderdelen bij OBK: AMV, C-orkest en B-orkest. Om de jeugdleden bij OBK betrokken te houden worden er ieder jaar activiteiten georganiseerd waarvan het jeugdkamp tijdens het Hemelvaartsweekend het hoogtepunt is.
<br /><br />
<h2><small>AMV</small></h2><br />
De opleiding wordt gestart met een ï¿½ï¿½njarige cursus AMV (Algemene Muzikale Vorming) voor kinderen vanaf 8 jaar (groep 5 van het basisonderwijs). In deze cursus worden op een speelse manier in een groep van zoï¿½n 8 leerlingen muzikale basisvaardigheden ontwikkeld. De kinderen leren luisteren naar muziek, noten lezen, klappen, zingen en blokfluit spelen. Aan het eind van het cursusjaar kan in overleg met de AMV-docent, betrokken vakdocenten/dirigent en opleidingscoï¿½rdinator een instrumentkeuze worden gemaakt.<br /><br />
De AMV-lessen worden verzorgd door Hanna Koens. De lessen vinden plaats op dinsdagmiddag, in het seizoen 2007/2008 zijn er drie groepen die een half  uur les krijgen.
<br /><br />
<h2><small>C-orkest</small></h2><br />
Wanneer de leerlingen een half jaar tot een jaar les hebben gehad op een instrument kunnen zij meespelen in het C-orkest. Momenteel bestaat dit orkest uit ca. 11 jeugdleden. De bedoeling van het C-orkest is in een vroeg stadium spelenderwijs als groep muziek te leren maken en met elkaar als verenigingslid kennis te maken. Na het behalen van het A-diploma kunnen leerlingen doorstromen naar het B-orkest. 
<br /><br />
Net als de AMV-groep staat het C-orkest onder leiding van Hanna Koens. Het orkest repeteert op dinsdag van 16.45 ï¿½ 17.30 uur.
<br /><br />
<h2><small>B-orkest</small></h2><br />
In het opleidingstraject neemt het B-orkest een belangrijke plaats in. Toegang tot het B-orkest hebben de leerlingen met het A-diploma. Het streven van de vereniging is het B-orkest op termijn uit te bouwen tot een volwaardig orkest. Het repertoire is afgestemd op het lichtere werk voor harmonieorkest. Momenteel bestaat het orkest uit ongeveer 20 leden. Ondersteuning vindt plaats door (jeugd)leden van het harmonieorkest ter compensatie van leemtes in de bezetting. Het B-orkest treedt op tijdens de jaarlijkse uitvoering en bij gelegenheden in Bennekom zoals Koninginnedag. Verder verzorgt het orkest optredens in bejaardenhuizen en neemt het deel aan festivals.
<br /><br />
Het B-orkest staat onder leiding van Gerd Wensink. De repetitie vindt plaats op dinsdagavond van 18.30-19.30 uur. 
<br /><br />
<h2><small>Slagwerk</small></h2><br />
Wanneer de slagwerkleerlingen een half jaar of een jaar les hebben mogen zij beginnen in de jeugdslagwerkgroep. Tijdens de repetities wordt er uiteraard veel aandacht besteedt aan samenspel, maar ook aan belangrijke dingen als klankvorming en dynamische balans. De leerlingen leren hierdoor tijdens het spelen naar elkaar te luisteren en op muzikaal niveau met elkaar te communiceren.
<br /><br />
Het jeugslagwerkensemble staat onder leiding van Ruud Roelofsen
<br /><br />
<h2><small>Opleiding</small></h2><br />
Basis voor de opleiding is het raamleerplan van het NIB (Nederlands Instituut voor Blaasmuziek). Wanneer na de AMV-cursus een instrument is gekozen, worden de leerlingen door vakdocenten opgeleid voor het A-diploma, hetgeen meestal twee tot drie jaar duurt. Slagwerkers met het A-diploma mogen naar het slagwerkensemble of het B-orkest. E&#233;n of twee jaar later kan het B-examen worden gedaan en in de regel kan men daarna meespelen in het harmonieorkest. Meestal wordt de opleiding voortgezet en kan men C- en D-examen doen. Het D-diploma geeft aansluiting op het muziekvakonderwijs op conservatoria.
</div>
</div></div></div>
</div>
  </div> 
       </div> 
        </div>  <!-- /.container-->
     
      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="js/holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="js/holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="js/holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 OBK Bennekom. &middot; 
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/holder.js"></script>
  </body>
</html>
