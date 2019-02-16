@extends('mylayout.main')

@section('title', 'Blog')

@section('content')

<div class="bg-grey-lightest flex-grow">
        <div class="max-w-lg mx-auto py-8 sm:py-16 px-6">           
            <h1 class="text-5xl lg:text-6xl text-medium-purple font-normal">Blog</h1>
            @foreach ($news as $new)
            <div class="post mt-12">
                <div class="w-full lg:flex shadow">
                    <div class="border-r border-b border-l border-grey-light lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8 px-8">
                            <div class="text-medium-purple font-bold text-xl mb-2">
                               <a href="{{ $new['url'] }}" target="_blank" class="no-underline text-medium-purple"> {{ $new['title'] }} </a>
                            </div>
                                <p class="text-grey-darker text-base">{{$new['description']}}</p>
                        </div>
                        <div class="flex items-center px-8">
                            <!--<img class="w-10 h-10 rounded-full mr-4" src="{{ asset('images/oke.jpg') }}" alt="Oke Michael">--->
                            <div class="text-sm">
                                <p class="text-black leading-none">{{ $new['author']}}</p>
                                <p class="text-grey-dark"></p>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</div>  
@endsection