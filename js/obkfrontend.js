   
   /* Script voor frontend functies *
    * Gemaakt door: Pascal Eikenaar */

$.ajaxSetup({ cache: false });

$(document).ready(function ()
{ /* Uitvoeren wanneer de pagina geladen is */
    $("#myCarousel").swiperight(function ()
    { /* Swipe support voor de carrousel */
        $(this).carousel('prev');
    });
    $("#myCarousel").swipeleft(function ()
    {
        $(this).carousel('next');
    });

    $(".thumbnail") /* Animatie in het onderdelenmenu */
        .mouseenter(function ()
        {
            $(this).find('.onderdeelcaption').removeClass("slideOutUp").addClass("slideInDown").show();
        })
        .mouseleave(function ()
        {
            $(this).find('.onderdeelcaption').removeClass("slideInUp").addClass("slideOutUp");

        });

    $("[rel='popover']").popover({
        html: 'true',
        trigger: 'hover'
    });
    

});    /* Einde DOM */

 
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

    document.getElementById('newsitem1').onclick = function (event) { /* Activeren van nieuws thumbs showen */
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};

    document.getElementById('newsitem2').onclick = function (event) { /* Activeren van nieuws thumbs showen */
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};

   document.getElementById('newsitem3').onclick = function (event) { /* Activeren van nieuws thumbs showen */
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};

  document.getElementById('newsitem4').onclick = function (event) { /* Activeren van nieuws thumbs showen */
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};

    document.getElementById('Orkest').onclick = function (event) { /* Activeren van nieuws thumbs showen */
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};

    document.getElementById('Drumband').onclick = function (event) { /* Activeren van nieuws thumbs showen */
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};

    document.getElementById('Twirl').onclick = function (event) { /* Activeren van nieuws thumbs showen */
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};

    document.getElementById('Jeugd').onclick = function (event) { /* Activeren van nieuws thumbs showen */
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};

    document.getElementById('gebouwfooter').onclick = function (event) { /* Activeren van gebouw image aan de footer showen */
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};


$(function ()
{ /* Login procedure */
    $(".login").click(function ()
    {
        var login = $("#inputEmail").val();
        var password = $("#inputPassword").val();
        var atpos = login.indexOf("@");
        var dotpos = login.lastIndexOf(".");
        var dataString = 'login=' + login + '&password=' + password;
        var status;
        var output;
        var data;
        var username;

        $(".login").button('loading')

        $('.passworderror').fadeOut(200).hide();
        $('.loginerror').fadeOut(200).hide();


        if (login == '' || atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= login.length)
        {
            $('.loginerror').fadeOut(200).show();
            $(".login").button('reset')

        }
        else if (password == '')
        {
            $('.passworderror').fadeOut(200).show();
            $(".login").button('reset')
        }


        else
        {
            $.ajax({
                type: "POST",
                url: "../php/login.php",
                data: dataString,
                success: function (output)
                {
                    data = JSON.parse(output);
                    status = data['status'];

                    if (status == 'loginerror')
                    {
                        $(document).trigger("add-alerts", [
                    {
                        'message': "<span class='glyphicon glyphicon-warning-sign'></span> Gebruikersnaam en/of wachtwoord is onjuist.",
                        'priority': 'error'
                    }
                    ]);
                        $(".login").button('reset')
                    }
                    ;
                    if (status == 'loginsuccess')
                    {
                        $('#loginmodal').modal('hide')
                        $(".login").button('reset')
                        $('.loginbtn').fadeOut().hide();
                        $(".profielbtn").load("../backend/profielbtn.php", function ()
                        { 
                            $('.profielbtn').show();
                        });

                        username = data['username'];
                        $('.bottom-right').notify({
                            message: { html: 'Welkom <strong> ' + username + '. </strong' },
                            type: 'info'
                        }).show();

                    }
                }
            });
        }
        return false;
    });

}); 

$(".logout").click(function()  { /* Uitloggen */
    $.ajax({
        url: '../php/logout.php'}) 

   $('.bottom-right').notify({
    message: { html: '<span class="glyphicon glyphicon-info-sign"></span> U bent uitgelogd.' },
    type: 'info' 
     
  }).show();     

  $('.loginbtn').show();
  $('.profielbtn').fadeOut().hide();

})

$(function ()
{ /* Aanmelden nieuwsbrief */
    $(".newsform").click(function ()
    {
        var naam = $("#inputNaam").val();
        var email = $("#inputEmail2").val();
        var atpos = email.indexOf("@");
        var dotpos = email.lastIndexOf(".");
        var dataString = 'naam=' + naam + '&email=' + email;
        var status;
        var output;
        var data;

        $(".newsform").button('loading')

        $('.naamerror').fadeOut(200).hide();
        $('.emailerror').fadeOut(200).hide();

        if (email == '' || atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length)
        {
            $('.emailerror').show();
            $(".newsform").button('reset')

        }
        else if (naam == '')
        {
            $('.naamerror').show();
            $(".newsform").button('reset')
        }


        else
        {
            $.ajax({
                type: "POST",
                url: "../php/newsform.php",
                data: dataString,
                success: function (output)
                {
                    data = JSON.parse(output);
                    status = data['status'];

                    if (status == 'error')
                    {
                        $(document).trigger("add-alerts", [
                    {
                        'message': "<span class='glyphicon glyphicon-warning-sign'></span> Het emailadres is al aangemeld.",
                        'priority': 'error'
                    }
                    ]);
                        $(".newsform").button('reset')
                    }

                    if (status == 'success')
                    {
                        $('#aangemeld').modal('show');
                        $(".newsform").button('reset')
                       
                    }

                }
            });
        }
    });
    return false;
});

    function OpenNews(newsid) {

        $('.newsblock').hide();
        alert(newsid);
}
