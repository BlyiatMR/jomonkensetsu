import Home from './pages/Home'
import Login from './pages/Login'
import Logout from './pages/Logout'
import Dashboard from './pages/Dashboard'
import Sample from './pages/Sample'
import Privacy from './pages/Privacy'
import ContactForm from './pages/ContactForm'
import ContactMessageReview from './pages/ContactMessageReview'
import Error404Page from './pages/Error404Page'
import Structure from './pages/Structure'
import Story from './pages/Story'
import Contact from './pages/Contact'

import Timer from './pages/Timer'

const routes = [
   { path: '/', redirect: '/home' },
   { path: '/home', component: Home },
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
   { path: '/structure', component: Structure },
   { path: '/story', component: Story },
   { path: '/contact', component: Contact },
   { path: '*', component: Error404Page, meta: { noSidebar: true } }
]

export default routes