<template>
<div>
	<!-- --------------------------------------------------------------------------------------------------- -->
   <!--section-2-->
   <div id="video-banner" class="container-fluid p-0">
   	<video preload="auto" autoplay="" muted="muted" volume="0" class="" loop="">
			<source src="video/opening.mp4" type="video/mp4">
		</video>

		<!-- <div id="logo-banner" class="flex flex-wrap text-white">
			<a class="navbar-brand" href="/">
            <img src="assets/icon_bg/marumori_logo.png" alt="Marumori Company" width="170" class="d-inline-block marumori-logo">
            <img src="assets/icon_bg/colab_x.png" alt="X" width="60" class="d-inline-block">
				<img src="assets/icon_bg/jhs_logo.png" alt="Japan Home Shield" width="250" class="d-inline-block ms-5 ps-3 jhs-logo">
			</a>
		</div> -->
   </div>
   <!--section-2-end-->
	<!-- --------------------------------------------------------------------------------------------------- -->
</div>
</template>

<script>
export default {

}
</script>

<style>
#video-banner {
   width: 100%;
   height: 600px;
   overflow: hidden;
   position: relative;
}

#video-banner video {
   position: absolute;
   top:  -100px;
   width: 100%;
   overflow: hidden;
}

#logo-banner {
   position: absolute;
   width: 100%;
   top: calc((600px / 2) - 60px );
   text-align: center;
   opacity: 0;
   /*filter: drop-shadow(5px 5px 5px #222);*/
   animation-name: fadein;
   animation-delay: 0s;
   animation-duration: 4s;
   animation-fill-mode: both;
   padding-bottom: 10px;
}

@keyframes fadein{
    0% { opacity:0; }
    30% { opacity:0; }
    100% { opacity:1; }
}

@keyframes borderltor{
    0% { width: 0; }
    100% { width: 250px; }
}

#logo-banner .navbar-brand {
   position: relative;
}

#logo-banner #x {
   font-weight: 400;
   top: -35px;
   color: #090505;
}

/*MEDIA*/
@media only screen and (max-width: 1024px) {
   #video-banner {
      height: 576px !important;
   }

   #video-banner video {
      top: 0 !important;
   }
   
   #logo-banner {
      position: absolute;
      height: calc(576px / 2) !important;
      width: 100%;
      top: calc((576px / 2) - 60px) !important;
   }

   /*font sec3 adv3*/
   #sec3-adv2 p.fs-3.border-bottom.pb-2,
   #sec3-adv3 p.fs-3.border-bottom.pb-2 {
      font-size: calc(1.1rem + 0.1vw) ;
   }

     #sec3-adv1 .fs-2 {
         font-size: 1.3rem !important;
     }

     #sec3-adv1 .display-4 {
         font-size: 2.5rem !important;
     }

     #sec3-adv2 {
      margin-top:-1.2rem;
     }
      #sec3 #btn-service .fs-4 {
         font-size: 1rem !important;
      }

      .mt-5 {
         margin-top: 1.5rem !important;
      }

   #sec6 .company-name {
      font-size: 1.4rem;
   }

     .container-fluid>.container>.row .col-md-10.offset-md-1 {
      width: 100% !important;
      /*margin-left: 0 !important;*/
   }
}

@media only screen and (max-width: 425px){
   #logo-banner {
      top: calc((600px / 2) - 144px ) !important;
   }

   #logo-banner #x {
      font-weight: 400 !important;
      font-size: 3rem !important;
      left: -24px !important;
   }

   #video-banner {
      height: 576px !important;
   }

   #video-banner video {
      width: 350% !important;
      left: -385px !important;
   }
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 375px){
   #video-banner video {
      width: 350% !important;
      left: -450px;
   }
}
</style>