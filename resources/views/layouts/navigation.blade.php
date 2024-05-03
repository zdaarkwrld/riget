<nav x-data="{ open: false }" class="bg-primary">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex  h-16">
            <div class="flex w-full">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo secondary
                            class="block h-9 w-auto fill-current text-secondary font-extrabold" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="space-x-4 hidden sm:-my-px sm:ms-10 sm:flex justify-center sm:flex-1">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        Home
                    </x-nav-link>

                    <x-nav-link :href="route('resources')" :active="request()->routeIs('resources')">
                        Resources
                    </x-nav-link>
                    <x-nav-link :href="route('faq-page')" :active="request()->routeIs('faq-page')">
                        FAQ
                    </x-nav-link>
                    @auth
                        <x-nav-link :href="route('contact-us')" :active="request()->routeIs('contact-us')">
                            Contact Us
                        </x-nav-link>
                        <x-nav-link :href="route('booking')" :active="request()->routeIs('booking')">
                            Book Now
                        </x-nav-link>
                    @endauth
                </div>
            </div>


            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6 ">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-primary bg-secondary hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>
                                @auth
                                    {{ Auth::user()->name }}
                                @else
                                    Profile
                                @endauth
                            </div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        @auth
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('bookings')">
                                My bookings
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        @else
                            <x-dropdown-link :href="route('login')">
                                Login
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('register')">
                                Register
                            </x-dropdown-link>
                        @endauth
                    </x-slot>
                </x-dropdown>
            </div>


            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden text-secondary">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6 text-secondary" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-responsive-nav-link>
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('resources')" :active="request()->routeIs('resources')">
                    {{ __('resources') }}
                </x-responsive-nav-link>
            </div>



            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200 ">
                <div class="px-4 ">

                    @auth
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    @else
                        <div class="font-medium text-sm text-secondary">Profile</div>
                    @endauth
                </div>

                <div class="mt-3 space-y-1 ">
                    @auth
                        <x-responsive-nav-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link :href="route('bookings')">
                            My bookings
                        </x-responsive-nav-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    @else
                        <x-responsive-nav-link :href="route('login')">
                            Login
                        </x-responsive-nav-link>
                        <x-responsive-nav-link :href="route('register')">
                            Register
                        </x-responsive-nav-link>
                    @endauth
                </div>
            </div>

        </div>
</nav>
