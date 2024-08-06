<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InfluencerObit</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

</head>
<body class="container mx-auto w-full font-[poppins] bg-white h-screen">

<header class="bg-white">
    <nav class="flex justify-between items-center bg-white mx-auto py-4 z-10 sm:fixed w-full sm:px-20">
        <a href="{{ route('home') }}" class="w-32">
            <img class="" src="{{ asset('/assets/images/logo/logo.png') }}" alt="logo" srcset="">
        </a>
        <div class="nav-links md:static md:min-h-fit absolute bg-white min-h-[50vh] left-0 top-[-100%] md:w-auto w-full flex md:items-center px-5 transition-all duration-300 ease-in-out">
            <ul class="flex md:flex-row flex-col md:items-center md:gap-10 gap-8">
                <li class="relative group">
                    <a class=" javascript:void() hover:text-primary cursor-pointer flex items-center gap-1" onclick="toggleDropdown('featuresDropdown')">Features <ion-icon name="chevron-down-outline"></ion-icon></a>
                    <ul id="featuresDropdown" class="absolute left-0 top-10 bg-white shadow-lg z-10 w-64 rounded-md p-4 hidden flex-col space-y-4">
                        <li class="flex items-center gap-2">
                            <ion-icon name="search-outline" class="text-primary"></ion-icon>
                            <a href="{{ route('feature.findinfluencer') }}" class="hover:text-primary mt-4">Influencer Finder</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <ion-icon name="people-outline" class="text-primary"></ion-icon>
                            <a href="{{ route('feature.analyzeinfluencer') }}" class="hover:text-primary">Influencer Manager</a>
                        </li>
                    </ul>
                </li>
                <li class="relative group">
                    <a class="hover:text-primary cursor-pointer flex items-center gap-1" onclick="toggleDropdown('resourcesDropdown')">Resources <ion-icon name="chevron-down-outline"></ion-icon></a>
                    <ul id="resourcesDropdown" class="absolute left-0 top-10 bg-white shadow-lg w-64 rounded-md p-4 hidden flex-col space-y-4">
                        <li class="flex items-center gap-2">
                            <ion-icon name="reader-outline" class="text-primary"></ion-icon>
                            <a href="{{ route('blog') }}" class="hover:text-primary">Blog</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <ion-icon name="person-outline" class="text-primary"></ion-icon>
                            <a href="#" class="hover:text-primary">Influencers</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <ion-icon name="help-circle-outline" class="text-primary"></ion-icon>
                            <a href="#" class="hover:text-primary">How-To Guides</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="hover:text-primary" href="">Pricing</a>
                </li>
                <li>
                    <a class="hover:text-primary" href="">Contact</a>
                </li>
            </ul>
        </div>
        <div class="flex items-center gap-3 md:gap-10">
            <div>
                <button class="px-5 py-2 text-primary bg-transparent border-primary border-2 hover:bg-primary hover:text-white rounded-md">Sign In</button>
            </div>
            <div>
                <button class="px-5 py-2 bg-primary text-white rounded-md hover:bg-white hover:text-black border-2 border-primary">Get Started</button>
            </div>
            <div>
                <ion-icon onclick="onToggleMenu(this)" name="menu-outline" class="text-4xl cursor-pointer md:hidden"></ion-icon>
            </div>
        </div>
    </nav>
</header>
<main>
    @yield('content')
