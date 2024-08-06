@extends('layouts.main')
@section('content')

    <section class=" py-5  ">
        <div class=" flex md:flex-row flex-col items-center justify-center mx-auto mt-10  md:px-12">

            <div class="md:w-1/2 px-14">

                <div class=" flex items-center space-x-2">
                    <div class="w-12 h-1 bg-primary"></div>
                    <span class="" >Unlock the magic of influecer marketing</span>
                </div>
                <div>
                    <h1 class="font-bold  text-3xl py-6 leading-2 ">Find The Right
                        <span class="text-primary">Influecer</span>
                         For Your Business!</h1>
                </div>
                <div>
                    <p class="">Influencer marketing, affiliate programs, creator management, user generated content, brand ambassadors: build valuable partnerships to grow your business</p>
                </div>
                <div class="py-6 ">
                    <button class="px-5 py-2 bg-primary text-white rounded-md hover:bg-secondary">Get Started</button>
                </div>
            </div>
            <div>
                <img src="{{ asset('/assets/images/hero/hero2.jpeg') }}" alt="" srcset="">
            </div>
        </div>


    </section>

    <section class="py-10 bg-gray-100">

        <div class="flex md:flex-row flex-col items-center justify-between space-y-6 px-20">
            <div class="">
                <img src="{{ asset('assets/images/icons/network.png') }}" class="w-40" alt="" srcset="">
                <span class="font-bold ">Connect With Influcers</span>
            </div>
            <div>
                <img src="{{ asset('assets/images/icons/workshop.png') }}" class="w-40" alt="" srcset="">
                <span class="font-bold">Meet To Influencers</span>
            </div>
            <div class="">
                <img src="{{ asset('assets/images/icons/salary.png') }}" class="w-40" alt="" srcset="">
                <span class="font-bold">Make Money</span>
            </div>
        </div>
    </section>

    <section class="py-8 px-14">
        <div class="text-center">
            <div class="absolute bg-dots md:w-48 md:h-34 w-44 h-14 -mt-12 -ml-12"></div>
            <h1 class="font-bold text-3xl">The Vast World Of Social Media!</h1>
            <div class=" flex justify-center items-center mt-1">

                <div class="w-40 h-1 bg-secondary"></div>
            </div>
        </div>

        <div class="flex md:flex-row flex-col justify-center items-center gap-14">
            <div class="md:w-1/2">
                <img src="{{ asset('assets/images/socialmedia.jpeg') }}" alt="" srcset="">
            </div>
            <div class="md:w-1/2">
                <h1 class="font-bold text-3xl mb-14">Find Your Right Influencer</h1>
                <div class="absolute ml-3.5 md:h-64 h-72 border-l-2 border-dotted border-gray-400"></div>
                <div class="flex gap-4 items-center">

                    <div class=" z-10 ">
                        <span class="bg-primary py-1 px-3 text-white">1</span>
                    </div>
                    <div class="w-96">
                        <span class="font-bold">Influencer Who Already On Your Nich!</span>
                    </div>
                </div>
                <div class="ml-11">
                    <p>Our data shows that your brand’s existing influential customers are 7 times more likely to accept a collaboration.</p>
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
                <div class="flex gap-4 mt-8 items-center">

                    <div class="z-10 ">
                        <span class="bg-primary py-1 px-3 text-white">3</span>
                    </div>
                    <div class="w-96">
                        <span class=" font-bold">Data Driven Decisions!</span>
                    </div>
                </div>
                <div class="ml-11">
                    <p class="">Our systems will help you with the accurate numbers that will show you the influencer best suited for your type of business</p>
                </div>
            </div>
        </div>
    </section>
    <section class=" mt-10 bg-secondary rounded-2xl">
        <div class="flex justify-center items-center py-12">
            <div class="md:px-40 text-center">
                <span class="font-bold text-white md:text-3xl text-2xl leading-3">What Are You Wait For?</span>
                <p class="text-white font-semibold pt-4" >The more you time you wait, the more time you are wasting. sign up now and explore our app and what it can do for your business. Dont miss your opportunity</p>
                <div class="mt-6">

                    <a href="" class="bg-primary text-white rounded-md px-4 py-2 hover:bg-secondary">Get Started</a>
                </div>

            </div>
        </div>
    </section>
    <section class="py-8 mt-20 px-14">
        <div class="flex md:flex-row flex-col justify-center items-center gap-14">
            <div class="flex justify-end">

                <div class="absolute bg-dots md:w-48 md:h-64 w-44 h-14 -mt-12 -ml-12"></div>
            </div>
            <div class="md:w-1/2">
                <h1 class="font-bold text-3xl mb-14">Manage Your Influencers!</h1>
                <div class="absolute ml-3.5 md:h-64 h-72 border-l-2 border-dotted border-gray-400"></div>
                <div class="flex gap-4 items-center">

                    <div class=" z-10 ">
                        <span class="bg-secondary py-1 px-3 text-white">1</span>
                    </div>
                    <div class="w-96">
                        <span class="font-bold">Our Powerful Influencer Manager Tool!</span>
                    </div>
                </div>
                <div class="ml-11">
                    <p>
                        Effortlessly manage your influencer campaigns with our comprehensive, automated, and customizable workflow tool. View all hired creators, submitted drafts, generated sales, and issued payments—all in one convenient place.</p>
                </div>
                <div class="flex gap-4 items-center mt-8">

                    <div class="z-10 ">
                        <span class="bg-secondary py-1 px-3 text-white">2</span>
                    </div>
                    <div class="w-96">
                        <span class=" font-bold">Hire Top Notch Influencers Easily and Quickly</span>
                    </div>
                </div>
                <div class="ml-11">
                    <p>Secure top influencers for successful, long-term partnerships with your brand. Influencer Obit offers influencer contract templates and an AI-powered mailing assistant to simplify and expedite the hiring process.</p>
                </div>

            </div>
            <div class="md:w-1/2">
                <img src="{{ asset('assets/images/growth.jpeg') }}" class="rounded-md h-96" alt="" srcset="">
            </div>
        </div>
    </section>

    <section class="py-8 mt-20 px-14 w-full bg-gray-100">
        <div class="text-center">
            <span class="font-bold text-3xl">What Are Others Saying?</span>
        </div>
        <div class="flex md:flex-row flex-col items-center justify-between">

            <div class="bg-white w-96 shadow-md py-5 mt-8 rounded-md">
                <div class="flex justify-end">
                    <img src="{{ asset('assets/images/quote.png') }}" class="w-10 absolute -mt-10 mr-2" alt="" srcset="">
                </div>
                <div class="py-8 px-8">

                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim laborum rem reiciendis ex! Obcaecati, placeat libero labore dignissimos pariatur error mollitia reprehenderit modi dolorem? Natus dolores sint et debitis saepe.</p>
                </div>
                <div class="pb-8 px-8">
                    <span class="font-bold ">Limako Sebeta</span><br/>
                    <span class="text-primary">Coffee Shop Owner</span>
                </div>

            </div>
            <div class="bg-white w-96 shadow-md py-5 mt-8 rounded-md">
                <div class="flex justify-end">
                    <img src="{{ asset('assets/images/quote.png') }}" class="w-10 absolute -mt-10 mr-2" alt="" srcset="">
                </div>
                <div class="py-8 px-8">

                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim laborum rem reiciendis ex! Obcaecati, placeat libero labore dignissimos pariatur error mollitia reprehenderit modi dolorem? Natus dolores sint et debitis saepe.</p>
                </div>
                <div class="pb-8 px-8">
                    <span class="font-bold ">Limako Sebeta</span><br/>
                    <span class="text-primary">Coffee Shop Owner</span>
                </div>

            </div>
            <div class="bg-white w-96 shadow-md py-5 mt-8 rounded-md">
                <div class="flex justify-end">
                    <img src="{{ asset('assets/images/quote.png') }}" class="w-10 absolute -mt-10 mr-2" alt="" srcset="">
                </div>
                <div class="py-8 px-8">

                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim laborum rem reiciendis ex! Obcaecati, placeat libero labore dignissimos pariatur error mollitia reprehenderit modi dolorem? Natus dolores sint et debitis saepe.</p>
                </div>
                <div class="pb-8 px-8">
                    <span class="font-bold ">Limako Sebeta</span><br/>
                    <span class="text-primary">Coffee Shop Owner</span>
                </div>

            </div>
        </div>
    </section>
@endsection



