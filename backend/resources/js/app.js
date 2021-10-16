import Vue from 'vue'
import TailwindcssBreakpoint from './components/TailwindCssBreakpoint.vue'
import PageHeader from './components/PageHeader.vue'

const app = new Vue({
    el: '#app',
    components: {
        TailwindcssBreakpoint,
        PageHeader,
    }
});
