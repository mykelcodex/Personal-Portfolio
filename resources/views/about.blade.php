@extends('mylayout.main')

@section('title', 'About')

@section('content')

<div class="bg-grey-lightest flex-grow">
    <div class="max-w-lg mx-auto py-8 sm:py-16 px-6">           
        <h1 class="text-5xl lg:text-6xl text-medium-purple font-normal">About Me</h1>
            <div class="text-grey-darkest mt-6 sm:mt-12 text-lg antialiased leading-loose">
                <img class="mt-4 sm:mt-0 sm:w-1/3 sm:ml-8 sm:float-right block rounded" src="{{ asset('images/oke.jpg') }}" alt="Jonathan Reinink">
                <p class="mt-4">I am a web designer and developer. I live in Lagos State, Nigeria. I come from a family of six in which i am the first child. I am a Christian, and I attend the <a href="https://rccg.org">Redeemed Christian Church of God</a> (Peace House). In my spare time I enjoy playing video games, playing football with friends and going on tour.</p>
                <h2 class="mt-12 text-medium-purple text-2xl font-bold">Web Development</h2>
                <p class="mt-4">I started software development while still in college, after i saw a friend developing an application. My interest in software development grew as i saw him do some backend coding. I studied Computer Science at the prestigious Lagos State University in Lagos. In 2015, i started writing some backend code in Core PHP. I developed quite some few projects back then in college which kick-started my journey in programming. My first projects were built with HTML, CSS, JavaScript, PHP and MySQL. Interestingly, my toolset remains much the same today. After some years, i felt there is a need for me to start using a backend framework. I chose <a href="https://laravel.com" class="text-yellow">Laravel</a> Framework, which was created by <a href="https://twitter.com/taylorotwell">Taylor Otwell</a>. I love laravel because it was carefully built by Taylor. I moved on to learning a front-end framework, i needed something i can actually custom to my taste, so i chose <a href="https://tailwindcss.com">Tailwind CSS</a>, which was created by <a href="https://adamwathan.me">Adam Wathan</a>. I chose Tailwind CSS because of its flexibility. These days i focus more on building web interfaces using <a href="https://laravel.com">Laravel<a>, <a href="https://vuejs.com">Vue.js</a> and <a href="https://tailwindcss.com">Tailwind CSS</a>.</p>
            </div> 
            </div>
</div>   

@endsection
