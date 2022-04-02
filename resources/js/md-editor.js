import Editor from '@toast-ui/editor';
import '@toast-ui/editor/dist/toastui-editor.css';

const editor = new Editor({
    el: document.querySelector('#area'),
    height: '70vh',
    initialValue: 'content',
    initialEditType: 'wysiwyg',
});

$(function() {
    editor.setMarkdown($('#description').val(), false);
    console.log($('#description').val());
    $('#data').on('keyup', function() {
        alert('asd');
    });
})

editor.on('keyup', function() {
    $('#description').val(editor.getMarkdown());
});
