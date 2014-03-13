/* Script voor backend functies  *
 * Gemaakt door: Pascal Eikenaar */

$.ajaxSetup({ cache: false }); /* IE mag niet cachen */


$(document).ready(function() 
{ 
$('#photoimg').on('change', function()	
{ 
$("#preview").html('');
$("#preview").html('<img src="../img/loader.gif" alt="Uploading...."/>');
$("#imageform").ajaxForm(
{
target: '#preview'
}).submit();
});

$('#profilemodal').on('hidden.bs.modal', function (e)
{
    $( ".profielbtn" ).load( "../backend/profielbtn.php", function() {
                         $('.profielbtn').show();
                        });
})

}); 

$(function () {
    $(".emailchange").click(function () { /* Laat emailform zien bij profielbewerken */
        $(".emailchange").hide();
        $('.emailfield').hide();
        $('.opgeslagen').hide();
        $('.emailform').show();
        $('.savemail').show();

    })
})

$(function () {
    $(".passwordchange").click(function () { /* Laat passwordforms zien bij profielbewerken */
        $(".passwordchange").hide();
        $('.passwordfield').hide();
        $('.opgeslagenpassword').hide();
        $('.passwordform').show();
        $('.savepass').show();

    })
})


$(function () {
    $(".emailsave").click(function () { /* Nieuw mailadres opslaan */
        var email = $("#inputEmail").val();
        var atpos = email.indexOf("@");
        var dotpos = email.lastIndexOf(".");
        var dataString = 'email=' + email;
        var status;
        var output;
        var data;
        $('.emailerror').fadeOut(200).hide();
        if (email == '' || atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length) {
            $('.emailerror').fadeOut(200).show();
        }
        else {
            $.ajax({
                type: "POST",
                url: "../php/changemail.php",
                data: dataString,
                success: function (output) {
                    data = JSON.parse(output);
                    status = data['status'];

                    if (status == 'error') {
                        $(document).trigger("add-alerts", [
                    {
                        'message': "<span class='glyphicon glyphicon-warning-sign'></span> E-Mail adres bestaat al.",
                        'priority': 'error'
                    }
                    ]);
                    }

                    if (status == 'success') {
                        $(document).trigger("add-alerts", [
                    {
                        'message': "<span class='glyphicon glyphicon-info-sign'></span> Email adres succesvol opgeslagen.",
                        'priority': 'success'
                    }
                    ]);
                        $('.emailform').fadeOut().hide();
                        $('.opgeslagen').fadeOut().show();
                        $(".emailchange").fadeOut().show();
                        $(".savemail").fadeOut().hide();


                   }
                }
            });
        }

        return false;
    });

});


$(function () {
    $(".passwordsave").click(function () { /* Nieuw wachtwoord opslaan */
        var pass1 = $("#inputPass1").val();
        var pass2 = $("#inputPass2").val();
        var dataString = 'pass1=' + pass1 + '&pass2=' + pass2;
        var status;
        var output;
        var data;
        $('.passworderror').fadeOut(200).hide();
        if (pass1 == '' || pass2 == '') {
            $('.passworderror').fadeOut(200).show();
        }
        else {
            $.ajax({
                type: "POST",
                url: "../php/changepass.php",
                data: dataString,
                success: function (output) {
                    data = JSON.parse(output);
                    status = data['status'];

                    if (status == 'error') {
                        $(document).trigger("add-alerts", [
                    {
                        'message': "<span class='glyphicon glyphicon-warning-sign'></span> De wachtwoorden komen niet overeen.",
                        'priority': 'error'
                    }
                    ]);
                    }

                    if (status == 'error2') {
                        $(document).trigger("add-alerts", [
                    {
                        'message': "<span class='glyphicon glyphicon-warning-sign'></span> Het wachtwoord moet tussen de 8 en 15 tekens bevatten.",
                        'priority': 'error'
                    }
                    ]);
                    }


                    if (status == 'success') {
                        $(document).trigger("add-alerts", [
                    {
                        'message': "<span class='glyphicon glyphicon-info-sign'></span> Wachtwoord succesvol opgeslagen.",
                        'priority': 'success'
                    }
                    ]);
                        $('.passwordform').fadeOut().hide();
                        $('.opgeslagenpassword').fadeOut().show();
                        $(".passwordchange").fadeOut().show();
                        $(".savepass").fadeOut().hide();


                    }
                }
            });
        }

        return false;
    });

});

