
<nav class=" fixed z-20 top-0 left-0 right-0 bg-gradient-to-b from-black to-black/80 text-white">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('images/okcarpremium.png') }}" class="h-16" alt="OkCarPremium Logo" />
            <span class="hidden">{{ __('OkCarPremium') }}</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">{{ __('Open main menu') }}</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col md:flex-row md:space-x-8 rtl:space-x-reverse">
                <li>
                    <a href="#" class="block py-2 px-6 text-white rounded md:bg-transparent active" aria-current="page">
                        {{ __('Home') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('vehicles.index') }}" class="block py-2 px-6 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-300">
                        {{ __('Vehicles') }}
                    </a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-6 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-300">
                        {{ __('Contact') }}
                    </a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-6 border border-white text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-yellow-300 md:hover:border-yellow-300">
                        {{ __('Portal') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
