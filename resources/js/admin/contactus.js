import { serialize } from "../serialize";

$(() => {
    var query = serialize({
        'q': $('#address').val()
    });
    setTimeout(() => {
        $('#gmap_canvas').attr('src', `https://maps.google.com/maps?${query}&t=&z=17&ie=UTF8&iwloc=&output=embed`);
    }, 5000);
    $('#address').on('keyup', function() {
        query = serialize({
            '': $(this).val()
        });
        $('#gmap_canvas').attr('src', `https://maps.google.com/maps?${query}&t=&z=17&ie=UTF8&iwloc=&output=embed`);
    })

    $('#contactus-form').on('change keyup paste', function(e) {
        $(this).find('button[type="submit"]').removeClass('disabled');

    });
});