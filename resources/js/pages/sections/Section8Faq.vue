<template>
<div>
	<!-- --------------------------------------------------------------------------------------------------- -->
   <!-- FAQ -->
   <br>
   <div id="faq" class="container-fluid py-4" style="background-color: #f5f5f5;">
      <div class="container">
			<!-- row -->
         <div class="row">
         	<div class="col-md-10 offset-md-1">
         		<div class="row">
         			<div class="col-md-12">
         				<br>
         				<div class="border-bottom border-danger border-danger border-3 position-relative mt-5 pl-4">
         					<span class="fs-3 fw-bold pl-4">よくある質問</span>
         				</div>
         			</div>
         		</div>
         	</div>
	      </div>
			<!-- row-end -->

			<!-- row -->
         <div class="row">
         	<div class="col-md-10 offset-md-1">
         		<div class="row">
         			<div class="col-md-10 offset-md-1">

						<!-- row -->
						<div v-if="i <= currentFaq" v-for="(faq, i) in faqs" class="row mt-4">
							<div class="col-md-12">
								<b><u v-html="faq.t"></u></b>
								<b class="pe-2">Q.</b><span v-html="faq.q"></span>
								<br>
								<b class="pe-2">A.</b><span v-html="faq.a"></span>
						<span v-if="i === 0"> <!-- <br><a href="#cg">https://japan-cg.com/</a> --></span>
								<span v-else v-html="faq.o"></span>

							<!-- <br><a href="https://marumori-c.github.io/">https://marumori-c.github.io/</a> -->
							</div>
						</div>
						<!-- row-end -->
         			</div>
         		</div>

				<div v-if="faqs.length > isAllowMoreFaq" class="row mt-5">
					<div class="col-md-12 text-center">
						<button @click.prevent="increaseFaq" class="btn btn-danger">もっと見る</button>
					</div>
				</div>
         	</div>
	      </div>
			<!-- row-end -->

		<br><br>
      </div>
		<!-- container-end -->

   </div>
   <!-- FAQ-END -->
	<!-- --------------------------------------------------------------------------------------------------- -->
</div>
</template>

<script>
import faqsData from '../data/faqs'

export default {
	data() {
		return {
        	currentFaq: 4,
			faqs: faqsData
		}
	},
	computed: {
		isAllowMoreFaq() {
			return this.currentFaq + 1
		}
	},
	methods: {
		increaseFaq() {
			this.currentFaq +=4
		}
	}
}
</script>

<style>
#faq ul {
	margin-bottom: 0 !important;
}
</style>