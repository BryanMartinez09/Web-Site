@extends('layout.app')

@section('content')
<section id="contacto" class="bg-[#0f172a] text-white py-4 px-6 md:px-20 overflow-hidden">

    <!-- TÍTULO -->
    <div class="text-center mb-16" data-aos="fade-up">
        <h2 class="text-4xl md:text-5xl font-extrabold mb-4">Contáctame</h2>
        <p class="text-gray-400 max-w-xl mx-auto text-base md:text-lg">
            ¿Tienes una propuesta, idea o simplemente quieres saludar? ¡Estoy disponible para nuevos proyectos!
        </p>
    </div>

    <!-- CONTENIDO FLEX -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start relative z-10" data-aos="fade-up" data-aos-delay="100">

        <!-- INFORMACIÓN DE CONTACTO -->
        <div class="space-y-6">
            @php
                $info = [
                    ['icon' => 'fas fa-user', 'text' => 'Bryan Martinez', 'color' => 'text-blue-500'],
                    ['icon' => 'fas fa-envelope', 'text' => 'BryanAlexanderMartinez@outlook.com', 'color' => 'text-yellow-400', 'link' => 'mailto:BryanAlexanderMartinez@outlook.com'],
                    ['icon' => 'fas fa-phone-alt', 'text' => '+503 72158412', 'color' => 'text-green-400'],
                    ['icon' => 'fab fa-linkedin', 'text' => 'LinkedIn', 'color' => 'text-blue-400', 'link' => 'https://www.linkedin.com/in/bryan-martinez-006785319'],
                    ['icon' => 'fab fa-github', 'text' => 'GitHub', 'color' => 'text-white', 'link' => 'https://github.com/BryanMartinez09'],
                ];
            @endphp

            @foreach ($info as $item)
                <div class="flex items-center gap-4 group transition duration-300 hover:scale-[1.03] hover:text-white">
                    <i class="{{ $item['icon'] }} {{ $item['color'] }} text-xl group-hover:animate-bounce"></i>
                    @if (isset($item['link']))
                        <a href="{{ $item['link'] }}" target="_blank" class="text-gray-300 group-hover:text-white transition">{{ $item['text'] }}</a>
                    @else
                        <span class="text-gray-300 group-hover:text-white transition">{{ $item['text'] }}</span>
                    @endif
                </div>
            @endforeach
        </div>

         <!-- FORMULARIO DE CONTACTO -->
        <form action="#" method="POST" class="space-y-6 bg-[#1e293b] p-8 rounded-2xl shadow-lg">
            @csrf
            <div class="space-y-2">
                <label class="text-sm font-medium flex items-center gap-2"><i class="fas fa-user"></i> Nombre</label>
                <input type="text" name="name" class="w-full px-4 py-2 rounded bg-[#0f172a] border border-white/10 focus:outline-none focus:ring-2 focus:ring-blue-500 text-white" placeholder="Tu nombre completo" required>
            </div>

            <div class="space-y-2">
                <label class="text-sm font-medium flex items-center gap-2"><i class="fas fa-envelope"></i> Correo electrónico</label>
                <input type="email" name="email" class="w-full px-4 py-2 rounded bg-[#0f172a] border border-white/10 focus:outline-none focus:ring-2 focus:ring-blue-500 text-white" placeholder="tucorreo@email.com" required>
            </div>

            <div class="space-y-2">
                <label class="text-sm font-medium flex items-center gap-2"><i class="fas fa-comment-dots"></i> Mensaje</label>
                <textarea name="message" rows="5" class="w-full px-4 py-2 rounded bg-[#0f172a] border border-white/10 focus:outline-none focus:ring-2 focus:ring-blue-500 text-white" placeholder="Escribe tu mensaje aquí..." required></textarea>
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg font-semibold shadow-md transition-all duration-300">
                <i class="fas fa-paper-plane mr-2"></i> Enviar mensaje
            </button>
        </form>
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
.input-cheto {
    @apply w-full px-4 py-2 rounded bg-[#0f172a] border border-white/10 focus:outline-none focus:ring-2 focus:ring-blue-500 text-white transition-all duration-300 hover:border-blue-400 hover:shadow-inner;
}
</style>
@endsection
