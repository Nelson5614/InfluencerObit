@extends('layouts.influencerdashboard')

@section('content')
<div class="bg-gray-50 md:px-24 px-3 md:mt-12 ">
    <div class="flex items-center gap-3">
        <ion-icon name="chevron-back-outline"></ion-icon>
        <a href="{{ route('business-owner.dashboard') }}" class="text-sm text-gray-700 py-4 font-semibold">Back to search results</a>
    </div>

    <div class="md:flex-row flex-col md:gap-6 md:p-10 p-4 bg-white" >
        <div class=" flex md:gap-6 gap-2">
            <img class="md:h-64 md:w-56 w-28 h-28 p-4" src="{{ asset('assets/images/creator.jpg') }}" alt="">
            <div>

                <div class=" space-y-4 mt-2">
                    <span class="md:text-2xl text-md font-bold font-inter">{{ Auth()->user()->name }}</span> <br>
                    <span class="text-secondary text-md">Content Creator</span>

                </div>
                <div class="flex items-center gap-2 md:mt-12 mt-3">
                    <ion-icon name="location"></ion-icon>
                    <span>maseru</span>
                </div>
            </div>

            <div class="flex md:gap-36 items-start md:ml-28 ml-3">
                <div class="flex md:flex-row flex-col items-center gap-4 mt-2">
                    @if ($hasProfile)
                        <a class="bg-primary md:py-1 py-1 md:px-5 px-3 hover:bg-transparent hover:text-gray-800 hover:border-2 hover:border-primary font-semibold text-white rounded-md whitespace-nowrap" href="{{ route('profiles.edit', $influencer->id) }}">Edit Profile</a>
                    @else
                        <a class="bg-primary md:py-1 py-1 md:px-5 px-3 hover:bg-transparent hover:text-gray-800 hover:border-2 hover:border-primary font-semibold text-white rounded-md" href="{{ route('profiles.create') }}">Create Profile</a>
                    @endif
                    <a class="border-2 border-primary md:py-1 py-1 md:px-5 px-3 text-gray-800 hover:bg-primary hover:text-white font-semibold rounded-md" href="#">Profile Settings</a>
                </div>
            </div>
        </div>
    </div>



@if ($hasProfile)
    <div class="mt-10 w-full ">
        <span class="font-bold border-b-4 border-gray-200 py-4">Profile</span>
        <div class="md:flex-row flex-col flex md:gap-5 md:justify-between">
            <div class="bg-white rounded-lg shadow-lg mt-8 p-10 md:w-5/6">
                <div class="flex items-center justify-between">
                    <span class="text-2xl font-bold">About</span>
                    <div>
                        <span class="md:text-xl text-md font-semibold">M{{ $influencer->chargeperhour }}/hr</span>
                    </div>
                </div>
                <div class="flex items-start ">
                    <p class="text-gray-700 border-b-2 border-gray-200 py-12 w-full">{{ $influencer->about }}</p>
                </div>

                <div class="mt-8">
                    <span class="text-2xl font-bold">Topics</span>
                    <div class="mt-8 md:space-x-6 space-x-2 flex">
                        @foreach ($influencer->topics as $topic)
                            <span class="border-2 border-gray-300 p-1 whitespace-nowrap rounded-full">{{ $topic->name }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="mt-16 border-t-2 border-gray-200 py-4">
                    <span class="text-2xl font-bold">Languages</span>
                    <div class="mt-8 flex items-center space-x-6">
                        @foreach ($influencer->languages as $language)
                            <div class="flex items-center gap-2">
                                <img class="w-6 h-4" src="{{ asset('assets/images/flags/' . $language->flag) }}" alt="">
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
            </div>
        </div>
    </div>
@else
    <div class="mt-10 w-full md:px-24 px-3">
        <span class="font-bold text-gray-700">You don't have a profile yet. Click the "Create Profile" button to set up your profile.</span>
    </div>
@endif

@endsection
