require('./bootstrap');
window.$ = window.JQuery = require('jquery');
require('datatables.net');

require('./tooltip');

require('./admin/data');

if (window.location.href.includes('create') ||
    window.location.href.includes('edit')) {
    require('./md-editor');
}

require('./admin/command');

import { slugify } from './slugify';

if (window.location.href.includes(slugify($('title').text()).replace('-alam-rohman-garden', ''))) {
    require('./read-markdown');
}
require('./preview-markdown');
