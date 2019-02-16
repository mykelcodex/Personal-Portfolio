<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#3D3D57">
    <title>@yield('title') - Oke Michael</title>

    @include('meta::manager')

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#3D3D57">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body class="font-sans antialiased" id="app">
    <div class="top-head bg-purple z-40" style="background-image: url('https://reinink.ca/img/bg.svg'); background-size: 1500px auto;">
        <div class="w-full mx-auto px-6 sm:px-8 lg:px-12 xl:px-24 lg:max-w-2lg xl:max-w-3xl">
            <header class="py-8 text-center sm:pt-16 sm:pb-12 sm:flex sm:items-end sm:justify-between">
                <a href="/" class="inline-flex items-baseline text-white no-underline text-2xl antialiased hover:translateY-1px transition-1s">
                    <div class="text-beige mr-0.5">Oke</div>
                    <div class="font-bold text-yellow">Michael</div>
                </a>
                <nav class="font-medium antialiased mt-4 sm:mt-0">
                    <a class="text-light-purple hover:text-white no-underline {{ Request::segment(1) === 'about' ? 'active' : null }}" href="/about">About</a>
                    <a class="text-light-purple hover:text-white no-underline ml-4 md:ml-8 {{ Request::segment(1) === 'projects' ? 'active' : null }}" href="/projects">Projects</a>
                    <a class="text-light-purple hover:text-white no-underline ml-4 md:ml-8 {{ Request::segment(1) === 'blog' ? 'active' : null }}" href="/blog">Blog</a>
                    <a class="text-light-purple hover:text-white no-underline ml-4 md:ml-8 {{ Request::segment(1) === 'contact' ? 'active' : null }}" href="/contact">Contact</a>
                </nav>
            </header>
        </div>
    </div>  
     
        @yield('content')

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>