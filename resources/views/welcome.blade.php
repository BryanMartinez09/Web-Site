@extends('layout.app')

@section('content')
<section class="min-h-[calc(100vh-3rem)] relative bg-[#0f172a] text-white flex flex-col md:flex-row items-center justify-between px-6 md:px-20 pt-20 pb-10 gap-10 overflow-hidden">

    <!-- Contenedor de partículas -->
    <div id="tsparticles" class="absolute inset-0 z-0"></div>

    <!-- TEXTO -->
    <div class="max-w-xl space-y-6 md:text-left text-center z-10" data-aos="fade-right">
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight">
            ¡HOLA, SOY <span class="text-white">BRYAN!</span><br>
            <span class="text-blue-500">DESARROLLADOR WEB</span>
        </h1>
        <p class="text-gray-300 text-lg">
            Soy un desarrollador apasionado con la misión de crear sitios web modernos e interactivos.
            Con una sólida base en Laravel, Vue y Tailwind, me enfoco en escribir código limpio y ofrecer experiencias fluidas.
        </p>

        <!-- BOTONES -->
        <div class="flex flex-col sm:flex-row items-center gap-4 mt-6 justify-center md:justify-start"
             x-data="{ showDropdown: false, showTooltip: false }">

            <!-- BOTÓN DE DESCARGA CON DROPDOWN HACIA ARRIBA -->
            <div class="relative">
                <button @mouseenter="showTooltip = true" @mouseleave="showTooltip = false"
                        @click="showDropdown = !showDropdown"
                        class="bg-gradient-to-r from-cyan-500 to-indigo-600 hover:from-indigo-600 hover:to-cyan-500 text-white font-semibold px-6 py-3 rounded-xl transition-all duration-300 shadow-lg flex items-center gap-2 hover:scale-105">
                    <i class="fas fa-download animate-bounce-once"></i> Descargar CV
                </button>

                <!-- TOOLTIP -->
                <div x-show="showTooltip"
                     x-transition
                     class="absolute bottom-full mb-2 left-1/2 -translate-x-1/2 bg-black/80 text-white text-xs px-3 py-2 rounded shadow-lg z-50">
                    Elige entre Español o Inglés
                </div>

                <!-- DROPDOWN HACIA ARRIBA -->
                <div x-show="showDropdown"
                     @click.away="showDropdown = false"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 -translate-y-2 scale-95"
                     x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                     x-transition:leave-end="opacity-0 -translate-y-2 scale-95"
                     class="absolute bottom-full mb-3 left-1/2 -translate-x-1/2 w-72 bg-[#1e293b] border border-white/10 backdrop-blur-md rounded-xl shadow-2xl z-50 text-white divide-y divide-white/10 overflow-hidden">

                    <a href="{{ asset('CV_Laravel/Bryan Martinez.pdf') }}" download
                       class="flex items-center gap-3 px-5 py-4 hover:bg-blue-600 transition-all duration-200">
                        <span class="text-lg">🇪🇸</span>
                        <div class="text-sm font-medium">Descargar versión en Español</div>
                    </a>

                    <a href="{{ asset('CV_Laravel/Bryan MartinezEN.pdf') }}" download
                       class="flex items-center gap-3 px-5 py-4 hover:bg-blue-600 transition-all duration-200">
                        <span class="text-lg">🇬🇧</span>
                        <div class="text-sm font-medium">Download English Version</div>
                    </a>
                </div>
            </div>

            <!-- BOTÓN VER PORTAFOLIO -->
            <a href="proyectos"
               class="flex items-center gap-2 text-white hover:text-blue-400 transition-all duration-300 transform hover:scale-105 group">
                <i class="fas fa-play-circle text-2xl group-hover:animate-pulse"></i>
                <span class="text-lg font-medium">Ver Portafolio</span>
            </a>
        </div>
    </div>

    <!-- IMAGEN -->
    <div class="relative w-60 h-60 sm:w-72 sm:h-72 md:w-80 md:h-80 rounded-full z-10" data-aos="zoom-in">
        <div class="absolute inset-0 rounded-full border-4 border-blue-500 animate-spin-slow opacity-30 z-0"></div>
        <div class="relative w-full h-full rounded-full overflow-hidden border-4 border-blue-500 z-10 shadow-lg">
            <img src="{{ asset('images/Bryan.jpeg') }}" alt="Bryan"
                 class="w-full h-full object-cover object-top rounded-full hover:scale-105 transition duration-500 ease-in-out">
        </div>
    </div>
</section>

<!-- PARTICLES SCRIPT -->
<script src="https://cdn.jsdelivr.net/npm/tsparticles@2.11.1/tsparticles.bundle.min.js"></script>
<script>
    tsParticles.load("tsparticles", {
        background: { color: "transparent" },
        fpsLimit: 60,
        interactivity: {
            events: { onHover: { enable: true, mode: "repulse" }, resize: true },
            modes: { repulse: { distance: 100, duration: 0.4 } }
        },
        particles: {
            color: { value: ["#38bdf8", "#60a5fa", "#9333ea"] },
            links: { enable: true, color: "#ffffff", distance: 120, opacity: 0.2, width: 1 },
            move: { enable: true, speed: 1, outModes: { default: "bounce" } },
            number: { value: 50 },
            opacity: { value: 0.5 },
            shape: { type: "circle" },
            size: { value: { min: 1, max: 4 } }
        },
        detectRetina: true
    });
</script>

<style>
@keyframes spin-slow {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}
.animate-spin-slow {
    animation: spin-slow 10s linear infinite;
}
@keyframes bounce-once {
    0% { transform: translateY(0); }
    50% { transform: translateY(-5px); }
    100% { transform: translateY(0); }
}
.animate-bounce-once {
    animation: bounce-once 0.6s ease-out;
}
</style>
@endsection
