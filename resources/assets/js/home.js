import Vue from 'vue';
import axios from 'axios';
import ElementUI from 'element-ui';

import '../sass/_variables.scss'
import lang from 'element-ui/lib/locale/lang/es'
import locale from 'element-ui/lib/locale'

Vue.use(ElementUI);

let app  = new Vue({
    el: '#app',
    data: {
        text: 'text'
    },
    methods: {

    },
});