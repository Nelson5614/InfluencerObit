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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
    @livewireStyles
</head>
<body class="bg-gray-50 ">



    <div class=" w-full ">
        <!-- Horizontal Navbar -->
        <div class="fixed top-0 w-full right-0 hidden z-10 sm:flex items-center justify-between h-20 border-b-2 border-gray-100 bg-gray-50 rounded-r-md px-11">
            <img class="py-2 ml-20 rounded-md w-28 " src="{{ asset('assets/images/logo/logo1.png') }}" alt="">

        <ul class="flex flex-col gap-8 md:flex-row md:items-center md:gap-10">
            <li>
                <a href="{{ route('influencer.dashboard') }}" class="hover:text-primary"> Resources</a>
            </li>


            <li>
                <a class="hover:text-primary" href="{{ route('influencer.profile') }}">My Profile</a>
            </li>
            <li>
                <a class="hover:text-primary" href="{{ route('influencer.contact') }}">Contact</a>
            </li>
        </ul>

        <livewire:profile-menu/>

        </div>
         <!-- Mobile Header & Nav -->
         <header x-data="{ isOpen: false }" class="w-full px-6 py-5 bg-sidebar sm:hidden">
            <div class="flex items-center justify-between">
               <a href="{{ route('influencer.dashboard') }}">
                <img class="py-2 rounded-md w-28 " src="{{ asset('assets/images/logo/logo1.png') }}" alt="">
                </a>
                <button @click="isOpen = !isOpen" class="text-3xl text-primary focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>

            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
                <a href="{{ route('influencer.dashboard') }}" class="flex items-center py-4 pl-4 text-gray-900 active-nav-link nav-item">
                    <i class="mr-3 fas text-primary fa-tachometer-alt"></i>
                    Resources
                </a>

                <a href="{{ route('influencer.profile') }}" class="flex items-center py-4 pl-4 text-gray-900  opacity-75 hover:opacity-100 nav-item">
                    <ion-icon class="text-primary mr-3" name="search"></ion-icon>
                    My Profile
                </a>
                <a href="{{ route('influencer.contact') }}" class="flex items-center py-4 pl-4 text-gray-900  opacity-75 hover:opacity-100 nav-item">
                    <i class="mr-3 text-primary fas fa-table"></i>
                   Contact
                </a>



                <div class="pt-4 pb-1 border-t border-white">
                    <div class="flex items-center px-4">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <div class="mr-3 shrink-0">
                                <img class="object-cover w-10 h-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </div>
                        @endif

                        <div>
                            <div class="text-base font-medium text-gray-900 ">{{ Auth::user()->name }}</div>
                            <div class="text-sm font-medium text-gray-900 ">{{ Auth::user()->email }}</div>
                        </div>
                    </div>

                    <div class="mt-3 space-y-1">
                        <!-- Account Management -->
                        <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                            {{ __('Profile') }}
                        </x-responsive-nav-link>

                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                                {{ __('API Tokens') }}
                            </x-responsive-nav-link>
                        @endif

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <x-responsive-nav-link href="{{ route('logout') }}"
                                            @click.prevent="$refs.$root.submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>

                        <!-- Team Management -->
                        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                            <div class="border-t border-gray-100"></div>

                            <div class="block px-4 py-2 text-xs text-gray-900 ">
                                {{ __('Manage Team') }}
                            </div>

                            <!-- Team Settings -->
                            <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                                {{ __('Team Settings') }}
                            </x-responsive-nav-link>

                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                                    {{ __('Create New Team') }}
                                </x-responsive-nav-link>
                            @endcan

                            <div class="border-t border-gray-100"></div>

                            <!-- Team Switcher -->
                            <div class="block px-4 py-2 text-xs text-gray-900 ">
                                {{ __('Switch Teams') }}
                            </div>

                            @foreach (Auth::user()->allTeams() as $team)
                                <x-switchable-team :team="$team" component="responsive-nav-link" />
                            @endforeach
                        @endif
                    </div>
                </div>

            </nav>

        </header>

        <main>
            @yield('content')
        </main>
    </div>

      <!-- AlpineJS -->
      <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

      <!-- Font Awesome -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
      <!-- ChartJS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    @livewireScripts
</body>
</html>
