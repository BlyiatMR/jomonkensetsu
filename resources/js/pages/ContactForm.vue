<template>
<div>
	<!--section-1-->
   <div class="container-fluid border-bottom border-danger border-3"></div>
   <!--section-1-end-->

	<!-- --------------------------------------------------------------------------------------------------- -->
   <!-- section-2-banner -->
	<section-2-banner></section-2-banner>
   <!--section-2-banner-end-->
	<!-- --------------------------------------------------------------------------------------------------- -->

	   <!--section-3-->
   <div id="privacy-container" class="container-fluid mb-4">
      <div class="container">
         <div class="row">

            <!-- col -->
         	<div class="col-md-10 offset-md-1">
               <!-- row -->
         		<div class="row">
         			<div class="col-md-12">
         				<div class="mb-3">
         					<router-link to="/" class="btn btn-danger btn-sm">
         						<i class="fas fa-home mr-2"></i>ホーム
         					</router-link>
         				</div>
				         <h1 id="main-title-service" class="display-5 fw-bold">お問い合わせフォーム</h1>

                     <div class="border-bottom border-danger border-3 position-relative"></div>
         			</div>
         		</div>
         		<!-- row-end -->

         		<div class="row mt-5">
         			<div class="col-md-12">

         				<p v-if="isPreviousData" class="text-right mb-0">
         					<button @click="clearData()" class="btn btn-light btn-sm border">データ削除</button>
         				</p>

         				<form class="" action="" @submit.prevent="submit">
         					<div>
         						<b>会社名</b>
         						<span v-if="errors.company" class="form-error text-danger">{{ errors.company }}</span>
         					</div>
         					<input v-model="form.company" type="text" class="form-control" placeholder="例）株式会社令和">

         					<div class="mt-3">
         						<b>加盟店コード</b>
         						<span v-if="errors.code" class="form-error text-danger">{{ errors.code }}</span>
         					</div>
         					<input v-model="form.code" type="text" class="form-control" placeholder="例）コード">

         					<div class="mt-3">
         						<b>氏名</b>
         						<span v-if="errors.name" class="form-error text-danger">{{ errors.name }}</span>
         					</div>
         					<input v-model="form.name" type="text" class="form-control" placeholder="例）山田太郎">

         					<div class="mt-3">
         						<b>電話番号</b>
         						<span v-if="errors.phone" class="form-error text-danger">{{ errors.phone }}</span>
         					</div>
         					<input v-model="form.phone" type="number" class="form-control" placeholder="例）01234567890">

         					<div class="mt-3">
         						<b>メールアドレス</b>
         						<span v-if="errors.email" class="form-error text-danger">{{ errors.email }}</span>
         					</div>
         					<input v-model="form.email" type="email" class="form-control" placeholder="例）example@gmail.com">

         					<br>
         					<hr>
         					<br>

         					<div class="">
         						<b>件名</b>
         						<span v-if="errors.subject" class="form-error text-danger">{{ errors.subject }}</span>
         					</div>
         					<input v-model="form.subject" type="text" class="form-control">

         					<div class="mt-3">
         						<b>お問い合わせ内容</b>
         						<span v-if="errors.content" class="form-error text-danger">{{ errors.content }}</span>
         					</div>
         					<textarea v-model="form.content" name="" id="" cols="30" rows="10" class="form-control" spellcheck="false"></textarea>
         					<button class="btn btn-danger mt-3" :disabled="isOnSubmit">
         						<span v-if="isOnSubmit">
   	      						<span class="spinner-grow spinner-grow-sm text-light" role="status" aria-hidden="true"></span>
   	      						Loading...
         						</span>
         						<span v-else>送信する</span>
         					</button>
         				</form>
         			</div>
         		</div>
         		<br>

         	</div>
            <!-- col-end -->

	      </div>
      </div>

   </div>
   <!--section-3-end-->
   <br><br>

	<!-- --------------------------------------------------------------------------------------------------- -->
   <!-- section-10-contact -->
	<section-10-contact></section-10-contact>
   <!--section-10-contact-end-->
	<!-- --------------------------------------------------------------------------------------------------- -->

</div>
</template>

<script>
import Section2Banner 	from './sections/Section2Banner'
import Section10Contact from './sections/Section10Contact'

export default {
	components: {
		Section2Banner,
		Section10Contact
	},
	data() {
		return {
			form: {
				// company: '株式会社　マルモリカンパニー',
				// code: 'ABC-000-12345',
				// name: 'オニル',
				// phone: '08123456789',
				// email: 'onr.marumori@gmail.com',
				// subject: '制作流れの問い合わせ',
				// content: '販促やプレゼンでプランの魅力を最大限に引き出す高品質なパース。建築前に建物の魅力を顧客に伝え、営業での機会損失を減らします。 SUUMO 新基準対応で、現地周辺環境も再現、ポータルサイト上での注目度をアップさせます。'
				company: localStorage.getItem('contactCompany') || '',
				code: localStorage.getItem('contactCode') || '',
				name: localStorage.getItem('contactName') || '',
				phone: localStorage.getItem('contactPhone') || '',
				email: localStorage.getItem('contactEmail') || '',
				subject: '',
				content: ''
			},
			errors: {
				company: '',
				code: '',
				name: '',
				phone: '',
				email: '',
				subject: '',
				content: ''
			},
			isOnSubmit: false,
			isPreviousData: localStorage.getItem('contactCompany') ? true : false
		}
	},
	methods: {
		submit() {
			if(this.isOnSubmit) return false

			this.isOnSubmit = true
			this.clearErrors()


			Axios.post('/api/contact-form', this.form)
			.then((response) => {
				this.isOnSubmit = false

				localStorage.setItem('contactCompany', this.form.company)
				localStorage.setItem('contactCode', this.form.code)
				localStorage.setItem('contactName', this.form.name)
				localStorage.setItem('contactPhone', this.form.phone)
				localStorage.setItem('contactEmail', this.form.email)

				this.$router.push({
					path: '/contact-message-review',
					query: response.data[0]
				})
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
		},
		clearData() {
			this.form.company = ''
			this.form.code = ''
			this.form.name = ''
			this.form.phone = ''
			this.form.email = ''

			localStorage.removeItem('contactCompany')
			localStorage.removeItem('contactCode')
			localStorage.removeItem('contactName')
			localStorage.removeItem('contactPhone')
			localStorage.removeItem('contactEmail')
		}
	}
}
</script>

<style>
#privacy-container .container {
   margin-top: -80px;
   position: relative;
   z-index: 20;
   padding-top: 50px !important;
}

#privacy-container .container {
   padding-top: 20px;
   padding-bottom: 50px;
   background: #fff;
   border-radius: 2px;
   position: relative;
   /*box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);*/
}

@media only screen and (max-width: 768px) {
	.container-fluid > .container {
		padding-left: 15px !important;
		padding-right: 15px !important;
	   box-shadow: none !important;
	}

}
</style>