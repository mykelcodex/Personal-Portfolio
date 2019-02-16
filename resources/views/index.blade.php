<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Oke Michael - Web designer & developer</title>

        @include('meta::manager')

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#3D3D57">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,400,600" rel="stylesheet">

        
    </head>
    <body class="bg-purple bg-top bg-no-repeat font-sans flex flex-col min-h-screen" style="background-image: url('https://reinink.ca/img/bg.svg'); background-size: 1500px auto;">
        <div class="w-full mx-auto px-6 sm:px-8 lg:px-12 xl:px-24 lg:max-w-2lg xl:max-w-3xl">
                <header class="py-8 text-center sm:pt-16 sm:pb-12 sm:flex sm:items-end sm:justify-between">
                    <a href="/"  class="inline-flex items-baseline text-white no-underline text-2xl antialiased hover:translateY-1px transition-1s">
                        <div class="text-beige mr-0.5">Oke</div>
                        <div class="font-bold text-yellow">Michael</div>
                    </a>
                    <nav class="font-medium antialiased mt-4 sm:mt-0">
                        <a class="text-light-purple hover:text-white no-underline" href="/about">About</a>
                        <a class="text-light-purple hover:text-white no-underline ml-4 md:ml-8" href="/projects">Projects</a>
                        <a class="text-light-purple hover:text-white no-underline ml-4 md:ml-8" href="/blog">Blog</a>
                        <a class="text-light-purple hover:text-white no-underline ml-4 md:ml-8" href="/contact">Contact</a>
                    </nav>
                </header>
            </div>
        <div class="content mt-12 sm:mt-12 mb-10">
                <div class="mx-auto px-6 sm:px-8 lg:px-12 xl:px-24 lg:max-w-2lg xl:max-w-3xl">
                        <div class="text-center md:text-left flex flex-col flex-col-reverse md:flex-row">
                            <div class="md:w-1/2">
                                <h1 class="text-5xl lg:text-6xl text-beige font-normal"><span class="text-white">Web designer</span> <span class="text-yellow whitespace-no-wrap">& developer</span></h1>
                                <p class="font-light mt-8 text-lg text-light-purple leading-loose max-w-md md:max-w-full mx-auto md:mx-0 lg:pr-24 xl:pr-32">Hello! My name is Oke Michael. Welcome to my website! I am a web developer based in Nigeria. I help organizations and startups develop custom web-based software. I designed and developed <a class="text-grey-light no-underline hover:underline" href="http://percussionfed.org/">International Percussion Federation</a>, its an online video competition app that allows participant to upload video from all over the world. I love to contribute to open source community. All thanks to Taylor Otwell the creator of <a class="text-grey-light no-underline hover:underline whitespace-no-wrap" href="https://laravel.com/">Laravel</a> framework, Adam Wathan the creator of <a class="text-grey-light no-underline hover:underline whitespace-no-wrap" href="https://tailwindcss.com/">Tailwind CSS</a> and Evan You the creator of <a class="text-grey-light no-underline hover:underline whitespace-no-wrap" href="https://vuejs.com/">Vue JS</a>.</p>
                                <a class="mt-8 inline-block bg-dark-purple hover:bg-darker-purple antialiased text-light-purple font-bold text-sm px-8 py-3 no-underline rounded-full leading-none hover:translateY-1px transition-1s" href="/about">More about me</a>
                            </div>
                            <div class="md:w-1/2 max-w-xs md:max-w-full mx-auto md:mx-0 mb-12 md:mb-0 md:pl-12">
                                <img class="block w-full rounded shadow-xl" src="{{ asset('images/oke.jpg') }}" alt="Oke Michael" style="background: radial-gradient(#ccc8c6 40%, #818177)">
                            </div>
                        </div>
                </div>
        </div>
    <script src="{{ asset('js/app.js') }}"></script>    
    </body>
</html>
