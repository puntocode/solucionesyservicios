@extends('layouts.app')

@section('header')

@endsection

@section('section')
    <!-- seccion Hero -->
    <section id="hero" class="bg-local bg-center h-cover mt-24 md:mt-0" style="background-image: url({{asset('images/cover.webp') }})">
        <div class="container mx-auto p-6">
            <div class="grid sm:grid-cols-2 xl:grid-cols-3">
                <div class="">
                    <h1 class="text-4xl md:text-5xl text-white uppercase font-bold">Servicios de Limpieza</h1>
                    <p class="text-white text-lg">Nos adaptamos a tu necesidad.</p>
                    <div class="mt-5 bg-white text-center py-5 px-10 rounded">
                        <h4 class="text-steel-400 uppercase text-lg font-bold">Necesitas limpieza?</h4>
                        <form class="mt-5" action="{{ route('cotizacion-mail') }}" method="POST">
                            @csrf
                            <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" value="{{ old('nombre') }}" class="input-index @error('nombre') border border-red-500 @enderror input-focus" autocomplete="off" required>
                            @error('nombre')
                                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5" role="alert">
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror

                            <input type="number" id="telefono" name="telefono" placeholder="Tu telefono" value="{{ old('telefono') }}" class="input-index input-focus @error('telefono') border border-red-500 @enderror" autocomplete="off" required>
                            @error('telefono')
                                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5" role="alert">
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror

                            <input type="email" id="email" name="email" placeholder="Tu correo" value="{{ old('email') }}" class="input-index input-focus @error('email') border border-red-500 @enderror" autocomplete="off" required>
                            @error('email')
                                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5" role="alert">
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror

                            <textarea name="mensaje" placeholder="Consulta" class="resize-none input-index @error('mensaje') border border-red-500 @enderror input-focus" required></textarea>
                            @error('mensaje')
                                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5" role="alert">
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror

                            <input type="submit" value="CONSULTAR" class="bg-steel-400 rounded w-full hover:bg-blue-800 text-white p-3 mb-3 focus:outline-none focus:shadow-sm">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- seccion bienvenido -->
    <section id="welcome" class="container mx-auto my-14 px-6 text-center">
        <h2 class="text-3xl text-steel-400 py-2">BIENVENIDO A SOLUCIONES & SERVICIOS</h1>
        <p class="text-gray-500 mb-5">Trabajamos con coherencia y calidad a la hora de recomendar a nuestros clientes la mejor opción de servicios para satisfacer sus necesidades.</p>
        <div class="mt-6 mb-12 flex justify-center">
            <div class="w-20 h-0.5 bg-steel-400"></div>
        </div>

        <div class="hidden md:grid grid-cols-4 gap-8">
            <div class="rounded-md">
                <img src="{{ asset('images/about-us.webp') }}" class="rounded-md" alt="imagen de nosotros">
            </div>
            <div class="text-left">
                <div class="flex gap-4 mb-3">
                    <img src="{{ asset('images/icons/calidad.svg') }}" class="h-12" alt="">
                    <h3 class="text-2xl text-steel-700">Calidad</h3>
                </div>
                <p class="text-gray-500">Nuestra prioridad es brindar nuestros servicios con los mayores estándares de calidad y tiempo para lograr la total satisfacción del cliente.</p>
            </div>
            <div class="text-left">
                <div class="flex gap-4 mb-3">
                    <img src="{{ asset('images/icons/confianza.svg') }}" class="h-12" alt="">
                    <h3 class="text-2xl text-steel-700">Confianza</h3>
                </div>
                <p class="text-gray-500">Brindamos servicios pensando en superar las expectativas de nuestros clientes, simplificando sus actividades, eliminando incertidumbres y reforzando la confianza hacía nosotros.</p>
            </div>
            <div class="text-left">
                <div class="flex gap-4 mb-3">
                    <img src="{{ asset('images/icons/honestidad.svg') }}" class="h-12" alt="">
                    <h3 class="text-2xl text-steel-700">Honestidad</h3>
                </div>
                <p class="text-gray-500">Nos capacitamos constantemente en técnicas de limpieza incorporando tecnología de avanzada para brindar a nuestros clientes un servicio eficiente y de excelencia.</p>
            </div>
      </div>

        <div class="flex flex-col md:flex-row justify-center mb-20 mt-12 gap-4">
            <button class="w-full md:w-72 btn btn-white modal-open">SOLICITAR COTIZACIÓN</button>
            <button class="w-full md:w-72 btn btn-steel-400">ADQUIRIR PLAN</button>
        </div>

    </section>

    <!-- seccion de especialidades -->
    <section id="services" class="bg-gray-100">
        <div class="container mx-auto py-20 px-6 text-center">
            <h2 class="text-steel-400 text-3xl font-semibold uppercase mb-8">especialidades</h2>

            <div class="grid lg:grid-cols-2 gap-6 md:gap-8">
                <x-cards-especialidades title="Servicio de Limpieza">
                    <x-slot name="image"><img class="h-12 self-center" src="{{ asset('images/icons/limpieza.svg') }}" alt="icono de limpieza"></x-slot>
                    Desarrollamos una propuesta para la Limpieza y Mantenimiento en todo tipo de superﬁcies, inclusive de alta complejidad.
                </x-cards-especialidades>
                <x-cards-especialidades title="Servicio de Piscinas">
                    <x-slot name="image"><img class="h-12 self-center" src="{{ asset('images/icons/piscina.svg') }}" alt="icono de piscina"></x-slot>
                    Nos encargamos de la limpieza, impermeabilización, pintura, reparación de tus piscinas.
                </x-cards-especialidades>
                <x-cards-especialidades title="Servicio de Mantenimiento">
                    <x-slot name="image"><img class="h-12 self-center" src="{{ asset('images/icons/mantenimiento-edificios.svg') }}" alt="icono de mantenimiento"></x-slot>
                    Limpieza de todas las superﬁcies, y todo espacio común que tenga el Ediﬁcio.
                </x-cards-especialidades>
                <x-cards-especialidades title="Servicio de Limpieza">
                    <x-slot name="image"><img class="h-12 self-center" src="{{ asset('images/icons/jardineria.svg') }}" alt="icono de jardineria"></x-slot>
                    Corte de Césped, nivelación de superﬁcies, jardinería (reposición y provisión de plantas).
                </x-cards-especialidades>
            </div>

        </div>
    </section>

    <!-- seccion de contacto -->
    <section id="contact" class="bg-fixed bg-cover bg-top" style="background-image: url({{asset('images/contacto.webp') }})">
        <div class="bg-steel-700 bg-opacity-90">
            <div class="container mx-auto py-16 px-6 text-center">
                <div class="flex flex-col justify-between md:flex-row">
                    <div class="text-left text-white">
                        <h3 class="text-4xl font-semibold">Consultas?</h3>
                        <p class="text-2xl">estamos para ayudarte</p>
                    </div>
                    <div class="flex flex-col md:flex-row md:content-end gap-2 mt-6">
                        <a class="btn flex gap-2 items-center btn-white" href="mailto:info@solucionesyservicios.com.ar"><img class="h-4" src="{{asset('images/icons/email.svg') }}" alt="icono de email"> enviar un email</a>
                        <a class="btn flex gap-2 items-center btn-steel-400" href="https://bit.ly/33bpx0b" target="_blank"><img class="h-4 svg-inverse" src="{{asset('images/icons/whatsapp.svg') }}" alt="icono de whatsapp"> contactar por whatsapp</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- seccion de area trabajo -->
    <section class="container mx-auto py-16 px-6">
        <h2 class="text-4xl font-bold text-steel-400">Áreas de Trabajo</h2>
        <p class="text-gray-500 pt-2">Tenemos soluciones de limpieza especializada para cada área. No dudes en contactarnos!!</p>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 mt-6 mb-12 gap-4">
            <x-cards-area title="HOGARES" style="background-image: url({{asset('images/area-hogar.webp') }})"></x-cards-area>
            <x-cards-area title="INDUSTRIAS" style="background-image: url({{asset('images/area-industria.webp') }})"></x-cards-area>
            <x-cards-area title="SANATORIOS" style="background-image: url({{asset('images/area-sanatorio.webp') }})"></x-cards-area>
            <x-cards-area title="EDIFICIOS" style="background-image: url({{asset('images/area-edificio.webp') }})"></x-cards-area>
        </div>
        <div class="flex justify-center my-5">
            <button class="btn btn-steel-700 w-full md:w-72 text-center modal-open">SOLICITAR COTIZACION</button>
        </div>
    </section>

    <x-btn-whatsapp></x-btn-whatsapp>

    <footer class="bg-gray-800 border-t-4 border-steel-400">
        <div class="container mx-auto py-10 px-6">
            <div class="flex flex-col lg:flex-row lg:justify-between space-y-8 border-b-2 border-gray-400 pb-10">
                <div class="flex">
                    <img class="hidden lg:block w-32" src="{{ asset('images/logo-vertical-white.svg') }}" alt="logo vertical">
                    <img class="block lg:hidden w-44" src="{{ asset('images/logo-horizontal-white.svg') }}" alt="logo horizontal">
                </div>
                <div class="flex">
                    <ul class="text-white">
                        <li><a class="hover:text-steel-400" href="">Inicio</a></li>
                        <li><a class="hover:text-steel-400" href="">Conozcanos</a></li>
                        <li><a class="hover:text-steel-400" href="">Contactenos</a></li>
                        <li><span>Seguinos en </span><a href=""><img class="h-3 inline" src="{{ asset('images/icons/facebook.svg') }}" alt="icono de facebook"></a></li>
                    </ul>
                </div>
                <div class="flex">
                    <ul class="text-white">
                        <li><a class="hover:text-steel-400" href="">Servicio de Limpieza</a></li>
                        <li><a class="hover:text-steel-400" href="">Servicio de Mantenimiento</a></li>
                        <li><a class="hover:text-steel-400" href="">Servicio de Piscina</a></li>
                        <li><a class="hover:text-steel-400" href="">Servicio de Jardineria</a></li>
                    </ul>
                </div>
                <div class="flex">
                    <ul class="text-white">
                        <li><a class="hover:text-steel-400" href="https://bit.ly/33bpx0b" target="_blank"><img class="h-4 inline svg-inverse pr-2" src="{{ asset('images/icons/footer-smartphone.svg') }}" alt="icono de celular">+54 3794767344</a></li>
                        <li><a class="hover:text-steel-400" href="mailto:info@solucionesyservicios.com.ar"><img class="h-4 inline svg-inverse pr-2" src="{{ asset('images/icons/footer-email.svg') }}" alt="icono de email">info@solucionesyservicios.com.ar</a></li>
                        <li><a class="hover:text-steel-400 block" href=""><img class="h-4 inline svg-inverse pr-2" src="{{ asset('images/icons/footer-location.svg') }}" alt="icono de ubicacion">Mendoza 707, Planta Alta</a><span>Corrientes Capital</span></li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col text-center md:flex-row md:justify-between text-white mt-5">
                <p class="text-xs sm:text-sm">{{ now()->year }} Soluciones&Servicios© Todos los derechos reservados</p>
                <p class="text-sm">Desarrollado por <a class="text-steel-500" href="http://puntocode.com.py">PUNTOCODE</a> </p>
            </div>
        </div>

    </footer>

    <x-modal></x-modal>


@endsection
