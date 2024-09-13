<template>
<div>
	<!-- --------------------------------------------------------------------------------------------------- -->
	<!-- MOVIE -->
	<div id="movie" class="container-fluid">
		<div class="container">
			<div class="row">

				<div class="col-md-10 offset-md-1">
					<div class="row">
						<div class="col-md-12">
							<br>
							<div class="border-bottom border-danger border-danger border-3 position-relative mt-5">
         					<img src="assets/icon_bg/no2.png" alt="2" width="50" class="d-inline-block">
								<span class="fs-3 fw-bold align-middle ml-3">ウォークスルー動画</span>
							</div>
						</div>
					</div>

					<div class="row mt-3 position-relative">
						<div class="col-md-10 offset-md-1 cr-p previewImg">
							<!-- <iframe :width="560" :height="315" src="https://www.youtube.com/embed/dRdpwt_GRIA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
    						<!-- <h1>BATAS</h1> -->
					     	<!-- Modal Content (The Image) -->
							<!-- <video preload="auto" src="https://drive.google.com/uc?export=download&autoplay=1&start=1&id=1tcqhj0WFHiZGSPCiGWW3vVRh6h5uHM8J" id="vid" class="modal-content" controls autoplay="autoplay">
								<source src="https://drive.google.com/uc?export=download&autoplay=1&start=1&id=1tcqhj0WFHiZGSPCiGWW3vVRh6h5uHM8J" type='video/mp4'>
							</video> -->

							<!-- <video preload="auto" src="https://www.youtube.com/watch?v=dRdpwt_GRIA" id="vid" class="modal-content" controls autoplay="autoplay">
								<source src="https://www.youtube.com/watch?v=dRdpwt_GRIA" type='video/mp4'>
							</video>
							<iframe width=”480″ height=”390″ src=”http://www.youtube-nocookie.com/embed/dRdpwt_GRIA” frameborder=”0″ allowfullscreen></iframe>
							<iframe id="vid" src="https://drive.google.com/file/d/1tcqhj0WFHiZGSPCiGWW3vVRh6h5uHM8J/preview" allow="autoplay"></iframe>

							<iframe src="https://drive.google.com/file/d/1tcqhj0WFHiZGSPCiGWW3vVRh6h5uHM8J/preview" width="640" height="480" allow="autoplay"></iframe> -->
						</div>
					</div>

					<div class="row mt-3 position-relative">
						<div class="col-md-10 offset-md-1 cr-p previewImg">
							<img @click="showVidPreview" :src="movie.img1" data-vid="movie.vid1" class="" alt="" width="100%">
							<div id="video-btn-layer" @click="showVidPreview"  data-vid="movie.vid1" class="fs-3 rounded cr-p">
								▲
							</div>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-md-10 offset-md-1">
		                    <p class="mb-0 fs-4 mt-2">
		                       <!-- <i class="fas fa-tags text-danger"></i>
		                       <span class="">180,000円/棟</span> -->
		                    </p>
	         				<p class="text-start fs-5">
								住宅業界でも Youtube や SNS による販促が普及し、多くの住宅会社が動画を活用した販促を行っています。
								しかし、建築前の建売住宅に対応できる住宅会社は少ない状況です。競合よりも早く営業を開始、さらに単に
								形状を伝える動画ではなく、建物をより魅力的に分かりやすく伝える動画を制作。 人の目線で歩くモデルハウスツアー
								で住宅一棟まるごと紹介できます。
	         				</p>
							<!-- <p class="text-center">A2 サイズの高解像度で大判印刷も可能。広告やパンフレットのメインイメージに最適です。</p> -->
							<p class="text-center"></p>

							<h3 class="mt-4 fs-4 fw-bold">制作事例</h3>
							<div class="row">
								<div class="col-md-3 mb-3">
									<img @click="showVidPreview" :src="movie.img2" data-vid="movie.vid2" class="cr-p previewImg" alt="" width="100%"><br>
		                            <div class="text-center">
		                               <img :src="qr.img2" class="previewImg text-center" alt="" width="70%">
		                            </div>
								</div>
								<div class="col-md-3 mb-3">
									<img @click="showVidPreview" :src="movie.img3" data-vid="movie.vid3" class="cr-p previewImg" alt="" width="100%"><br>
		                            <div class="text-center">
		                               <img :src="qr.img3" class="previewImg text-center" alt="" width="70%">
		                            </div>
								</div>
								<div class="col-md-3 mb-3">
									<img @click="showVidPreview" :src="movie.img4" data-vid="movie.vid4" class="cr-p previewImg" alt="" width="100%"><br>
		                            <div class="text-center">
		                               <img :src="qr.img4" class="previewImg text-center" alt="" width="70%">
		                            </div>
								</div>
								<div class="col-md-3">
									<img @click="showVidPreview" :src="movie.img5" data-vid="movie.vid5" class="cr-p previewImg border" alt="" width="100%"><br>
		                            <div class="text-center">
		                               <img :src="qr.img5" class="previewImg text-center" alt="" width="70%">
		                            </div>
								</div>
							</div>

							<hr>

							<div class="row mt-4 position-relative">
								<div class="col-md-7 position-relative">
									<h3 class="fs-5 fw-bold">（オプション）横画面ショート動画</h3>
									<img @click="showVidPreview" :src="movie.img6" data-vid="movie.vid6" class="cr-p" alt="" width="100%">
		                            <img id="qr-hp" :src="qr.img6" class="qr-hp previewImg text-center position-absolute" alt="" width="17%" style="right: 60px; bottom: 5px;">
									<!-- <div id="video-btn-layer" @click="showVidPreview"  data-vid="movie.vid6" class="fs-3 rounded cr-p">
										▲
									</div> -->
								</div>
								<div class="col-md-5 position-relative text-center">
									<h3 class="fs-5 fw-bold">（オプション）縦画面ショート動画</h3>
									<img id="hp-vertical" @click="showVidPreview" :src="movie.img7" data-vid="movie.vid7" class="cr-p" alt="" width="45%" height="">
		                            <img :src="qr.img7" class="qr-hp previewImg text-center position-absolute" alt="" width="24%" style="right: 80px; bottom: 5px;">
									<!-- <div id="video-btn-layer" @click="showVidPreview"  data-vid="movie.vid7" class="fs-3 rounded cr-p">
										▲
									</div> -->
								</div>
							</div>

							<div class="row mt-4">
								<div class="col-md-12">
			         				<p class="text-start fs-5">
										ウォークスルー動画製作をご依頼頂いた物件に、オプションでSNS向けのショート動画を再編集して納品も可能です。タイムパフォーマンスを重視するZ世代向け動画です。横画面はYouTubeなどに、縦画面はInstagramなどに向いてます。<br>

										<span class="text-secondary fs-08">
											※ショート動画単体での製作依頼はできません
										</span>
			         				</p>
								</div>
							</div>

							<hr>

							<!-- <h3 class="mt-4 fs-4 fw-bold">制作費用：50,000円</h3> -->
							<div class="row mt-4">
								<div class="col-md-2 text-right">
									制作内容：
								</div>
								<div class="col-md-10">
									外観 + 内観、住宅 1 棟（120 ㎡ まで）の CG 動画、2～３分程度
								</div>
							</div>
							<div class="row mt-2">
								<div class="col-md-2 text-right">
									納品形態：
								</div>
								<div class="col-md-10">
									.mp4ファイル納品（大容量データ転送サービス等利用）
								</div>
							</div>
							<div class="row mt-2">
								<div class="col-md-2 text-right">
									必要資料：
								</div>
								<div class="col-md-10">
									平面図、立面図、配置図、仕上表、Google Map で検索できる現地住所
								</div>
							</div>
							<div class="row mt-2">
								<div class="col-md-2 text-right">
									納期：
								</div>
								<div class="col-md-10">15 営業日以内（但し、制作チェックの確認期間は除きます）</div>
							</div>
							<div class="row">
								<div class="col-md-2 text-right"></div>
								<div class="col-md-10 text-secondary fs-08">
									※初回のご依頼はヒアリングや制作の流れを説明しながら進めますので 20 営業日以内となります
								</div>
							</div>
							<div class="row mt-2">
								<div class="col-md-2 text-right text-danger">
									注意事項：
								</div>
								<div class="col-md-10">
									1棟毎の製作対象となります。多棟分譲地等で製作対象棟以外の作画が必要な場合は、「1.CG パース」制作費用が別途必要になります
								</div>
							</div>

							<div class="row">
								<div class="col-md-12 text-center">
								</div>
							</div>

						</div>
					</div>

				</div>

			</div>
		</div>

	</div>
	<!-- MOVIE-END -->
	<!-- --------------------------------------------------------------------------------------------------- -->

	<!-- video-modal -->
   <div :class="[modal.vidPreview, 'modal justify-content-center align-items-center vh-100']">
     <!-- The Close Button -->
		<span @click="closeVidPreview" class="close">&times;</span>

		<div class="spinner-border text-light position-absolute" role="status" style="text-align: center;z-index: -1;">
			<span class="sr-only">Loading...</span>
		</div>

		 <!-- v-if="modal.vidPreview != 'd-none' ? true : false" -->
		<iframe v-if="modal.vid == 'https://www.youtube.com/embed/dRdpwt_GRIA?rel=0&enablejsapi=1' ? true : false" id="youtubeFrame" :width="videoModalWidth" :height="videoModalHeight" :src="modal.vid" title="YouTube video player" loading="lazy" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

     	<!-- Modal Content (The Image) -->
		<video v-else :src="modal.vid" id="vid" class="modal-content" controls autoplay="autoplay" loop=loop>
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
			videoModalWidth: 0,
			videoModalHeight: 0,
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
            // vid1: "https://www.youtube.com/embed/dRdpwt_GRIA?rel=0&enablejsapi=1",
            // vid2: "https://drive.google.com/uc?export=download&id=1aqEjsTsSvI5uPJCLKV-oQyWKWty6amBJ",
            // vid3: "https://drive.google.com/uc?export=download&id=1VftNXLpWj_EpICWUn-MjynyA8iw1ndVA",
            // vid4: "https://drive.google.com/uc?export=download&id=1WrAb9vRlkCvXTSzutbgyV2K7lF1kBXsK",
            // vid5: "https://drive.google.com/uc?export=download&id=1wDrxq_PkVCmQ9QO7cx7v9NhbnA8g6-f4",
            // vid6: "https://drive.google.com/uc?export=download&id=1GW-fh43oN13kOCVsf4pcNVt4BJ0t568p",
            // vid7: "https://drive.google.com/uc?export=download&id=11zbKX_qUHla6j7q8NP3mB23dTElrTWRG"
        },
        qr: {
            img1: "assets/qr_code/"+this.$isTest()+"movie_pg_1.png"+this.$vd,
            img2: "assets/qr_code/"+this.$isTest()+"movie_pg_2.png"+this.$vd,
            img3: "assets/qr_code/"+this.$isTest()+"movie_pg_3.png"+this.$vd,
            img4: "assets/qr_code/"+this.$isTest()+"movie_pg_4.png"+this.$vd,
            img5: "assets/qr_code/"+this.$isTest()+"movie_pg_5.png"+this.$vd,
            img6: "assets/qr_code/"+this.$isTest()+"movie_pg_6.png"+this.$vd,
            img7: "assets/qr_code/"+this.$isTest()+"movie_pg_7.png"+this.$vd
        },
        modal: {
            vidPreview: "d-none",
            vid: ""
         }
		}
	},
	methods: {
		showVidPreview(e) {
			var vid = e.target.dataset.vid
			var tipe = vid.split('.')[0]
			var url = vid.split('.')[1]

			this.modal.vid = this.movie[url]
			this.modal.vidPreview = "d-flex"

			var playVid = document.getElementById('vid')
			playVid.currentTime = 0;

			playVid.autoplay;

			console.log(this.modal.vid)
		},
		closeVidPreview() {
			console.log('klicked')
         	// Pause yutube video

			var videos = document.querySelectorAll('iframe, video');
			Array.prototype.forEach.call(videos, function (video) {
				if (video.tagName.toLowerCase() === 'video') {
					video.pause();
					var src = video.src;
					video.src = src;
				} else {
					var src = video.src;
					video.src = src;
				}
			})

			this.modal.vidPreview = "d-none"
			this.modal.vid = ""

			// var playVid = document.getElementById('vid')
			// playVid.currentTime = 0;
         	// playVid.pause();

			console.log('finish')
      }
	},
	created() {
		this.videoModalWidth = window.screen.width*0.8
		this.videoModalHeight = window.screen.width*0.45
		console.log(this.videoModalWidth)
		console.log(this.videoModalHeight)
	},
	mounted() {
	}
}
</script>

<style>
#video-btn-layer {
   padding: 7.5px 8px 15px 8px;
   display: inline-block;
   transform: rotate(90deg);
   position: absolute;
   left: calc(50% - 32px);
   top: calc(50% - 30px);
   border: 1px solid #b80018;
   color: #ffffff;
   background: #b80018;
   transition: all .3s;
   z-index: 1;
}

img[src="assets/img/movie/2-1_loop_ver.jpg"] {
/*  width: 45% !important;*/
}

.qr-hp {
	box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
	border-radius: 5px;
}

/*More button*/
.ytp-button.ytp-expand {
	display: none !important;
}

/*More videos panel bottom*/
.ytp-pause-overlay {
	display: none !important;
}

/*Top Title*/
.ytp-gradient-top, .ytp-chrome-top.ytp-show-cards-title {
	display: none !important;
}
</style>