<template>
<div>
	<!--section-1-->
   <div class="container-fluid border-bottom border-danger border-danger border-3"></div>
   <!--section-1-end-->
   <!-- --------------------------------------------------------------------------------------------------- -->
   <!-- section-2-banner -->
   <section-2-banner></section-2-banner>
   <!--section-2-banner-end-->
   <!-- --------------------------------------------------------------------------------------------------- -->
   
   <!-- --------------------------------------------------------------------------------------------------- -->
   <!-- section-3-title -->
   <section-3-title></section-3-title>
   <!--section-3-title-end-->
   <!-- --------------------------------------------------------------------------------------------------- -->
   
	<!-- --------------------------------------------------------------------------------------------------- -->
   <!-- section-4-cg -->
	<section-4-cg></section-4-cg>
   <!--section-4-cg-end-->
	<!-- --------------------------------------------------------------------------------------------------- -->

	<!-- --------------------------------------------------------------------------------------------------- -->
   <!-- section-5-movie -->
	<section-5-movie></section-5-movie>
   <!--section-5-movie-end-->
	<!-- --------------------------------------------------------------------------------------------------- -->

	<!-- --------------------------------------------------------------------------------------------------- -->
   <!-- section-6-vr -->
	<!-- <section-6-vr></section-6-vr> -->
   <!--section-6-vr-end-->
	<!-- --------------------------------------------------------------------------------------------------- -->

	<!-- --------------------------------------------------------------------------------------------------- -->
   <!-- section-6A-walking-vr -->
	<!-- <section-6A-walking-vr></section-6A-walking-vr> -->
   <!--section-6A-walking-vr-end-->

	<!-- --------------------------------------------------------------------------------------------------- -->
   <!-- section-6C-custom-order -->
	<section-6C-custom-order></section-6C-custom-order>
   <!--section-6C-custom-order-end-->
	<!-- --------------------------------------------------------------------------------------------------- -->

	<!-- --------------------------------------------------------------------------------------------------- -->
   <!-- section-6B-photo-matching -->
	<section-6B-photo-matching></section-6B-photo-matching>
   <!--section-6B-photo-matching-end-->
	<!-- --------------------------------------------------------------------------------------------------- -->

	<!-- --------------------------------------------------------------------------------------------------- -->
   <!-- section-7-flow -->
	<section-7-flow></section-7-flow>
   <!--section-7-flow-end-->
	<!-- --------------------------------------------------------------------------------------------------- -->

	<!-- --------------------------------------------------------------------------------------------------- -->
   <!-- section-8-faq -->
	<section-8-faq></section-8-faq>
<!--section-8-faq-end-->
	<!-- --------------------------------------------------------------------------------------------------- -->

	<!-- --------------------------------------------------------------------------------------------------- -->
   <!-- section-9-services -->
	<!-- <section-9-services></section-9-services> -->
   <!--section-9-services-end-->
	<!-- --------------------------------------------------------------------------------------------------- -->

	<!-- --------------------------------------------------------------------------------------------------- -->
   <!-- section-10-contact -->
	<section-10-contact></section-10-contact>
   <!--section-10-contact-end-->
	<!-- --------------------------------------------------------------------------------------------------- -->
</div>
</template>

<script>
import Section2Banner 				from './sections/Section2Banner'
import Section3Title  				from './sections/Section3Title'
import Section4Cg     				from './sections/Section4Cg'
import Section5Movie  				from './sections/Section5Movie'
import Section6Vr     				from './sections/Section6Vr'
import Section6AWalkingVr     		from './sections/Section6AWalkingVr'
import Section6BPhotoMatching     	from './sections/Section6BPhotoMatching'
import Section6CCustomOrder     	from './sections/Section6CCustomOrder'
import Section7Flow     			from './sections/Section7Flow'
import Section8Faq      			from './sections/Section8Faq'
import Section9Services 			from './sections/Section9Services'
import Section10Contact 			from './sections/Section10Contact'

export default {
	components: {
		Section2Banner,
		Section3Title,
		Section4Cg,
		Section5Movie,
		Section6Vr,
		Section6AWalkingVr,
		Section6BPhotoMatching,
		Section6CCustomOrder,
		Section7Flow,
		Section8Faq,
		Section9Services,
		Section10Contact
	},
	data() {
		return {
		}
	},
	methods: {
		openNewTab() {
			// document.querySelectorAll('[data-new-tab]').addEventListener("click", event => {
			// 	console.log(event.target)
			// });
		}
	},
	mounted() {
	},
	created() {
		var k = this.$isTest()
		console.log(k)
	}
}
</script>

<style>
</style>