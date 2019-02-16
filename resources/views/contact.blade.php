@extends('mylayout.main')

@section('title', 'Contact')

@section('content')
<div class="bg-grey-lightest flex-grow">
        <div class="max-w-lg mx-auto py-8 sm:py-16 px-6">           
            <h1 class="text-5xl lg:text-6xl text-medium-purple font-normal">Contact Me</h1>
            <p class="text-grey-darkest mt-6 sm:mt-12 text-lg sm:text-xl leading-loose antialiased">Want to get your job done? Feel free to send me a mail, and follow me on my social media handles.</p>
            
            <div class="social mt-12">
                <div class="twitter w-full sm:w-4/5 flex text-grey-darkest mt-6 sm:mt-6 text-lg sm:text-xl leading-loose antialiased border-b">
                    <div class="w-2/5">Twitter:</div>
                    <div class="ml-10 w-3/5"><a href="https://twitter.com/mykelcodex" class="no-underline" target="_blank">@mykelcodex</a></div>
                </div>
                <div class="github w-full sm:w-4/5 flex text-grey-darkest mt-6 sm:mt-6 text-lg sm:text-xl leading-loose antialiased border-b">
                    <div class="w-2/5">Github:</div>
                    <div class="ml-10 w-3/5"><a href="https://github.com/mykelcodex" class="no-underline" target="_blank">@mykelcodex</a></div>
                </div>
                <div class="github w-full sm:w-4/5 flex text-grey-darkest mt-6 sm:mt-6 text-lg sm:text-xl leading-loose antialiased border-b">
                    <div class="w-2/5">Email:</div>
                    <div class="ml-8 w-3/5"><a href="mailto:michealoke39@yahoo.com" class="no-underline">&nbsp; michealoke39@yahoo.com</a></div>
                </div>
                <div class="github w-full sm:w-4/5 flex text-grey-darkest mt-6 sm:mt-6 text-lg sm:text-xl leading-loose antialiased">
                    <div class="w-2/5">Mailing Address:</div>
                    <div class="ml-10 w-3/5"><a class="no-underline w-">5, Akindele Lane, Station Bustop, Off Old Akute Road, Behind NRC, Lagos, Nigeria</a></div>
                </div>
            </div>
        </div>
</div>  
@endsection