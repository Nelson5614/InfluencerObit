@extends('layouts.main')
@section('content')
<section class=" bg-secondary md:rounded-bl-full ">

    <div class=" md:px-14 px-8 md:py-16 text-center ">

        <div class=" py-6">

            <span class="md:text-3xl text-2xl font-bold text-white" >Latest News On Influencer Marketing</span>
        </div>

        <div class="md:px-28 pl-12 py-10">
            <p class="text-white font-semibold">Explore our latest news when it comes to influencer marketing and trending topics on influencer obit, explore our articles on various topics on how to user productively use influencer obit</p>
        </div>

    </div>
</section>

<section class="  w-full mt-28">
    <div class="flex items-center justify-between">

        <div class=" rounded-3xl flex bg-gray-200">
            <div class="bg-gray-100 shadow-2xl w-96 space-y-5 p-4 z-10  absolute  rounded-2xl mt-8 ml-8">
                <H1 class=" text-secondary text-2xl font-bold">Hi Selloane</H1>
                <span class="text-secondary text-xl">We would like to work with you</span>
                <p class="text-sm text-gray-800 ">You are recieving this invitation becuase we are interested to working with youbas our brand ambassador, we believe your brand aligns with ours...</p>
                <div class="w-76 h-0.5 bg-gray-200"></div>
                <button button class="bg-secondary text-white rounded-full py-2 px-3 text-sm"> Accept Offer</button>
            </div>

            <img class="ml-64 -mt-8" src="{{ asset('assets/images/influencer1-removebg-preview.png') }}" alt="" srcset="">


        </div>
        <div class="w-96 ">
            <h1 class="font-bold text-3xl text-gray-800">Trending Topics</h1>
            <div class="flex gap-4 mt-10 ">

                <div class=" w-36 ">
                    <img class=" rounded-xl" src="{{ asset('assets/images/facebook.jpg') }}" alt="" srcset="">
                </div>
                <div class="w-96">
                    <span class="font-bold">Influencer Who Already On Your Nich!</span>
                </div>
            </div>
            <div class="ml-11">
                <p class="ml-20 text-sm">Our data shows that your brand’s existing influential customers are 7 times more likely to accept a collaboration.</p>

            </div>
            <div class="flex gap-4 mt-6 ">

                <div class=" w-36 ">
                    <img class=" rounded-xl" src="{{ asset('assets/images/facebook.jpg') }}" alt="" srcset="">
                </div>
                <div class="w-96">
                    <span class="font-bold">Influencer Who Already On Your Nich!</span>
                </div>
            </div>
            <div class="ml-11">
                <p class="ml-20 text-sm">Our data shows that your brand’s existing influential customers are 7 times more likely to accept a collaboration.</p>

            </div>
            <div class="flex gap-4 mt-6 ">

                <div class=" w-36 ">
                    <img class=" rounded-xl" src="{{ asset('assets/images/facebook.jpg') }}" alt="" srcset="">
                </div>
                <div class="w-96">
                    <span class="font-bold">Influencer Who Already On Your Nich!</span>
                </div>
            </div>
            <div class="ml-11">
                <p class="ml-20 text-sm">Our data shows that your brand’s existing influential customers are 7 times more likely to accept a collaboration.</p>

            </div>

        </div>
    </div>
</section>
@endsection
