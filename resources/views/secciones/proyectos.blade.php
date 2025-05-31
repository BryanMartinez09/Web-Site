@extends('layout.app')

@section('content')
<section id="proyectos" class="relative bg-[#0f172a] text-white py-1 px-4 sm:px-6 lg:px-20 overflow-hidden">

    <!-- ICONOS FLOTANTES DE FONDO -->
    <div class="absolute inset-0 z-0 opacity-10 pointer-events-none">
        <div class="absolute top-10 left-4 text-4xl sm:text-5xl animate-float-slow text-red-600"><i class="fab fa-laravel"></i></div>
        <div class="absolute top-1/3 right-6 text-3xl sm:text-4xl animate-ping-slow text-yellow-400"><i class="fab fa-js"></i></div>
        <div class="absolute top-1/2 left-1/2 text-4xl sm:text-5xl animate-float-fast text-green-400"><i class="fab fa-vuejs"></i></div>
        <div class="absolute bottom-24 right-10 text-5xl sm:text-6xl animate-float text-orange-500"><i class="fab fa-java"></i></div>
        <div class="absolute top-1/4 right-1/4 text-4xl sm:text-5xl animate-pulse text-blue-400"><i class="fab fa-css3-alt"></i></div>
    </div>

    <!-- TÍTULO -->
    <div class="relative z-10 text-center mb-16 sm:mb-20" data-aos="fade-up">
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold mb-4">Mis Proyectos</h2>
        <p class="text-gray-400 max-w-xl mx-auto text-sm sm:text-base md:text-lg">
            Explora algunos de mis desarrollos favoritos en backend, frontend y plataformas completas.
        </p>
    </div>

    <!-- GRID DE TARJETAS -->
    <div class="relative z-10 grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6 sm:gap-8">
        @php
            $projects = [
                [
                    'title' => 'EcoSostenible',
                    'icon' => 'fab fa-envira text-green-400',
                    'desc' => 'Plataforma educativa ambiental usando Laravel y Tailwind CSS. Incluye foro, retos ecológicos, y perfil de usuario.',
                    'tech' => [
                        ['Laravel', 'fab fa-laravel', 'bg-blue-600'],
                        ['Tailwind', 'fab fa-css3-alt', 'bg-green-600'],
                        ['Blade', '', 'bg-yellow-400']
                    ],
                    'link' => 'https://github.com/BryanMartinez09/EcoSostenibleLaravel'
                ],
                [
                    'title' => 'Sistema de Pagos',
                    'icon' => 'fas fa-credit-card text-indigo-400',
                    'desc' => 'Plantilla moderna de sistema de pagos con Laravel, interfaz administrativa y backend estructurado.',
                    'tech' => [
                        ['Laravel', 'fab fa-laravel', 'bg-blue-600'],
                        ['AdminLTE', '', 'bg-indigo-500']
                    ],
                    'link' => 'https://github.com/BryanMartinez09/Sistema-De-Pagos'
                ],
                [
                    'title' => 'JAVA Spring Boot',
                    'icon' => 'fab fa-java text-orange-500',
                    'desc' => 'Backend de ejemplo en Java con Spring Boot, ideal para prácticas de API RESTful, controladores y servicios.',
                    'tech' => [
                        ['Java', 'fab fa-java', 'bg-orange-500'],
                        ['Spring Boot', '', 'bg-gray-600']
                    ],
                    'link' => 'https://github.com/BryanMartinez09/Java-Spring-Boot'
                ],
                [
                    'title' => 'Gaming Store',
                    'icon' => 'fas fa-gamepad text-purple-400',
                    'desc' => 'Sistema de tienda de videojuegos usando C#. Backend funcional con base de datos y gestión de productos.',
                    'tech' => [
                        ['C#', '', 'bg-purple-600'],
                        ['.NET', '', 'bg-gray-400']
                    ],
                    'link' => 'https://github.com/BryanMartinez09/GamingStore'
                ],
                [
                    'title' => 'UNAB Web',
                    'icon' => 'fas fa-university text-yellow-400',
                    'desc' => 'Sitio informativo institucional inspirado en la Universidad Dr. Andrés Bello. Diseño responsivo moderno.',
                    'tech' => [
                        ['HTML', 'fab fa-html5', 'bg-yellow-400'],
                        ['CSS', 'fab fa-css3-alt', 'bg-blue-400'],
                        ['JavaScript', 'fab fa-js', 'bg-red-500']
                    ],
                    'link' => 'https://github.com/BryanMartinez09/Universidad-Andres-Bello'
                ]
            ];
        @endphp

        @foreach ($projects as $i => $project)
            <div class="bg-[#1e293b] rounded-2xl shadow-xl border border-white/5 hover:border-blue-500 hover:shadow-blue-500/20 hover:scale-[1.015] transition-all duration-500 p-6 space-y-4"
                 data-aos="fade-up" data-aos-delay="{{ 100 * $i }}">
                <h3 class="text-xl sm:text-2xl font-bold flex items-center gap-2">
                    <i class="{{ $project['icon'] }}"></i> {{ $project['title'] }}
                </h3>
                <p class="text-gray-300 text-sm sm:text-base leading-relaxed">{{ $project['desc'] }}</p>
                <div class="flex flex-wrap gap-2">
                    @foreach ($project['tech'] as $tech)
                        <span class="{{ $tech[2] }} px-2 py-1 rounded text-xs sm:text-sm flex items-center gap-1">
                            @if($tech[1]) <i class="{{ $tech[1] }}"></i> @endif {{ $tech[0] }}
                        </span>
                    @endforeach
                </div>
                <div class="pt-2">
                    <a href="{{ $project['link'] }}" target="_blank"
                       class="text-blue-400 hover:underline text-sm font-medium">
                       → Código fuente
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    <!-- BOTÓN MÁS PROYECTOS -->
    <div class="text-center mt-14 relative z-10" data-aos="fade-up" data-aos-delay="400">
        <a href="https://github.com/BryanMartinez09" target="_blank"
           class="inline-block bg-blue-500 hover:bg-blue-600 px-6 py-3 rounded-lg text-white font-semibold shadow-md transition-all duration-300">
            Ver más proyectos en GitHub
        </a>
    </div>
</section>

<!-- PARTICULAS FLOTANTES -->
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

<!-- ANIMACIONES PERSONALIZADAS -->
<style>
@keyframes float {
  0%, 100% { transform: translateY(0px); }
  50% { transform: translateY(-12px); }
}
@keyframes float-slow {
  0%, 100% { transform: translateY(0px); }
  50% { transform: translateY(-20px); }
}
.animate-float { animation: float 5s ease-in-out infinite; }
.animate-float-slow { animation: float-slow 10s ease-in-out infinite; }
.animate-float-fast { animation: float 3s ease-in-out infinite; }
.animate-ping-slow { animation: ping 8s infinite; }
</style>
@endsection
