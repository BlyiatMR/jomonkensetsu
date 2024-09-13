<template>
<div>
	<!-- --------------------------------------------------------------------------------------------------- -->
   <!-- CG -->
   <div id="cg" class="container-fluid">
      <div class="container">
         <div class="row">

         	<div class="col-md-10 offset-md-1">
         		<div class="row">
         			<div class="col-md-12">
         				<br>
         				<div class="border-bottom border-danger border-danger border-3 position-relative mt-5">
         					<img src="assets/icon_bg/no1.png" alt="1" width="50" class="d-inline-block">
         					<span class="fs-3 fw-bold align-middle ml-3">CGパース</span>
         				</div>
         			</div>
         		</div>

         		<div class="row mt-3 position-relative">
         			<div class="col-md-10 offset-md-1">
         				<img @click="showImgPreview" :src="cg.img1" data-img="cg.img1" class="cr-p previewImg" alt="" width="100%">
         			</div>
         		</div>

         		<div class="row mt-3">
         			<div class="col-md-10 offset-md-1">
                     <p class="mb-0 fs-4 mt-2">
                        <!-- <i class="fas fa-tags text-danger"></i>
                        <span class="">55,000円/棟</span> -->
                     </p>
         				<p class="text-start fs-5">
         					販促やプレゼンでプランの魅力を最大限に引き出す高品質パース。建築前に建物の魅力を顧客に伝え、
                        営業での機会損失を減らします。大手ポータルサイト掲載基準対応にて現地周辺環境も再現。<br>
                        サムネイル画像の注目度をアップさせます。<br>
         					高解像度対応で大判印刷も可能。広告やパンフレットのメインイメージにも活用いただけます。
         				</p>
         				<!-- <p class="text-center">A2 サイズの高解像度で大判印刷も可能。広告やパンフレットのメインイメージに最適です。</p> -->
         				<p class="text-center"></p>

         				<h3 class="mt-4 fs-4 fw-bold">制作事例</h3>
         				<div class="row">
         					<div class="col-md-3 mb-4">
         						<img @click="showImgPreview" :src="cg.img2" data-img="cg.img2" class="cr-p previewImg" alt="" width="100%">
         					</div>
         					<div class="col-md-3 mb-4">
         						<img @click="showImgPreview" :src="cg.img3" data-img="cg.img3" class="cr-p previewImg" alt="" width="100%">
         					</div>
         					<div class="col-md-3 mb-4">
         						<img  @click="showImgPreview" :src="cg.img4" data-img="cg.img4" class="cr-p previewImg" alt="" width="100%">
         					</div>
         					<div class="col-md-3 mb-4">
         						<img  @click="showImgPreview" :src="cg.img5" data-img="cg.img5" class="cr-p previewImg border" alt="" width="100%">
         					</div>
         				</div>
                     <div class="row">
                        <div class="col-md-3 mb-4">
                           <img @click="showImgPreview" :src="cg.img6" data-img="cg.img6" class="cr-p previewImg" alt="" width="100%">
                        </div>
                        <div class="col-md-3 mb-4">
                           <img @click="showImgPreview" :src="cg.img7" data-img="cg.img7" class="cr-p previewImg" alt="" width="100%">
                        </div>
                        <div class="col-md-3 mb-4">
                           <img  @click="showImgPreview" :src="cg.img8" data-img="cg.img8" class="cr-p previewImg" alt="" width="100%">
                        </div>
                        <div class="col-md-3 mb-4">
                           <img  @click="showImgPreview" :src="cg.img9" data-img="cg.img9" class="cr-p previewImg border" alt="" width="100%">
                        </div>
                     </div>

         				<!-- <h3 class="mt-4 fs-4 fw-bold">制作費用：35,000円</h3> -->
         				<div class="row">
         					<div class="col-md-2 text-right">
         						制作内容：
         					</div>
         					<div class="col-md-10">
         						外観または内観CGパース1カット（120㎡まで）、A2サイズ印刷レベルの高画質対応
         					</div>
         				</div>
                     <div class="row mt-2">
                        <div class="col-md-2 text-right">
                           納品形態：
                        </div>
                        <div class="col-md-10">
                           .jpgファイル納品
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
         					<div class="col-md-10">5 営業日以内（但し、制作チェックの確認期間は除きます）</div>
         				</div>
         				<div class="row">
         					<div class="col-md-2 text-right"></div>
         					<div class="col-md-10 text-secondary fs-08">
         						※初回のご依頼はヒアリングや制作の流れを説明しながら進めますので 10 営業日以内となります
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
   <!-- CG-END -->
	<!-- --------------------------------------------------------------------------------------------------- -->

   <!-- image-modal -->
   <div :class="[modal.imgPreview, 'modal justify-content-center align-items-center vh-100']">
      <!-- The Close Button -->
      <span @click="closeImgPreview" class="close">&times;</span>
      <!-- Modal Content (The Image) -->
      <img class="modal-content" :src="modal.img">
   </div>
   <!-- end-image-modal -->

</div>
</template>

<script>
export default {
	data() {
		return {
        cg: {
            img1: "assets/img/cg/2-1.jpg"+this.$vd,
            img2: "assets/img/cg/2-2.jpg"+this.$vd,
            img3: "assets/img/cg/2-3.jpg"+this.$vd,
            img4: "assets/img/cg/2-4.jpg"+this.$vd,
            img5: "assets/img/cg/2-5.jpg"+this.$vd,
            img6: "assets/img/cg/2-6.jpg"+this.$vd,
            img7: "assets/img/cg/2-7.jpg"+this.$vd,
            img8: "assets/img/cg/2-8.jpg"+this.$vd,
            img9: "assets/img/cg/2-9.jpg"+this.$vd
        },
        modal: {
            imgPreview: "d-none",
            img: ""
         }
		}
	},
	methods: {
		showImgPreview(e) {
			var img = e.target.dataset.img
			var tipe = img.split('.')[0]
			var url = img.split('.')[1]

         this.modal.img = this.cg[url]
         this.modal.imgPreview = "d-flex"
		},
      closeImgPreview() {
         this.modal.imgPreview = "d-none"
      }
	}
}
</script>

<style>
</style>