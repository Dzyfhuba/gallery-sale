import '@toast-ui/editor/dist/toastui-editor.css';
import Editor from '@toast-ui/editor';

var editor = new Editor({
    el: document.querySelector('#temp'),
    initialValue: "asdasda",
});
$('#temp').addClass('d-none');

$((() => {
    $('.md').each((i, el) => {
        console.log(i);
        editor.setMarkdown($(el).val());
        // console.log(editor.getMarkdown());
        console.log($(el).html(editor.getHTML()));
        $('.content')[i].innerHTML = editor.getHTML().replace(/<img[^>]*>/g, "");
        // $('.content')[i].
    });
}));

// const viewer = new Viewer({
//     el: document.querySelector('#show'),
//     initialValue: $('#md').val(),
// });
