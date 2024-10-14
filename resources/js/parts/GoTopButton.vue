<template>
	<div id="btn-go-top" class="btn-danger btn-danger text-center cr-p max-xl:hidden" v-show="scY > 500" @click="scrollGoTop" style="">
		<svg class="fill-[#1A377C]" preserveAspectRatio="xMidYMid meet" data-bbox="73 20 54 160" viewBox="73 20 54 160" height="44px" width="43px" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" aria-label="">
			<g>
				<path d="M102.055 73.01H127L99.998 20 73 73.01h24.941v50.844l-23.102 13.135.008 43.011 25.15-13.38 25.153 13.365.003-43.001-23.099-13.133.001-50.841zm11.229-17.877H86.715l13.283-26.078 13.286 26.078zm-28.609 4.004h30.647l5.007 9.828h-40.66l5.006-9.828zm13.266 69.422v14.315l-19.012 9.331-.005-12.828 19.017-10.818zm-19.01 28.205l19.01-9.33v15.644l-19.003 10.107-.007-16.421zm23.124 6.312v-15.643l19 9.323-.013 16.418-18.987-10.098zm19.013-23.704l-.011 12.826-19.004-9.324v-14.312l19.015 10.81z"></path>
			</g>
		</svg>
	</div>
</template>

<script>
export default {
	data() {
		return {
			scTimer: 0,
			scY: 0
		}
	},
	methods: {
      handleScroll() {
      	// console.log(document.documentElement.scrollTop)
        if (this.scTimer) return;
        this.scTimer = setTimeout(() => {
          this.scY = window.scrollY || document.documentElement.scrollTop;
          clearTimeout(this.scTimer);
          this.scTimer = 0;
        }, 200);
      },
      scrollGoTop() {
        window.scrollTo({
          top: 0,
          behavior: "smooth"
        });
      }
	},
	mounted() {
      window.addEventListener('scroll', this.handleScroll);
	}
}
</script>

<style>
#btn-go-top {
	z-index: 50;
	position: fixed;
	right: 200px;
	bottom: 15px;
	width: 150px;
	height: 50px;
	font-weight: bold;
	line-height: 50px;
	border-radius: 50%;
	text-decoration: none;
	color: white !important;
}
</style>