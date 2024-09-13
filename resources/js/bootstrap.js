window._ = require('lodash');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.Axios = require('axios');

window.Axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// if(localStorage.getItem('token') === 'undefined' || localStorage.getItem('user') === 'undefined') {
//    localStorage.removeItem('user')
//    localStorage.removeItem('token')
// }

if(localStorage.getItem('token')) {
   Axios.defaults.headers.common['Authorization'] = 'Bearer ' + JSON.parse(localStorage.getItem('token')) || null
}

// Mengatasi error di IE11 karena tidak mendukung promise
require('es6-promise').polyfill();

window.Toastr = require('toastr');
Toastr.options = {
   positionClass: 'toast-bottom-right',
   timeOut: '5000'
}


/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
