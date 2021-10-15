window._ = require('lodash');
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import Vue from 'vue'
import TailwindcssBreakpoint from './components/TailwindCssBreakpoint.vue'

const app = new Vue({
    el: '#app',
    components: {
        TailwindcssBreakpoint
    }
});
