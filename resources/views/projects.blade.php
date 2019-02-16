@extends('mylayout.main')

@section('title', 'Projects')

@section('content')

<div class="bg-grey-lightest flex-grow">
    <div class="max-w-lg mx-auto py-8 sm:py-16 px-6">           
        <h1 class="text-5xl lg:text-6xl text-medium-purple font-normal">Projects</h1>
        <p class="text-grey-darkest mt-6 sm:mt-12 text-lg sm:text-xl leading-loose antialiased">Here are some few big projects i've worked on recently.</p>
        <div class="lg:-mx-12 mt-6 sm:mt-12 rounded overflow-hidden" style="background-color: #3D3D57">
            <div class="md:flex">
                <div class="md:w-1/2 md:pt-12 md:pr-0 md:pl-12">
                    <a class="block relative lg:hover:translateY-3px lg:transition-1s" style="padding-top: 55%" href="https://percussionfed.org/">
                        <img class="pin absolute block rounded-t md:shadow-lg-dark z-40" src="{{ asset('images/ipf.jpg') }}" alt="Internationsal Percussion Federation">
                    </a>
                </div>
                <div class="px-6 pt-8 pb-6 md:w-1/2 md:px-12 md:py-8 md:flex md:items-center">
                    <div class="sm:-mt-6">
                        <div class="text-white antialiased text-xl md:text-2xl font-medium">International Percussion Federation</div>
                        <div class="mt-2 md:mt-3 text-white antialiased text-sm md:text-md leading-tight md:leading-normal opacity-75">This is a custom web based application that allows participants to upload video to different category from all over the world.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  

@endsection