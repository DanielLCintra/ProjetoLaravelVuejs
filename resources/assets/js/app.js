
window.jQuery = window.$ = require('jQuery')

require('bootstrap-sass')

import Vue from 'vue'

import VueResource from 'vue-resource'

import PrimeiroComponente from './app/components/primeiro-componente.vue'

import DcUsers from './app/users/main.vue'

Vue.use(VueResource)

new Vue ({
	el: '#app', 
	components: {
		PrimeiroComponente,
		DcUsers

	}	
})




