@extends('layout.app')

@section('content')
<section class="min-h-screen bg-[#0f172a] text-white flex flex-col justify-center px-6 md:px-20">


    <!-- Título -->
   <div class="text-center mb-5" data-aos="fade-down">
        <h2 class="text-4xl md:text-5xl font-bold text-blue-400">Habilidades</h2>
        <p class="mt-2 text-gray-300">Lo que me define como profesional</p>
    </div>


    <!-- Contenido -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">

        <!-- Habilidades Blandas -->
        <div class="bg-[#1e293b] rounded-2xl p-8 shadow-lg hover:shadow-blue-500/20 transition" data-aos="fade-right">
            <h3 class="text-2xl font-semibold mb-4 border-b border-white/10 pb-2">Habilidades Blandas</h3>
            <ul class="space-y-3 text-white/90">
                @foreach ([
                    'Aprendizaje rápido',
                    'Resolución de problemas',
                    'Trabajo en equipo',
                    'Pensamiento analítico',
                    'Comunicación efectiva',
                    'Creatividad'
                ] as $soft)
                <li class="flex items-center gap-3 hover:translate-x-1 transition-all duration-200">
                    <i class="fas fa-check-circle text-blue-400 animate-pulse"></i>
                    {{ $soft }}
                </li>
                @endforeach
            </ul>
        </div>

        <!-- Habilidades Técnicas -->
        <div class="bg-[#1e293b] rounded-2xl p-8 shadow-lg hover:shadow-blue-500/20 transition" data-aos="fade-left">
            <h3 class="text-2xl font-semibold mb-4 border-b border-white/10 pb-2">Habilidades Técnicas</h3>

            <!-- Lenguajes -->
            <div class="mb-6" data-aos="zoom-in-up">
                <p class="font-bold mb-2 text-blue-300">Lenguajes de Programación</p>
                <div class="flex flex-wrap gap-4">
                    @php
                        $langs = [
                            ['icon' => 'fa-brands fa-python', 'name' => 'Python'],
                            ['icon' => 'fa-brands fa-php', 'name' => 'PHP'],
                            ['icon' => 'fa-brands fa-js', 'name' => 'JavaScript'],
                            ['icon' => 'fa-brands fa-java', 'name' => 'Java'],
                            ['icon' => 'fa-solid fa-code', 'name' => 'C#'],
                        ];
                    @endphp
                    @foreach ($langs as $lang)
                    <div class="flex items-center gap-2 bg-[#0f172a] px-4 py-2 rounded-xl hover:bg-blue-600 transition transform hover:scale-105">
                        <i class="{{ $lang['icon'] }} text-xl animate-bounce text-blue-400"></i>
                        <span>{{ $lang['name'] }}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Bases de Datos -->
            <div class="mb-6" data-aos="fade-up">
                <p class="font-bold mb-2 text-blue-300">Bases de Datos</p>
                <div class="flex gap-4 flex-wrap">
                    <span class="bg-[#0f172a] px-4 py-2 rounded-xl hover:bg-blue-600 transition">MySQL</span>
                    <span class="bg-[#0f172a] px-4 py-2 rounded-xl hover:bg-blue-600 transition">SQL Server</span>
                </div>
            </div>

            <!-- Control de Versiones -->
            <div class="mb-6" data-aos="fade-up" data-aos-delay="100">
                <p class="font-bold mb-2 text-blue-300">Control de versiones</p>
                <div class="flex gap-4">
                    <span class="flex items-center gap-2 bg-[#0f172a] px-4 py-2 rounded-xl hover:bg-blue-600 transition">
                        <i class="fab fa-git-alt text-orange-500"></i> Git
                    </span>
                    <span class="flex items-center gap-2 bg-[#0f172a] px-4 py-2 rounded-xl hover:bg-blue-600 transition">
                        <i class="fab fa-github text-white"></i> GitHub
                    </span>
                </div>
            </div>

            <!-- Desarrollo Móvil -->
            <div class="mb-6" data-aos="fade-up" data-aos-delay="200">
                <p class="font-bold mb-2 text-blue-300">Desarrollo Móvil</p>
                <span class="bg-[#0f172a] px-4 py-2 rounded-xl hover:bg-blue-600 transition">Android Studio (Java)</span>
            </div>

            <!-- Frameworks -->
            <div data-aos="fade-up" data-aos-delay="300">
                <p class="font-bold mb-2 text-blue-300">Frameworks</p>
                <div class="flex flex-wrap gap-4">
                    <div class="flex items-center gap-2 bg-[#0f172a] px-4 py-2 rounded-xl hover:bg-blue-600 transition transform hover:scale-105">
                        <i class="fa-brands fa-react text-blue-400 animate-spin-slow"></i>
                        <span>React</span>
                    </div>
                    <div class="flex items-center gap-2 bg-[#0f172a] px-4 py-2 rounded-xl hover:bg-blue-600 transition transform hover:scale-105">
                        <i class="fa-brands fa-python text-green-400 animate-bounce"></i>
                        <span>Django</span>
                    </div>
                    <div class="flex items-center gap-2 bg-[#0f172a] px-4 py-2 rounded-xl hover:bg-blue-600 transition transform hover:scale-105">
                        <i class="fa-brands fa-laravel text-red-400 animate-bounce"></i>
                        <span>Laravel</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

</section>
@endsection
