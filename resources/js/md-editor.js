import SimpleMDE from 'simplemde/dist/simplemde.min';
import 'simplemde/dist/simplemde.min.css';

if (document.getElementById('md')) {
    const editor = new SimpleMDE({
        element: document.getElementById('md'),
    });
}

if(document.getElementById('md-show')){
    // preview markdown
    const viewer = new SimpleMDE({
        element: document.getElementById('md-show'),
        initialValue: document.getElementById('md').value,
    });
    console.log(viewer.isPreviewActive());
}

// const editor = new Editor({
//     el: document.querySelector('#area'),
//     height: '70vh',
//     initialValue: 'content',
//     initialEditType: 'wysiwyg',
// });

// $(function() {
//     editor.setMarkdown($('#description').val(), false);
//     console.log($('#description').val());
//     $('#data').on('keyup', function() {
//         alert('asd');
//     });
// })

// editor.on('keyup', function() {
//     $('#description').val(editor.getMarkdown());
// });
