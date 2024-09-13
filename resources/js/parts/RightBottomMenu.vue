<template>
	<div id="right-bottom-menu">

		<Transition>
		<div v-if="isShow">
			<!-- <span @click="openNewWindow" data-url="url1" class="btn btn-danger btn-block">資料ダウンロード</span> -->
			<span @click="openNewWindow" data-url="url2" class="btn btn-danger btn-block" style="margin-top: 5px;">お問い合わせ</span>
			<span @click="toggleShow" id="hide-right-bottom-menu" class="btn text-secondary"><i class="fas fa-chevron-right"></i></span>
		</div>
		<div v-else>
			<span @click="toggleShow" id="show-right-bottom-menu" class="btn btn-secondary">
				<b><i class="fas fa-chevron-left"></i></b>
			</span>
			<!-- <span @click="toggleShow" id="show-right-bottom-menu" class="btn"><i class="fas fa-chevron-left"></i>リンク</span> -->
		</div>
	</Transition>

	</div>
</template>

<script>
export default {
	data() {
		return {
			scTimer: 0,
			scY: 0,
			isShow: JSON.parse(localStorage.getItem('showMenuRightBottom')) == false ? false : true,
			url1: 'https://service.j-shield.co.jp/others/cg_perspective/dl/CGVR',
			url2:'http://www.marumori-c.com/contact',
			// url2: 'https://service.j-shield.co.jp/contact'
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
      },
      toggleShow() {
      	this.isShow = !this.isShow
      	localStorage.setItem('showMenuRightBottom', JSON.stringify(this.isShow))
      },
			openNewWindow(e) {
			   e.preventDefault();
			   var el = e.target.dataset.url
			   var url = el.split('.')[0]
			   
			   return window.open(this[url])
			}
	},
	mounted() {
      window.addEventListener('scroll', this.handleScroll);
	}
}
</script>

<style>
#right-bottom-menu {
	z-index: 50;
	position: fixed;
	right: 15px;
	bottom: 70px;
	font-weight: bold;
	line-height: 50px;
	border-radius: 50%;
	text-decoration: none;
	color: white !important;
}

#hide-right-bottom-menu {
	position: absolute;
	top: -10px;
	left: -50px;
	font-size: 35px;
}

#show-right-bottom-menu {
	font-size: 0.8rem;
	margin-right: 9px;
	margin-bottom: -10px;
}
</style>