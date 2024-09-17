<template>
    <div>
    
    <section>
        <nav class="flex justify-evenly items-center max-md:justify-center max-md:relative max-md:overflow-hidden">
        <div class="my-3">
            <img src="assets/img/jomon/home1/icon-logo.jpg" class="w-[90px] max-md:w-[120px]" alt="Logo">
        </div>
        <div class="flex gap-5 mt-3 max-md:hidden">
            <a href="#" class="text-[13px] border-t-4 border-[#1A377C] px-2 pt-[5px]">ホーム</a>
            <a href="#" class="text-[#1A377C] text-[13px] border-t-[1px] border-[#1A377C] px-2 pt-2 hover:border-t-4 hover:pt-[5px]">構造</a>
            <a href="#" class="text-[#1A377C] text-[13px] border-t-[1px] border-[#1A377C] px-2 pt-2 hover:border-t-4 hover:pt-[5px]">代表者について</a>
            <a href="#" class="text-[#1A377C] text-[13px] border-t-[1px] border-[#1A377C] px-2 pt-2 hover:border-t-4 hover:pt-[5px]">これまでの歩み</a>
            <a href="#" class="text-[#1A377C] text-[13px] border-t-[1px] border-[#1A377C] px-2 pt-2 hover:border-t-4 hover:pt-[5px]">お問い合わせ</a>
        </div>
        <div class="max-md:flex hidden justify-end">
            <div id="resNav" @click="toggleMenu" class="absolute top-10 right-10">
            <img id="resBtn" class="w-[35px]" src="assets/img/jomon/home1/bars-icon.jpg" alt="Menu Button">
            </div>
            <div v-bind:class="{'hidden': !menuVisible, 'block': menuVisible}" id="resMenu" class="fixed top-0 left-0 w-full h-[664px] p-10 bg-white text-black resGoDown z-50">
            <div id="resNavClose" @click="closeMenu" class="absolute top-10 right-10 rounded-md text-black">
                <img class="w-[35px]" src="assets/img/jomon/home1/close-icon.jpg" alt="Close Button">
            </div>
            <div class="block"></div>
            <div class="flex flex-col mb-8">
                <a href="#" class="text-[25px] text-center mt-10">ホーム</a>
                <a href="#" class="text-[25px] text-center mt-10">構造</a>
                <a href="#" class="text-[25px] text-center mt-10">代表者について</a>
                <a href="#" class="text-[25px] text-center mt-10">これまでの歩み</a>
                <a href="#" class="text-[25px] text-center mt-10">お問い合わせ</a>
            </div>
            </div>
        </div>
        </nav>
  </section>

    <section>
        <div class="relative overflow-hidden flex items-center justify-center h-fit w-full">
            <img class="w-full object-cover object-top -z-10 max-md:inset-auto" src="assets/img/jomon/page2/bg-strcture.jpg" alt="">
            <div class="absolute z-20 text-center">
                <h1 class="text-white text-[66px] max-md:text-[19px]">PLAN</h1>
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
                <p class="text-[12px] text-center font-thin text-[#3344F]">構造</p>
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
            <a href="" class="flex items-center py-[3px] px-5 rounded-3xl bg-[#1A377C] text-white tracking-[3px] hover:bg-[#3F7652] duration-300">
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
                <p class="text-[12px] text-center font-thin text-[#3344F]"><span class="font-semibold">9</span>つの独自性</p>
            </div>
        </div>
        <div class="flex flex-wrap items-stretch max-lg:justify-center">

            <!-- card 1 -->
            <div class="flex flex-col w-[326px] my-12 h-[259px]">
                <h1 class="text-[38px] font-semibold tracking-[5px]">01.</h1>
                <div class="flex flex-col justify-center pt-5">
                    <span class="fill-[#1A377C] w-[38px] h-[38px] mx-auto">
                        <svg preserveAspectRatio="xMidYMid meet" data-bbox="29.833 30.1 140.118 139.95" viewBox="29.833 30.1 140.118 139.95" xmlns="http://www.w3.org/2000/svg" role="presentation" aria-hidden="true" aria-label="">
                            <g>
                                <path d="M168.1 145.5l-49.4-50.1 26.5-26.8c6.1 1.2 12.5-.3 17.3-5 4.9-5 6.8-12.2 5-18.9-.3-1-1.3-1.7-2.4-1.4-.3.1-.6.3-.8.5l-9.8 9.9-7.1-2.4L145 44l9.8-9.9c.8-.8.8-2 0-2.8-.2-.2-.6-.4-.8-.5-1.7-.4-3.4-.7-5-.7-1.7 0-3.4.2-5 .7-3.2.8-6.2 2.6-8.7 5-4.7 4.8-6.1 11.3-5 17.5l-29.7 30.2c-1.2-1-2.6-1.5-4.1-1.5-1.7 0-3.4.6-4.6 2L90 85.9 53.1 48.6l1-1.1c.4-.4.6-1 .6-1.7l-.8-5.7c-.1-.6-.3-1-.8-1.3l-11.4-8.3c-.4-.2-.7-.4-1.1-.4-.6 0-1 .2-1.4.6l-6.5 6.6c-.7.7-.8 1.7-.2 2.5l8.1 11.5c.3.4.8.7 1.3.8l5.7.8c.6.1 1.2-.1 1.7-.6l1-1.1L87 88.4l-1.9 1.9c-2.4 2.4-2.5 6.2-.5 8.8l-31.8 32.2c-6.1-1.2-12.5.3-17.3 5-4.9 5-6.8 12.2-5 18.9.3 1.1 1.3 1.7 2.4 1.4.4-.1.6-.3.8-.5l9.8-9.9 7.1 2.4 2.4 7.3-9.8 9.9c-.8.8-.8 2 0 2.8.2.2.6.4.8.5 6.6 1.8 13.8-.1 18.7-5 4.7-4.8 6.1-11.3 5-17.5L96.3 118l49.4 50.1c2.5 2.6 6.7 2.6 9.2 0l13-13.2c2.7-2.7 2.7-6.9.2-9.4zM48.9 47.2L47.2 49l-3.9-.6-6.7-9.5 4.2-4.3 9.4 6.8.6 4-1.9 1.8zm39 46.1l6.5-6.6c.6-.6 1.2-.8 1.9-.8.4 0 .8.1 1.3.3L87.5 96.5c-.6-1-.5-2.3.4-3.2zm-23.1 51.2c-.5.5-.7 1.2-.5 1.9 1.3 5.2.1 11-3.9 15.1-2.9 2.9-6.8 4-10.8 4.1l7.3-7.5c.5-.6.7-1.3.5-2l-3.1-9.4c-.2-.6-.6-1-1.3-1.3l-9.2-3.1c-.7-.2-1.5-.1-2 .5l-7.4 7.5c0-4.1 1.1-8 4-11 4.1-4.1 9.7-5.4 14.9-4 .7.2 1.4 0 1.9-.5l78.1-79.3c.5-.5.7-1.2.5-1.9-1.3-5.2-.1-11 3.9-15.1 2-2 4.3-3.4 6.9-4.1.6-.1 1.3-.1 1.9-.1.6.1 1.3.1 2 .1l-7.4 7.5c-.5.6-.7 1.3-.5 2l3.1 9.4c.2.6.6 1 1.3 1.3l9.2 3.1c.7.2 1.5.1 2-.5l7.3-7.5c-.1 4.1-1.1 8-4 11-4.1 4.1-9.7 5.4-14.9 4-.7-.2-1.4 0-1.9.5l-77.9 79.3zm100.6 7.5l-13 13.2c-1.1 1.1-2.7 1.1-3.8 0l-49.4-50.1 3.8-3.8 49.4 50.1 2.7-2.8-49.4-50.1 3.8-3.8 49.4 50.1 2.7-2.8-49.4-50.1L116 98l49.4 50.1c1 1.2 1 2.9 0 3.9z"></path>
                            </g>
                        </svg>
                    </span>
                    <p class="mt-4 text-[20px] text-center font-bold h-[60px]">機械のメンテナンスや <br>寿命に左右さ れ な い</p>
                    <p class="mt-5 text-center font-extralight">ほとんど機械を使わない <br>単純明快な構造</p>
                </div>
            </div>

            <!-- card 2 -->
            <div class="flex flex-col w-[326px] my-12 h-[259px]">
                <h1 class="text-[38px] font-semibold tracking-[5px]">02.</h1>
                <div class="flex flex-col justify-center pt-5">
                    <span class="fill-[#1A377C] w-[34px] h-[36px] mx-auto">
                        <svg preserveAspectRatio="xMidYMid meet" data-bbox="12.5 10 172.398 180" viewBox="12.5 10 172.398 180" xmlns="http://www.w3.org/2000/svg" role="presentation" aria-hidden="true" aria-label="">
                            <g>
                                <path d="M12.5 10v180h119.2l53.198-57.048V10H12.5zm8.046 8.09h155.255v109.963h-50.384v53.183H20.546V18.09zm147.558 119.326l-33.589 35.656v-35.656h33.589z"></path>
                            </g>
                        </svg>
                    </span>
                    <p class="mt-4 text-[20px] text-center font-bold h-[60px]">接着剤の被害とは <br>ほぼ無縁</p>
                    <p class="mt-5 text-center">クロスを張らない家</p>
                </div>
            </div>

            <!-- card 3 -->
            <div class="flex flex-col w-[326px] my-12 h-[259px]">
                <h1 class="text-[38px] font-semibold tracking-[5px]">03.</h1>
                <div class="flex flex-col justify-center pt-5">
                    <span class="fill-[#1A377C] w-[38px] h-[36px] mx-auto">
                        <svg preserveAspectRatio="xMidYMid meet" data-bbox="20 24 160 152" viewBox="20 24 160 152" xmlns="http://www.w3.org/2000/svg" role="presentation" aria-hidden="true" aria-label="">
                            <g>
                                <path d="M178.427 60.265a40.746 40.746 0 00-17.1-5.2 40.838 40.838 0 002.123-24.915l-.413-1.774-1.817.009A40.778 40.778 0 00121.592 78.1a41.028 41.028 0 00-2.3 5.385L97.225 121.76a7.049 7.049 0 00-3.168-1.773 72.891 72.891 0 010-39.965 6.978 6.978 0 000-13.5 74 74 0 01.274-41.222L89.96 24a79.568 79.568 0 00-.818 42.133H64.7a79.443 79.443 0 002.437-19.594A79.12 79.12 0 0063.882 24l-4.37 1.3a74.915 74.915 0 013.058 21.239 74.862 74.862 0 01-2.785 19.982 6.908 6.908 0 00-1.222.42 30.066 30.066 0 00-11-18.791 30.443 30.443 0 00-25.79-5.716L20 42.848l.01 1.818a30.384 30.384 0 0030.357 30.3 30.4 30.4 0 004.446-.518 6.966 6.966 0 004.973 5.577A74.817 74.817 0 0162.57 100a74.882 74.882 0 01-2.785 19.984 6.977 6.977 0 000 13.5 74.785 74.785 0 012.785 19.986 74.817 74.817 0 01-3.058 21.23l4.37 1.3a79.017 79.017 0 003.256-22.53 79.358 79.358 0 00-2.437-19.6h24.441A79.542 79.542 0 0089.96 176l4.371-1.3a73.975 73.975 0 01-.274-41.216 6.974 6.974 0 005.015-5.783l7.3-12.666a21.34 21.34 0 0031.774 2.671l1.321-1.251-.917-1.566A21.234 21.234 0 00111.588 106l10.6-18.379A40.655 40.655 0 00179.479 62.9l.521-1.735zM34.416 64.856a25.737 25.737 0 01-9.766-18.335A25.836 25.836 0 0154.5 70.058a25.728 25.728 0 01-20.084-5.202zM61.7 75.837a2.556 2.556 0 01-2.546-2.55v-.032a2.556 2.556 0 012.546-2.549h30.446a2.561 2.561 0 012.554 2.565 2.6 2.6 0 01-2.553 2.566zM89.142 119.6H64.7a79.445 79.445 0 002.438-19.6A79.35 79.35 0 0064.7 80.409h24.442a79.711 79.711 0 000 39.19zm3 9.7H61.7a2.565 2.565 0 010-5.13h30.446a2.561 2.561 0 012.553 2.565 2.6 2.6 0 01-2.553 2.565zm30.232-20.378a16.912 16.912 0 0111.185 6.679 16.956 16.956 0 01-23.811-3.447 16.779 16.779 0 0112.63-3.23zm10.539-62.152a36.1 36.1 0 0126.477-13.76 36.338 36.338 0 01-2.8 21.872c-1.2.047-2.373.293-3.56.445-.595.074-1.182.122-1.775.222a36.532 36.532 0 00-15.375 6.063c-.554.361-1.1.712-1.635 1.1a40.752 40.752 0 00-5.752 5.022c-.411.436-.762.913-1.153 1.367-.714.828-1.468 1.621-2.114 2.508a36.129 36.129 0 017.691-24.837zm20.925 38.084a36.321 36.321 0 01-26.634-.136l22.928-9.162-1.69-4.248-22.942 9.17c.416-.9.8-1.813 1.28-2.666a35.77 35.77 0 011.612-2.554 35.708 35.708 0 012.517-3.247c.661-.763 1.321-1.523 2.043-2.227a35.865 35.865 0 013.376-2.838c.7-.531 1.355-1.109 2.09-1.589a36.514 36.514 0 016.311-3.337 35.712 35.712 0 017.118-1.984c.57-.1 1.155-.1 1.73-.17a36.29 36.29 0 0120.944 3.487 36.057 36.057 0 01-20.679 21.503z"></path>
                            </g>
                        </svg>
                    </span>
                    <p class="mt-4 text-[20px] text-center font-bold h-[60px]">除湿効果</p>
                    <p class="mt-5 text-center">除湿のために用いる炭（竹炭）は <br>永久的に交換不要</p>
                </div>
            </div>

            <!-- card 4 -->
            <div class="flex flex-col w-[326px] my-12 h-[259px]">
                <h1 class="text-[38px] font-semibold tracking-[5px]">04.</h1>
                <div class="flex flex-col justify-center pt-5">
                    <span class="fill-[#1A377C] w-[38px] h-[38px] mx-auto">
                        <svg preserveAspectRatio="xMidYMid meet" data-bbox="19.9 20 160.1 160.1" viewBox="19.9 20 160.1 160.1" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label="">
                            <g>
                                <path d="M147.8 74.5c0 2.4-.2 4.7-.5 7h-.2l-5.9 1c-.3.1-.7 0-.9-.2l-5.4-4.3c-.3-.2-.5-.6-.5-.9V72c0-.2.1-.4.2-.6l5.1-9.2c.1-.2.1-.4.1-.6v-5c0-.4.3-.8.6-1.1l2.5-1.3c.1 0 .2-.1.3-.1 2.9 6.1 4.6 13.1 4.6 20.4z" fill="white" data-color="1"></path>
                                <path d="m124.4 33.3-4.4 2.2c-.4.2-.6.5-.8.8l-1.7 3.6c-.5.9-1.6 1.3-2.5.7-.2-.1-.4-.3-.6-.6-.7-1.2-3.1-4.8-3.2-5.2l-1.3-3.9c-.1-.4-.4-.7-.8-1l-4.9-3-.3-.3c7.4.8 14.4 3.1 20.5 6.7z" fill="white" data-color="1"></path>
                                <path d="M98.7 30c1.9 2 1.4 3.1 1.3 3.1-.2 0-3.7-3.3-4.8-3.3s-5.8-.3-4.9 1.1 2.7 1.2-2.1 4c-4.9 2.8-10.3 5.2-4.5 9.5s6.7 5.9 8.7 6.2 3.7-4.7 5.5-3.2-3.2 7.2-4.4 12-1.7 4.7-6.7 5.3c-5 .6-6.9 1.6-4.5 5 .3.5.7.9 1.1 1.3-.3-.4-.5-.9-.4-1.4l.5-2.2c.2-.7.8-1.3 1.6-1.3h7.3c.5 0 1.1-.3 1.4-.7l4.9-7.7c.2-.3.5-.5.8-.6l4.4-1.7c.3-.1.6-.3.7-.6l4-5.6c.4-.6.4-1.4-.1-2l-4.3-4.9c-.2-.2-.4-.4-.7-.5l-5.8-2c-.9-.3-1.9.2-2.1 1.1l-1.1 4.5c-.2 1-1.3 1.5-2.2 1.1l-5-2.3c-.3-.1-.5-.3-.7-.6l-1-1.7c-.4-.7-.3-1.6.4-2.1l6.4-5.2c.4-.3.7-.9.6-1.4l-.2-1.8 1.8-.3c.4-.1.8 0 1.1.3l1.7 1.3c.4.3.6.7.6 1.2v.7c0 .5.3 1 .7 1.3l3.2 2c.9.6 2.1.1 2.3-1l.4-1.9c.1-.5 0-1-.3-1.3l-6.2-7-.1-.1c-4.9.2-9.7 1.2-14.1 2.8 4.4-.8 12.9-1.4 14.8.6z" fill="white" data-color="1"></path>
                                <path d="m105.8 111.7 2.4-1.3c.2-.1.4-.3.5-.4l5.9-6.7c.2-.3.6-.5.9-.6l2.9-.8c.6-.2 1-.6 1.3-1.1l4.2-10.1c.4-1-.1-2.2-1.1-2.5l-8.9-3.1c-.4-.2-.8-.5-1.1-.9l-.7-1.4c-.2-.3-.4-.6-.7-.7l-6.5-3.9c-.3-.2-.6-.3-1-.3h-5.7c-.7 0-1.3.4-1.7 1l-.5.8c-.1 0-.2-.1-.3-.1-.4 0-.8-.3-1.1-.6l-4.8-6c-.4-.5-1-.7-1.6-.6l-1.3.3h-.4c1.4.5 2.8.9 3.8 1.7 2 1.7 3.8 6.9 7.9 6.9s5.3-.5 8.1 2.3c2.8 2.7 3 5.1 6.8 5.2 3.7.1 5.5 2.4 1.4 7.2-4.1 4.9-4.8 6.3-5.8 8.9s-3 6.5-4.8 9.6l1.2-2.1c.1-.2.4-.5.7-.7z" fill="white" data-color="1"></path>
                                <path d="M100 20c-30 0-54.4 24.4-54.4 54.5S70 128.9 100 128.9s54.4-24.4 54.4-54.5S130 20 100 20zm23.8 70.8-4.2 10.1c-.2.5-.7 1-1.3 1.1l-2.9.8c-.4.1-.7.3-.9.6l-5.9 6.7c-.1.2-.3.3-.5.4l-2.4 1.3c-.3.2-.6.4-.8.8l-3.2 5.7c-.4.7-.3 1.5.1 2.1l1 1.4.3.6c-1.1.1-2.2.1-3.2.1h-1l-1.7-3.3c-.2-.4-.3-.8-.2-1.1l2.8-19.7c.1-.8-.3-1.5-.9-1.9l-2.2-1.3c-.3-.2-.6-.5-.7-.8l-2.6-5.3c-.2-.4-.3-.9-.1-1.3l1.1-4.1c-.3-.1-.5-.4-.6-.7l-1-2c-.2-.3-.4-.6-.8-.8l-3-1.7h-.1L78.2 73c-.2-.1-.3-.2-.5-.4l-12.2-14c-.2-.3-.4-.6-.4-.9l-.5-6c0-.4-.2-.7-.5-1l-3.4-3.4C69 35.4 82.4 27.4 97.8 26.7l.1.1 6.2 7c.3.4.5.9.3 1.3L104 37c-.2 1-1.4 1.5-2.3 1l-3.2-2c-.4-.3-.7-.8-.7-1.3V34c0-.5-.2-.9-.6-1.2l-1.7-1.3c-.3-.2-.7-.4-1.1-.3l-1.8.3.2 1.8c.1.5-.1 1.1-.6 1.4l-6.4 5.2c-.6.5-.8 1.4-.4 2.1l1 1.7c.2.3.4.5.7.6l5 2.3c.9.4 2-.1 2.2-1.1l1.1-4.5c.2-.9 1.2-1.5 2.1-1.1l5.8 2c.3.1.5.3.7.5l4.3 4.9c.5.6.5 1.4.1 2l-4 5.6c-.2.3-.4.5-.7.6L99.4 57c-.3.1-.6.3-.8.6l-4.9 7.7c-.3.5-.8.7-1.4.7H85c-.8 0-1.4.5-1.6 1.3l-.4 2.3c-.1.7.1 1.3.7 1.7l2 1.3c.4.2.8.3 1.2.2l1.3-.3c.6-.1 1.2.1 1.6.6l4.8 6c.3.3.7.6 1.1.6.1 0 .2 0 .3.1l.4-.8c.3-.6 1-1 1.7-1h5.7c.3 0 .7.1 1 .3l6.5 3.9c.3.2.5.4.7.7l.7 1.4c.2.4.6.7 1.1.9l8.9 3.1c1 .3 1.6 1.5 1.1 2.5zM120 35.6c-.4.2-.6.5-.8.8l-1.7 3.6c-.5.9-1.6 1.3-2.5.7-.2-.1-.4-.3-.6-.6-.7-1.2-3.1-4.8-3.2-5.2l-1.3-3.9c-.1-.4-.4-.7-.8-1l-4.9-3-.3-.3c7.4.6 14.4 2.9 20.5 6.6l-4.4 2.3zm27 45.8-5.9 1c-.3.1-.7 0-.9-.2l-5.4-4.3c-.3-.2-.5-.6-.5-.9v-5.1c0-.2.1-.4.2-.6l5.1-9.2c.1-.2.1-.4.1-.6v-5c0-.4.3-.8.6-1.1l2.5-1.3c.1 0 .2-.1.3-.1 2.9 6.2 4.6 13.1 4.6 20.4 0 2.4-.2 4.7-.5 7h-.2zm33 4.5c0-3.4-2.5-6.4-5.9-6.7-3.8-.3-7 2.7-7 6.4v36.9l-16.6 16.1c-.9.9-2.4.9-3.4 0s-1-2.6-.1-3.5l13.5-13.4c2.6-2.6 2.5-6.9-.3-9.4-2.6-2.3-6.6-2-9 .5l-22.5 22.5c-5.7 5.7-8.8 13.4-8.8 21.4V180h28v-14.8l32.1-32.1V85.9zM71.2 135.3l-22.5-22.5c-2.4-2.4-6.4-2.8-9-.5-2.8 2.5-2.9 6.8-.3 9.4l13.5 13.4c1 1 1 2.6-.1 3.5-.9.9-2.4.9-3.4 0l-16.6-16.1V85.7c0-3.8-3.2-6.8-7-6.4-3.4.3-5.9 3.3-5.9 6.7v47.2L52 165.3v14.8h28v-23.3c0-8.1-3.1-15.8-8.8-21.5z"></path>
                            </g>
                        </svg>
                    </span>
                    <p class="mt-4 text-[20px] text-center font-bold h-[60px]">​地熱活用</p>
                    <p class=" text-center">床暖房ではありません <br>地熱暖房・地熱冷房で <br>地球にも家計にも優しい</p>
                </div>
            </div>

            <!-- card 5 -->
            <div class="flex flex-col w-[326px] my-12 h-[259px]">
                <h1 class="text-[38px] font-semibold tracking-[5px]">05.</h1>
                <div class="flex flex-col justify-center pt-5">
                    <span class="fill-[#1A377C] w-[38px] h-[38px] mx-auto">
                        <svg preserveAspectRatio="xMidYMid meet" data-bbox="12.5 31.5 175 137" viewBox="12.5 31.5 175 137" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label="">
                            <g>
                                <path d="M187.5 82.9l-21.8-19.4V45h-4.6v14.4L130 31.7 107.3 52l-7.3-6.5-7.5 6.7-23.1-20.7-56.9 50.8 3.1 3.4 9.1-8.1v77.1h30.6v13.8h90v-13.8h30.1V78.2l9.1 8.1 3-3.4zM29.3 150.1V73.5l40.1-35.8 19.7 17.6-46 41 3.1 3.4 9.1-8.1v58.6l-26-.1zm30.6 13.8V87.4L100 51.6l31.1 27.7v.2h.3l9.3 8.3v76l-80.8.1zm110.8-13.8h-25.5V92l9.1 8.1 3.1-3.4-21.8-19.4V58.8H131v14.4l-20.3-18.1L130 37.8l31.1 27.7v.2h.3l9.3 8.3v76.1z"></path>
                            </g>
                        </svg>
                    </span>
                    <p class="mt-4 text-[20px] text-center font-bold h-[60px]">​二重張りの屋根</p>
                    <p class=" text-center">屋根下断熱も併用するので <br>屋根からの太陽熱の <br>侵入を大幅に軽減</p>
                </div>
            </div>

            <!-- card 6 -->
            <div class="flex flex-col w-[326px] my-12 h-[259px]">
                <h1 class="text-[38px] font-semibold tracking-[5px]">06.</h1>
                <div class="flex flex-col justify-center pt-5">
                    <span class="fill-[#1A377C] w-[38px] h-[38px] mx-auto">
                        <svg preserveAspectRatio="xMidYMid meet" data-bbox="20 47 160 107" xmlns="http://www.w3.org/2000/svg" viewBox="20 47 160 107" data-type="tint" role="presentation" aria-hidden="true" aria-label="">
                            <g>
                                <path d="M38.824 141.412H20v-37.765c0-10.428 8.428-18.882 18.824-18.882V47h122.352v37.765c10.396 0 18.824 8.454 18.824 18.882v37.765h-18.824V154h-9.411v-12.588H48.235V154h-9.411v-12.588zm9.411-56.647h103.53V56.44H48.235v28.324zM29.412 131.97h141.176v-28.324c0-5.214-4.214-9.441-9.412-9.441H38.824c-5.198 0-9.412 4.227-9.412 9.441v28.324z"></path>
                            </g>
                        </svg>
                    </span>
                    <p class="mt-4 text-[20px] text-center font-bold h-[60px]">広々とした地下空間</p>
                    <p class=" text-center">収納部屋や寝室としても利用可能</p>
                </div>
            </div>

            <!-- card 7 -->
            <div class="flex flex-col w-[326px] my-12 h-[259px]">
                <h1 class="text-[38px] font-semibold tracking-[5px]">07.</h1>
                <div class="flex flex-col justify-center pt-5">
                    <span class="fill-[#1A377C] w-[38px] h-[38px] mx-auto">
                        <svg preserveAspectRatio="xMidYMid meet" data-bbox="20.4 21 159.9 158" viewBox="20.4 21 159.9 158" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label="">
                            <g>
                                <path d="M147.6 156.2c-3.1 2-6.6 4.3-13.3 4.3s-10.2-2.3-13.3-4.3c-2.7-1.8-4.9-3.2-9.5-3.2s-6.8 1.4-9.5 3.2c-3.1 2-6.6 4.3-13.3 4.3-6.7 0-10.2-2.3-13.3-4.3-2.7-1.8-4.9-3.2-9.5-3.2s-6.8 1.4-9.5 3.2c-3.1 2-6.6 4.3-13.3 4.3s-10.2-2.3-13.3-4.3c-1.4-.9-2.6-1.7-4.1-2.3 3.2 1.7 9.1 9.5 16.9 9.5 11.1 0 15.2-7.7 22.7-7.7s13.3 8.6 23.7 8.6c9.3 0 13.2-8.1 22.7-8.1s11.5 6.3 22.5 6.3c7.6 0 16.3-9.3 22.3-9.3 1 0 1.7-.1 2.1-.3h-1.3c-4.8.1-7 1.6-9.7 3.3z" fill="#E5E5E5" data-color="1"></path>
                                <path d="M157.1 167.2c-4.7 0-6.8 1.4-9.5 3.2-3.1 2-6.6 4.3-13.3 4.3s-10.2-2.3-13.3-4.3c-2.7-1.8-4.9-3.2-9.5-3.2s-6.8 1.4-9.5 3.2c-3.1 2-6.6 4.3-13.3 4.3-6.7 0-10.2-2.3-13.3-4.3-2.6-1.7-4.7-3.1-9-3.2h-1.1c7.9 0 11.6 10.8 23.6 10.8s14.5-7.2 22.9-7.2 12.4 8.2 23 8.2 13.6-7.9 22.4-7.9 11.5 7.9 23.1 7.9v-4.3c-6.7 0-10.2-2.3-13.3-4.3-3-1.8-5.2-3.2-9.9-3.2z" fill="#E5E5E5" data-color="1"></path>
                                <path d="M152.5 73.8V63.7l-18.8-20V21h-5v22.8l-18.7 20v10h-10v68.5c2.7-1.6 6-3.1 11.4-3.1 6.7 0 10.2 2.3 13.3 4.3 2.7 1.8 4.9 3.2 9.5 3.2 4.7 0 6.8-1.4 9.5-3.2 3.1-2 6.6-4.3 13.3-4.3 2.1 0 3.8.2 5.4.6v-66h-9.9zm-35 50.3H110v-12.6h7.5v12.6zm17.5 0h-7.5v-12.6h7.5v12.6zm0-25.2h-7.5V86.4h7.5v12.5zm17.5 25.2H145v-12.6h7.5v12.6zm-115 21.8c1.4.5 3.1.9 5.4.9 4.7 0 6.8-1.4 9.5-3.2 3.1-2 6.6-4.3 13.3-4.3s10.2 2.3 13.3 4.3c1.2.8 2.3 1.5 3.5 2V93.9h-45v52zM65 111.5h7.5v12.6H65v-12.6zm-17.5 0H55v12.6h-7.5v-12.6zM180 174.7c-6.7 0-10.2-2.3-13.3-4.3-2.7-1.8-4.9-3.2-9.5-3.2s-6.8 1.4-9.5 3.2c-3.1 2-6.6 4.3-13.3 4.3s-10.2-2.3-13.3-4.3c-2.7-1.8-4.9-3.2-9.5-3.2-4.7 0-6.8 1.4-9.5 3.2-3.1 2-6.6 4.3-13.3 4.3s-10.2-2.3-13.3-4.3c-2.7-1.8-4.9-3.2-9.5-3.2s-6.8 1.4-9.5 3.2c-3.1 2-6.6 4.3-13.3 4.3s-10.2-2.3-13.3-4.3c-2.7-1.8-4.9-3.2-9.5-3.2v-6.9c6.7 0 10.2 2.3 13.3 4.3 2.7 1.8 4.9 3.2 9.5 3.2 4.7 0 6.8-1.4 9.5-3.2 3.1-2 6.6-4.3 13.3-4.3s10.2 2.3 13.3 4.3c2.7 1.8 4.9 3.2 9.5 3.2s6.8-1.4 9.5-3.2c3.1-2 6.6-4.3 13.3-4.3 6.7 0 10.2 2.3 13.3 4.3 2.7 1.8 4.9 3.2 9.5 3.2 4.7 0 6.8-1.4 9.5-3.2 3.1-2 6.6-4.3 13.3-4.3s10.2 2.3 13.3 4.3c2.7 1.8 4.9 3.2 9.5 3.2v6.9zm0-14.1c-6.7 0-10.2-2.3-13.3-4.3-2.7-1.8-4.9-3.2-9.5-3.2s-6.8 1.4-9.5 3.2c-3.1 2-6.6 4.3-13.3 4.3s-10.2-2.3-13.3-4.3c-2.7-1.8-4.9-3.2-9.5-3.2-4.7 0-6.8 1.4-9.5 3.2-3.1 2-6.6 4.3-13.3 4.3s-10.2-2.3-13.3-4.3c-2.7-1.8-4.9-3.2-9.5-3.2s-6.8 1.4-9.5 3.2c-3.1 2-6.6 4.3-13.3 4.3s-10.2-2.3-13.3-4.3c-2.7-1.8-4.9-3.2-9.5-3.2v-6.9c6.7 0 10.2 2.3 13.3 4.3 2.7 1.8 4.9 3.2 9.5 3.2 4.7 0 6.8-1.4 9.5-3.2 3.1-2 6.6-4.3 13.3-4.3s10.2 2.3 13.3 4.3c2.7 1.8 4.9 3.2 9.5 3.2s6.8-1.4 9.5-3.2c3.1-2 6.6-4.3 13.3-4.3 6.7 0 10.2 2.3 13.3 4.3 2.7 1.8 4.9 3.2 9.5 3.2 4.7 0 6.8-1.4 9.5-3.2 3.1-2 6.6-4.3 13.3-4.3s10.2 2.3 13.3 4.3c2.7 1.8 4.9 3.2 9.5 3.2v6.9z"></path>
                            </g>
                        </svg>
                    </span>
                    <p class="mt-4 text-[20px] text-center font-bold h-[60px]">洪水からの回避</p>
                    <p class=" text-center">床下浸水レベルの被害は及ばない <br>​その答えは縄文建設の構造にあります</p>
                </div>
            </div>

            <!-- card 8 -->
            <div class="flex flex-col w-[326px] my-12 h-[259px]">
                <h1 class="text-[38px] font-semibold tracking-[5px]">08.</h1>
                <div class="flex flex-col justify-center pt-5">
                    <span class="fill-[#1A377C] w-[38px] h-[38px] mx-auto">
                        <svg preserveAspectRatio="xMidYMid meet" data-bbox="20 33.5 160 133" viewBox="20 33.5 160 133" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label="">
                            <g>
                                <path d="M154.918 109.611H45.082C31.253 109.611 20 98.287 20 84.372V35.864a2.357 2.357 0 0 1 2.349-2.364h155.302A2.357 2.357 0 0 1 180 35.864v48.508c0 13.915-11.253 25.239-25.082 25.239zM24.698 38.228v46.144c0 11.311 9.143 20.511 20.383 20.511h109.837c11.241 0 20.383-9.2 20.383-20.511V38.228H24.698z"></path>
                                <path d="M159.051 108.321a2.357 2.357 0 0 1-2.349-2.364V91.971H43.299v13.986a2.357 2.357 0 0 1-2.349 2.364 2.357 2.357 0 0 1-2.349-2.364v-16.35a2.357 2.357 0 0 1 2.349-2.364h118.101a2.357 2.357 0 0 1 2.349 2.364v16.35a2.357 2.357 0 0 1-2.349 2.364z"></path>
                                <path d="M177.651 81.106H22.349A2.357 2.357 0 0 1 20 78.742a2.357 2.357 0 0 1 2.349-2.364h155.302A2.357 2.357 0 0 1 180 78.742a2.357 2.357 0 0 1-2.349 2.364z"></path>
                                <path d="M38.622 166.5c-.321 0-.642-.065-.954-.203a2.373 2.373 0 0 1-1.193-3.121l14.942-33.854a2.349 2.349 0 0 1 3.101-1.2 2.372 2.372 0 0 1 1.193 3.121l-14.942 33.854a2.348 2.348 0 0 1-2.147 1.403z"></path>
                                <path d="M62.602 166.5c-.321 0-.642-.065-.954-.203a2.373 2.373 0 0 1-1.193-3.121L75.4 129.322a2.348 2.348 0 0 1 3.102-1.2 2.372 2.372 0 0 1 1.193 3.121L64.75 165.097a2.35 2.35 0 0 1-2.148 1.403z"></path>
                                <path d="M86.586 166.5c-.321 0-.642-.065-.954-.203a2.373 2.373 0 0 1-1.193-3.121l14.942-33.854a2.348 2.348 0 0 1 3.101-1.2 2.372 2.372 0 0 1 1.193 3.121l-14.942 33.854a2.348 2.348 0 0 1-2.147 1.403z"></path>
                                <path d="M110.567 166.5c-.321 0-.642-.065-.954-.203a2.373 2.373 0 0 1-1.193-3.121l14.945-33.854a2.349 2.349 0 0 1 3.101-1.2 2.372 2.372 0 0 1 1.193 3.121l-14.945 33.854a2.349 2.349 0 0 1-2.147 1.403z"></path>
                                <path d="M134.55 166.5c-.321 0-.642-.065-.954-.203a2.373 2.373 0 0 1-1.193-3.121l14.942-33.854a2.347 2.347 0 0 1 3.101-1.2 2.372 2.372 0 0 1 1.193 3.121l-14.942 33.854a2.348 2.348 0 0 1-2.147 1.403z"></path>
                                <path d="M170.53 47.083H66.6a2.357 2.357 0 0 1-2.349-2.364 2.357 2.357 0 0 1 2.349-2.364h103.93a2.357 2.357 0 0 1 2.349 2.364 2.357 2.357 0 0 1-2.349 2.364z"></path>
                                <path d="M54.904 47.083H32.318a2.357 2.357 0 0 1-2.349-2.364 2.357 2.357 0 0 1 2.349-2.364h22.586a2.357 2.357 0 0 1 2.349 2.364 2.357 2.357 0 0 1-2.349 2.364z"></path>
                            </g>
                        </svg>
                    </span>
                    <p class="mt-4 text-[20px] text-center font-bold h-[60px]">エアコン不要</p>
                    <p class=" text-center">エアコンなしでも快適に過ごせると <br>考えていますが、体感温度には <br>個人差がありますので、念のため、<br>先行配管はしておきます</p>
                </div>
            </div>

            <!-- card 9 -->
            <div class="flex flex-col w-[326px] my-12 h-[259px]">
                <h1 class="text-[38px] font-semibold tracking-[5px]">09.</h1>
                <div class="flex flex-col justify-center pt-5">
                    <span class="fill-[#1A377C] w-[38px] h-[38px] mx-auto">
                        <svg preserveAspectRatio="xMidYMid meet" data-bbox="19.999 20.686 160.001 158.627" viewBox="19.999 20.686 160.001 158.627" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label="">
                            <g>
                                <path d="M79.25 156.431H22.901a2.897 2.897 0 0 1-2.753-3.813l12.842-38.782a2.901 2.901 0 0 1 2.753-1.988l46.015.003c1.103 0 2.111.627 2.602 1.617.487.99.37 2.17-.298 3.048-4.325 5.648-6.61 12.398-6.61 19.521a32.198 32.198 0 0 0 4.309 16.045 2.902 2.902 0 0 1-2.511 4.349zm-52.334-5.802h47.669a37.878 37.878 0 0 1-2.935-14.592c0-6.527 1.624-12.789 4.74-18.384l-38.552-.003-10.922 32.979z"></path>
                                <path d="M81.761 117.649h-58.86a2.902 2.902 0 0 1-2.621-4.144l43.276-91.301c.96-2.024 4.283-2.024 5.243 0l36.013 75.968a2.892 2.892 0 0 1-.499 3.218 33.598 33.598 0 0 0-2.278 2.727 2.886 2.886 0 0 1-1.507 1.052c-6.485 1.913-12.332 5.941-16.464 11.34a2.893 2.893 0 0 1-2.303 1.14zm-54.275-5.801h52.877c4.601-5.548 10.776-9.747 17.605-11.956.253-.326.514-.646.782-.963L66.178 30.22l-38.692 81.628z"></path>
                                <path d="M66.178 179.313a2.901 2.901 0 0 1-2.901-2.901V153.53a2.901 2.901 0 0 1 5.802 0v22.883c0 1.601-1.3 2.9-2.901 2.9z"></path>
                                <path d="M127.712 179.313a2.901 2.901 0 0 1-2.901-2.901v-10.245a2.901 2.901 0 0 1 5.802 0v10.245c0 1.602-1.3 2.901-2.901 2.901z"></path>
                                <path d="M144.746 174.035a35.094 35.094 0 0 1-17.204-4.515 37.885 37.885 0 0 1-17.895 4.515c-20.951 0-37.996-17.046-37.996-37.998 0-16.396 10.772-31.12 26.314-36.145 7.267-9.304 18.11-14.618 29.906-14.618 15.429 0 29.056 9.104 35.005 23.287 10.59 6.363 17.124 17.847 17.124 30.218 0 19.44-15.814 35.256-35.254 35.256zm-17.166-10.768a2.9 2.9 0 0 1 1.545.446 29.327 29.327 0 0 0 15.622 4.521c16.241 0 29.453-13.214 29.453-29.455 0-10.623-5.771-20.463-15.059-25.683a2.912 2.912 0 0 1-1.284-1.477c-4.853-12.481-16.626-20.545-29.986-20.545-10.262 0-19.674 4.753-25.831 13.043a2.919 2.919 0 0 1-1.511 1.052c-13.586 4.009-23.077 16.703-23.077 30.867 0 17.754 14.443 32.197 32.195 32.197 5.76 0 11.448-1.575 16.449-4.557.456-.273.97-.409 1.484-.409z"></path>
                                <path d="M139.764 163.112a2.902 2.902 0 0 1 0-5.802c11.153 0 20.23-9.076 20.23-20.231 0-5.658-2.282-10.902-6.421-14.768a2.9 2.9 0 0 1 3.958-4.242 26.088 26.088 0 0 1 8.264 19.01c0 14.355-11.678 26.033-26.031 26.033z"></path>
                            </g>
                        </svg>
                    </span>
                    <p class="mt-4 text-[20px] text-center font-bold h-[60px]">​健康的な家</p>
                    <p class=" text-center">大自然を感じながら <br>過ごすことができる <br>​ZEHハウス（太陽光発電システム搭載）</p>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-[980px] mx-auto mt-48 max-md:mt-20">
        <div class="mx-32 max-md:mx-10">
            <div>
                <h1 class="font-semibold text-[25px] tracking-widest text-center text-[#33343F]">CONTACT</h1>
            </div>
            <hr class="w-[72px] border-solid border-black mx-auto mb-1">
            <div>
                <p class="text-[12px] text-center font-thin text-[#3344F]">お問い合わせ</p>
            </div>
        </div>
        <div class="mt-10 mx-36 max-md:mx-6">
            <p class="text-center tracking-widest max-md:text-start">縄文建設がご提案する現代版竪穴式住居は太陽光発電システム搭載の竪穴式住居です <br>ご興味のある方はお気軽にお問い合わせください</p>
        </div>

        <div class="mt-16 mx-48 max-md:mx-6 max-md:mt-10">
            <form action="">
                <div class="my-4">
                    <h2 class="text-[14px] mb-2">名前</h2>
                    <input class="w-[350px] max-md:w-full border border-black py-1 px-2" type="text">
                </div>
                <div class="my-4">
                    <h2 class="text-[14px] mb-2">メールアドレス</h2>
                    <input class="w-full border border-black py-1 px-2" type="text">
                </div>
                <div class="my-4">
                    <h2 class="text-[14px] mb-2">メッセージ</h2>
                    <textarea class="w-full border border-black p-2 h-[80px]" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="flex justify-center">
                    <a class="text-[14px] shadow-md shadow-[#9AA9D4] text-center w-full tracking-[6px] py-2 px-5 rounded-3xl bg-[#1A377C] text-white hover:bg-[#3F7652] duration-300" href="">送信</a>
                </div>
            </form>
        </div>

        <div class="my-10 mx-48 max-lg:mx-6">
            <div>
                <p class="text-center text-[12px] tracking-widest mb-2 max-md:text-[14px]">メールの受付は24時間365日行っておりますが縄文建設からの返信スケジュールは以下の通りです</p>
                <p class="text-center text-[12px] tracking-widest max-md:text-[14px]">​よろしくお願いします</p>
            </div>
            <div class="mt-5 mx-48 max-md:mx-6">
                <p class="text-center text-[12px] tracking-widest max-md:text-[14px]">月～金　18：00～20：00</p>
                <p class="text-center text-[12px] tracking-widest max-md:text-[14px]">土・日・祝　10：00～16：00</p>
            </div>
        </div>
    </section>

    <footer class="bg-[#F3F5F8] py-7">
        <div class="max-w-[980px] mx-auto flex justify-center items-center gap-32 max-md:flex-col max-md:gap-5">
            <div>
                <img src="assets/img/jomon/home1/icon-logo.jpg" width="96px" alt="">
            </div>
            <div class="flex">
                <svg class="w-[35px] h-[21px] fill-[#1A377C]" preserveAspectRatio="none" data-bbox="53.5 64.6 93.4 62.1" viewBox="53.5 64.6 93.4 62.1" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" aria-label="">
                    <g>
                        <path d="M56.7 126.7h87c1.8 0 3.2-1.5 3.2-3.2V67.8c0-1.8-1.5-3.2-3.2-3.2h-87c-1.8 0-3.2 1.5-3.2 3.2v55.7c0 1.7 1.4 3.2 3.2 3.2zm3.3-6.5V73.6l38.3 22.9c.5.3 1.1.5 1.7.5s1.2-.2 1.7-.5l38.9-23.3v47H60zM68.3 71h63.1L99.9 89.9 68.3 71z"></path>
                    </g>
                </svg>
                <p class="text-[15px] font-light ml-2">jomon.kensetsu@gmail.com</p>
            </div>
        </div>
    </footer>

    </div>
</template>
        
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
    
    <style>
    </style>