</main>
<footer class="mt-8 bg-gray-100">
    <div class="md:flex md:flex-row flex-col items-center justify-between md:px-16 space-y-14 py-8">
        <div class="space-y-5 md:w-1/3 px-12 mt-14">
            {{-- <img src="{{ asset('assets/images/logo/logo-black.png') }}" class="w-36" alt="" srcset=""> --}}
            <div class="flex items-center">
                <form action="">
                    <span class="text-secondary font-bold text-xl">News Letter</span> <br>
                    <button class="absolute bg-primary rounded-r-xl px-4 py-2.5 text-white ml-44">Sign Up</button>
                    <input class="rounded-lg py-2" type="text" name="newsletter" placeholder="Enter Email">
                </form>
            </div>
            <p class="text-gray-500">Subscribe to our news letter for latest updates here at Influencer Obit, by signing you are agreeing to our terms of services. Read our policy</p>
        </div>
        <div class="space-y-5 md:w-1/3 px-12">
            <h1 class="font-bold text-secondary text-xl">Resources</h1>
            <ul>
                <li class="hover:text-secondary py-1 font-semibold text-gray-500"> <a href="">Influencer Search Tools</a></li>
                <li class="hover:text-secondary py-1 font-semibold text-gray-500"> <a href="">Articles</a></li>
                <li class="hover:text-secondary py-1 font-semibold text-gray-500"> <a href="">Tutorials</a></li>
                <li class="hover:text-secondary py-1 font-semibold text-gray-500"> <a href="">Blog</a></li>
                <li class="hover:text-secondary py-1 font-semibold text-gray-500"> <a href="">Influencers</a></li>
            </ul>
        </div>
        <div class="space-y-5 md:w-1/3 px-12">
            <h1 class="font-bold text-secondary text-xl">Features</h1>
            <ul>
                <li class="hover:text-secondary py-1 font-semibold text-gray-500"> <a href="">Influencer Finder</a></li>
                <li class="hover:text-secondary py-1 font-semibold text-gray-500"> <a href="">Influencer Management</a></li>
                <li class="hover:text-secondary py-1 font-semibold text-gray-500"> <a href="">Leads generation</a></li>
                <li class="hover:text-secondary py-1 font-semibold text-gray-500"> <a href="">Analyse Influecers</a></li>
                <li class="hover:text-secondary py-1 font-semibold text-gray-500"> <a href="">Ecomerce Tools</a></li>
            </ul>
        </div>
        <div class="space-y-5 md:w-1/3 px-12">
            <h1 class="font-bold text-secondary text-xl">About Us</h1>
            <ul>
                <li class="hover:text-secondary py-1 font-semibold text-gray-500"> <a href="">Team</a></li>
                <li class="hover:text-secondary py-1 font-semibold text-gray-500"> <a href="">Media</a></li>
                <li class="hover:text-secondary py-1 font-semibold text-gray-500"> <a href="">Mission and Vission</a></li>
                <li class="hover:text-secondary py-1 font-semibold text-gray-500"> <a href="">Contact us</a></li>
                <li class="hover:text-secondary py-1 font-semibold text-gray-500"> <a href="">Privacy Policy</a></li>
                <li class="hover:text-secondary py-1 font-semibold text-gray-500"> <a href="">Pricing</a></li>
            </ul>
        </div>

    </div>
    <div class="mt-8 mb-14">
        <div class="flex flex-col items-center md:gap-10 space-y-8 justify-center">
            <div class="flex items-center gap-6 justify-center">
                <ion-icon class="text-4xl text-secondary" name="logo-facebook"></ion-icon>
                <ion-icon class="text-4xl text-secondary" name="logo-instagram"></ion-icon>
                <ion-icon class="text-4xl text-secondary" name="logo-linkedin"></ion-icon>
                <ion-icon class="text-4xl text-secondary" name="logo-twitter"></ion-icon>
            </div>

        </div>
    </div>
    <div class="border-t-2 border-gray-300 py-4 text-center">
        <span class="text-gray-500">2024 Influencer Obit. All rights reserved</span>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navLinks = document.querySelector('.nav-links');
        const dropdownToggles = document.querySelectorAll('[onclick^="toggleDropdown"]');

        function onToggleMenu(icon) {
            icon.name = icon.name === 'menu-outline' ? 'close-outline' : 'menu-outline';
            navLinks.classList.toggle('top-[13%]');
        }

        function toggleDropdown(id) {
            const dropdown = document.getElementById(id);
            const allDropdowns = document.querySelectorAll('.nav-links ul ul');
            allDropdowns.forEach(d => {
                if (d !== dropdown) {
                    d.classList.add('hidden');
                }
            });
            dropdown.classList.toggle('hidden');
        }

        const menuIcon = document.querySelector('ion-icon[name="menu-outline"]');
        menuIcon.addEventListener('click', function() {
            onToggleMenu(menuIcon);
        });

        dropdownToggles.forEach(toggle => {
            toggle.addEventListener('click', function(event) {
                event.stopPropagation();
                toggleDropdown(this.getAttribute('onclick').match(/'(.*)'/)[1]);
            });
        });

        document.addEventListener('click', function() {
            dropdownToggles.forEach(toggle => {
                const dropdown = document.getElementById(toggle.getAttribute('onclick').match(/'(.*)'/)[1]);
                if (!dropdown.classList.contains('hidden')) {
                    dropdown.classList.add('hidden');
                }
            });
        });
    });
</script>

</body>
</html>
