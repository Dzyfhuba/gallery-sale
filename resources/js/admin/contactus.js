$(() => {
    var query = serialize({
        'q': $('#address').val()
    });
    console.log(query);
    setTimeout(() => {
        $('#gmap_canvas').attr('src', `https://maps.google.com/maps?${query}&t=&z=17&ie=UTF8&iwloc=&output=embed`);
    }, 5000);
    $('#address').on('keyup', function() {
        query = serialize({
            '': $(this).val()
        });
        $('#gmap_canvas').attr('src', `https://maps.google.com/maps?${query}&t=&z=17&ie=UTF8&iwloc=&output=embed`);
    })
});

function serialize(obj) {
    let str = [];
    for (let p in obj)
        if (obj.hasOwnProperty(p)) {
            str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
        }
    return str.join("&");
}
export { serialize };