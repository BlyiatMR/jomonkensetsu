<template>
<div>
   <!-- --------------------------------------------------------------------------------------------------- -->
   <!-- Walking VR -->
   <div id="walkingvr" class="container-fluid">
      <div class="container">
         <div class="row">

            <div class="col-md-10 offset-md-1">
               <div class="row">
                  <div class="col-md-12">
                     <br>
                     <div class="border-bottom border-danger border-3 position-relative mt-5">
                        <img src="assets/icon_bg/no4.png" alt="4" width="50" class="d-inline-block">
                        <span class="fs-3 fw-bold align-middle ml-3">ウォークインVR</span>
                     </div>
                  </div>
               </div>
   

               <div class="row mt-3">
                  <div class="col-md-10 offset-md-1">
                     <p class="text-start mt-2 fs-5">
                        建築前のモデルハウスやコンセプトをバーチャルで案内。360°見渡して建物の完成イメージをわかりやすく伝えます。MG（マスターグレード）にはオートパイロット、カラーシミュレーション、ポップアップリンク等の技術投入が可能です。<br>
                        今後注目の販促ツールです。
                     </p>
                  </div>
               </div>

               <!-- <div class="row mt-3">
                  <div class="col-md-10 offset-md-1 text-left">
                     <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" @click="toggleGrade('VrGradeHg')" :class="[ gradeView === 'VrGradeHg' ? 'btn-danger' : 'btn-outline-secondary', 'btn btn-sm']">HG（ハイグレード）</button>
                        <button type="button" @click="toggleGrade('VrGradeMg')" :class="[ gradeView === 'VrGradeMg' ? 'btn-danger' : 'btn-outline-secondary', 'btn btn-sm']">MG（マスターグレード）</button>
                     </div>

                  </div>
               </div> -->

               <!-- HG -->
               <div class="row mt-3 position-relative" id="wr-wrapper">
                  <div class="col-md-10 offset-md-1">
                     <h3 class="fs-4 fw-bold">HG（ハイグレード）</h3>
                     <component :is="'PreviewVrGradeHg'" :wr="wr"></component>
                  </div>
               </div>
               <!-- HG-END -->

               <div class="row mt-3 position-relative" id="wr-wrapper">
                  <div class="col-md-10 offset-md-1">
                     <h3 class="fs-4 fw-bold">MG（マスターグレード）</h3>
                     <component :is="'PreviewVrGradeMg'" :wr="wr"></component>
                  </div>
               </div>

               <!-- HG/MG Component -->
               <transition name="component-fade" mode="out-in">
                  <!-- <component :is="gradeView" :wr="wr" :qr="qr"></component> -->
               </transition>
               <!-- HG/MG Component end -->

               <!-- note -->
               <div class="row mt-3">
                  <div class="col-md-10 offset-md-1">
                     
                     <div class="row mt-2">
                        <div class="col-md-2 text-right">
                           制作内容：
                        </div>
                        <div class="col-md-10">
                           外観/内観各部屋360°VR製作
                        </div>
                     </div>
                     <div class="row mt-2">
                        <div class="col-md-2 text-right">
                           納品形態：
                        </div>
                        <div class="col-md-10">
                           URL納品（QRコード発行）
                        </div>
                     </div>
                     <div class="row mt-2">
                        <div class="col-md-2 text-right">
                           必要資料：
                        </div>
                        <div class="col-md-10">
                           <div>平面図、立面図、配置図、仕上表</div>
                        </div>
                     </div>
                     <div class="row mt-2">
                        <div class="col-md-2 text-right">
                           納期：
                        </div>
                        <div class="col-md-10">
                           <div>25 営業日以内（但し、制作チェックの確認期間は除きます）</div>
                           <div class="text-secondary fs-08">
                              ※初回のご依頼はヒアリングや制作の流れを説明しながら進めますので ３５ 営業日以内となります
                           </div>
                        </div>
                     </div>
                     <div class="row mt-2">
                        <div class="col-md-2 text-right text-danger">
                           注意事項：
                        </div>
                        <div class="col-md-10">
                           プログラムサーバー上での維持保守費用（月額30,000円）が別途必要になります。（データ量上限100ギガまで）
                        </div>
                     </div>

                  </div>
               </div>
               <!-- end note -->

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
import PreviewVrGradeHg  from '../components/PreviewVrGradeHg'
import PreviewVrGradeMg  from '../components/PreviewVrGradeMg'

export default {
   components: {
      PreviewVrGradeHg, PreviewVrGradeMg
   },
   data() {
      return {
         wr: {
            img1: "assets/img/wr/4-1.jpg"+this.$vd,
            img2: "assets/img/wr/4-2.jpg"+this.$vd,
            img3: "assets/img/wr/4-3.jpg"+this.$vd,
            img4: "assets/img/wr/4-4.jpg"+this.$vd,
            img5: "assets/img/wr/4-5.jpg"+this.$vd,
            url1: "http://vrshowroom.jp/openhouse/16/",
            url2: "https://vrshowroom.jp/jhs/vrautopilot/",
            url3: "https://vrshowroom.jp/jhs/7/",
            url4: "https://vrshowroom.jp/jhs/8/",
            url5: "https://spacely.co.jp/455565/nakagawa"
         },
        qr: {
            img2: "assets/qr_code/wr_pg_2.png"+this.$vd,
            img3: "assets/qr_code/wr_pg_3.png"+this.$vd,
            img4: "assets/qr_code/wr_pg_4.png"+this.$vd,
            img5: "assets/qr_code/wr_pg_5.png"+this.$vd
        },
        modal: {
            imgPreview: "d-none",
            img: "",
            vidPreview: "d-none",
            vid: ""
         },
         gradeView: 'VrGradeHg',
         preview: {
            img: "assets/img/wr/4-1.jpg"+this.$vd,
            url: "https://vrshowroom.jp/jhs/2/"
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
      },
      toggleGrade(type) {
         if(this.gradeView === type) return
         this.gradeView = type

         if(type == "VrGradeHg") {
            this.preview.img = this.wr.img1
            this.preview.url = 'wr.url1'
         }else{
            this.preview.img = this.wr.img2
            this.preview.url = 'wr.url2'
         }
      }
   }
}
</script>

<style>
.component-fade-enter-active, .component-fade-leave-active {
  transition: opacity .3s ease;
}
.component-fade-enter, .component-fade-leave-to
/* .component-fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}

/*#wr-wrapper img {
   transition: background-image 1s ease-in-out;
}*/
.grade-memo {
   width: 100%;
   display: inline-block;
   top: 40px;
   left: 0;
}
</style>