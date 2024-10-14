<template>

    <section class="max-w-[980px] mx-auto mt-12">
        <div class="mx-32 max-md:mx-10">
            <div>
                <h1 class="font-semibold text-[25px] tracking-[3px] text-center text-[#33343F]">CONTACT</h1>
            </div>
            <hr class="w-[72px] border-solid border-black mx-auto mb-1">
            <div>
                <p class="text-[12px] tracking-[3px] text-center font-thin text-[#3344F]">お問い合わせ</p>
            </div>
        </div>
        <div class="mt-10 mx-36 max-md:mx-6">
            <p class="text-center tracking-widest max-md:text-start">縄文建設がご提案する現代版竪穴式住居は太陽光発電システム搭載の竪穴式住居です <br>ご興味のある方はお気軽にお問い合わせください</p>
        </div>

        <div class="mt-16 mx-48 max-md:mx-6 max-md:mt-10">
            <form class="" action="" enctype="multipart/form-data" @submit.prevent="submit">
                <!-- <div class="my-4">
                    <h2 class="text-[14px] mb-2">名前</h2>
                    <input class="w-[350px] max-md:w-full border border-black py-1 px-2" type="text">
                </div>
                <div class="my-4">
                    <h2 class="text-[14px] mb-2">メールアドレス</h2>
                    <input class="w-full border border-black py-1 px-2" type="text">
                </div>
                <div class="my-4">
                    <h2 class="text-[14px] mb-2">メッセージ</h2>
                    <textarea class="w-full border border-black p-2 h-[80px]" id="" cols="30" rows="10"></textarea>
                </div> -->

                <!-- input name -->
                <div class="mt-3 mb-2">
                    <span class="text-[14px] badge badge-danger">名前</span>
                    <span v-if="errors.company" class="form-error text-red-600">{{ errors.company }}</span>
                </div>
                <input v-model="form.company" type="text" class="form-control w-[350px] max-md:w-full border border-black py-1 px-2">

                <!-- input email -->
                <div class="mt-3 mb-2">
                    <span class="text-[14px] badge badge-danger">メールアドレス</span>
                    <span v-if="errors.email" class="form-error text-red-600">{{ errors.email }}</span>
                </div>
                <input v-model="form.email" type="email" class="form-control w-full border border-black py-1 px-2">

                <!-- input message -->
                <div class="mt-3 mb-2">
                    <span class="text-[14px] badge badge-danger">メッセージ</span>
                    <span v-if="errors.body" class="form-error text-red-600">{{ errors.body }}</span>
                </div>
                <textarea v-model="form.body" name="" id="" rows="20" class="form-control w-full border border-black p-2 h-[80px] mb-4" spellcheck="false"></textarea>

                <!-- send form -->
                <!-- <div class="flex justify-center">
                    <a class="text-[14px] shadow-md shadow-[#9AA9D4] text-center w-full tracking-[6px] py-2 px-5 rounded-3xl bg-[#1A377C] text-white hover:bg-[#3F7652] duration-300" href="">送信</a>
                </div> -->

				<!-- send form -->
				<div class="relative w-full">
					<div class="absolute top-1 inset-0 w-full h-full py-2 px-5 rounded-3xl bg-[#B0C4DE]"></div>
				  
					<button class="relative text-[14px] text-center w-full py-2 px-5 rounded-3xl bg-[#1A377C] text-white hover:bg-[#3F7652] duration-300" :disabled="isOnSubmit">
					  <span v-if="isOnSubmit">
						<span class="spinner-grow spinner-grow-sm text-light tracking-widest" role="status" aria-hidden="true"></span>
						Loading...
					  </span>
					  <span v-else>送信</span>
					</button>
				</div>				  
                
            </form>
        </div>

        <div class="my-10 mx-48 max-lg:mx-6">
            <div>
                <p class="text-center text-[12px] tracking-widest mb-2 max-md:text-[14px]">メールの受付は24時間365日行っておりますが縄文建設からの返信スケジュールは以下の通りです</p>
                <p class="text-center text-[12px] tracking-widest max-md:text-[14px]">​よろしくお願いします</p>
            </div>
            <div class="mt-5 mx-48 max-md:mx-6">
                <p class="text-center text-[12px] tracking-widest max-md:text-[14px]">月～金　18：00～20：00</p>
                <p class="text-center text-[12px] tracking-widest max-md:text-[14px]">土・日・祝　10：00～16：00</p>
            </div>
        </div>
    </section>

</template>
	
	<script>
	export default {
		data() {
			return {
				form: {
					company: localStorage.getItem('contactCompany') || '',
					email: localStorage.getItem('contactEmail') || '',
					body: localStorage.getItem('contactBody') || ''
				},
				errors: {
					// checked: { qna: '', service: '', cgoption: '', mvoption: '' },
					body: '',
					company: '',
					email: ''
				},
				isOnSubmit: false,
				isPreviousData: localStorage.getItem('contactCompany') ? true : false
			}
		},
		methods: {
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
			checkUrl() {
				const mustQuery = ["company", "email", "body"];
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
			submit() {
				if(this.isOnSubmit) return false

				this.isOnSubmit = true
				this.clearErrors()

				let data = new FormData()
				data.append('company', this.form.company)
				data.append('email', this.form.email)
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
					// localStorage.setItem('contactCampaign', this.form.campaign)
                    
					
					localStorage.setItem('contactCompany', this.form.company)
					localStorage.setItem('contactEmail', this.form.email)
					localStorage.setItem('contactBody', this.form.body)
                    
					this.clearData()
					Toastr.success('お問い合わせありがとうございます', '送信完了です！', {timeOut: 8000})

					const element = document.getElementById("app")
					element.scrollIntoView()
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
	
	
				this.form.body = ''
				this.form.company = ''
				this.form.email = ''
	
	
				localStorage.removeItem('contactBody')
				localStorage.removeItem('contactCompany')
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
	
	input[type=checkbox] {
		height: 16px;
		width: 16px;
		line-height: normal;
	}
	
	.form-check-label {
		margin-top: 4px
	}
	
	@media only screen and (max-width: 768px) {
		.container-fluid > .container {
			padding-left: 15px !important;
			padding-right: 15px !important;
		   box-shadow: none !important;
		}
	
	}

	input[type="number"]::-webkit-outer-spin-button,
	input[type="number"]::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0;
	}
	</style>	