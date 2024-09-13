<template>
<div>
   <!-- --------------------------------------------------------------------------------------------------- -->
   <!-- Photo Matching -->
   <div id="pm" class="container-fluid">
      <div class="container">
         <div class="row">

            <div class="col-md-10 offset-md-1">
               <div class="row">
                  <div class="col-md-12">
                     <br>
                     <div class="border-bottom border-danger border-danger border-3 position-relative mt-5">
                        <img src="assets/icon_bg/no4.png" alt="5" width="50" class="d-inline-block">
                        <span class="fs-3 fw-bold align-middle ml-3">CGホームステージング</span>
                     </div>
                  </div>
               </div>

               <div class="row mt-3">
                  <div class="col-md-10 offset-md-1">
                     <h3 class="fs-4 fw-bold">室内</h3>
                  </div>
               </div>

               <!-- Interior -->
               <div class="row mt-3 mb-3">
                  <div class="col-md-10 offset-md-1">
                     
                     <div v-for="(int, index) in ints" class="row mb-4">
                        <div class="col-md-6 position-relative">
                           <span class="badge-type position-absolute badge badge-pill badge-secondary">Before</span>
                           <img :key="int.imgB" width="100%" :src="int.imgB">
                        </div>
                        <div class="col-md-6 position-relative">
                           <span class="badge-type position-absolute badge badge-pill badge-danger">After</span>
                           <img :key="int.imgA" width="100%" :src="int.imgA">
                        </div>
                     </div>

                     <p class="mb-0 fs-4 mt-2">
                        <!-- <i class="fas fa-tags text-danger"></i>
                        <span class="">7,000円/枚（1カット）</span> -->
                     </p>
                     <p class="text-start fs-5 mb-4">
                        新築住宅の室内やリフォーム前の室内写真にCG加工（ホームステージング）を施します。
                        ホームステージング前後を比較でき、建物の魅力、生活イメージを分かりやすく伝える事が出来ます。
                     </p>

                     <div class="mt-3"></div>
                     <hr>

                  </div>
               </div>
               <!-- Interior End -->

               <div class="row mt-3">
                  <div class="col-md-10 offset-md-1">
                     <h3 class="fs-4 fw-bold">外構・外観</h3>
                  </div>
               </div>
               <!-- Eksterior -->
               <div class="row mt-3">
                  <div class="col-md-10 offset-md-1">
                     
                     <div v-for="(ext, index) in exts" class="row mb-4">
                        <div class="col-md-6 position-relative">
                           <span class="badge-type position-absolute badge badge-pill badge-secondary">Before</span>
                           <img :key="ext.imgB" width="100%" :src="ext.imgB">
                        </div>
                        <div class="col-md-6 position-relative">
                           <span class="badge-type position-absolute badge badge-pill badge-danger">After</span>
                           <img :key="ext.imgA" width="100%" :src="ext.imgA">
                        </div>
                     </div>

                     <p class="mb-0 fs-4 mt-2">
                        <!-- <i class="fas fa-tags text-danger"></i>
                        <span class="">7,000円/枚（1カット）</span> -->
                     </p>
                     <p class="text-start fs-5 mb-4">
                        外構未完成の新築住宅の写真に、外構や車、外観レタッチ等のCG加工を施します。建物全体の完成イメージをわかりやすく伝える事が出来ます。
                     </p>

                     <hr>

                  </div>
               </div>
               <!-- Eksterior End -->

               <div class="row mt-3 position-relative">
                  <div class="col-md-10 offset-md-1">
                     <img-comparison-slider class="previewImg" width="100%">
                        <figure slot="first" class="slider-before">
                           <img width="100%" src="assets/img/pm/4-1_before.jpg">
                           <figcaption>修正前</figcaption>
                        </figure>
                        <figure slot="second" class="slider-after">
                           <img width="100%" src="assets/img/pm/4-1_after.jpg">
                           <figcaption>修正後</figcaption>
                        </figure>

                        <!-- <img slot="first" src="assets/img/pm/4-1_before.jpg" class="mw-100" />
                        <img slot="second" src="assets/img/pm/4-1_after.jpg" class="mw-100" /> -->
                     </img-comparison-slider>
                     <!-- <img @click="showImgPreview" :src="pm.img1" data-img="pm.img1" class="cr-p previewImg" alt="" width="100%"> -->
                  </div>
               </div>

               <div class="row">
                  <div class="col-md-10 offset-md-1">
                     <p class="text-right text-secondary fs-08">
                        スライダー機能付き納品も可能です（URL納品＋.jpg)
                     </p>
                     <!-- <p class="text-center">A2 サイズの高解像度で大判印刷も可能。広告やパンフレットのメインイメージに最適です。</p> -->
                     <p class="text-center"></p>

                     <h3 class="mt-4 fs-4 fw-bold">制作事例</h3>
                     <div class="row">
                        <div class="col-md-3 mb-4">
                           <img @click="showImgPreview" :src="pm.img2before" data-imgbefore="pm.img2before" data-imgafter="pm.img2after" class="cr-p previewImg" alt="" width="100%"><br>
                           <div class="text-center">
                              <img :src="qr.img2" class="previewImg text-center" alt="" width="70%"><br>
                              ①ナチュラル
                           </div>
                        </div>
                        <div class="col-md-3 mb-4">
                           <img @click="showImgPreview" :src="pm.img3before" data-imgbefore="pm.img3before" data-imgafter="pm.img3after" class="cr-p previewImg" alt="" width="100%"><br>
                           <div class="text-center">
                              <img :src="qr.img3" class="previewImg text-center" alt="" width="70%"><br>
                              ②モダン
                           </div>
                        </div>
                        <div class="col-md-3 mb-4">
                           <img @click="showImgPreview" :src="pm.img4before" data-imgbefore="pm.img4before" data-imgafter="pm.img4after" class="cr-p previewImg" alt="" width="100%"><br>
                           <div class="text-center">
                              <img :src="qr.img4" class="previewImg text-center" alt="" width="70%"><br>
                              ③シンプル
                           </div>
                        </div>
                        <div class="col-md-3 mb-4">
                           <img @click="showImgPreview" :src="pm.img5before" data-imgbefore="pm.img5before" data-imgafter="pm.img5after" class="cr-p previewImg" alt="" width="100%"><br>
                           <div class="text-center">
                              <img :src="qr.img5" class="previewImg text-center" alt="" width="70%"><br>
                              ④ビンテージ
                           </div>
                        </div>
                     </div>

                     <!-- <h3 class="mt-4 fs-4 fw-bold">制作費用：35,000円</h3> -->
                     <div class="row mt-4">
                        <div class="col-md-2 text-right">
                           制作内容：
                        </div>
                        <div class="col-md-10">
                           写真合成イメージ製作
                        </div>
                     </div>
                     <div class="row mt-2">
                        <div class="col-md-2 text-right">
                           納品形態：
                        </div>
                        <div class="col-md-10">
                           .jpgファイル納品。スライダー機能搭載の場合はURL納品となります。
                        </div>
                     </div>
                     <div class="row mt-2">
                        <div class="col-md-2 text-right">
                           必要資料：
                        </div>
                        <div class="col-md-10">
                           内観写真、インテリアスタイルの指示、家具配置の資料（写真や平面図に大体の家具の配置を記載した資料。手描きで構いません）
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
                           ※初回のご依頼はヒアリングや制作の流れを説明しながら進めますので１０営業日以内となります
                        </div>
                     </div>
                     <div class="row mt-2">
                        <div class="col-md-2 text-right text-danger">
                           注意事項：
                        </div>
                        <div class="col-md-10">
                           室内の家具は弊社お任せとなり家具の指定は不可となります。
                           CGホームステージングは基本的に修正は1回の提出となり、基本的に調整は行いません（微調整は承ります）。<br>
                           スライダー機能搭載（URL納品）の場合、プログラムサーバー上での維持保守費用（月額30,000円）が別途必要になります。（データ量上限100ギガまで）
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

