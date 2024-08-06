<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- scripts -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

    <!--font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
    @livewireStyles
</head>
<body class="bg-gray-50 ">
    <!--Vertical Line -->
    {{-- <div class="bg-gray-100 z-10 w-0.5 fixed h-80 mt-20 left-28 "></div> --}}

    <!-- Start of SideBar -->
    <div class="fixed top-0 left-0 w-64 h-screen py-6 bg-gray-100 ">
        <img class="py-2 ml-20 rounded-md w-28 " src="{{ asset('assets/images/logo/logo1.png') }}" alt="">
        <div class="pb-8 mt-10 border-b border-gray-100">
            <div class="flex items-center gap-8">
                <ion-icon class="w-8 h-6 px-1 py-1 mt-2 ml-2 text-white rounded-lg bg-secondary " name="home-outline"></ion-icon>
                <span class="mt-2 text-lg font-bold ">Features</span>
            </div>
            <div class="mt-10 ml-20 ">
                <ul class="space-y-8">
                    <li class="flex gap-4 item">
                        <ion-icon name="chevron-forward-outline"></ion-icon>
                        <a class="text-xs font-semibold transition ease-in-out delay-150 font-inter hover:translate-x-6 hover:scale-105 hover:text-secondary" href="">Discover Influencer</a>
                    </li>
                    <li class="flex gap-4 item">
                        <ion-icon name="chevron-forward-outline"></ion-icon>
                        <a class="text-xs font-semibold transition ease-in-out delay-150 font-inter hover:translate-x-6 hover:scale-105 hover:text-secondary" href="">Manage Influencer</a>
                    </li>
                    <li class="flex gap-4 item">
                        <ion-icon name="chevron-forward-outline"></ion-icon>
                        <a class="text-xs font-semibold transition ease-in-out delay-150 font-inter hover:translate-x-6 hover:scale-105 hover:text-secondary" href="">Saved Influencer</a>
                    </li>
                    <li class="flex gap-4 item">
                        <ion-icon name="chevron-forward-outline"></ion-icon>
                        <a class="text-xs font-semibold transition ease-in-out delay-150 font-inter hover:translate-x-6 hover:scale-105 hover:text-secondary" href="">Messages</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="border-4 bg-opacity-10 bg-primary w-56 ml-3.5 mt-16 rounded-xl  border-primary">
            <h2 class=" abosolute text-center px-0.5 text-sm text-white bg-primary -mt-2.5 ml-6 w-44 rounded-full">For Small Businesses</h2>
            <h2 class="text-md font-semibold px-2.5 pt-4">Deliver instant answers</h2>
            <p class="px-2 py-1 ml-1 text-sm leading-6">Our all in one AI powered influencer plartform that helps you get to your customers faster  without spending too much.</p>
            <div class="flex items-center gap-2 py-2 ml-4">
                <ion-icon class="text-primary" name="arrow-forward-outline"></ion-icon>
                <a class="text-sm transition ease-in-out delay-150 text-primary hover:translate-x-6 hover:scale-105" href="">Talk to an expert</a>
            </div>
        </div>
    </div>
    <!-- end of sidebar -->
    <div class="ml-64 ">
        <!-- Horizontal Navbar -->
        <div class="fixed top-0 right-0 z-10 flex items-center justify-between h-20 border-b-2 border-gray-100 bg-gray-50 left-64 rounded-r-md px-11">
            <ion-icon class="w-10 h-10" name="menu-outline"></ion-icon>
            <!-- search by topic component -->
            <livewire:filter-by-topic/>

            <!--end of search by topic component -->
            <div class="flex items-center gap-1 mr-4">
                <a href="">
                    <ion-icon name="notifications-outline" class="w-8 h-8"></ion-icon cla>
                </a>
                <livewire:profile-menu/>
            </div>
        </div>
        <!--End Horizontal Bar -->
        <main>
            @yield('content')
        </main>
    </div>
    @livewireScripts
</body>
</html>
