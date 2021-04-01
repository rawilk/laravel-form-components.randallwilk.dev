import 'alpinejs';
import flatpickr from 'flatpickr';
import * as FilePond from 'filepond';
import { createPopper } from '@popperjs/core';

window.flatpickr = flatpickr;
window.FilePond = FilePond;
window.createPopper = createPopper;

document.addEventListener('DOMContentLoaded', () => {
    if (document.querySelector('#demo-content')) {
        require('./demos.js');
    }
});
