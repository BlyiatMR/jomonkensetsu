<template>
<div class="position-relative">
   
   <!-- PreviewVrGradeHG -->
   <img @click="openNewWindow" :src="wr.img1" :data-url="'wr.url1'" class="cr-p previewImg" alt="" width="100%">
   <!-- PreviewVrGradeHG end -->

   <!-- <div class="grade-memo position-absolute text-center fs-08 fw-bold text-white">
      ウォークインVR（HG・ハイグレード）<br>
      OHA納品レベル（CGパースなし）
   </div> -->

   <!-- HG -->
   <div class="row mt-3">
      <div class="col-md-12">

         <!-- here -->
         <div class="row">
            <div class="col-md-8 offset-md-2">
               
               <div class="row">
                  <div class="col-md-8">
                     <p class="mb-0 fs-4 mt-2">
                        <!-- <i class="fas fa-tags text-danger"></i>
                        <span class="">250,000円/棟</span> -->
                     </p>
                     <h3 class="fs-4 fw-bold">HG（ハイグレード）製作仕様</h3>
                     <ul>
                        <li>外観昼/夕方スイッチ機能</li>
                        <li>各部屋360°VR</li>
                        <li>平面図マップ表示</li>
                        <li>問い合わせリンクボタン</li>
                        <li>会社ロゴ</li>
                        <li>スマホ対応</li>
                        <li>VRゴーグル対応</li>
                     </ul>
                  </div>

                  <div class="col-md-4">
                     <img class="mt-4" src="assets/img/wr/qr_hg.png" width="80%">
                  </div>
               </div>

            </div>
         </div>
         <!-- here -->

      </div>
   </div>
   <!-- HG end -->

   <hr>
               
</div>
</template>

<script>
export default {
   props: ['wr'],
   data() {
      return {}
   },
   methods: {
      openNewWindow(e) {
         this.$parent.openNewWindow(e)
      }
   }
}
</script>

<style>
</style>