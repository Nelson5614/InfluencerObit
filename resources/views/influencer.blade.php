@extends('layouts.main')
@section('content')
    <div class="md:px-24 px-4">
        <div class=" md:py-28 flex md:flex-row flex-col items-center md:gap-36 ">
            <div class="py-4">
                <h1 class="text-3xl font-bold text-gray-700">Influencer Economy</h1>
                <p class=" leading-7 py-6">Welcome to the Africa's first creator economy resource. Our aim is to empower creators with the necessary knowledge and tools to create a living from what they love doing most, create!</p>
            </div>
            <img src="{{ asset('assets/images/Creator_Economy.png') }}" alt="">
        </div>

        <div>
            <div class="mt-12 p-10 md:w-1/3 border border-gray-900">
                <a href="{{ route('blog.details') }}">

                    <img class="border-gray-900 border" src="{{ asset('assets/images/Instagram-Influencer-Sponsored-Post-Money-Calculator.jpg') }}" alt="">
                    <h1 class="font-bold text-lg text-gray-700">How Creators Shape Online Buying Decisions</h1>
                    <p>Influencer Obit is excited to bring our readers the latest insights from...</p>
                </a>
            </div>
        </div>

    </div>
@endsection


