<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')


    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.8/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.8/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.8/dist/js/uikit-icons.min.js"></script>
    <title>Document</title>
</head>

<body>

    <div id="app" class="font-roboto bg-gray-100">

        {{-- navbar --}}
        <nav class="bg-white px-6 py-4 shadow">
            <div class="flex flex-col container mx-auto md:flex-row md:items-center md:justify-between">
                <div class="flex justify-between items-center">
                    <div>
                        <a class="text-gray-800 text-xl font-bold md:text-2xl" href="#">Meraki <span
                                class="text-blue-500">UI</span></a>
                    </div>
                    <div>
                        <button type="button"
                            class="block text-gray-800 hover:text-gray-600 focus:text-gray-600 focus:outline-none md:hidden">
                            <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row md:-mx-4">
                    <a class="my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0" href="#">Home</a>
                    <a class="my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0" href="#">Blog</a>
                    <a class="my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0" href="#">About us</a>
                </div>
            </div>
        </nav>

        <div class="px-6 py-8">
            <div class="flex justify-between container mx-auto">
                <div class="w-full lg:w-8/12">
                    <div class=" bg-white  px-4 my-4 rounded-lg shadow-md">
                        <div class="flex items-center ">
                            <div>
                                <a class="text-gray-800 text-xs font-bold md:text-2xl" href="#">Meraki <span
                                        class="text-blue-500">UI</span></a>
                            </div>
                            <form class="uk-search uk-3  uk-align-center uk-search-default">
                                <span uk-search-icon></span>
                                <input class="uk-search-input" type="search" placeholder="Search">
                            </form>
                        </div>
                    </div>
                    <div class=" bg-white px-4 py-6  rounded-lg shadow-md">
                        <div class="flex items-center justify-between">
                            <h1 class="text-xl font-bold text-gray-700 md:text-2xl">Tendance du jour</h1>
                            {{-- <post-filter></post-filter> --}}
                        </div>
                        <div class="mt-6">
                            {{-- <post :data="post"></post> --}}

                            <div class="uk-position-relative uk-visible-toggle uk-light " tabindex="-1" uk-slider>
                                <ul
                                    class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
                                    <li>
                                        <img src="https://getuikit.com/docs/images/slider4.jpg"width="195"
                                            height="200" alt="">
                                        <div class="uk-position-center uk-panel">
                                            <h1>1</h1>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="https://getuikit.com/docs/images/slider4.jpg" width="195"
                                            height="200" alt="">
                                        <div class="uk-position-center uk-panel">
                                            <h1>2</h1>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="https://getuikit.com/docs/images/slider4.jpg" width="195"
                                            height="200" alt="">
                                        <div class="uk-position-center uk-panel">
                                            <h1>3</h1>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="https://getuikit.com/docs/images/slider4.jpg" width="195"
                                            height="200" alt="">
                                        <div class="uk-position-center uk-panel">
                                            <h1>4</h1>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="https://getuikit.com/docs/images/slider4.jpg" width="195"
                                            height="200" alt="">
                                        <div class="uk-position-center uk-panel">
                                            <h1>4</h1>
                                        </div>
                                    </li>
                                </ul>
                                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#"
                                    uk-slidenav-previous uk-slider-item="previous"></a>
                                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#"
                                    uk-slidenav-next uk-slider-item="next"></a>
                            </div>
                        </div>

                    </div>
                    {{-- post --}}
                    <div class=" bg-white  px-4 my-4 rounded-lg shadow-md">
                        <div class="flex flex-col  ">
                            <div class="flex items-center">
                                <img src="https://getuikit.com/docs/images/slider4.jpg" alt=""
                                    class="rounded-full" width="24" height="26">
                                <a href="#"
                                    class="text-black hidden lg:block font-bold px-2 sm:text-xs lg:text-base">chieef
                                    kieef</a>
                                <p class="text-sm lg:text-base"> posted by Lebosse974. <span class="text-gray-500">1
                                        heure</span></p>
                            </div>
                            <p class="text-sm lg:text-base">STUG - The ultimate top-down tank game. Angle your armor to
                                bounce enemy shells,
                                and ricochet shots off walls into the enemy’s weak spots. Fight in PvP battles to unlock
                                new vehicles,
                                inspired by your favorite tanks. Play now for free in your browser!
                            </p>
                            <img src="https://i-sam.unimedias.fr/2021/10/01/bienfaits-pommes.jpeg?auto=format%2Ccompress&cs=tinysrgb&h=630&w=1200"
                                alt="" class=" sm:h-[150px] py-4 lg:w-full  lg:h-[650px]">
                        </div>
                    </div>
                    <div class=" bg-white  px-4 my-4 rounded-lg shadow-md">
                        <div class="flex flex-col  ">
                            <div class="flex items-center">
                                <img src="https://getuikit.com/docs/images/slider4.jpg" alt=""
                                    class="rounded-full" width="24" height="26">
                                <a href="#" class="text-black font-bold ">chieef kieef</a>
                                <p> posted by Lebosse974. <span class="text-gray-500">1 heure</span></p>
                            </div>
                            <p>STUG - The ultimate top-down tank game. Angle your armor to bounce enemy shells,
                                and ricochet shots off walls into the enemy’s weak spots. Fight in PvP battles to unlock
                                new vehicles,
                                inspired by your favorite tanks. Play now for free in your browser!
                            </p>
                            <img src="https://getuikit.com/docs/images/slider4.jpg" alt=""
                                class="w-full h-[650px] py-4">
                        </div>
                    </div>
                </div>



                {{-- SIDE BAR RIGHT --}}
                <div class="-mx-8 w-4/12 hidden lg:block">
                    <div class="px-8">

                        {{-- home --}}
                        <div class="flex flex-col justify-center bg-white w-[295px] max-w-sm mx-auto rounded-lg shadow-md">
                            <div
                                class="w-full h-[80px] bg-[url('https://i-sam.unimedias.fr/2021/10/01/bienfaits-pommes.jpeg?auto=format%2Ccompress&cs=tinysrgb&h=630&w=1200')]">
                            </div>
                            <h1 class="text-center font-bold m-1 text-xl">Home</h1>

                            <p class=" px-4 py-1 my-1 text-sm lg:text-base">Your personal Reddit frontpage. Come here to check in with your favorite communities.</p>
                            
                                <div class=" flex flex-col   ">
                                    <button class="rounded-lg bg-[#008AFF] text-white w-2/3 ml-[65px] my-4 h-[40px]"> Create Post </button>
                                    <button class="rounded-lg bg-[#CCE8FE] text-[#3275AC] w-2/3 ml-[65px] mb-4 h-[40px] "> Create Communauty </button>
                                </div>
                            
                                
                        
                    </div>
                    
                    {{-- top commaunté --}}
                    <div class="mt-10 px-8">
                        <h1 class="mb-4 text-xl font-bold text-gray-700">Categories</h1>
                        {{-- <categories></categories> --}}
                        <div class="flex flex-col bg-white px-4 py-6 max-w-sm mx-auto rounded-lg shadow-md">
                            <ul class="">
                                <li>
                                    <a class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline"
                                        href="#">- AWS</a>
                                </li>
                                <li class="mt-2">
                                    <a class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline"
                                        href="#">- Laravel</a>
                                </li>
                                <li class="mt-2">
                                    <a class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline"
                                        href="#">- Vue</a>
                                </li>
                                <li class="mt-2">
                                    <a class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline"
                                        href="#">- Design</a>
                                </li>
                                <li class="flex items-center mt-2">
                                    <a class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline"
                                        href="#">- Django</a>
                                </li>
                                <li class="flex items-center mt-2">
                                    <a class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline"
                                        href="#">- PHP</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-10 px-8">

                        <a class="rounded-lg bg-[#008AFF] text-white  text-center h-[40px]"> Create Post </a>

                    </div>
                </div>
            </div>
        </div>

        {{-- <simple-footer></simple-footer> --}}
    </div>


</body>

</html>
