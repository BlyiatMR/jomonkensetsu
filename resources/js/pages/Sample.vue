<template>
<div>
	
	<div class="container-fluid d-flex vh-100">
		<div class="row align-self-center vw-100">
			<div class="col-md-6 mx-auto text-center text-secondary">
            <img v-if="type === 'pm' ? true : false" @click="showImgPreview" :src="activeImg" class="cr-p previewImg" alt="" width="100%"><br>
            <img v-if="type === 'movie' || type === 'custommovie' ? true : false" @click="showVidPreview" :src="activeImg" class="cr-p previewImg" alt="" width="100%"><br>
				<div class="mt-3">
					<router-link to="/" class="btn btn-danger btn-sm">
						<i class="fas fa-home mr-2"></i>ホーム
					</router-link>
					<button v-if="type === 'pm' ? true : false" @click="showImgPreview" class="btn btn-danger btn-sm">プレビュー</button>
					<button v-if="type === 'movie' || type === 'custommovie' ? true : false" @click="showVidPreview" class="btn btn-danger btn-sm">プレビュー</button>
				</div>
			</div>
		</div>
	</div>

	<!-- image-modal -->
   <div :class="[modal.imgPreview, 'modal justify-content-center align-items-center vh-100']">
      <!-- The Close Button -->
      <span @click="closeImgPreview" class="close">&times;</span>
      <!-- Modal Content (The Image) -->
      <!-- <img class="modal-content" :src="modal.img"> -->
      <img-comparison-slider class="modal-content" v-if="modal.imgPreview === 'd-flex' ? true : false">
         <figure slot="first" class="slider-before">
            <img width="100%" :src="modal.imgbefore">
            <figcaption>修正前</figcaption>
         </figure>
         <figure slot="second" class="slider-after">
            <img width="100%" :src="modal.imgafter">
            <figcaption>修正後</figcaption>
         </figure>

         <!-- <img slot="first" src="assets/img/pm/4-1_before.jpg" class="mw-100" />
         <img slot="second" src="assets/img/pm/4-1_after.jpg" class="mw-100" /> -->
      </img-comparison-slider>
   </div>
   <!-- end-image-modal -->

   <!-- image-modal -->
   <div :class="[modal.imgPreview, 'modal justify-content-center align-items-center vh-100']">
      <!-- The Close Button -->
      <span @click="closeImgPreview" class="close">&times;</span>
      <!-- Modal Content (The Image) -->
      <!-- <img class="modal-content" :src="modal.img"> -->
      <img-comparison-slider class="modal-content" v-if="modal.imgPreview === 'd-flex' ? true : false">
         <figure slot="first" class="slider-before">
            <img width="100%" :src="modal.imgbefore">
            <figcaption>修正前</figcaption>
         </figure>
         <figure slot="second" class="slider-after">
            <img width="100%" :src="modal.imgafter">
            <figcaption>修正後</figcaption>
         </figure>

         <!-- <img slot="first" src="assets/img/pm/4-1_before.jpg" class="mw-100" />
         <img slot="second" src="assets/img/pm/4-1_after.jpg" class="mw-100" /> -->
      </img-comparison-slider>
   </div>
   <!-- end-image-modal -->

	<!-- video-modal -->
   <div :class="[modal.vidPreview, 'modal justify-content-center align-items-center vh-100']">
     <!-- The Close Button -->
		<span @click="closeVidPreview" class="close">&times;</span>

     	<!-- Modal Content (The Image) -->
		<video :src="modal.vid" id="vid" class="modal-content" controls autoplay="autoplay">
			<source :src="modal.vid" type="video/mp4" class="mw-100">
			Your browser does not support the video tag.
		</video>
   </div>
	<!-- end-video-modal -->

</div>
</template>

