<template>
<div>
	<div id="loginpage" class="container-fluid d-flex vh-100">
	    <div class="row align-self-center vw-100">
	    	<!-- col -->
	        <div id="col-form-login">

	            <img src="assets/icon_bg/marumori_logo.png" alt="Japan Home Shield" width="130" class="d-block marumori-logo mx-auto">
	            <img src="assets/icon_bg/colab_x.png" alt="X" width="40" class="d-block mx-auto mb-2 mt-2">
				<img src="assets/icon_bg/jhs_logo.png" alt="Japan Home Shield" width="180" class="d-block ms-5 ps-3 jhs-logo mx-auto">

	        	<h3 class="text-center h2 mb-3 mt-4">Login</h3>
	             
				<form class="" action="" @submit.prevent="submit">
	         	<div class="form-error text-danger">{{ errors.email ? errors.email : '' }}</div>
					<input v-model="form.email" type="email" class="form-control" placeholder="Username">

	         	<div class="form-error text-danger mt-3">{{ errors.password ? errors.password : '' }}</div>
					<input v-model="form.password" type="password" class="form-control" placeholder="Password">
	         	<div class="form-error text-danger">{{ errors.others ? errors.others : '' }}</div>

					<div class="text-center mt-4">
						<button class="btn btn-danger mt-3 btn-block" :disabled="isOnSubmit">
							<span v-if="isOnSubmit">
								<span class="spinner-grow spinner-grow-sm text-light" role="status" aria-hidden="true"></span>
								Loading...
							</span>
							<span v-else>ログイン</span>
						</button>
					</div>
				</form>
	        </div>
	        <!-- col-end -->
	    </div>
    </div>
</div>
</template>

<script>
export default {
	data() {
		return {
			form: {
				// email: 'admin@admin.com',
				// password: '12345'
				email: '',
				password: ''
			},
			errors: {
				email: '',
				password: '',
				others: ''
			},
			isOnSubmit: false
		}
	},
	methods: {
		submit() {
			if(this.isOnSubmit) return false

			this.isOnSubmit = true
			this.clearErrors()

			Axios.post('/api/auth/login', this.form)
			.then((response) => {

   			Axios.defaults.headers.common['Authorization'] = 'Bearer ' + response.data.token
				// return console.log('tiba di sini')

   			localStorage.setItem('user', JSON.stringify(response.data.user))
   			localStorage.setItem('token', JSON.stringify(response.data.token))

				this.isOnSubmit = false
				this.$router.push({ path: '/dashboard' })
			})
			.catch((error) => {
				this.isOnSubmit = false

				const messages = error.response.data.errors

				for(const key in messages) {
					this.errors[key] = '＊'+messages[key][0]
				}
			})
		},
		clearErrors() {
			for(const key in this.errors) {
				this.errors[key] = ''
			}
		}
	}
}
</script>

<style>
@media only screen and (max-width: 425px){
   #loginpage.container-fluid, #loginpage.container-sm, #loginpage.container-md, #loginpage.container-lg, #loginpage.container-xl {
      padding-right: 15px !important;
      padding-left: 15px !important;
   }
}

#col-form-login {
	width: 280px;
	margin: 0 auto;
}
</style>