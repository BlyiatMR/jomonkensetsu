<template>
<div>
	<!-- --------------------------------------------------------------------------------------------------- -->
   <!-- VR -->
   <!--section-4-->
   <div id="vr" class="container-fluid">
      <div class="container">
         <div class="row">

         	<div class="col-md-10 offset-md-1">
         		<div class="row">
         			<div class="col-md-12">
         				<br>
         				<div class="border-bottom border-danger border-3 position-relative mt-5">
         					<img src="assets/icon_bg/no3.png" alt="3" width="50" class="d-inline-block">
         					<span class="fs-3 fw-bold align-middle ml-3">シミュレーション VR</span>
         				</div>
         			</div>
         		</div>

         		<div class="row mt-3 position-relative">
         			<div class="col-md-10 offset-md-1">
         				<img @click="openNewWindow" :src="vr.img1" data-url="vr.url1" class="cr-p previewImg" alt="" width="100%">
         				<!-- <div class="video-btn-layer fs-3 rounded cr-p">▲</div> -->
         			</div>
         		</div>

         		<div class="row mt-3">
         			<div class="col-md-10 offset-md-1">
                     <p class="mb-0 fs-4 mt-2">
                        <!-- <i class="fas fa-tags text-danger"></i>
                        <span class="">95,000円/棟</span> -->
                     </p>
                     <p class="text-start fs-5">
                        建築予定地の360°写真と外観完成イメージCGを合成。ビフォーアフター切り替え。<br>
                        現地を360°見渡して周辺環境や建物の外観完成イメージをわかりやすく伝えます。
                     </p>
         				<!-- <p class="text-center">A2 サイズの高解像度で大判印刷も可能。広告やパンフレットのメインイメージに最適です。</p> -->
         				<p class="text-center"></p>

         				<!-- <h3 class="mt-4 fs-4 fw-bold">制作費用：20,000円</h3> -->
         				<div class="row mt-4">
         					<div class="col-md-2 text-right">
         						制作内容：
         					</div>
         					<div class="col-md-10">
									外観ビフォーアフター VR(2 アングルまで )　アクセス URL および QR コード納品
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
         						平面図、立面図、配置図、区割図、仕上表、現地 360° 写真 (RICOH THETA(シータ) などの全天球撮影カメラで撮影した現地写真)
         					</div>
         				</div>
         				<div class="row mt-2">
         					<div class="col-md-2 text-right">
         						納期：
         					</div>
         					<div class="col-md-10">10 営業日以内（但し、制作チェックの確認期間は除きます）</div>
         				</div>
         				<div class="row">
         					<div class="col-md-2 text-right"></div>
         					<div class="col-md-10 text-secondary fs-08">
         						※初回のご依頼はヒアリングや制作の流れを説明しながら進めますので 15 営業日以内となります
         					</div>
         				</div>
         				<div class="row mt-2">
         					<div class="col-md-2 text-right text-danger">
         						注意事項：
         					</div>
         					<div class="col-md-10">
         						多棟分譲地の場合、作画棟数分の「1.CG パース」制作費用が別途必要になります<br>
                           プログラムサーバー上での維持保守費用（月額30,000円）が別途必要になります。（データ量上限100ギガまで）
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
   <!--section-4-end-->
   <!-- VR-END -->
	<!-- --------------------------------------------------------------------------------------------------- -->
</div>
</template>

<script>
export default {
	data() {
		return {
        vr: {
            img1: "assets/img/vr/3-1.jpg"+this.$vd,
            url1: "https://vrshowroom.jp/jhs/simulationvr/"
        }
		}
	},
	methods: {
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
</style>