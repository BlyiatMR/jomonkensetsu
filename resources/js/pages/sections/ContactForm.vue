<template>
	<div>
		<!--section-1-->
	   <div class="container-fluid border-bottom border-kyt border-3"></div>
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
								 <router-link to="/" class="btn btn-kyt btn-sm">
									 <i class="fas fa-home mr-2"></i>ホーム
								 </router-link>
							 </div>
							 <h1 id="main-title-service" class="display-5 fw-bold">お問い合わせフォーム</h1>
	
						 <div class="border-bottom border-kyt border-3 position-relative"></div>
						 </div>
					 </div>
					 <!-- row-end -->
	
					 <div class="row mt-5">
						 <div class="col-md-12">
	
							 <p v-if="isPreviousData" class="text-right mb-0">
								 <button @click="clearData()" class="btn btn-light btn-sm border">データ削除</button>
							 </p>
	
							 <form class="" action="" enctype="multipart/form-data" @submit.prevent="submit">
								<!-- <pre>{{ file }}</pre> -->
								<!-- <pre>{{ form }}</pre> -->
								<!-- <pre>{{ isOptionOff('qna', '見積を希望') }}</pre> -->
								<!-- <pre>{{ isOptionOff('service', 'CGパース制作', 'CGパース制作(SUUMO対応用現地周辺環境再現付き)') }}</pre> -->
								 <div>
									 <b>お問い合わせ内容について</b><span class="ml-1 badge badge-danger">必須</span>
									 <span v-if="errors.checkedQna" class="form-error text-danger">{{ errors.checkedQna }}</span>
								 </div>
								<div class="form-check ml-2">
									<div v-for="(value, index) in qna" :key="index">
										<label class="form-check-label">
											<input class="form-check-input" type="checkbox" @click="addChecked($event, 'qna')" :id="'id'+index" :value="value" :checked="false">
											{{ value }}
										</label>
										<br>
									</div>
								</div>
	
								 <div class="mt-3">
									 <b>会社名</b><span class="ml-1 badge badge-danger">必須</span>
									 <span v-if="errors.company" class="form-error text-danger">{{ errors.company }}</span>
								 </div>
								 <input v-model="form.company" type="text" class="form-control" placeholder="例）株式会社令和">
	
								 <div class="mt-3">
									 <b>氏名</b><span class="ml-1 badge badge-danger">必須</span>
									 <span v-if="errors.name" class="form-error text-danger">{{ errors.name }}</span>
								 </div>
								 <input v-model="form.name" type="text" class="form-control" placeholder="例）山田太郎">
	
								 <div class="mt-3">
									 <b>電話番号</b><span class="ml-1 badge badge-danger">必須</span>
									 <span v-if="errors.phone" class="form-error text-danger">{{ errors.phone }}</span>
								 </div>
								 <input v-model="form.phone" type="number" class="form-control" placeholder="例）01234567890">
	
								<div class="mt-3">
									<b>携帯電話番号</b><span class="ml-1 badge badge-danger">必須</span>
									<span v-if="errors.hp" class="form-error text-danger">{{ errors.hp }}</span>
								</div>
								<input v-model="form.hp" type="number" class="form-control" placeholder="例）01234567890">
	
								 <div class="mt-3">
									 <b>メールアドレス</b><span class="ml-1 badge badge-danger">必須</span>
									 <span v-if="errors.email" class="form-error text-danger">{{ errors.email }}</span>
								 </div>
								 <input v-model="form.email" type="email" class="form-control" placeholder="例）example@gmail.com">
	
								 <!-- <br>
								 <hr>
								 <br> -->
	
								 <div class="mt-3">
									 <b>ナイスサポートシステム会員番号（会員の方はご記入ください）</b>
									 <!-- <span v-if="errors.memberid" class="form-error text-danger">{{ errors.memberid }}</span> -->
								 </div>
								 <input v-model="form.memberid" type="text" class="form-control">
	
								<div class="mt-3">
									<b>【見積希望の方のみ】見積希望サービス</b><span v-if="!isOptionOff('qna', '見積を希望')" class="ml-1 badge badge-danger">必須</span>
									<span v-if="errors.checkedService" class="form-error text-danger">{{ errors.checkedService }}</span>
								</div>
								<div class="form-check ml-2">
									<div v-for="(value, index) in service" :key="index">
										<label class="form-check-label">
											<input class="form-check-input" type="checkbox" @click="addChecked($event, 'service')" :id="'id'+index" :value="value" :checked="false" :disabled="isOptionOff('qna', '見積を希望')">
											{{ value }}
										</label>
										<br>
									</div>
								</div>
	
								<div class="mt-3">
									<b>【希望の方のみ】CGパース制作 追加オプション</b>
									<span v-if="errors.checkedCgoption" class="form-error text-danger">{{ errors.checkedCgoption }}</span>
								</div>
								<div class="form-check ml-2">
									<div v-for="(value, index) in cgoption" :key="index">
										<label class="form-check-label">
											<input class="form-check-input" type="checkbox" @click="addChecked($event, 'cgoption')" :id="'id'+index" :value="value" :checked="false" :disabled="isOptionOff('service', 'CGパース制作', 'CGパース制作(SUUMO対応用現地周辺環境再現付き)')">
											{{ value }}
										</label>
										<br>
									</div>
								</div>
	
								<div class="mt-3">
									<b>【希望の方のみ】ウォークスルー動画制作 オプション</b>
									<span v-if="errors.checkedMvoption" class="form-error text-danger">{{ errors.checkedMvoption }}</span>
								</div>
								<div class="form-check ml-2">
									<div v-for="(value, index) in mvoption" :key="index">
										<label class="form-check-label">
											<input class="form-check-input" type="checkbox" @click="addChecked($event, 'mvoption')" :id="'id'+index" :value="value" :checked="false"  :disabled="isOptionOff('service', 'ウォークスル一動画制作')">
											{{ value }}
										</label>
										<br>
									</div>
								</div>
	
								<div class="mt-3">
									<b>【CGパース・ウォークスルー動画の見積希望の場合】物件のご住所を記入してください</b>
									<span v-if="errors.address" class="form-error text-danger">{{ errors.address }}</span>
								</div>
								<textarea v-model="form.address" name="" id="" cols="30" rows="3" class="form-control" spellcheck="false"></textarea>
	
	
								<!-- Files-Start -->
								<div class="mt-3">
									<b>【CGパース・ウォークスルー動画の見積希望の場合】
										<br>
										図面がある場合は添付してください(平面図·立面図·配置図·仕上表)
									</b>
									<!-- <span v-if="errors.file" class="form-error text-danger">{{ errors.file }}</span> -->
								</div>
								<div class="">
									<label class="form-control-sm d-block" for="formFile">全ての必要なファイルは.zip、もしくは.rarファイルに入れることです。ファイルの最大サイズは 100MB です。</label>
									<input @change="setFiles($event)" class="" type="file" id="formFile">
								</div>
								<!-- Files-End -->

								<div class="mt-3">
									<b>【CGパース・ウォークスルー動画の見積希望の場合】
										<br>
										物件が以下に該当する場合はお伝えください
									</b>
									<!-- <span v-if="errors.checkedQuote" class="form-error text-danger">{{ errors.checkedQuote }}</span> -->
								</div>
								<div class="form-check ml-2">
									<div v-for="(value, index) in quote" :key="index">
										<label class="form-check-label">
											<input class="form-check-input" type="checkbox" @click="addChecked($event, 'quote')" :id="'id'+index" :value="value" :checked="false">
											{{ value }}
										</label>
										<br>
									</div>
								</div>
	
								
								<div class="mt-3">
									<b>キャンペーンコード記入欄</b>
									<!-- <span v-if="errors.campaign" class="form-error text-danger">{{ errors.campaign }}</span> -->
								</div>
								<input v-model="form.campaign" type="text" class="form-control" placeholder="">

								 <div class="mt-3">
									 <b>お問い合わせ内容</b>
									 <span v-if="errors.body" class="form-error text-danger">{{ errors.body }}</span>
								 </div>
								 <textarea v-model="form.body" name="" id="" cols="30" rows="10" class="form-control" spellcheck="false"></textarea>
	
	
								 <div class="mt-3">
									<!-- <b>【希望の方のみ】ウォークスルー動画制作 オプション</b> -->
									<span v-if="errors.checkedPrivacy" class="form-error text-danger">{{ errors.checkedPrivacy }}</span>
								</div>
								<div class="form-check ml-2">
									<div v-for="(value, index) in privacy" :key="index">
										<label class="form-check-label">
											<input class="form-check-input" type="checkbox" @click="addChecked($event, 'privacy')" :id="'id'+index" :value="value" :checked="false">
											<a href="https://www.marumori-cg.com/privacy" target="_blank">プライバシーポリシー</a>
											に同意します。
										</label>
										<br>
									</div>
								</div>
								
								 <button class="btn btn-kyt mt-3" :disabled="isOnSubmit">
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
				qna: ["サービスについて知りたい", "見積を希望"],
				service: [
					"CGパース制作",
					"CGパース制作(SUUMO対応用現地周辺環境再現付き)",
					"ウォークスル一動画制作",
					"CGホームステージング(室内)",
					"CGホームステージング(外観·外構)"
				],
				cgoption: ["連棟(~4連棟まで)", "連棟(5連棟以上~)"],
				mvoption: ["縦画面ショート動画", "横画面ショート動画"],
				quote: ["敷地高低差（500mm以上）がある", "外構指定がある", "該当するかわからない"],
				privacy: ["プライバシーポリシー了解"],
				form: {
					checked: { qna: [], service: [], cgoption: [], mvoption: [], privacy: [], quote: [] },
					company: localStorage.getItem('contactCompany') || '',
					name: localStorage.getItem('contactName') || '',
					phone: localStorage.getItem('contactPhone') || '',
					hp: localStorage.getItem('contactHp') || '',
					email: localStorage.getItem('contactEmail') || '',
					memberid: localStorage.getItem('contactMemberId') || '',
					address: localStorage.getItem('contactAddress') || '',
					file: '',
					campaign: localStorage.getItem('contactCampaign') || '',
					body: localStorage.getItem('contactBody') || ''
				},
				errors: {
					// checked: { qna: '', service: '', cgoption: '', mvoption: '' },
					checkedQna: '',
					checkedService: '',
					checkedCgoption: '',
					checkedMvoption: '',
					checkedQuote: '',
					checkedPrivacy: '',
					memberid: '',
					address: '',
					campaign: '',
					file: '',
					body: '',
					company: '',
					name: '',
					phone: '',
					hp: '',
					email: ''
				},
				isOnSubmit: false,
				isPreviousData: localStorage.getItem('contactCompany') ? true : false
			}
		},
		methods: {
			isOptionOff(type, text, others=null){
			var x = false
			if (others != null && this.form.checked[type].includes(others)) {
				x = true
			}
			if (this.form.checked[type].includes(text) || x) {
				return false
			}
			return true
			},

			setFiles(event) {
				// this.form.file = event.target.files || event.dataTransfer.files
				this.form.file = event.target.files[0]
				// console.log(this.form)
			},
			addChecked(event, type) {
				if(event.target.checked) {
					this.form.checked[type].push(event.target.value)
				}else{
					const value = event.target.value
					for(let data of this.form.checked[type]) {
						if(data === value) {
							const index = this.form.checked[type].indexOf(data)
							this.form.checked[type].splice(index, 1)
						}
					}
				}
			},
			submit() {
				if(this.isOnSubmit) return false

				this.isOnSubmit = true
				this.clearErrors()

				let data = new FormData()
				data.append('checkedQna', this.form.checked.qna)
				data.append('checkedService', this.form.checked.service)
				data.append('checkedCgoption', this.form.checked.cgoption)
				data.append('checkedQuote', this.form.checked.quote)
				data.append('checkedMvoption', this.form.checked.mvoption)
				data.append('checkedPrivacy', this.form.checked.privacy)
				data.append('company', this.form.company)
				data.append('name', this.form.name)
				data.append('phone', this.form.phone)
				data.append('hp', this.form.hp)
				data.append('email', this.form.email)
				data.append('memberid', this.form.memberid)
				data.append('address', this.form.address)
				data.append('file', this.form.file)
				data.append('campaign', this.form.campaign)
				data.append('body', this.form.body)



				// Axios.post('/api/contact-form', this.form, {headers: {'Content-Type': 'application/json', 'Access-Control-Allow-Origin': "*"}})
				// Axios.post('/api/contact-form', this.form, {headers: {'Content-Type': 'multipart/form-data', 'Access-Control-Allow-Origin': "*"}})
				Axios({
					method: 'post',
					url: '/api/contact-form',
					data: data,
					headers: {'Content-Type': 'application/json', 'Access-Control-Allow-Origin': "*"}
				})
				.then((response) => {
					this.isOnSubmit = false
	
					// localStorage.setItem('checkedQna', this.form.checked.qna)
					// localStorage.setItem('checkedService', this.form.checked.service)
					// localStorage.setItem('checkedCgOption', this.form.checked.cgoption)
					// localStorage.setItem('checkedMvOption', this.form.checked.mvoption)
					// localStorage.setItem('checkedQuote', this.form.checked.quote)
					// localStorage.setItem('checkedPrivacy', this.form.checked.privacy)
					// localStorage.setItem('contactAddress', this.form.address)
					// localStorage.setItem('contactFile', this.form.file)
					// localStorage.setItem('contactBody', this.form.body)
					// localStorage.setItem('contactCampaign', this.form.campaign)

					
					localStorage.setItem('contactCompany', this.form.company)
					localStorage.setItem('contactName', this.form.name)
					localStorage.setItem('contactPhone', this.form.phone)
					localStorage.setItem('contactHp', this.form.hp)
					localStorage.setItem('contactEmail', this.form.email)
					localStorage.setItem('contactMemberId', this.form.memberid)
					
					this.clearData()
					Toastr.success('お問い合わせありがとうございます', '送信完了です！')
					// this.$router.push({
					// 	path: '/contact-message-review',
					// 	query: response.data[0]
					// })
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
					if(key === 'checked') {
						for(const type in this.errors.checked) {
							this.errors.checked[type] = ''
						}
					}else{
						this.errors[key] = ''
					}
				}
			},
			clearData() {
	
				this.form.checked.qna = []
				this.form.checked.service = []
				this.form.checked.cgoption = []
				this.form.checked.mvoption = []
				this.form.quote = []
				this.form.privacy = []
	
				this.form.memberid = ''
				this.form.address = ''
				this.form.file = []
				this.form.campaign = ''
				this.form.body = ''
				this.form.company = ''
				this.form.name = ''
				this.form.phone = ''
				this.form.hp = ''
				this.form.email = ''
	
				localStorage.removeItem('checkedQna')
				localStorage.removeItem('checkedService')
				localStorage.removeItem('checkedCgOption')
				localStorage.removeItem('checkedMvOption')
				localStorage.removeItem('checkedQuote')
				localStorage.removeItem('checkedPrivacy')
	
				localStorage.removeItem('contactMemberId')
				localStorage.removeItem('contactService')
				localStorage.removeItem('contactCgOption')
				localStorage.removeItem('contactMvOption')
				localStorage.removeItem('contactAddress')
				localStorage.removeItem('contactFile')
				localStorage.removeItem('contactCampaign')
				localStorage.removeItem('contactBody')
				localStorage.removeItem('contactCompany')
				localStorage.removeItem('contactName')
				localStorage.removeItem('contactPhone')
				localStorage.removeItem('contactHp')
				localStorage.removeItem('contactEmail')
			}
		}
	}
	</script>