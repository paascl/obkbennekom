   
   /* Script voor frontend functies *
    * Gemaakt door: Pascal Eikenaar */
       
         
    $(document).ready(function () { /* Uitvoeren wanneer de pagina geladen is */
        $("#myCarousel").swiperight(function () { /* Swipe support voor de carrousel */
            $(this).carousel('prev');
        });
        $("#myCarousel").swipeleft(function () {
            $(this).carousel('next');
        });

   $( ".thumbnail" ) /* Animatie in het onderdelenmenu */
        .mouseenter(function() {
            $(this).find('.onderdeelcaption').removeClass("slideOutUp").addClass("slideInDown").show();
        })
        .mouseleave(function() {
            $(this).find('.onderdeelcaption').removeClass("slideInUp").addClass("slideOutUp");
     });

    $('[data-toggle="tooltip"]').tooltip({ /* Tooltip trigger */
    animated: 'fade',
    placement: 'bottom',
    });


     $(function () { /* Loginprocedure */
        $('form').on('submit', function (e) {
        request = $.ajax({
        url: "../php/login.php",
        type: "post",
        data: serializedData
       });

        request.done(function (response, textStatus, jqXHR){
        alert("Hooray, it worked!");
       });

         request.fail(function (jqXHR, textStatus, errorThrown) {
         alert(textStatus, errorThrown);
                
          });

         });
           e.preventDefault();
        });


}); /* Einde DOM */
 
    function ShowInfo(item) { /* Onderdeel informatie uitklappen */

        $('#showinfo').scrollspy();

        $('.collapse').collapse({
            toggle: false
        })


        switch (item) {

            case 'orkest':
                $('#collapseTwirl').collapse('hide');
                $('#collapseJeugd').collapse('hide');
                $('#collapseDrumband').collapse('hide');
                $('#collapseOrkest').collapse('show');
                break;

            case 'drumband':
                $('#collapseOrkest').collapse('hide');
                $('#collapseTwirl').collapse('hide');
                $('#collapseJeugd').collapse('hide');
                $('#collapseDrumband').collapse('show');
                break;

            case 'twirl':
                $('#collapseOrkest').collapse('hide');
                $('#collapseDrumband').collapse('hide');
                $('#collapseJeugd').collapse('hide');
                $('#collapseTwirl').collapse('show');
                break;

            case 'jeugd':
                $('#collapseOrkest').collapse('hide');
                $('#collapseDrumband').collapse('hide');
                $('#collapseTwirl').collapse('hide');
                $('#collapseJeugd').collapse('show');
                break;

        }
    
        window.location="#showinfo" /* Autoscroll naar het uitgeklapte onderdeel */
    
    }

    document.getElementById('newsitem1').onclick = function (event) { /* Fotoalbums */
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};

    document.getElementById('newsitem2').onclick = function (event) { 
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};

   document.getElementById('newsitem3').onclick = function (event) { 
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};


    document.getElementById('Orkest').onclick = function (event) { 
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};

    document.getElementById('Drumband').onclick = function (event) { 
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};

    document.getElementById('Twirl').onclick = function (event) { 
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};

    document.getElementById('Jeugd').onclick = function (event) { 
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};

    document.getElementById('gebouwfooter').onclick = function (event) { 
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};

$("#wronguser").click(function() { /* Alert: gebruikersnaam of wachtwoord onjuist */
  $(document).trigger("add-alerts", [
    {
      'message': "<span class='glyphicon glyphicon-warning-sign'></span> Gebruikersnaam en/of wachtwoord is onjuist.",
      'priority': 'error'
    }
  ]);
});


      

     