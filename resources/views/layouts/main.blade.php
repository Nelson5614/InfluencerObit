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
    <nav class="z-10 flex items-center justify-between w-full py-4 mx-auto bg-white sm:fixed sm:px-20">
        <a href="{{ route('home') }}" class="w-32">
            <img class="" src="{{ asset('/assets/images/logo/logo.png') }}" alt="logo" srcset="">
        </a>
        <div class="nav-links md:static md:min-h-fit absolute bg-white min-h-[50vh] left-0 top-[-100%] md:w-auto w-full flex md:items-center px-5 transition-all duration-300 ease-in-out">
            <ul class="flex flex-col gap-8 md:flex-row md:items-center md:gap-10">
                <li class="relative group">
                    <a class=" javascript:void() hover:text-primary cursor-pointer flex items-center gap-1" onclick="toggleDropdown('featuresDropdown')">Features <ion-icon name="chevron-down-outline"></ion-icon></a>
                    <ul id="featuresDropdown" class="absolute left-0 z-10 flex-col hidden w-64 p-4 space-y-4 bg-white rounded-md shadow-lg top-10">
                        <li class="flex items-center gap-2">
                            <ion-icon name="search-outline" class="text-primary"></ion-icon>
                            <a href="{{ route('feature.findinfluencer') }}" class="mt-4 hover:text-primary">Influencer Finder</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <ion-icon name="people-outline" class="text-primary"></ion-icon>
                            <a href="{{ route('feature.analyzeinfluencer') }}" class="hover:text-primary">Influencer Manager</a>
                        </li>
                    </ul>
                </li>
                <li class="relative group">
                    <a class="flex items-center gap-1 cursor-pointer hover:text-primary" onclick="toggleDropdown('resourcesDropdown')">Resources <ion-icon name="chevron-down-outline"></ion-icon></a>
                    <ul id="resourcesDropdown" class="absolute left-0 flex-col hidden w-64 p-4 space-y-4 bg-white rounded-md shadow-lg top-10">
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
                <a href="{{ route('login') }}" class="px-5 py-2 bg-transparent border-2 rounded-md text-primary border-primary hover:bg-primary hover:text-white">Sign In</a>
            </div>
            <div>
                <a href="{{ route('select-role') }}" class="px-5 py-2 text-white border-2 rounded-md bg-primary hover:bg-white hover:text-black border-primary">Get Started</a>
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
    <div class="flex-col items-center justify-between py-8 md:flex md:flex-row md:px-16 space-y-14">
        <div class="px-12 space-y-5 md:w-1/3 mt-14">
            {{-- <img src="{{ asset('assets/images/logo/logo-black.png') }}" class="w-36" alt="" srcset=""> --}}
            <div class="flex items-center">
                <form action="">
                    <span class="text-xl font-bold text-secondary">News Letter</span> <br>
                    <button class="absolute bg-primary rounded-r-xl px-4 py-2.5 text-white ml-44">Sign Up</button>
                    <input class="py-2 rounded-lg" type="text" name="newsletter" placeholder="Enter Email">
                </form>
            </div>
            <p class="text-gray-500">Subscribe to our news letter for latest updates here at Influencer Obit, by signing you are agreeing to our terms of services. Read our policy</p>
        </div>
        <div class="px-12 space-y-5 md:w-1/3">
            <h1 class="text-xl font-bold text-secondary">Resources</h1>
            <ul>
                <li class="py-1 font-semibold text-gray-500 hover:text-secondary"> <a href="">Influencer Search Tools</a></li>
                <li class="py-1 font-semibold text-gray-500 hover:text-secondary"> <a href="">Articles</a></li>
                <li class="py-1 font-semibold text-gray-500 hover:text-secondary"> <a href="">Tutorials</a></li>
                <li class="py-1 font-semibold text-gray-500 hover:text-secondary"> <a href="">Blog</a></li>
                <li class="py-1 font-semibold text-gray-500 hover:text-secondary"> <a href="">Influencers</a></li>
            </ul>
        </div>
        <div class="px-12 space-y-5 md:w-1/3">
            <h1 class="text-xl font-bold text-secondary">Features</h1>
            <ul>
                <li class="py-1 font-semibold text-gray-500 hover:text-secondary"> <a href="">Influencer Finder</a></li>
                <li class="py-1 font-semibold text-gray-500 hover:text-secondary"> <a href="">Influencer Management</a></li>
                <li class="py-1 font-semibold text-gray-500 hover:text-secondary"> <a href="">Leads generation</a></li>
                <li class="py-1 font-semibold text-gray-500 hover:text-secondary"> <a href="">Analyse Influecers</a></li>
                <li class="py-1 font-semibold text-gray-500 hover:text-secondary"> <a href="">Ecomerce Tools</a></li>
            </ul>
        </div>
        <div class="px-12 space-y-5 md:w-1/3">
            <h1 class="text-xl font-bold text-secondary">About Us</h1>
            <ul>
                <li class="py-1 font-semibold text-gray-500 hover:text-secondary"> <a href="">Team</a></li>
                <li class="py-1 font-semibold text-gray-500 hover:text-secondary"> <a href="">Media</a></li>
                <li class="py-1 font-semibold text-gray-500 hover:text-secondary"> <a href="">Mission and Vission</a></li>
                <li class="py-1 font-semibold text-gray-500 hover:text-secondary"> <a href="">Contact us</a></li>
                <li class="py-1 font-semibold text-gray-500 hover:text-secondary"> <a href="">Privacy Policy</a></li>
                <li class="py-1 font-semibold text-gray-500 hover:text-secondary"> <a href="">Pricing</a></li>
            </ul>
        </div>

    </div>
    <div class="mt-8 mb-14">
        <div class="flex flex-col items-center justify-center space-y-8 md:gap-10">
            <div class="flex items-center justify-center gap-6">
                <ion-icon class="text-4xl text-secondary" name="logo-facebook"></ion-icon>
                <ion-icon class="text-4xl text-secondary" name="logo-instagram"></ion-icon>
                <ion-icon class="text-4xl text-secondary" name="logo-linkedin"></ion-icon>
                <ion-icon class="text-4xl text-secondary" name="logo-twitter"></ion-icon>
            </div>

        </div>
    </div>
    <div class="py-4 text-center border-t-2 border-gray-300">
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
