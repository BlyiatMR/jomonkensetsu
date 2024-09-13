import Home from './pages/Home'
import Login from './pages/Login'
import Logout from './pages/Logout'
import Dashboard from './pages/Dashboard'
import Sample from './pages/Sample'
import Privacy from './pages/Privacy'
import ContactForm from './pages/ContactForm'
import ContactMessageReview from './pages/ContactMessageReview'
import Error404Page from './pages/Error404Page'

import Timer from './pages/Timer'

const routes = [
   { path: '/', component: Home },
   {
      path: '/login', component: Login,
      meta: { forGuest: true }
   },
   { 
      path: '/logout', component: Logout,
      meta: { forAuth: true }
   },
   {
      path: '/dashboard', component: Dashboard,
      meta: { forAuth: true }
   },
   { path: '/sample', component: Sample },
   { path: '/privacy', component: Privacy },
   { path: '/contact-form', component: ContactForm },
   { path: '/contact-message-review', component: ContactMessageReview },
   { path: '/timer', component: Timer },
   { path: '*', component: Error404Page, meta: { noSidebar: true } }
]

export default routes