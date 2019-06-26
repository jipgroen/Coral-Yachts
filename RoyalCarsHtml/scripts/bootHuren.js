$( document ).ready(function() {

    // get boot gegevens
    var currentLocation = $('#current-location').val();
    var newLocation = $('#new-location').val();
    var beginDatum = $('#begin-datum').val();
    var eindDatum = $('#eind-datum').val();

    // get klant informatie
    var voornaam  = $('#voornaam').val();
    var achternaam  = $('#achternaam').val();
    var email  = $('#email').val();
    var telefoon  = $('#telefoon').val();

    // get gender klant
    var gender = $(".gender:checked").val();

    // get extras in array
    var extras = [];
    $(".extras:checked").each(function() {
        extras.push(this.value);
    });

    // get betaal methode
    var betaalMethode = $(".betaal-methode:checked").val();

    // get extra gegevens
    var extraGegevens = $('#extra-gegevens').val();




});