</div>
</template>

<script>
export default {
   data() {
      return {
        ints: [
            { imgA: "assets/img/pm/A_after.jpg"+this.$vd, imgB: "assets/img/pm/A_before.jpg"+this.$vd},
            { imgA: "assets/img/pm/B_after.jpg"+this.$vd, imgB: "assets/img/pm/B_before.jpg"+this.$vd},
            { imgA: "assets/img/pm/D_after.jpg"+this.$vd, imgB: "assets/img/pm/D_before.jpg"+this.$vd}
        ],
        exts: [
            { imgA: "assets/img/pm/ext-1_after.jpg"+this.$vd, imgB: "assets/img/pm/ext-1_before.jpg"+this.$vd},
            { imgA: "assets/img/pm/ext-2_after.jpg"+this.$vd, imgB: "assets/img/pm/ext-2_before.jpg"+this.$vd},
            { imgA: "assets/img/pm/ext-3_after.jpg"+this.$vd, imgB: "assets/img/pm/ext-3_before.jpg"+this.$vd}
        ],
        pm: {
            img1: "assets/img/pm/4-1_before.jpg"+this.$vd,
            img2before: "assets/img/pm/4-2_before.jpg"+this.$vd,
            img2after: "assets/img/pm/4-2_afters.jpg"+this.$vd,
            img3before: "assets/img/pm/4-3_before.jpg"+this.$vd,
            img3after: "assets/img/pm/4-3_after.jpg"+this.$vd,
            img4before: "assets/img/pm/4-4_before.jpg"+this.$vd,
            img4after: "assets/img/pm/4-4_after.jpg"+this.$vd,
            img5before: "assets/img/pm/4-5_before.jpg"+this.$vd,
            img5after: "assets/img/pm/4-5_after.jpg"+this.$vd,
            instruction_sample: "assets/img/pm/instruction_sample.jpg"+this.$vd
        },
        qr: {
            img1: "assets/qr_code/"+this.$isTest()+"pm_pg_1.png"+this.$vd,
            img2: "assets/qr_code/"+this.$isTest()+"pm_pg_2.png"+this.$vd,
            img3: "assets/qr_code/"+this.$isTest()+"pm_pg_3.png"+this.$vd,
            img4: "assets/qr_code/"+this.$isTest()+"pm_pg_4.png"+this.$vd,
            img5: "assets/qr_code/"+this.$isTest()+"pm_pg_5.png"+this.$vd
        },
        // cg: {
        //     img1: "assets/img/cg/2-1.jpg",
        //     img2: "assets/img/cg/2-2.jpg",
        //     img3: "assets/img/cg/2-3.jpg",
        //     img4: "assets/img/cg/2-4.jpg",
        //     img5: "assets/img/cg/2-5.jpg",
        //     img6: "assets/img/cg/2-6.jpg",
        //     img7: "assets/img/cg/2-7.jpg",
        //     img8: "assets/img/cg/2-8.jpg",
        //     img9: "assets/img/cg/2-9.jpg"
        // },
        modal: {
            imgPreview: "d-none",
            imgafter: "",
            imgbefore: ""
         }
      }
   },
   methods: {
      showImgPreview(e) {
         var imgbefore = e.target.dataset.imgbefore
         var tipebefore = imgbefore.split('.')[0]
         var urlbefore = imgbefore.split('.')[1]

         var imgafter = e.target.dataset.imgafter
         var tipeafter = imgafter.split('.')[0]
         var urlafter = imgafter.split('.')[1]

         this.modal.imgbefore = this.pm[urlbefore]
         this.modal.imgafter = this.pm[urlafter]

         this.modal.imgPreview = "d-flex"
      },
      closeImgPreview() {
         this.modal.imgPreview = "d-none"
      }
   }
}
</script>

<style>
.badge-type {
   top:  10px;
   left: 30px;
}
</style>