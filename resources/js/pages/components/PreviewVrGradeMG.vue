<template>
<div class="position-relative">
   
   <!-- PreviewVrGradeHG -->
   <img @click="openNewWindow" :src="wr.img2" :data-url="'wr.url2'" class="cr-p previewImg" alt="" width="100%">
   <!-- PreviewVrGradeHG end -->

   <!-- <div class="grade-memo position-absolute text-center fs-08 fw-bold text-white">
      ウォークインVR（MG・マスターグレード）<br>
      JHSタウンレベル（CGパースなし）
   </div> -->

   <!-- MG -->
   <div class="row mt-3">
      <div class="col-md-12">

         <!-- here -->
         <div class="row">
            <div class="col-md-8 offset-md-2">
               
               <div class="row">
                  <div class="col-md-8">
                     <p class="mb-0 fs-4 mt-2">
                        <!-- <i class="fas fa-tags text-danger"></i>
                        <span class="">300,000円/棟</span> -->
                     </p>
                     <h3 class="fs-4 fw-bold">MG（マスターグレード）製作仕様</h3>
                     <div class="fs-4">（HG仕様に以下機能搭載）</div>
                     <ol>
                        <li>オートパイロット機能（自動ルームツアー）</li>
                        <li>画像・動画等のポップアップリンク機能（5箇所以内）</li>
                        <li>
                           カラーシミュレーション（柱/梁の木製部、木製テーブル、<br>
                           フローリングのカラーチェンジ機能）
                        </li>
                        <li>スクリーンショット機能</li>
                        <li>サムネイル表示/非表示機能</li>
                        <li>音声ON-OFF機能</li>
                     </ol>
                  </div>

                  <div class="col-md-4">
                     <img class="mt-4" src="assets/img/wr/qr_mg.png" width="80%">
                  </div>
               </div>

            </div>
         </div>
         <!-- here -->

      </div>
   </div>
   <!-- MG end -->
   
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