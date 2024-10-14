<template>
    <div>
    
    <Navbar></Navbar>

  <section>
        <div class="relative overflow-hidden flex items-center justify-center h-fit w-full">
            <img class="w-full max-sm:h-52 object-cover object-top -z-10 max-md:inset-auto" src="assets/img/jomon/contact/bg-contact.jpg" alt="">
            <div class="absolute z-20 text-center">
                <h1 class="text-[#999A9F] text-[66px] max-md:text-[35px]">CONTACT</h1>
            </div>
        </div>
    </section>

    <Contact></Contact>

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
    
    <style>
    </style>