<template>
	<div id="btn-go-top" class="btn-danger btn-danger text-white text-center cr-p" v-show="scY > 500" @click="scrollGoTop" style="">Top</div>
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
        }, 100);
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
	right: 15px;
	bottom: 15px;
	width: 50px;
	height: 50px;
	font-weight: bold;
	line-height: 50px;
	border-radius: 50%;
	text-decoration: none;
	color: white !important;
}
</style>