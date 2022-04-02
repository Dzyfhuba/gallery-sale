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

import { serialize } from './serialize';

import { slugify } from './slugify';
if (window.location.href.includes(slugify($('title').text()).replace('-alam-rohman-garden', ''))) {
    require('./read-markdown');
}

if (window.location.href.includes(`${window.location.origin}/article`)) {
    require('./preview-markdown');
}

if (window.location.href.includes(`${window.location.origin}/gallery`)) {
    require('./gallery');
}
if (window.location.href.includes(`${window.location.origin}/admin/gallery`)) {
    require('./admin/gallery-helper');
}
if (window.location.href.includes(`${window.location.origin}/admin/contactus`)) {
    require('./admin/contactus');
}
if (window.location.href.includes(`${window.location.origin}/contactus`)) {
    require('./contactus');
}
if (window.location.href.includes(`${window.location.origin}/admin/service`)) {
    require('./admin/service');
}
