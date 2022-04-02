// require('bootstrap/dist/js/bootstrap.bundle.min.js');

$("#serviceForm .image-item .card-body").on('click', e => {
    // $("serviceForm input[type='checkbox']") checked if uncheck and vice versa
    let checkbox = $(e.target).closest('.image-item').find('input[type="checkbox"]');
    checkbox.prop('checked', !checkbox.prop('checked'));
});

$("#serviceForm #addImageModal #save").on('click', e => {
    // store all selected value to local storage
    let selected = [];
    $("#serviceForm input[type='checkbox']:checked").each(function () {
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

$(() => {
    // add selected to .selected-image if 'selected' of local storage not an empty object of array
    if (localStorage.getItem('selected') !== '{}' && localStorage.getItem('selected') !== '[]') {
        $("#serviceForm .selected-image").html('');
        JSON.parse(localStorage.getItem('selected')).forEach(src => {
            $("#serviceForm .selected-image").append(`
            <img src="${src}" style="width: 100px; margin-right: 5px">
            `);
        });
        // select it inside modal too
        $("#serviceForm input[type='checkbox']").each(function () {
            if (JSON.parse(localStorage.getItem('selected')).includes($(this).val())) {
                $(this).prop('checked', true);
            }
        });
    }
});
