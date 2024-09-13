// require('./bootstrap');
import './bootstrap'
import Vue from 'vue'
import VueRouter from 'vue-router'

import Router from './router'

// Parts
import GoTopButton from './parts/GoTopButton'
import RightBottomMenu from './parts/RightBottomMenu'
import Sidebar from './parts/Sidebar'

Vue.use(VueRouter)
// import

// Custom vue prototype
import Auth from './helper/Auth.js'
import IsTest from './helper/IsTest.js'
import VersionDate from './helper/VersionDate.js'

// Library
import 'img-comparison-slider'
Vue.config.ignoredElements = [/img-comparison-slider/]

// Plugin

Vue.prototype.$auth = Auth
Vue.prototype.$isTest = IsTest
Vue.prototype.$vd = VersionDate

new Vue({
	components: {
		GoTopButton, RightBottomMenu, Sidebar
	},
	el: '#app',
	data: {
		transitionPage: ''
	},
	router: Router,
	watch: {
		$route (to, from){
			// console.log(from)
			// make jump page and hash smooth
			if(from.path === "/" && to.path === "/") {
				document.documentElement.style.scrollBehavior = "smooth";
			}else{
				document.documentElement.style.scrollBehavior = "auto";
			}

			clearTimeout(this.transitionPage)
			this.transitionPage = setTimeout(goes, 500);
			
			function goes() {
				if(!to.hash) {
					return window.scrollTo(0,0)
				}
			}
		}
	}
})

