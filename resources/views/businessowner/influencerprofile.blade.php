@extends('layouts.business')
@section('content')

    <div class="bg-gray-50 ">
        <div class="flex items-center gap-3">
            <ion-icon name="chevron-back-outline"></ion-icon>
            <a href="{{ route('business-owner.dashboard') }}" class="text-sm text-gray-700 py-4 font-semibold">Back to search results</a>
        </div>

        <div class=" md:flex-row flex-col shadow-lg rounded-lg items-center md:gap-6 md:p-10 p-4 bg-white">
            <div class=" flex md:items-center">
                @if($influencer)

                <img class="md:h-64 md:w-56 w-28 h-28 p-4" src="{{ asset('storage/' . $influencer->profilePicture) }}" alt="Profile Picture">

                @endif
                <div class="flex flex-col">
                    <div class="flex md:items-center gap-16 items-start">
                        <span class="md:text-2xl text-md font-bold font-inter">{{ $influencer->name }}</span>
                        <span class="md:text-xl text-md font-semibold">M{{ $influencer->chargeperhour }}/hr</span>
                    </div>
                    <span class="text-gray-500 text-md">Content Creator</span>
                    <span class="text-gray-500 text-md">{{ $influencer->location }}</span>
                    <div class="flex items-center gap-4 mt-2">

                        <a class="bg-primary md:py-3 py-2 md:px-5 px-3 hover:bg-transparent hover:text-gray-800 hover:border hover:border-primary  text-white rounded-md" href="">Sent offer</a>
                        <a class="border border-primary md:py-3 py-2 md:px-5 px-3 text-gray-800 hover:bg-primary rounded-md" href="">Resume</a>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="mt-10 w-full">
        <span class=" font-bold border-b-4 border-gray-200 py-4 ">Profile</span>
        <div class="md:flex-row flex-col flex md:gap-5 md:justify-between">
            <div class="bg-white rounded-lg shadow-lg mt-8 p-10">
                <span class="text-2xl font-bold">About</span>
                <p class="text-gray-700 border-b-2 border-gray-200 py-6">
                    {{$influencer->about}}
                </p>

                <div class="mt-8">
                    <span class="text-2xl font-bold">Topics</span>
                    <div class="mt-8 md:space-x-6 space-x-2 flex">
                        @foreach ($influencer->topics as $topic)
                            <span class=" p-1 whitespace-nowrap rounded-full">
                                {{ $topic->name }}
                            </span>
                        @endforeach
                    </div>
                </div>

                <div class="mt-16 border-t-2 border-gray-200 py-4">
                    <span class="text-2xl font-bold">Languages</span>
                    <div class="mt-8 flex items-center space-x-6">
                        @foreach ($influencer->languages as $language)
                            <div class="flex items-center gap-2">
                                <img class="w-6 h-4" src="{{ asset('assets/images/flags/' . strtolower($language->name) . '.png') }}" alt="">
                                <span>{{ $language->name }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div>

                <div class="bg-white rounded-lg shadow-lg mt-8 p-10 h-64 md:w-[380px]">
                    <span class="text-2xl font-bold">Contact</span>
                    <div class="space-y-4 mt-5">

                        <div class="flex items-center gap-3">
                            <ion-icon name="globe-outline"></ion-icon>
                            <span>{{ $influencer->website }}</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <ion-icon name="call-outline"></ion-icon>
                            <span>{{ $influencer->phone }}</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <ion-icon name="mail-outline"></ion-icon>
                            <span>{{ $influencer->user->email }}</span>
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