<script>
export default {
	data() {
		return {
        pm: {
            img1before: "assets/img/pm/4-1_before.jpg"+this.$vd,
            img1after: "assets/img/pm/4-1_after.jpg"+this.$vd,
            img2before: "assets/img/pm/4-2_before.jpg"+this.$vd,
            img2after: "assets/img/pm/4-2_afters.jpg"+this.$vd,
            img3before: "assets/img/pm/4-3_before.jpg"+this.$vd,
            img3after: "assets/img/pm/4-3_after.jpg"+this.$vd,
            img4before: "assets/img/pm/4-4_before.jpg"+this.$vd,
            img4after: "assets/img/pm/4-4_after.jpg"+this.$vd,
            img5before: "assets/img/pm/4-5_before.jpg"+this.$vd,
            img5after: "assets/img/pm/4-5_after.jpg"+this.$vd
        },
			movie: {
            img1: "assets/img/movie/"+this.$isTest()+"2-1.jpg"+this.$vd,
            img2: "assets/img/movie/2-2.jpg"+this.$vd,
            img3: "assets/img/movie/2-3.jpg"+this.$vd,
            img4: "assets/img/movie/2-4.jpg"+this.$vd,
            img5: "assets/img/movie/2-5.jpg"+this.$vd,
            img6: "assets/img/movie/2-1_loop.jpg"+this.$vd,
            img7: "assets/img/movie/2-1_loop_ver.jpg"+this.$vd,
            vid1: "video/movie_2-1.mp4"+this.$vd,
            vid2: "video/movie_2-2.mp4"+this.$vd,
            vid3: "video/movie_2-3.mp4"+this.$vd,
            vid4: "video/movie_2-4.mp4"+this.$vd,
            vid5: "video/movie_2-5.mp4"+this.$vd,
            vid6: "video/movie_2-1_loop.mp4"+this.$vd,
            vid7: "video/movie_2-1_loop_vertical.mp4"+this.$vd
            // vid1: "https://drive.google.com/uc?export=download&id=1tcqhj0WFHiZGSPCiGWW3vVRh6h5uHM8J",
            // vid2: "https://drive.google.com/uc?export=download&id=1aqEjsTsSvI5uPJCLKV-oQyWKWty6amBJ",
            // vid3: "https://drive.google.com/uc?export=download&id=1VftNXLpWj_EpICWUn-MjynyA8iw1ndVA",
            // vid4: "https://drive.google.com/uc?export=download&id=1WrAb9vRlkCvXTSzutbgyV2K7lF1kBXsK",
            // vid5: "https://drive.google.com/uc?export=download&id=1wDrxq_PkVCmQ9QO7cx7v9NhbnA8g6-f4",
            // vid6: "https://drive.google.com/uc?export=download&id=1GW-fh43oN13kOCVsf4pcNVt4BJ0t568p",
            // vid7: "https://drive.google.com/uc?export=download&id=11zbKX_qUHla6j7q8NP3mB23dTElrTWRG"
        },
        custommovie: {
            img1: "assets/img/custom/5-1.jpg"+this.$vd,
            img2: "assets/img/custom/5-2.jpg"+this.$vd,
            img3: "assets/img/custom/"+this.$isTest()+"5-3.jpg"+this.$vd,
            img4: "assets/img/custom/"+this.$isTest()+"5-4.jpg"+this.$vd,
            img5: "assets/img/custom/"+this.$isTest()+"5-5.jpg"+this.$vd,
            vid2: "assets/img/custom/5-2.mp4"+this.$vd,
            vid3: "assets/img/custom/vid_5-3.mp4"+this.$vd,
            vid4: "assets/img/custom/vid_5-4.mp4"+this.$vd,
            vid5: "assets/img/custom/vid_5-5.mp4"+this.$vd
            // vid3: "https://drive.google.com/uc?export=download&id=10H66gImc7BnkzYH-o5EFxMhOkgSWHWEP",
            // vid4: "https://drive.google.com/uc?export=download&id=1P0qz_El0iTgLi32XChMDP4ElnzYq5B4W",
        },
        modal: {
            imgPreview: "d-none",
            imgafter: "",
            imgbefore: "",
            vidPreview: "d-none",
            vid: ""
         },
         type: "",
         activeImg: ""
		}
	},
	methods: {
      showImgPreview() {
			var type = this.type

			var patha = this.$route.query.patha
			var pathb = this.$route.query.pathb

			this.modal.imgafter = this[type][patha]
			this.modal.imgbefore = this[type][pathb]

         this.modal.imgPreview = "d-flex"

         // set preview image on screen
         this.activeImg = this[this.type][pathb]
      },
      closeImgPreview() {
         this.modal.imgPreview = "d-none"
      },
		showVidPreview() {
			var type = this.type


			var path = this.$route.query.path

			this.modal.vid = this[type][path]

			this.modal.vidPreview = "d-flex"

			// console.log(type+"__"+path)

         // set preview image on screen
         // change vid to img
         this.activeImg = this[type][path.replace("vid", "img")]
		},
		closeVidPreview() {
			this.modal.vidPreview = "d-none"

			var playVid = document.getElementById('vid')
			playVid.currentTime = 0;
			this.modal.vid = ""
         // playVid.pause();
      }
	},
	mounted() {
		var type = this.type = this.$route.query.type

		if(type === "pm") {
			this.showImgPreview()
		}else if(type === "movie" || type === "custommovie") {
			this.showVidPreview()
		}
	}
}
</script>

<style>
img[src="assets/img/movie/2-1_loop_ver.jpg"]:not(#hp-vertical) {
   width: 30% !important;
}
</style>