<template>
<div>

    <!-- <div class="absolute bottom-0 right-0 fill-[#1A377C]">
        <svg preserveAspectRatio="xMidYMid meet" data-bbox="73 20 54 160" viewBox="73 20 54 160" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" aria-label="">
            <g>
                <path d="M102.055 73.01H127L99.998 20 73 73.01h24.941v50.844l-23.102 13.135.008 43.011 25.15-13.38 25.153 13.365.003-43.001-23.099-13.133.001-50.841zm11.229-17.877H86.715l13.283-26.078 13.286 26.078zm-28.609 4.004h30.647l5.007 9.828h-40.66l5.006-9.828zm13.266 69.422v14.315l-19.012 9.331-.005-12.828 19.017-10.818zm-19.01 28.205l19.01-9.33v15.644l-19.003 10.107-.007-16.421zm23.124 6.312v-15.643l19 9.323-.013 16.418-18.987-10.098zm19.013-23.704l-.011 12.826-19.004-9.324v-14.312l19.015 10.81z"></path>
            </g>
        </svg>
    </div> -->

    <navbar></navbar>

    <section>
        <div class="relative overflow-hidden flex items-center justify-center h-fit w-full">
            <img class="w-full max-sm:h-52 object-cover object-top -z-10 max-md:inset-auto" src="assets/img/jomon/home1/bg-home.jpg" alt="">
            <div class="absolute z-20 text-center">
                <h1 class="text-white text-[40px] font-semibold max-md:text-[25px]">縄文文明の知恵を今に！</h1>
            </div>
        </div>
    </section>

    <!-- Story -->
    <section class="max-w-[980px] mx-auto mt-12">
        <div class="mx-32 max-md:mx-10">
            <div>
                <h1 class="font-semibold text-[25px] tracking-[3px] text-center text-[#33343F]">STORY</h1>
            </div>
            <hr class="w-[72px] border-solid border-black mx-auto mb-1">
            <div>
                <p class="text-[12px] tracking-[3px] text-center font-thin text-[#3344F]">これまでの歩み</p>
            </div>
        </div>

        <div class="relative mt-20 mx-16 max-md:mx-6">
            <div class="absolute top-16 right-0 -z-20 max-lg:static">
                <img class="max-lg:w-full" src="assets/img/jomon/home1/pict-home.jpg" width="460px" alt="">
            </div>
            <div class="py-8 px-14 bg-[#F3F5F8] w-[476px] z-50 max-lg:mt-5 max-md:px-10 max-md:py-5 max-lg:w-full">
                <div class="mb-5">
                    <p class="text-[#33343F]">約1万4000年ほども続いた縄文時代。</p>
                </div>
                <div class="mb-5">
                    <p class="text-[#33343F]">耳をすませば、そこからは先人達の驚くべき知恵が伝わってきます。</p>
                    <p class="text-[#33343F]">氷河期から暖冬温暖期になる大きな気候変動の中を貫いて生き続けた縄文人たち。</p>
                </div>
                <div>
                    <p class="text-[#33343F]">縄文時代の活きた遺産・宝を、今に活かさない手はない。</p>
                    <p class="text-[#33343F]">衣食住の住の問題解決は永遠に続く課題です。</p>
                    <p class="text-[#33343F]">縄文時代を貫いて住み続けられてきた竪穴式住居を、地球環境気候問題のヒントとして現代社会に活かせないものか。</p>
                </div>
            </div>
            <div class="flex mt-6 ml-40 max-lg:ml-0 max-lg:justify-center">
                <router-link to="/story" class="flex items-center py-[3px] px-5 rounded-3xl bg-[#1A377C] text-white tracking-[6px] hover:bg-[#3F7652] duration-300">
                    <span>続きを読む</span>
                    <span class="w-[37px] h-[37px] fill-white">
                        <svg class="" data-bbox="9 70.9 181 59" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                            <g>
                                <path d="M159 70.9l-2.2 2.4L183.6 99H9v3h174.6l-26.2 25.3 2.1 2.6 30.5-29.3-31-29.7z"></path>
                            </g>
                        </svg>
                    </span>
                </router-link>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="max-w-[980px] mx-auto mt-48 max-md:mt-20">
        <div class="mx-20 max-md:mx-6">
            <div class="mx-32 max-md:mx-10">
                <div>
                    <h1 class="font-semibold text-[25px] tracking-[3px] text-center text-[#33343F]">ABOUT</h1>
                </div>
                <hr class="w-[72px] border-solid border-black mx-auto mb-1">
                <div>
                    <p class="text-[12px] tracking-[3px] text-center font-thin text-[#3344F]">代表プロフィール</p>
                </div>
            </div>
            <div class="relative mt-10">
                <div class="absolute -top-10 left-0 bg-[#F3F5F8] bg-opacity-50 p-3 w-fit max-lg:static max-lg:bg-transparent max-lg:w-full">
                    <img class="max-lg:w-full" src="assets/img/jomon/home1/people.jpg" width="350px" alt="">
                </div>
                <div class="bg-[#F3F5F8] mt-20 ml-80 py-5 px-16 max-lg:ml-0 max-lg:mt-5 max-lg:px-10 max-md:px-6 max-lg:py-5 max-lg:mx-6 max-md:mx-0 max-lg:w-full">
                    <div class="flex items-end my-5">
                        <p class="text-[30px] text-[#33343F]">服部　健治</p>
                        <p class="ml-2 mb-1 text-[15px] font-light text-[#33343F]">Kenji Hattori</p>
                    </div>
                    <div>
                        <p class="text-[#33343F] font-light w-[300px] max-md:w-full">古民家ツーリズムまちづくりプランナー空き家問題トータルコンサルタント２級古民家鑑定士一級</p>
                    </div>
                    <div class="mt-5">
                        <div class="flex w-full">
                            <p class="text-[16px] w-1/5">1953年</p>
                            <p class="text-[16px] w-4/5">福井県生まれ</p>
                        </div>
                        <div class="flex w-full">
                            <p class="text-[16px] w-1/5">1999年</p>
                            <p class="text-[16px] w-4/5">自宅を建てたことを機に住宅業界に 転職し、営業職に就く</p>
                        </div>
                        <div class="flex w-full">
                            <p class="text-[16px] w-1/5">2008年</p>
                            <p class="text-[16px] w-4/5">独立起業 <br>オリジナル商品「Tiera」を開発し 13年間販売</p>
                        </div>
                        <div class="flex w-full">
                            <p class="text-[16px] w-1/5">2024年</p>
                            <p class="text-[16px] w-4/5">竪穴式住宅家屋の構造として実用新案登録（登録第3246226号）</p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end max-lg:justify-center">
                    <router-link to="/structure" class="flex items-center mt-5 mr-40 max-lg:mr-0 tracking-[6px] py-1 px-5 rounded-3xl bg-[#1A377C] text-white hover:bg-[#3F7652] duration-300" href="">
                        <span>詳しく見る</span>
                        <span class="w-[37px] h-[37px] fill-white">
                            <svg class="" data-bbox="9 70.9 181 59" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                                <g>
                                    <path d="M159 70.9l-2.2 2.4L183.6 99H9v3h174.6l-26.2 25.3 2.1 2.6 30.5-29.3-31-29.7z"></path>
                                </g>
                            </svg>
                        </span>
                    </router-link>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-48">
        <Contact></Contact>
    </section>

    <Footer></Footer>

</div>
</template>
    
<script>

import Navbar from './sections/Navbar.vue';
import Contact from './sections/Contact.vue';
import Footer from './sections/Footer.vue';

// Navigation Responsive
// Navigation Responsive
// Navigation Responsive

export default {
    components : {
        Navbar,
        Contact,
        Footer,
    },
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