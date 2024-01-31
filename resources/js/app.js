import Alpine from 'alpinejs'

window.Alpine = Alpine
Alpine.start();

import Prism from 'prismjs';
import 'prismjs/themes/prism-okaidia.css'; // see other themes in the prism docs
import 'prismjs/components/prism-markup-templating';
import 'prismjs/components/prism-php';
import 'prismjs/components/prism-css';
import 'prismjs/components/prism-javascript';
Prism.highlightAll()

document.querySelectorAll(".sidebar ul li a").forEach((link) => {
    if (link.href === window.location.href) {
        link.closest('a').classList.add("active");
    } else {
        link.closest('a').classList.remove('active')
    }
});