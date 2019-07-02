$(document).ready(function () {
    $('#submitForm').on('click', function () {
        // get boot gegevens
        var currentLocation = $('#current-location').val();
        var newLocation = $('#new-location').val();
        var beginDatum = $('#begin-datum').val();
        var eindDatum = $('#eind-datum').val();

        // get klant informatie
        var voornaam = $('#voornaam').val();
        var achternaam = $('#achternaam').val();
        var email = $('#email').val();
        var telefoon = $('#telefoon').val();

        // get gender klant
        var gender = $(".gender:checked").val();

        // get extras in array
        var extras = '';
        $(".extras:checked").each(function () {
            extras += this.value + ", ";
        });

        // get betaal methode
        var betaalMethode = $(".betaal-methode:checked").val();

        // get extra gegevens
        var extraGegevens = $('#extra-gegevens').val();
        // get host
        var host = $('#host').val();


        if (checkValues()) {
            // send to API handler

            $.ajax({
                type: "POST",
                url: host + "apiLink",
                data: {
                    'action': 'bootHuren',
                    'currentLocation': currentLocation,
                    'newLocation': newLocation,
                    'beginDatum': beginDatum,
                    'eindDatum': eindDatum,
                    'voornaam': voornaam,
                    'achternaam': achternaam,
                    'email': email,
                    'telefoon': telefoon,
                    'gender': gender,
                    'extras': extras,
                    'betaalMethode': betaalMethode,
                    'extraGegevens': extraGegevens
                },
                success: function (text) {
                    url.substring(0, url.length - 1);
                    location.replace(host +  "?r=succes");
                }
            });
        }

    });
});

function checkValues() {
    var returnValue = true;

    var checkValues = [$('#begin-datum'), $('#eind-datum'), $('#voornaam'), $('#achternaam'), $('#email'), $('#telefoon')];

    for (var i = 0; checkValues.length > i; i++) {
        var item = checkValues[i];

        if (item.val() == '') {
            item.css('border', 'solid red');
            returnValue = false;
        } else {
            item.css('border', '');
        }
    }

    if ($(".gender:checked").val() == undefined) {
        $("#spanGender").css('display', '');
        returnValue = false;
    } else {
        $("#spanGender").css('display', 'none');
    }

    if ($(".betaal-methode:checked").val() == undefined) {
        $("#spanBetaalMethode").css('display', '');
        returnValue = false;
    } else {
        $("#spanBetaalMethode").css('display', 'none');
    }

    return returnValue;


}

