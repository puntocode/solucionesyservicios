<header>
    <!-- Navbar SM -->
    <nav id="main-navbar" class="bg-white fixed md:hidden shadow top-0 w-full z-20">
        <div class="container mx-auto p-4">
            <div class="flex justify-between h-16">
                <div class="self-center">
                    <img class="h-16" src="{{ asset('images/logo-horizontal.svg') }}" alt="">
                </div>
                <!-- Mobile menu button-->
                <div class="self-center">
                    <button type="button" id="btn-navbar" class="w-10 self-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-steel-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                      <span class="sr-only">Open main menu</span>
                      <span id="icon-menu" class="icon-menu"></span>
                    </button>
                  </div>
            </div>
            <div id="menu-navbar" class="w-full text-center items-center bg-white hidden">
                <ul class="py-5 text-xl uppercase">
                    <li class="py-3"><a class="nav-link active" href="#hero">Inicio</a></li>
                    <li class="py-3"><a class="nav-link" href="#welcome">Nosotros</a></li>
                    <li class="py-3"><a class="nav-link" href="#services">Servicios</a></li>
                    <li class="py-3"><a class="nav-link" href="#contact">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Navbar LG -->
    <div class="hidden md:block">
        <div class="container mx-auto py-5 px-6 flex justify-between">
            <img class="h-16" src="{{ asset('images/logo-horizontal.svg') }}" alt="logo">
            <div class="flex">
                <img class="h-14" src="{{ asset('images/icons/smartphone.svg') }}" alt="icono de smartphone">
                <div>
                    <span class="text-xs text-gray-500">Llámanos para una rápida atención</span>
                    <a href="tel:+543794767344" class="text-2xl text-gray-600 block">+54 3794767344</a>
                </div>
            </div>
        </div>
        <div class="bg-steel-400 h-10 flex justify-between">
            <div class="flex justify-between container mx-auto px-6 sticky top-0">
                <div>
                    <ul class="flex items-center h-10">
                        <li class="px-3 text-white"><a class="text-steel-700 font-semibold" href="#hero" >Inicio</a></li>
                        <li class="px-3 text-white"><a href="#welcome">Nosotros</a></li>
                        <li class="px-3 text-white"><a href="#services">Servicios</a></li>
                        <li class="px-3 text-white"><a href="#contact">Contacto</a></li>
                    </ul>
                </div>
                <div class="flex gap-2 items-center">
                    <a href=""><img class="h-5 fill-current text-green-600" src="{{ asset('images/icons/facebook.svg') }}" alt="icono de facebook"></a>
                    <a href=""><img class="h-5 fill-current text-green-600" src="{{ asset('images/icons/instagram.svg') }}" alt="icono de facebook"></a>
                </div>
            </div>
        </div>
    </div>
</header>

