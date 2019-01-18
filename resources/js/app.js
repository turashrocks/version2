require('./bootstrap');

window.Vue = require('vue');
import Buefy from 'buefy';

Vue.use(Buefy);

var appND = new Vue({
    name: 'appND',
    el: '#appND',
    data: {}
    });
