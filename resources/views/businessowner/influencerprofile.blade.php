@extends('layouts.business')
@section('content')

    <div class="bg-gray-50 ">
        <div class="flex items-center gap-3">
            <ion-icon name="chevron-back-outline"></ion-icon>
            <a href="{{ route('business-owner.dashboard') }}" class="text-sm text-gray-700 py-4 font-semibold">Back to search results</a>
        </div>

        <div class=" md:flex-row flex-col shadow-lg rounded-lg items-center md:gap-6 md:p-10 p-4 bg-white">
            <div class=" flex md:items-center">
                <img class=" md:h-44 md:w-44 w-28 h-28 rounded-full p-4" src="{{ asset('assets/images/creator.jpg') }}" alt="">
                <div class="flex flex-col">
                    <div class="flex md:items-center gap-16 items-start">
                        <span class="md:text-2xl text-md font-bold font-inter">{{ $influencer->name }}</span>
                        <span class="md:text-xl text-md font-semibold">M120/hr</span>
                    </div>
                    <span class="text-gray-500 text-md">Content Creator</span>
                    <div class="flex items-center gap-4 mt-2">

                        <a class="bg-primary md:py-3 py-2 md:px-5 px-3 hover:bg-transparent hover:text-gray-800 hover:border hover:border-primary  text-white rounded-md" href="">Sent offer</a>
                        <a class="border border-primary md:py-3 py-2 md:px-5 px-3 text-gray-800 hover:bg-primary rounded-md" href="">Resume</a>
                    </div>
                </div>
            </div>

            <div class=" border-t-2 border-gray-200 md:px-12 py-6 mt-3 px-4 md:space-y-8 space-y-3">
                <div class="flex- items-center">
                    <span class="font-inter font-bold">Availability:</span>
                    <span>full time(40hrs/week)
                    </span>
                    <span class="bg-green-600 p-1 rounded-full text-white text-xs">available</span>
                </div>
                <div class="flex- items-center gap-3">
                    <span class="font-inter font-bold">Age:</span>
                    <span>20 years</span>
                </div>
                <div class="flex- items-center gap-3">
                    <span class="font-inter font-bold">Location:</span>
                    <span>{{ $influencer->location }}</span>
                </div>
                <div class="flex- items-center gap-3">
                    <span class="font-inter font-bold">Experince:</span>
                    <span>3 years</span>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-10 w-full">
        <span class=" font-bold border-b-4 border-gray-200 py-4 ">Profile</span>
        <div class="md:flex-row flex-col flex md:gap-5 md:justify-between">
            <div class="bg-white rounded-lg shadow-lg mt-8 p-10">
                <span class="text-2xl font-bold">About</span>
                <p class="text-gray-700 border-b-2 border-gray-200 py-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi est blanditiis consequatur vero iste repellendus asperiores eaque error obcaecati, recusandae perspiciatis saepe, mollitia architecto accusamus qui. Officiis quis ducimus iusto.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora, dolorem! Modi, corrupti. Dicta, ullam corporis fugiat repellendus voluptatem unde, praesentium consequatur reiciendis, minus assumenda illum aut quia nesciunt atque necessitatibus.
                </p>
                <div class="mt-8">

                    <span class="text-2xl font-bold ">Topic</span>
                    <div class="mt-8 md:space-x-6 space-x-2  flex">

                        <span class=" border-2 border-gray-300 p-1 whitespace-nowrap rounded-full">Clothing</span>
                        <span class=" border-2 border-gray-300 p-1 whitespace-nowrap rounded-full">Music</span>
                        <span class=" border-2 border-gray-300 p-1 whitespace-nowrap rounded-full">Food</span>
                        <span class=" border-2 border-gray-300 p-1 whitespace-nowrap rounded-full">Events Hosting</span>
                        <span class=" border-2 border-gray-300 p-1 whitespace-nowrap rounded-full">Culture</span>
                    </div>
                </div>
                <div class="mt-16 border-t-2 border-gray-200 py-4">

                    <span class="text-2xl font-bold ">Languages</span>
                    <div class="mt-8 flex items-center space-x-6 ">
                        <div class=" flex items-center gap-2">
                            <img class="w-6 h-4" src="{{ asset('assets/images/flags/lesotho.png') }}" alt="">
                            <span class="">Sesotho</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <img  class="w-6 h-4" src="{{ asset('assets/images/flags/us.jpg') }}" alt="">
                            <span class="">English</span>
                        </div>

                    </div>
                </div>
            </div>
            <div>

                <div class="bg-white rounded-lg shadow-lg mt-8 p-10 h-64 md:w-[380px]">
                    <span class="text-2xl font-bold">Contact</span>
                    <div class="space-y-4 mt-5">

                        <div class="flex items-center gap-3">
                            <ion-icon name="globe-outline"></ion-icon>
                            <span>www.keabetsoecreator.com</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <ion-icon name="call-outline"></ion-icon>
                            <span>+266 56143109</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <ion-icon name="mail-outline"></ion-icon>
                            <span>keabetsoecreator@gmail.com</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg mt-8 p-10 md:w-[380px]">
                    <span class="text-2xl font-bold border-b-2 border-gray-200 py-4 w-full">Similar Profiles</span>
                    <div class="flex items-center gap-2 mt-4">
                        <img class=" h-24 w-24 rounded-full p-4" src="{{ asset('assets/images/creator.jpg') }}" alt="">
                        <div class="space-y-2">
                            <span class="text-lg font-bold font-inter">Lunka Swide</span> <br>
                            <span class="text-gray-500 text-sm">influencer</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 mt-2">
                        <img class=" h-24 w-24 rounded-full p-4" src="{{ asset('assets/images/creator.jpg') }}" alt="">
                        <div class="space-y-2">
                            <span class="text-lg font-bold font-inter">Lunka Swide</span> <br>
                            <span class="text-gray-500 text-sm">influencer</span>
                        </div>
                    </div>

                    <div class="flex items-center gap-2 mt-2">
                        <img class=" h-24 w-24 rounded-full p-4" src="{{ asset('assets/images/creator.jpg') }}" alt="">
                        <div class="space-y-2">
                            <span class="text-lg font-bold font-inter">Lunka Swide</span> <br>
                            <span class="text-gray-500 text-sm">influencer</span>
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </div>

@endsection
