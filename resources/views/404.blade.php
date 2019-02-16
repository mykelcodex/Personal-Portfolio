@extends('mylayout.main')

@section('title', '404')

@section('content')

    <div class="notfound">
        <div class="text-6xl text-grey text-center mt-32 font-bold">
            404
        </div>
        <div>
            <h1 class="text-4xl text-grey text-center mt-4">PAGE NOT FOUND</h1>
        </div>
        <div class="text-center">
            <a class="mt-8 inline-block bg-dark-purple hover:bg-darker-purple antialiased text-light-purple font-bold text-sm px-8 py-3 no-underline rounded-full leading-none hover:translateY-1px transition-1s" href="/">Take me home</a>      
        </div> 
    </div>

@endsection