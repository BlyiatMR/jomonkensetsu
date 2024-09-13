<template>
<div>

	<!-- --------------------------------------------------------------------------------------------------- -->
   <!-- CONTACT -->
   <!-- <br> -->
   <div id="sec6" class="container-fluid pb-4 pt-2 id-contact" style="background-color: #f5f5f5;">
      <div class="container">
			<!-- row -->
         <div class="row">
         	<div class="col-md-10 offset-md-1">
         		<!-- row -->
         		<div class="row">
         			<div class="col-md-12">
         				<br>
         				<div class="border-bottom border-danger border-danger border-3 position-relative mt-5 text-center">
         					<span class="fs-3 fw-bold">お問い合わせ先</span>
         				</div>
         			</div>
         		</div>
         		<!-- row-end -->

         		<!-- row -->
					<div class="row mt-3 mb-5">
						<div class="col-md-10 offset-md-1">

							<!-- row -->
							<div class="row">
								<div id="company-name-footer" class="col-md-12 mb-4 text-center">
									<b>制作に関するご質問、ご依頼はお電話でも承っております</b><br><br>
									<!-- <span>CG 制作クリエイター</span><br> -->
									<span class="fs-3 company-name"></span><span class="fs-3 fw-bold company-name">共和東洋株式会社</span>
								</div>

								<div class="col-md-6 offset-md-3 col-12 text-center">
						   			<img src="contact.png" alt="Contact" style="max-width: 100%;">
								</div>
							</div>
							<!-- row-end -->
							
						</div>
					</div>
         		<!-- row-end -->
         	</div>
	      </div>
			<!-- row-end -->

			<!-- row -->
			<!-- row-end -->
		</div>
	</div>

	<!-- <a id="btn-go-top" href="#app" class="btn-danger text-white text-center cr-p" style="">Top</a> -->
	<!-- <span v-if="isBottomBtnShow" @click="hideBottomBtn" id="btn-show-hide" class="btn-outline-danger border-danger border rounded cr-p bg-gray">非表示</span>
	<div v-if="isBottomBtnShow">
		<a id="btn-go-top" href="#app" class="btn-danger text-white text-center cr-p" style="">🡹</a>

		<router-link id="btn-toi" to="/message" class="btn-danger text-white text-center cr-p" style="">問</router-link>
	</div>
	<span v-if="!isBottomBtnShow" @click="hideBottomBtn" id="btn-show-hide2" class="btn-outline-danger border-danger border rounded cr-p bg-gray">表示</span> -->
   <!-- CONTACT-END -->
	<!-- --------------------------------------------------------------------------------------------------- -->
</div>
</template>

<script>
import faqsData from '../data/faqs'

export default {
	data() {
		return {
      	showMoreService: false,
      	isBottomBtnShow: true
		}
	},
	computed: {
	},
	methods: {
		hideBottomBtn() {
			this.isBottomBtnShow = !this.isBottomBtnShow
		}
	}
}
</script>

<style>
/*z-index: 50; position: fixed; right: 50px; bottom: 70px; width: 50px; height: 50px; font-weight: bold; line-height: 50px; border-radius: 50%;text-decoration: none; color: white !important;*/
/*#btn-go-top {
	z-index: 50;
	position: fixed;
	right: 30px;*/
	/*bottom: 70px;*/
/*	bottom: 30px;
	width: 50px;
	height: 50px;
	font-weight: bold;
	line-height: 50px;
	border-radius: 50%;
	text-decoration: none;*/
	/*color: white !important;*/
	/*border-top-right-radius: 4px;
	border-top-left-radius: 4px;*/
/*}*/
/*#btn-toi {
	z-index: 50;
	position: fixed;
	right: 30px;
	bottom: 30px;
	width: 50px;
	height: 40px;
	font-weight: bold;
	line-height: 40px;
	text-decoration: none;
	color: white !important;
	border-bottom-right-radius: 4px;
	border-bottom-left-radius: 4px;
	border-top: 1px solid #f5f5f5;
}
#btn-show-hide, #btn-show-hide2 {
	width: 50px;
	z-index: 50;
	position: fixed;
	right: 30px;
	bottom: 115px;
	text-align: center;
	font-size: 0.8rem;
}
#btn-show-hide2 {
	bottom: 30px;
}*/
</style>