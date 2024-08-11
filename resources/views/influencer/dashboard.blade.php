@extends('layouts.influencerdashboard')
@section('content')
    <div class="container mx-auto font-inter ">
        <div class="py-28 flex md:flex-row flex-col items-center gap-20 md:px-28 px-2">

            <div class="">
                <h1 class="text-4xl font-bold text-gray-800">Welcome to Your Resources Hub</h1>
                <p class="text-gray-800 py-6 leading-8">As an influencer, your presence on this platform opens up numerous opportunities to collaborate with business owners and brands looking for unique voices to promote their products and services. To maximize your chances of being discovered and securing partnerships, follow these key steps</p>
            </div>
            <img class="" src="{{ asset('assets/images/mediakit.png') }}" alt="" srcset="">

        </div>
        <div class=" rounded-lg mt-20 md:px-12">
            <div class=" flex md:flex-row flex-col items-center gap-20 md:p-12 p-3">
                <img class="w-[700px] h-80" src="{{ asset('assets/images/vector.jpeg') }}" alt="" srcset="">
                <div class=" space-y-4">
                    <h2 class="text-gray-800 text-2xl  font-bold">Optimize Your Profile</h2>
                    <li>Complete Your Profile: Ensure all fields are filled out, including your bio, contact information, and social media links.</li>
                    <li>Add a Professional Profile Picture: Use a high-quality image that represents your brand.</li>
                    <li>Highlight Your Expertise: Clearly define the niches or topics you specialize in, and showcase your previous successful collaborations.</li>
                </div>
            </div>
        </div>
        <div class=" rounded-lg mt-20">
            <div class=" flex md:flex-row flex-col items-center gap-20 md:p-12 p-3">
                <div class=" space-y-4">
                    <h2 class="text-gray-800 text-2xl  font-bold">Engage Regularly</h2>
                    <li>
                        Stay Active: Regularly update your profile with new content, achievements, and collaborations.</li>
                    <li>Respond Promptly: Engage with business owners who show interest in your profile by responding to messages and collaboration requests quickly.</li>

                </div>
                <img class="w-[700px] h-80" src="{{ asset('assets/images/tools.png') }}" alt="" srcset="">

            </div>
        </div>
        <div class=" flex md:flex-row flex-col mt-20">
            <img class="w-[700px] h-80" src="{{ asset('assets/images/Keyword.jpg') }}" alt="" srcset="">

            <div class="px-16 py-16">
                <h1 class="text-4xl text-center font-bold text-gray-800">Stay Updated</h1>
                <p class="text-gray-800 p-6 ">Follow Platform Updates: Keep an eye on new features and tools that the platform rolls out to help you improve your profile and discoverability.
                    Learn from Success Stories: Read success stories of other influencers on the platform to learn new strategies and tips.</p>
            </div>
        </div>
    </div>
    <div class="py-4 text-center border-t-2 border-gray-300">
        <span class="text-gray-500">2024 Influencer Obit. All rights reserved</span>
    </div>
@endsection


