window.axios = require('axios');
window.fuse = require('fuse.js');
window.Vue = require('vue');
import { CookieConsent } from 'cookieconsent';
import EmailObfuscate from 'email-obfuscate';


import Search from './components/Search.vue';
import hljs from 'highlight.js/lib/highlight';

// Syntax highlighting
hljs.registerLanguage('bash', require('highlight.js/lib/languages/bash'));
hljs.registerLanguage('css', require('highlight.js/lib/languages/css'));
hljs.registerLanguage('html', require('highlight.js/lib/languages/xml'));
hljs.registerLanguage('javascript', require('highlight.js/lib/languages/javascript'));
hljs.registerLanguage('json', require('highlight.js/lib/languages/json'));
hljs.registerLanguage('markdown', require('highlight.js/lib/languages/markdown'));
hljs.registerLanguage('php', require('highlight.js/lib/languages/php'));
hljs.registerLanguage('scss', require('highlight.js/lib/languages/scss'));
hljs.registerLanguage('yaml', require('highlight.js/lib/languages/yaml'));

document.querySelectorAll('pre code').forEach((block) => {
    hljs.highlightBlock(block);
});

Vue.config.productionTip = false;

// new Vue({
//     components: {
//         Search,
//     },
// }).$mount('#vue-search');


document.addEventListener('DOMContentLoaded', () => {
  cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#4054e1",
      "text": "white"
    },
    "button": {
      "background": "white",
      "text": "#613b3b"
    }
  },
  "content": {
    "message": "I use very few cookies on this site. It is fully GDPR compliant",
    "dismiss": "Ok",
    "href": "/privacy"
  }
});
});


var el = document.getElementById('cntct');
EmailObfuscate(el, {
  name: 'contact+me',
  domain: 'martinbetz',
  tld: 'eu',
  altText: 'Email'
});
