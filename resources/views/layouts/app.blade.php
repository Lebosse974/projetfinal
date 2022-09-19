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
        <script src="https://kit.fontawesome.com/5373dfbc9f.js" crossorigin="anonymous"></script>
        <title>Document</title>
    </head>
    
<body>
    <div id="app" class="font-roboto bg-gray-100">

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
                    <a class="my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0" href="#">Profile</a>
                    <a class="my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0" href="#">Communauté</a>
                    <a class="my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0" href="#">Backend</a>
                </div>
                <div class="flex flex-col md:flex-row md:-mx-4">
                   
                    <a href="#"> <img src="https://i-sam.unimedias.fr/2021/10/01/bienfaits-pommes.jpeg?auto=format%2Ccompress&cs=tinysrgb&h=630&w=1200" class="my-1 w-[41px] h-[35px] md:mx-4 md:my-0 rounded-full uk_drop" alt=""></a>
                    <div uk-drop="mode: click;offset:5">
                        <div class="flex flex-col justify-center  bg-white w-[295px] max-w-sm mx-auto rounded-lg shadow-md">
                            <div class="  border-b border-black  ">
                                <div class=" flex hover:bg-slate-300 rounded-lg m-2">
                                    <img src="https://i-sam.unimedias.fr/2021/10/01/bienfaits-pommes.jpeg?auto=format%2Ccompress&cs=tinysrgb&h=630&w=1200" class="my-3 w-[41px] h-[35px] mx-2 rounded-full" alt="">
                                <p class="text-black font-bold mx-3 ">Lebosse974</p>
                                </div>
                                
                            </div>
                            <div class=" flex items-center hover:bg-slate-300 rounded-lg m-1">
                                <i class="fa-solid fa-gear"></i>
                            <p class="text-black font-bold mx-3 ">Setting</p>
                            </div>
                            <div class=" flex items-center hover:bg-slate-300 rounded-lg m-1">
                                <i class="fa-solid fa-toolbox"></i>
                            <p class="text-black font-bold mx-3 ">backend</p>
                            </div>
                            <div class=" flex items-center hover:bg-slate-300 rounded-lg m-1">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            <p class="text-black font-bold mx-3 ">log out</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    @yield('main')
    
    </div>

</body>
</html>