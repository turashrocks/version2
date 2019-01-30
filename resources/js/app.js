require('./bootstrap');

window.Vue = require('vue');
import Buefy from 'buefy';

Vue.use(Buefy);

require('./manage')

//NAV DROPDOWN
var appND = new Vue({
    name: 'appND',
    el: '#appND',
    data: {}
});

