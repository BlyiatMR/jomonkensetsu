<template>
<div>
	<!--section-1-->
   <div class="container-fluid border-bottom border-danger border-3"></div>
   <!--section-1-end-->

	<!-- --------------------------------------------------------------------------------------------------- -->
   <!-- section-2-banner -->
	<section-2-banner></section-2-banner>
   <!--section-2-banner-end-->
	<!-- --------------------------------------------------------------------------------------------------- -->

	   <!--section-3-->
   <div id="privacy-container" class="container-fluid mb-4">
      <div class="container">
         <div class="row">

            <!-- col -->
         	<div class="col-md-10 offset-md-1">
               <!-- row -->
         		<div class="row">
         			<div class="col-md-12">
         				<div class="mb-3">
         					<router-link to="/" class="btn btn-danger btn-sm">
                           <i class="fas fa-home mr-2"></i>ホーム
         					</router-link>
         				</div>
				         <h1 id="main-title-service" class="display-5 fw-bold">プライバシーポリシー</h1>

                     <div class="border-bottom border-danger border-3 position-relative"></div>
         			</div>
         		</div>
         		<!-- row-end -->

               <!-- row -->
               <div class="row">
                  <div class="col-md-12">
                     <p class="mt-3">
                        株式会社 マルモリカンパニー（以下「当社」）は、以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、全従業員に個人情報保護の重要性の認識と取組みを徹底させることにより、個人情報の保護を推進致します。
                     </p>
                  </div>
               </div>

               <!-- row -->
               <div class="row mb-2">
                  <div class="col-md-12">
                     <p class="mt-3 mb-2">
                        <b>個人情報の管理</b>
                     </p>
                     <hr class="m-2">
                     当社は、お客さまの個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行ないます。
                  </div>
               </div>
               <!-- row-end -->

               <!-- row -->
               <div class="row mb-2">
                  <div class="col-md-12">
                     <p class="mt-3 mb-2">
                        <b>個人情報の利用目的</b>
                     </p>
                     <hr class="m-2">
                     お客さまからお預かりした個人情報は、当社からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用いたします。
                  </div>
               </div>
               <!-- row-end -->

               <!-- row -->
               <div class="row mb-2">
                  <div class="col-md-12">
                     <p class="mt-3 mb-2">
                        <b>個人情報の第三者への開示・提供の禁止</b>
                     </p>
                     <hr class="m-2">
                     当社は、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。<br>
                     <ul class="mb-0">
                        <li>お客さまの同意がある場合</li>
                        <li>お客さまが希望されるサービスを行なうために当社が業務を委託する業者に対して開示する場合</li>
                        <li>法令に基づき開示することが必要である場合</li>
                     </ul>
                  </div>
               </div>
               <!-- row-end -->

               <!-- row -->
               <div class="row mb-2">
                  <div class="col-md-12">
                     <p class="mt-3 mb-2">
                        <b>個人情報の安全対策</b>
                     </p>
                     <hr class="m-2">
                     当社は、個人情報の正確性及び安全性確保のために、セキュリティに万全の対策を講じています。
                  </div>
               </div>
               <!-- row-end -->

               <!-- row -->
               <div class="row mb-2">
                  <div class="col-md-12">
                     <p class="mt-3 mb-2">
                        <b>ご本人の照会</b>
                     </p>
                     <hr class="m-2">
                     お客さまがご本人の個人情報の照会・修正・削除などをご希望される場合には、ご本人であることを確認の上、対応させていただきます。
                  </div>
               </div>
               <!-- row-end -->

               <!-- row -->
               <div class="row mb-2">
                  <div class="col-md-12">
                     <p class="mt-3 mb-2">
                        <b>法令、規範の遵守と見直し</b>
                     </p>
                     <hr class="m-2">
                     当社は、保有する個人情報に関して適用される日本の法令、その他規範を遵守するとともに、本ポリシーの内容を適宜見直し、その改善に努めます。
                  </div>
               </div>
               <!-- row-end -->

               <!-- row -->
               <div class="row mb-2">
                  <div class="col-md-12">
                     <p class="mt-3 mb-2">
                        <b>お問い合せ</b>
                     </p>
                     <hr class="m-2">
                     当社の個人情報の取扱に関するお問い合せは下記までご連絡ください。<br>
                     株式会社 マルモリカンパニー　TEL / 092-260-1805
                  </div>
               </div>
               <!-- row-end -->

         	</div>
            <!-- col-end -->

	      </div>
      </div>

   </div>
   <!--section-3-end-->
   <br><br>

	<!-- --------------------------------------------------------------------------------------------------- -->
   <!-- section-10-contact -->
	<section-10-contact></section-10-contact>
   <!--section-10-contact-end-->
	<!-- --------------------------------------------------------------------------------------------------- -->

</div>
</template>

<script>
import Section2Banner 	from './sections/Section2Banner'
import Section10Contact from './sections/Section10Contact'

export default {
	components: {
		Section2Banner,
		Section10Contact
	},
	data() {
		return {
        modal: {
        }
		}
	},
	methods: {
		showModal(data, type) {
		},
		openNewTab() {
		}
	},
	mounted() {
	},
	created() {
	}
}
</script>

<style>
#privacy-container .container {
   margin-top: -80px;
   position: relative;
   z-index: 20;
   padding-top: 50px !important;
}

#privacy-container .container {
   padding-top: 20px;
   padding-bottom: 50px;
   background: #fff;
   border-radius: 2px;
   position: relative;
   /*box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);*/
   box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

@media only screen and (max-width: 768px) {
	.container-fluid > .container {
		padding-left: 15px !important;
		padding-right: 15px !important;
	   box-shadow: none !important;
	}

}
</style>