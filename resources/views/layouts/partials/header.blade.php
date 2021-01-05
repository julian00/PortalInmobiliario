<header>
    <nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
            <span class="font-semibold text-xl tracking-tight">Portal</span>
        </div>

        <div class="block lg:hidden">
            <button id="btnNavBar" class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                </svg>
            </button>
        </div>

        <div id="menu" class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-sm lg:flex-grow">
                    <!--                                  clase dump para saber si esta seleccionado-->
                    <a href="{{ route('home') }}" class="{{request()->routeIs('home')? 'active': '' }} block px-1 mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-2">
                        Inicio
                    </a>
            
                <a href="#responsive-header" class="block px-1 mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-2">
                    Compra
                </a>
                <a href="#responsive-header" class="block px-1 mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-2">
                    Alquiler
                </a>
                <a href="#responsive-header" class="block px-1 mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-2">
                    Emprendimiento
                </a>
                <a href="#responsive-header" class="block px-1 mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-2">
                    Valuador
                </a>
                <a href="{{ route('neighborhoods.index') }}" class="{{request()->routeIs('neighborhoods.*')? 'active': '' }} block px-1 mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-2">
                    Barrios
                </a>
                <a href="{{ route('nosotros') }}" class="{{request()->routeIs('nosotros')? 'active': '' }} block px-1 mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-2">
                    Nosotros
                </a>
                <a href="{{ route('contactUs.index') }}" class="{{request()->routeIs('contactUs.index')? 'active': '' }} block px-1 mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-2">
                    Contactanos
                </a>
            </div>
            <div>
                @if (Route::has('login'))
                    <div class="hidden right-6 px-2 sm:block">
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-white underline">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-white underline">Login</a>
            
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-white underline">Register</a>
                            @endif
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </nav>
</header>