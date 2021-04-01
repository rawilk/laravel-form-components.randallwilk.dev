import Prism from 'prismjs';
require('./clipboard');
Prism.manual = true;

highlightCode();

function highlightCode() {
    [...document.querySelectorAll('pre code')].forEach(el => {
        Prism.highlightElement(el);
    });
}
