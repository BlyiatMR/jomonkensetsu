import VueRouter from 'vue-router'

import routes from './routes'

// Middleware for auth and guest
import Middleware from './helper/Middleware.js'

const router = new VueRouter({
	mode: 'history',
	routes,
	// scrollBehavior() {
 //   	return { x: 0, y: 0 }
 //  	}
	scrollBehavior: function (to) {
		if (to.hash) {
			return {
				selector: to.hash
			}
		}
		// }else{
  //  		return { x: 0, y: 0 }
		// }
	}
})

Middleware(router)

export default router