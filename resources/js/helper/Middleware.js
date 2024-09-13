import $auth from './Auth.js'

export default function (router) {
   return router.beforeEach((to, from, next) => {
      let forAuth = to.matched.some(record => record.meta.forAuth)
      let forGuest = to.matched.some(record => record.meta.forGuest)
      // let asAdmin = to.matched.some(record => record.meta.asAdmin)
      
      // console.log('forGuest :'+forGuest)
      // return console.log('forAuth :'+forAuth)

      switch (true) {
         // case (asAdmin):
         //    switch (true) {
         //       case (!$auth('isAuth')):
         //          // auth or not: not auth
         //          next({ path: '/login' })
         //          break;
         //       case (!$auth('isVerified')):
         //          // verified or not: not verified
         //          next({ path: '/daftar/verifikasi-email' })
         //          break;
         //       case (!$auth('isAdmin')):
         //          // admin or not: not admin
         //          next({ path: '/halaman-tidak-ditemukan' })
         //          break;
         //       default:
         //          next()
         //    }
         //    break;
         case (forAuth):
            switch (true) {
               case (!$auth()):
                  // auth or not: not auth
                  next({ path: '/login' })
                  break;
               default:
                  next()
            }
            break;
         case (forGuest):
            switch (true) {
               case ($auth()):
                  // auth or not: auth
                  next({ path: '/dashboard' })
                  break;
               default:
                  next()
            }
            break;
         default:
            next()
      }

   })
}