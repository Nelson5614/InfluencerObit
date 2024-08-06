@extends('layouts.main')
@section('content')
<section class=" py-5 bg-secondary rounded-bl-full ">
    <div class=" flex md:flex-row flex-col items-center justify-center mx-auto mt-10  md:px-12">

        <div class="md:w-1/2 px-14 md:ml-28">

            <div class=" flex items-center space-x-2">
                <div class="w-12 h-1 bg-white"></div>
                <span class="text-white" >Find Influencer Easily</span>
            </div>
            <div>
                <h1 class="font-bold  text-3xl py-6 leading-2 text-white ">Find The Right
                    <span class="text-primary">Influecer</span>
                     For Your Business!</h1>
            </div>
            <div>
                <p class="text-white">Influencer marketing, affiliate programs, creator management, user generated content, brand ambassadors: build valuable partnerships to grow your business</p>
            </div>
            <div class="py-6 ">
                <button class="px-5 py-2 bg-primary text-white rounded-md hover:bg-secondary">Get Started</button>
            </div>
        </div>
        <div class=" px-12  shadow-xl">
            <img class="rounded-lg" src="{{ asset('/assets/images/hero/tiktok1.jpg') }}" alt="" srcset="">
        </div>
    </div>
</section>

<section class="py-8 mt-20 px-14">

    <div class="absolute bg-dots md:w-48 md:h-34 w-44 h-14 -mt-12 -ml-12"></div>


    <div class="flex md:flex-row flex-col mt-28 justify-center items-center gap-14">
        <div class="md:w-1/2">
            <img class="rounded-3xl" src="{{ asset('assets/images/facebook.jpg') }}" alt="" srcset="">
        </div>
        <div class="md:w-1/2">
            <div class=" flex items-center space-x-2 mb-6">
                <div class="w-12 h-1 bg-primary"></div>
                <span class="font-bold text-secondary" >Influencer Database</span>
            </div>
            <h1 class="font-bold text-3xl mb-14">Find Your Right Influencer</h1>
            <div class="absolute ml-3.5 md:h-48 h-48 border-l-2 border-dotted border-gray-400"></div>
            <div class="flex gap-4 items-center">

                <div class=" z-10 ">
                    <span class="bg-primary py-1 px-3 text-white">1</span>
                </div>
                <div class="w-96">
                    <span class="font-bold">Influencer Who Already On Your Nich!</span>
                </div>
            </div>
            <div class="ml-11">
                <p>Our database has thousands of influncers who are ready to collaborate with you and grow your business .</p>
            </div>
            <div class="flex gap-4 items-center mt-8">

                <div class="z-10 ">
                    <span class="bg-primary py-1 px-3 text-white">2</span>
                </div>
                <div class="w-96">
                    <span class=" font-bold">Not Just Influencer, Right One For Your Business!</span>
                </div>
            </div>
            <div class="ml-11">
                <p>Find an influencer who is already pasionate about the product or the services that you provide.</p>
            </div>

        </div>
    </div>
</section>
<section class="py-8 mt-20 px-14 bg-gray-200 rounded-br-full">

    <div class="absolute bg-dots md:w-48 md:h-34 w-44 h-14 -mt-12 -ml-12"></div>


    <div class="flex md:flex-row flex-col mt-28 justify-center items-center gap-14">

        <div class="md:w-1/2">

            <h1 class="font-bold text-3xl mb-14 text-primary">Find Your Right Influencer</h1>
            <div class="absolute ml-3.5 md:h-48 h-48 border-l-2 border-dotted border-gray-400"></div>
            <div class="flex gap-4 items-center">

                <div class=" z-10 ">
                    <span class="bg-secondary py-1 px-3 text-white">1</span>
                </div>
                <div class="w-96">
                    <span class="font-bold">Influencer Who Already On Your Nich!</span>
                </div>
            </div>
            <div class="ml-11">
                <p>Our database has thousands of influncers who are ready to collaborate with you and grow your business .</p>
            </div>
            <div class="flex gap-4 items-center mt-8">

                <div class="z-10 ">
                    <span class="bg-secondary py-1 px-3 text-white">2</span>
                </div>
                <div class="w-96">
                    <span class=" font-bold">Not Just Influencer, Right One For Your Business!</span>
                </div>
            </div>
            <div class="ml-11">
                <p>Find an influencer who is already pasionate about the product or the services that you provide.</p>
            </div>

        </div>
        <div class="md:w-1/2">
            <img class="rounded-3xl shadow-2xl" src="{{ asset('assets/images/vector.jpeg') }}" alt="" srcset="">
        </div>
    </div>
    <div class="py-6 ">
        <button class="px-5 py-2 bg-secondary text-white rounded-md hover:bg-secondary">Get Started</button>
    </div>
</section>
<section class=" mt-10 bg-secondary rounded-b-full">
    <div class="flex justify-center items-center py-12">
        <div class="md:px-40 text-center">
            <span class="font-bold text-white md:text-3xl text-2xl leading-3">Slide Out Of Their Inbox</span>
            <p class="text-white font-semibold px-12 pt-4" >Use our verified email addresses to forge genuine connections with creators.

                Centralize all your communications with creators on our platform.

                Reach thousands of influencers with drip emails to optimize your outreach.</p>
            <div class="mt-6">

                <a href="" class="bg-primary text-white rounded-md px-4 py-2 hover:bg-secondary">Get Started</a>
            </div>

        </div>
    </div>
</section>
@endsection
