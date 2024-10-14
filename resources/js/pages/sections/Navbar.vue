<template>

    <section>
    <nav class="flex justify-evenly items-center max-md:justify-center max-md:relative max-md:overflow-hidden">
      <div class="my-3">
        <router-link to="/Home">
            <img src="assets/img/jomon/home1/icon-logo.jpg" class="w-[90px] max-md:w-[120px]" alt="Logo">
        </router-link>    
        </div>
      <!-- Desktop Navigation -->
      <div class="flex gap-5 mt-3 max-md:hidden">
        <router-link to="/home" class="text-[#1A377C] text-[13px] border-t-[1px] border-[#1A377C] px-2 pt-2 hover:border-t-4 hover:pt-[5px]">ホーム</router-link>
        <router-link to="/structure" class="text-[#1A377C] text-[13px] border-t-[1px] border-[#1A377C] px-2 pt-2 hover:border-t-4 hover:pt-[5px]">構造</router-link>
        <a href="/#about" class="text-[#1A377C] text-[13px] border-t-[1px] border-[#1A377C] px-2 pt-2 hover:border-t-4 hover:pt-[5px]" style="border-top-width: 1px !important;">代表者について</a>
        <router-link to="/story" class="text-[#1A377C] text-[13px] border-t-[1px] border-[#1A377C] px-2 pt-2 hover:border-t-4 hover:pt-[5px]">これまでの歩み</router-link>
        <router-link to="/contact" class="text-[#1A377C] text-[13px] border-t-[1px] border-[#1A377C] px-2 pt-2 hover:border-t-4 hover:pt-[5px]">お問い合わせ</router-link>
      </div>
      <!-- Mobile Navigation Button -->
      <div class="max-md:flex hidden justify-end">
        <div id="resNav" @click="toggleMenu" class="absolute top-5 right-6">
          <!-- <img id="resBtn" class="w-[35px]" src="assets/img/jomon/home1/bars-icon.jpg" alt="Menu Button"> -->
          <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24"><path stroke="#33343F" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 17h14M5 12h14M5 7h14"/></svg>
        </div>
        <!-- Mobile Menu -->
        <div v-bind:class="{'hidden': !menuVisible, 'block': menuVisible}" id="resMenu" class="fixed top-0 left-0 w-full h-[100vh] p-10 bg-white text-black resGoDown z-50">
          <div id="resNavClose" @click="closeMenu" class="absolute top-5 right-6 rounded-md text-black">
            <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24"><path d="M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12z"/></svg>
          </div>
          <div class="block"></div>
          <div class="flex flex-col mb-8">
            <router-link to="/Home" class="nav-respo-btn text-[25px] text-center mt-10">ホーム</router-link>
            <router-link to="/Structure" class="nav-respo-btn text-[25px] text-center mt-10">構造</router-link>
            <a href="/#about" class="nav-respo-btn text-[25px] text-center mt-10">代表者について</a>
            <router-link to="/Story" class="nav-respo-btn text-[25px] text-center mt-10">これまでの歩み</router-link>
            <router-link to="/Contact" class="nav-respo-btn text-[25px] text-center mt-10">お問い合わせ</router-link>
          </div>
        </div>
      </div>
    </nav>
  </section>

</template>
<style>
.nav-respo-btn {
  border-top-width: 0 !important;
}
</style>
<script>

// Navigation Responsive
// Navigation Responsive
// Navigation Responsive

export default {
  data() {
    return {
      menuVisible: false
    };
  },
  methods: {
    toggleMenu() {
      this.menuVisible = !this.menuVisible;
    },
    closeMenu() {
      const respoMenu = document.getElementById('resMenu');
      respoMenu.classList.add('nav-close');
      setTimeout(() => {
        this.menuVisible = false;
        respoMenu.classList.remove('nav-close');
      }, 150);
    }
  }
};

// Navigation Responsive
// Navigation Responsive
// Navigation Responsive

</script>