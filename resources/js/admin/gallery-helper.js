import Viewer from 'viewerjs';

const gallery = new Viewer(document.getElementById('galleries'));

$(() => {
    $('#gallery #delete').each(function() {
        $(this).on('click', function(e) {
            e.preventDefault();
            const text = $(this).parent().find('.card-title').text();
            const id = $(this).data('id');
            const gallery = $(this).parent();
            const message = `Apakah Anda yakin ingin menghapus gambar "${text}" ini?`;
            if (confirm(message)) {
                console.log(text);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: `/admin/gallery/${id}`,
                    type: 'DELETE',
                    success: function(result) {
                        location.reload(false);
                    },
                    error: function(err) {
                        console.log(err);
                    }
                });
            }
        });
    });
});