   
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
});
 
    function ShowOnderdeel(onderdeel) { /* Onderdeel informatie uitklappen */

        $('#Onderdeelinfo').scrollspy();

        $('.collapse').collapse({
            toggle: false
        })


        switch (onderdeel) {

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
    
        window.location="#OnderdeelInfo" /* Autoscroll naar het uitgeklapte onderdeel */
    
    }