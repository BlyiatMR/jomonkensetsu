<template>
    <div>
    
    <Navbar></Navbar>

    <section>
        <div class="relative overflow-hidden flex items-center justify-center h-fit w-full">
            <img class="w-full max-sm:h-52 object-cover object-top -z-10 max-md:inset-auto" src="assets/img/jomon/page2/bg-strcture.jpg" alt="">
            <div class="absolute z-20 text-center">
                <h1 class="text-white text-[66px] max-md:text-[35px]">PLAN</h1>
            </div>
        </div>
    </section>
    
    <section class="max-w-[980px] mx-auto mt-12 max-md:mx-6">
        <div class="mx-32 max-md:mx-10">
            <div>
                <h1 class="font-semibold text-[25px] text-center text-[#33343F]">PLAN</h1>
            </div>
            <hr class="w-[72px] border-solid border-black mx-auto mb-1">
            <div>
                <p class="text-[12px] tracking-[3px] text-center font-thin text-[#3344F]">構造</p>
            </div>
        </div>
        <div class="my-10">
            <p class="mt-10 mb-5 mx-auto text-center max-md:text-start">現在、縄文建設の施工事例はありません <br>こちらの図面は構造図です</p>
            <p class="mx-auto text-center max-md:text-start">住宅図面は、これからお客様と一緒に描いていきたいと考えています <br>ご興味のある方はお気軽にお問い合わせください <br>​企業様からのお問い合わせも歓迎いたします</p>
        </div>
        <div>
            <img class="w-[870px] mx-auto" src="assets/img/jomon/page2/house-plan.jpg" alt="">
        </div>
        <div class="flex jus mt-6 max-lg:ml-0 justify-center">
            <a href="pdf/c8e2a5_70b74d2bcb134d12addd85d0333a3901.pdf" target="_blank" class="flex items-center py-[3px] px-5 rounded-3xl bg-[#1A377C] text-white tracking-[3px] hover:bg-[#3F7652] duration-300">
                <span>実用新案登録証</span>
                <span class="w-[37px] h-[37px] fill-white">
                    <svg class="" data-bbox="9 70.9 181 59" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                        <g>
                            <path d="M159 70.9l-2.2 2.4L183.6 99H9v3h174.6l-26.2 25.3 2.1 2.6 30.5-29.3-31-29.7z"></path>
                        </g>
                    </svg>
                </span>
            </a>
        </div>
    </section>

    <section class="max-w-[980px] mx-auto mt-48 max-md:mt-20 max-md:mx-6">
        <div class="mx-32 max-md:mx-10">
            <div>
                <h1 class="font-semibold text-[25px] text-center text-[#33343F]">ORIGINALITY</h1>
            </div>
            <hr class="w-[72px] border-solid border-black mx-auto mb-1">
            <div>
                <p class="text-[12px] tracking-[3px] text-center font-thin text-[#3344F]"><span class="font-semibold">9</span>つの独自性</p>
            </div>
        </div>
        <div class="flex flex-wrap items-stretch max-lg:justify-center">

            <!-- card -->
            <div v-for="(card, i) in cards" class="flex flex-col w-[326px] my-12 h-[259px]">
                <h1 class="text-[38px] font-semibold tracking-[5px]">0{{ i + 1 }}.</h1>
                <div class="flex flex-col justify-center pt-5">
                    <span v-html="card.img" class="fill-[#1A377C] w-[38px] h-[38px] mx-auto">
                        
                    </span>
                    <p v-html="card.title" class="mt-4 text-[20px] text-center font-bold h-[60px]"></p>
                    <p v-html="card.paragraph" class="mt-5 text-center font-extralight"></p>
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
    
    import cardData from './data/card'
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
			cards: cardData,
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
    
    <style>
    </style>