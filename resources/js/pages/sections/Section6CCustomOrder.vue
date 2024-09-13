<template>
<div>
   <!-- --------------------------------------------------------------------------------------------------- -->
   <!-- Project Order -->
   <div id="project-order" class="container-fluid">
      <div class="container">
         <div class="row">

            <div class="col-md-10 offset-md-1">
               <div class="row">
                  <div class="col-md-12">
                     <br>
                     <div class="border-bottom border-danger border-danger border-3 position-relative mt-5">
                        <img src="assets/icon_bg/no3.png" alt="5" width="50" class="d-inline-block">
                        <span class="fs-3 fw-bold align-middle ml-3">プロジェクトオーダー</span>
                     </div>
                  </div>
               </div>

               <div class="row mt-3">
                  <div class="col-md-10 offset-md-1">
                     <h3 class="fs-4 fw-bold">VR住宅展示場（VRタウン）</h3>
                  </div>
               </div>

               <div class="row mt-3 position-relative">
                  <div class="col-md-10 offset-md-1">
                     <img @click="openNewWindow" :src="custom.img1" data-url="custom.url1" class="cr-p previewImg" alt="" width="100%">
                  </div>
               </div>

               <div class="row mt-3">
                  <div class="col-md-10 offset-md-1">
                     <p class="text-start mt-2 fs-5">
                        VR住宅展示場（VRタウン）は、各社のモデル・ランナップ・コンセプト等をVRで再現し、自社専用のVR住宅展示場を製作します。
                        テンプレートタウンを使わず、各社のイメージに合った街並みを、打合せしながらデザインしていきます。
                        VRを使った技術投入にて、より自社コンセプトの発信力を向上させ、自社HPへのリンクやSNSでの集客力を使い、
                        商談機会の向上で他社との差別化を図ります。
                     </p>
                     <!-- <p class="text-center">A2 サイズの高解像度で大判印刷も可能。広告やパンフレットのメインイメージに最適です。</p> -->
                     <p class="text-center"></p>

                     <h3 class="mt-4 fs-4 fw-bold">制作事例</h3>
                     <div class="row">
                        <div class="col-md-6 position-relative">
                           <!-- <span class="badge-type position-absolute badge text-danger">Coming Soon</span>
                           <img  @click="openNewWindow" :src="custom.img5" data-url="custom.url5" class="cr-p previewImg opacity-0" alt="" width="100%"><br> -->
                           <div class="text-center">
                              <img  @click="openNewWindow" :src="custom.img2" data-url="custom.url2" class="cr-p previewImg" alt="" width="100%">
                              <br>
                              建築条件付き分譲地販売用VRタウン
                           </div>
                        </div>
                        <div class="col-md-6">
                           <!-- <span class="badge-type position-absolute badge text-danger">Coming Soon</span>
                           <img  @click="openNewWindow" :src="custom.img5" data-url="custom.url5" class="cr-p previewImg opacity-0" alt="" width="100%"><br> -->
                           <div class="text-center">
                              <img  @click="showVidPreview" :src="custom.img3" data-vid="movie.vid3" class="cr-p previewImg" alt="" width="100%">
                              <br>
                              <span class="fs-08">多棟分譲地ウォークスルー動画（マックホーム株式会社様）</span>
                           </div>
                        </div>
                     </div>

                     <div class="row mt-2">
                        <div class="col-md-6">
                           <!-- <span class="badge-type position-absolute badge text-danger">Coming Soon</span>
                           <img  @click="openNewWindow" :src="custom.img5" data-url="custom.url5" class="cr-p previewImg opacity-0" alt="" width="100%"><br> -->
                           <div class="text-center">
                              <img  @click="showVidPreview" :src="custom.img4" data-vid="movie.vid4" class="cr-p previewImg" alt="" width="100%">
                              <br>
                              リノベーション用ビフォーアフター動画
                           </div>
                        </div>
                        <div class="col-md-6">
                           <img  @click="showVidPreview" :src="custom.img5" data-vid="movie.vid5" class="cr-p previewImg" alt="" width="100%">
                              <br>
                           <!-- <span class="badge-type position-absolute badge text-danger">Coming Soon</span>
                           <img  @click="openNewWindow" :src="custom.img5" data-url="custom.url5" class="cr-p previewImg opacity-0" alt="" width="100%"><br> -->
                           多棟分譲地ウォークスルー動画（株式会社三井開発様）
                        </div>
                     </div>

                     <div class="row mt-4">
                        <div class="col-md-10 offset-md-1 mb-3">
                           そのほか、CGパース、ウォークスルー動画、シミュレーションVR等を組合せながら、多棟分譲地等のプロモーションや、リノベーション用の動画制作を行います。<br>
                           プロジェクトオーダーは自由な発想で制作が可能です。お気軽にご相談ください。
                        </div>
                     </div>

                     <!-- <div class="row mt-2">
                        <div class="col-md-4 offset-md-4 mt-2 mb-3">
                           <span @click="openNewWindow" data-url="custom.urlDocs" class="btn btn-danger btn-block">VRタウン資料ダウンロード</span>
                        </div>
                     </div> -->

                     <div class="row mt-2">
                        <div class="col-md-2 text-right">
                           制作内容：
                        </div>
                        <div class="col-md-10">
                           カスタマイズ成果物
                        </div>
                     </div>
                     <div class="row mt-2">
                        <div class="col-md-2 text-right">
                           納品形態：
                        </div>
                        <div class="col-md-10">
                           URL納品、.jpg/.mp4納品（製作内容によります）
                        </div>
                     </div>
                     <div class="row mt-2">
                        <div class="col-md-2 text-right">
                           必要資料：
                        </div>
                        <div class="col-md-10">
                           製作内容によります
                        </div>
                     </div>
                     <div class="row mt-2">
                        <div class="col-md-2 text-right">
                           納期：
                        </div>
                        <div class="col-md-10">製作内容によります</div>
                     </div>
                     <div class="row mt-2">
                        <div class="col-md-2 text-right text-danger">
                           注意事項：
                        </div>
                        <div class="col-md-10">
                           URL納品成果物はプログラムサーバー上での維持保守費用（月額30,000円）が別途必要になります。（データ量上限100ギガまで）
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
        custom: {
            img1: "assets/img/custom/5-1.jpg"+this.$vd,
            img2: "assets/img/custom/5-2.jpg"+this.$vd,
            img3: "assets/img/custom/"+this.$isTest()+"5-3.jpg"+this.$vd,
            img4: "assets/img/custom/"+this.$isTest()+"5-4.jpg"+this.$vd,
            img5: "assets/img/custom/"+this.$isTest()+"5-5.jpg"+this.$vd,
            url1: "https://vrshowroom.jp/jhs/town/",
            url2: "https://vrtown.jp/hinokiya/teradai/",
            // url3: "https://spacely.co.jp/vrtown/zouseichi",
            // url4: "https://spacely.co.jp/vrtown/zouseichi",
            // url4: "http://vrshowroom.jp/souhouse/shinkawa3_5/",
            // url5: "",
            urlDocs: "https://service.j-shield.co.jp/others/cg_perspective/dl/CGVR"
        },
         movie: {
            vid2: "assets/img/custom/5-2.mp4"+this.$vd,
            vid3: "assets/img/custom/vid_5-3.mp4"+this.$vd,
            vid4: "assets/img/custom/vid_5-4.mp4"+this.$vd,
            vid5: "assets/img/custom/vid_5-5.mp4"+this.$vd
            // vid3: "https://drive.google.com/uc?export=download&id=10H66gImc7BnkzYH-o5EFxMhOkgSWHWEP",
            // vid4: "https://drive.google.com/uc?export=download&id=1P0qz_El0iTgLi32XChMDP4ElnzYq5B4W"
        },
        qr: {
            img2: "assets/qr_code/custommovie_pg_2.png"+this.$vd,
            img3: "assets/qr_code/custommovie_pg_3.png"+this.$vd,
            img4: "assets/qr_code/custommovie_pg_4.png"+this.$vd,
            img5: "assets/img/custom/5-5_qr.png"+this.$vd
        },
        modal: {
            imgPreview: "d-none",
            img: "",
            vidPreview: "d-none",
            vid: ""
         }
      }
   },
   methods: {
      showImgPreview(e) {
         var img = e.target.dataset.img
         var tipe = img.split('.')[0]
         var url = img.split('.')[1]

         this.modal.img = this.custom[url]
         this.modal.imgPreview = "d-flex"
      },
      closeImgPreview() {
         this.modal.imgPreview = "d-none"
      },
      showVidPreview(e) {
         var vid = e.target.dataset.vid
         var tipe = vid.split('.')[0]
         var url = vid.split('.')[1]

         this.modal.vid = this.movie[url]
         this.modal.vidPreview = "d-flex"

         var playVid = document.getElementById('vid')
         playVid.currentTime = 0;

         playVid.autoplay;
      },
      closeVidPreview() {
         this.modal.vidPreview = "d-none"

         var playVid = document.getElementById('vid')
         playVid.currentTime = 0;
         this.modal.vid = ""
         // playVid.pause();
      },
      openNewWindow(e) {
         e.preventDefault();
         var el = e.target.dataset.url
         
         var tipe = el.split('.')[0]
         var url = el.split('.')[1]

         return window.open(this[tipe][url])
      }
   }
}
</script>

<style>
img.opacity-0 {
   opacity: 0.2;
}
img.opacity-0:hover {
   opacity: 0.2 !important;
}
.fs-08 {
   font-size: 0.8rem;
}
</style>