<template>
<div>
	<div id="wrapper-sidebar" :class="[isShow ? 'show' : '', 'min-vh-100']">
		<div id="sidebar" :class="[isShow ? 'shrink' : '', 'min-vh-100 bg-dark']">
			<span @click="hide" class="close">&times;</span>
			<!-- <h2 class="text-center">メニュー</h2> -->
			<div id="link" class="text-left">
				<router-link @click.native="isShow = false" class="py-3 px-3 fs-2 d-block" to="/" exact><i class="fas fa-home mr-2"></i>ホーム</router-link>
				<router-link @click.native="isShow = false" class="py-3 ml-4 px-3 fs-2 d-block" to="/#cg" exact><i class="fas fa-image mr-2"></i>CGパース制作</router-link>
				<router-link @click.native="isShow = false" class="py-3 ml-4 px-3 fs-2 d-block" to="/#movie" exact><i class="fas fa-film mr-2"></i>ウォークスルー動画</router-link>
				<router-link @click.native="isShow = false" class="py-3 ml-4 px-3 fs-2 d-block" to="/#vr" exact><i class="fas fa-vr-cardboard mr-2"></i>シミュレーション VR</router-link>
				<router-link @click.native="isShow = false" class="py-3 px-3 fs-2 d-block" to="/privacy" exact><i class="fas fa-user-shield mr-2"></i>プライバシーポリシー</router-link>
				<router-link @click.native="isShow = false" class="py-3 px-3 fs-2 d-block" to="/contact-form" exact><i class="far fa-id-card mr-2"></i>お問い合わせフォーム</router-link>
				<router-link v-if="!$auth()" @click.native="isShow = false" class="py-3 px-3 fs-2 d-block" to="/login" exact><i class="fas fa-sign-in-alt mr-2"></i>ログイン</router-link>
				<router-link v-if="$auth()" @click.native="isShow = false" class="py-3 px-3 fs-2 d-block" to="/dashboard" exact><i class="fas fa-tachometer-alt mr-2"></i>ダッシュボード</router-link>
				<router-link v-if="$auth()" @click.native="isShow = false" class="py-3 px-3 fs-2 d-block" to="/logout" exact><i class="fas fa-sign-out-alt mr-2"></i>ログアウト</router-link>
			</div>
		</div>
	</div>
	<!-- <img id="burger_menu" src="assets/icon_bg/burger_menu.png" class="cr-p"> -->
	<!-- <svg @click="show" id="burger_menu" viewBox="0 0 100 80" width="40" height="40" class="cr-p">
		<rect fill="#343a40" width="80" height="15"></rect>
		<rect fill="#343a40" y="25" width="80" height="15"></rect>
		<rect fill="#343a40" y="50" width="80" height="15"></rect>
	</svg> -->
	<div @mouseover="mouseover = true" @mouseleave="mouseover = false" @click="show" id="side_fold" :class="[isShow ? 'side_fold_left' : '', 'cr-p d-flex justify-content-center align-items-center']">
		<transition mode="out-in">
			<span key="side_fold_arrow" v-if="!mouseover" class="arrow">❮</span><span key="side_fold_menu" v-else class="menu">メニュー</span>
		</transition>
	</div>
</div>
</template>

<script>
export default {
	data() {
		return {
			isShow: false,
			mouseover: false
		}
	},
	methods: {
		show() {
			this.isShow = true
		},
		hide() {
			this.isShow = false
		}
	}
}
</script>

<style>
#side_fold {
	z-index: 50;
	position: fixed;
	right: -8px;
	top: calc(50% - 50px);
	height: 80px;
	width: 20px;
	background: #343a40;
	border-top-left-radius: 80px;
	border-bottom-left-radius: 80px;
	color: white;
	transition: all .3s;
}

#side_fold:hover {
	right: 0;
}

#side_fold>.arrow {
	position: absolute;
	top: 33%;
	left: 1px;
	color: white;
	font-weight: bold;
	font-size: 1.2rem;
	transition: all .2s;
}
#side_fold>.menu {
	position: absolute;
	top: 25%;
	left: 2.82px;
	writing-mode: vertical-rl;
	font-size: 0.7rem;
	transition: all .2s;
}

#sidebar #link{
	margin-top: 55px;
}

#burger_menu {
	position: fixed;
	top: 15px;
	right: 15px;
	z-index: 50;
	width: 40px;
	/*background-color: rgba(255,255,255,0.8);*/
	border-radius: 3px;
}

#wrapper-sidebar {
	position: fixed;
	left: 0;
	top: 0;
	width: 100%;
	display: block;
	/*z-index: -1;*/
	z-index: 60;
	overflow: hidden;
	visibility: hidden;
	transition: all 0.5s ease 0s;
}
#wrapper-sidebar.show {
	/*z-index: 60;*/
	background-color: rgba(0,0,0,0.8);
	visibility: visible;
}
#sidebar {
	position: fixed;
	right: -300px;
	top: 0;
	width: 300px;
	display: block;
	box-sizing: border-box;
	padding-left: 10px;
	padding-right: 10px;
	box-shadow: -60px 0px 100px -90px #000000;
	transition: all 0.5s ease 0s;
}
#sidebar.shrink {
	right: 0;
}

#sidebar>.close {
	position: absolute;
	top: 20px;
	right: 10px;
	color: #f5f5f5;
	font-size: 50px;
	font-weight: bold;
	transition: 0.3s;
	line-height: 0;
}

#sidebar a {
	border-bottom: 1px solid #2e2e2e;
	color: #f5f5f5;
}

#sidebar a:hover, .router-link-exact-active {
	text-decoration: none;
	background: #2b3034;
}

#sidebar .router-link-exact-active, #sidebar .router-link-exact-active:hover {
	background: #0ba2de;
}

#burger_menu:hover {

}
</style>