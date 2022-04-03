// require('bootstrap/dist/js/bootstrap.bundle.min.js');

$("#serviceForm .image-item .card-body").on('click', e => {
    // $("serviceForm input[type='checkbox']") checked if uncheck and vice versa
    let checkbox = $(e.target).closest('.image-item').find('input[type="checkbox"]');
    checkbox.prop('checked', !checkbox.prop('checked'));
});

$("#serviceForm #addImageModal #save").on('click', e => {
    // store all selected value to local storage
    let selected = [];
    $("#serviceForm input[type='checkbox']:checked").each(function() {
        selected.push($(this).val());
    });
    // trigger closest btn-close on parent
    $(e.target).closest('.modal').find('.btn-close').trigger('click');

    // store selected value to local storage
    localStorage.setItem('selected', JSON.stringify(selected));

    // add selected to .selected-image
    $("#serviceForm .selected-image").html('');
    selected.forEach(src => {
        $("#serviceForm .selected-image").append(`
        <img src="${src}" style="width: 100px; margin-right: 5px">
        `);
    });
});

$(".selected-image").on('click', 'img', e => {
    if (confirm('Are you sure to delete this image?')) {
        // remove selected image
        $(e.target).remove();
        // remove selected value from local storage
        let selected = JSON.parse(localStorage.getItem('selected'));
        selected.splice(selected.indexOf($(e.target).attr('src')), 1);
        localStorage.setItem('selected', JSON.stringify(selected));
    }
});

$("#serviceForm input[type='submit']").on('click', e => {
    alert("asd")
});


$(() => {
    // add selected to .selected-image if 'selected' of local storage not an empty object of array and setted
    if (localStorage.getItem('selected') !== '{}' && localStorage.getItem('selected') !== '[]' && localStorage.getItem('selected')) {
        $("#serviceForm .selected-image").html('');
        JSON.parse(localStorage.getItem('selected')).forEach(src => {
            $("#serviceForm .selected-image").append(`
            <img src="${src}" style="width: 100px; margin-right: 5px">
            `);
        });
        // select it inside modal too
        $("#serviceForm input[type='checkbox']").each(function() {
            if (JSON.parse(localStorage.getItem('selected')).includes($(this).val())) {
                $(this).prop('checked', true);
            }
        });
    }
});
