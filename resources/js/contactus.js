import { serialize } from "./serialize";

$(() => {
    var query = serialize({
        'q': $('article#address p').text()
    });
    setTimeout(() => {
        $('#gmap_canvas').attr('src', `https://maps.google.com/maps?${query}&t=&z=17&ie=UTF8&iwloc=&output=embed`);
    }, 1000);
});