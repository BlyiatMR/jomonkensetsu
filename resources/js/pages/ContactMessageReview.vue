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
         		<div class="row mb-3">
         			<div class="col-md-12">
         				<div class="d-flex justify-content-between">
         					<span>
	         					<router-link to="/" class="btn btn-danger btn-sm">
	         						<i class="fas fa-home mr-2"></i>ホーム
	         					</router-link>
									<button v-if="$auth()" @click="copyContact(contact)" class="btn btn-light btn-sm border"><i class="fas fa-copy mr-2"></i>コピー</button>
									<button v-if="$auth()" @click="showModalDashboard(contact.id)" class="btn btn-secondary btn-sm"><i class="fas fa-trash mr-2"></i>削除</button>
         					</span>


								<router-link v-if="!$auth()" to="/contact-form" class="h4 mb-0 text-secondary">
	         					<i class="fas fa-times"></i>
								</router-link>
								<router-link v-if="$auth()" to="/dashboard" class="h4 mb-0 text-secondary">
	         					<i class="fas fa-times"></i>
								</router-link>
         				</div>
         			</div>
         		</div>
         		<!-- row-end -->

         		<!-- row -->
         		<div class="row">
         			<div class="col-md-12">
				         <h1 id="main-title-service" class="display-5 fw-bold">メッセージ</h1>
                     	<div class="border-bottom border-danger border-3 position-relative"></div>
         			</div>
         		</div>
         		<!-- row-end -->

         		<div class="row mt-5">
         			<div class="col-md-12">
         				<div>
         					<p class="mb-3 text-right">{{ contact.created_at }}</p>
         					<p class="mb-0"><b>{{ contact.company }}</b></p>
         					<p class="mb-3"><b>{{ contact.code }}</b></p>
         					<p class="mb-0 text-secondary"><b>{{ contact.name+'様' }}</b></p>
         					<p class="mb-0 text-secondary">{{ '電話番号：' + contact.phone }}</p>
         					<p class="mb-5 text-secondary">{{ 'メールアドレス：' + contact.email}}</p>

         					<p class="h3 mb-3"><b>{{ contact.subject }}</b></p>
         					<p>{{ contact.content }}</p>
         				</div>

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

	<!-- dashboard-modal -->
   <div :class="[modal.dashboard, 'modal justify-content-center align-items-center vh-100']">
     <!-- The Close Button -->
		<span @click="closeModalDashboard" class="close">&times;</span>

     	<!-- Modal Content (The Image) -->
		<div class="card" style="width: 300px;">
			<div class="card-body text-center">
				<p class="card-title">削除しますか？</p>
				<button @click.prevent="deleteContact()" class="btn btn-danger btn-sm">はい</button>
			</div>
		</div>
   </div>
	<!-- end-dashboard-modal -->

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
			contact: {},
        	modal: {
            dashboard: "d-none"
			},
			idToDelete: 0
		}
	},
	methods: {
		checkUrl() {
			const mustQuery = ["company", "code", "name", "phone", "email", "subject", "content", "is_readed", "updated_at", "created_at", "id" ];
			const urlQuery  = Object.keys(this.$route.query);

			if(mustQuery.sort().join(',') !== urlQuery.sort().join(',')) return this.$router.push({ path: '/contact-form' })
		},
		updateReaded() {
			if(this.$auth() && this.contact.is_readed == 0) {
				Axios.post('/api/contact-update-readed', { id: this.contact.id }).then((response) => {}).catch((error) => {
					return this.$router.push({ path: '/contact-form' })
					return alert('エラーが発生しました。管理者にご連絡ください。')
				})
			}else if(!this.$auth()){
				Toastr.success('お問い合わせありがとうございます', '送信完了です！')
			}
		},
		copyContact(contact) {
			const message = contact.created_at+'\n\n'+contact.company+'\n'+contact.code+'\n\n'+contact.name+'様'
									+'\n電話番号：'+contact.phone+'\nメールアドレス：'+contact.email
									+'\n\n'+contact.subject+'\n\n'+contact.content

			window.prompt("Copy: Ctrl+C, Enter", message);
		},
		deleteContact() {
			Axios.post('/api/contact-delete', {id: this.contact.id})
				.then(response => {
					this.closeModalDashboard()
					return this.$router.push({ path: '/dashboard' })
				})
				.catch(errors => {
					this.closeModalDashboard()
					this.$router.push({ path: '/dashboard' })
					return alert('エラーが発生しました。管理者にご連絡ください。')
				})
		},
		showModalDashboard(id) {
			this.modal.dashboard = "d-flex"
		},
		closeModalDashboard() {
			this.modal.dashboard = "d-none"
      }
	},
	created() {
		// return console.log('here');
		// return console.log(Object.keys(this.$route.query))
		this.checkUrl()
		this.contact = this.$route.query

		this.updateReaded()
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