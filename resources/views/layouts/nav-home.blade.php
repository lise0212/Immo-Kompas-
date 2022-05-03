<nav>
    <div class="bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                @if (Route::has('login'))
                    <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        @auth
                            <!-- <x-nav-link><a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a></x-nav-link> -->
                            <x-nav-link :href="url('/dashboard')" :active="request()->routeIs('dashboard')">
                                {{ __('Dashboard') }}
                            </x-nav-link>
                        @else
                            <!-- <x-nav-link><a href="{{ url('/buyer') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Ik ben koper</a></x-nav-link> -->
                            <x-nav-link :href="url('/buyer')" :active="request()->routeIs('buyer')">
                                {{ __('Ik ben koper') }}
                            </x-nav-link>
                            <!-- <x-nav-link><a href="{{ url('/dashboard') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Ik ben makelaar</a></x-nav-link> -->
                            <x-nav-link :href="url('/estate-agent')" >
                                {{ __('Ik ben makelaar') }}
                            </x-nav-link>
                            <!-- <x-nav-link><a href="{{ url('/dashboard') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Hoe werkt het?</a></x-nav-link> -->
                            <x-nav-link :href="url('/dashboard')" :active="request()->routeIs('/')">
                                {{ __('Hoe werkt het') }}
                            </x-nav-link>
                            <x-nav-link :href="url('/dashboard')" :active="request()->routeIs('dashboard')">
                                {{ __('FAQ') }}
                            </x-nav-link>
                            <!-- <x-nav-link><a href="{{ route('login') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></x-nav-link> -->
                            <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                                {{ __('Log in') }}
                            </x-nav-link>
                            @if (Route::has('register'))
                            <!-- <x-nav-link><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></x-nav-link> -->
                            <x-nav-link :href="route('register')" :active="request()->routeIs('register')">
                                {{ __('Registreer') }}
                            </x-nav-link>
                            @endif
                        @endauth
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>
</nav>