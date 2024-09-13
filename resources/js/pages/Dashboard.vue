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

	<div class="container py-5">
		<h1 id="main-title-service" class="h1 fw-bold">
			<i class="fas fa-tachometer-alt mr-2"></i>ダッシュボード
		</h1>

		<!-- button-group -->
		<div class="btn-group btn-group-toggle mt-3 mb-3" data-toggle="buttons">
			<label class="btn btn-light border">
				<i class="fas fa-bullhorn mr-2"></i>お知らせ
			</label>

			<label class="btn btn-light border active">
				<i class="fas fa-inbox mr-2"></i>受信トレイ
				<span v-if="notReaded" class="ml-2 badge badge-light">{{ notReaded }}</span>
			</label>

			<label class="btn btn-light border">
				<i class="fas fa-user-plus mr-2"></i>ユーザー
			</label>
		</div>
		<!-- button-group-end -->

		<div v-if="contacts.length" class="text-secondary">合計：{{ contacts.length }}</div>

		<!-- table -->
		<table class="table table-striped mt-3">
			<thead>
				<tr>
					<!-- <th scope="col">#</th> -->
					<th scope="col">メール</th>
					<th scope="col">対応</th>
				</tr>
			</thead>
			<tbody>
				<tr v-for="(contact, i) in contacts" :key="i" :class="[ !contact.is_readed ? 'text-dark' : 'text-secondary', '']">
					<!-- <th scope="row">{{ contact.id }}</th> -->
					<td class="p-0">
						<a href="/contact-message-review" @click.prevent="goToLink(contact)" :class="[ !contact.is_readed ? 'text-dark' : 'text-secondary', 'd-block p-2 contact-link']">
							<p :class="[ !contact.is_readed ? 'font-weight-bold' : '', 'mb-0']">{{ contact.company }}（{{ contact.name+'様' }}）</p>
							<p class="mb-2 time-others">{{ contact.created_at }}</p>
							<p :class="[ !contact.is_readed ? 'font-weight-bold' : '', 'mb-0']">{{ contact.subject }}</p>
						</a>
					</td>
					<td>
						<button @click="copyContact(contact)" class="btn btn-light btn-sm border"><i class="fas fa-copy mr-2"></i>コピー</button>
						<button @click="showModalDashboard(contact.id)" class="btn btn-secondary btn-sm"><i class="fas fa-trash mr-2"></i>削除</button>
					</td>
				</tr>
			</tbody>
		</table>
		<!-- table-end -->

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
			user: JSON.parse(localStorage.getItem('user')),
			contacts: [],
			notReaded: 0,
        	modal: {
            dashboard: "d-none"
			},
			idToDelete: 0
		}
	},
	methods: {
		goToLink(contact) {
			this.$router.push({
				path: '/contact-message-review',
				query: contact
			})
		},
		copyContact(contact) {
			const message = contact.created_at+'\n\n'+contact.company+'\n'+contact.code+'\n\n'+contact.name+'様'
									+'\n電話番号：'+contact.phone+'\nメールアドレス：'+contact.email
									+'\n\n'+contact.subject+'\n\n'+contact.content

			window.prompt("Copy: Ctrl+C, Enter", message);

			return console.log(message)
		},
		deleteContact() {
			Axios.post('/api/contact-delete', {id: this.idToDelete})
				.then(response => {
					this.contacts  = response.data.contacts
					this.notReaded = response.data.notReaded
					this.closeModalDashboard()
				})
				.catch(errors => {
					this.closeModalDashboard()
					return alert('エラーが発生しました。管理者にご連絡ください。')
				})
		},
		patchContacts() {
			Axios.get('/api/contact-form')
				.then(response => {
					this.contacts  = response.data.contacts
					this.notReaded = response.data.notReaded
				})
				.catch(errors => {
					return alert('エラーが発生しました。管理者にご連絡ください。')
				})
		},
		showModalDashboard(id) {
			this.modal.dashboard = "d-flex"
			this.idToDelete = id
		},
		closeModalDashboard() {
			this.modal.dashboard = "d-none"
			this.idToDelete = 0
      }
	},
	created() {
		this.patchContacts()
	}
}
</script>

<style>
a.contact-link {
	text-decoration: none;
	transition: all .3s;
}
a.contact-link:hover {
	background-color: #ebebeb;
}
.time-others {
	font-size: 0.8rem;
}
.toast-top-center {
	top: 40% !important;
}
</style>