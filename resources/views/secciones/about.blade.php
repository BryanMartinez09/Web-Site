@extends('layout.app')

@section('content')
<section id="sobre-mi" class="relative bg-[#0f172a] text-white py-4 px-4 sm:px-6 lg:px-20 overflow-hidden">

    <!-- TÍTULO -->
    <div class="text-center mb-16 sm:mb-20" data-aos="fade-up">
        <h2 class="text-4xl sm:text-5xl font-extrabold mb-4">Sobre mí</h2>
        <p class="text-gray-400 max-w-2xl mx-auto text-sm sm:text-base md:text-lg">
            Soy una persona autodidacta, apasionada por la tecnología y el desarrollo de soluciones web modernas.
        </p>
    </div>

    <!-- CONTENIDO -->
    <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center" data-aos="fade-up" data-aos-delay="100">
        <!-- TEXTO -->
        <div class="space-y-6 text-gray-300 text-sm sm:text-base leading-relaxed">
            <p>
                Me encuentro cursando el último año de la carrera <span class="text-white font-semibold">Ingeniería en Sistemas</span>, y me destaco por tener una gran capacidad de adaptación, aprendizaje constante y atención al detalle.
            </p>
            <p>
                He desarrollado múltiples proyectos académicos y personales usando <span class="text-blue-400 font-semibold">Laravel</span>, <span class="text-green-400 font-semibold">React</span>, y <span class="text-yellow-400 font-semibold">Tailwind CSS</span>, aplicando buenas prácticas y patrones modernos como MVC.
            </p>
            <p>
                Me apasiona la creación de interfaces visuales fluidas, el trabajo en equipo y resolver desafíos complejos. Disfruto combinar diseño y lógica para construir experiencias web de alto impacto.
            </p>
        </div>

        <!-- DATOS DESTACADOS -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-sm sm:text-base">
            <div class="bg-[#1e293b] rounded-xl p-5 shadow-md hover:shadow-blue-500/20 transition transform hover:scale-105" data-aos="zoom-in">
                <i class="fas fa-graduation-cap text-xl text-blue-400 mb-2"></i>
                <p class="text-gray-400">Carrera:</p>
                <p class="text-white font-semibold">Ingeniería en Sistemas</p>
            </div>
            <div class="bg-[#1e293b] rounded-xl p-5 shadow-md hover:shadow-blue-500/20 transition transform hover:scale-105" data-aos="zoom-in" data-aos-delay="100">
                <i class="fas fa-code text-xl text-green-400 mb-2"></i>
                <p class="text-gray-400">Stack principal:</p>
                <p class="text-white font-semibold">Laravel, React, Tailwind, Django</p>
            </div>
            <div class="bg-[#1e293b] rounded-xl p-5 shadow-md hover:shadow-blue-500/20 transition transform hover:scale-105" data-aos="zoom-in" data-aos-delay="200">
                <i class="fas fa-language text-xl text-yellow-400 mb-2"></i>
                <p class="text-gray-400">Idiomas:</p>
                <p class="text-white font-semibold">Español (nativo), Inglés (intermedio)</p>
            </div>
            <div class="bg-[#1e293b] rounded-xl p-5 shadow-md hover:shadow-blue-500/20 transition transform hover:scale-105" data-aos="zoom-in" data-aos-delay="300">
                <i class="fas fa-bolt text-xl text-red-400 mb-2"></i>
                <p class="text-gray-400">Habilidades:</p>
                <p class="text-white font-semibold">Autodidacta, creativo, responsable</p>
            </div>
        </div>
    </div>
</section>

<!-- Animaciones -->
<style>
@keyframes fadeUp {
    0% { opacity: 0; transform: translateY(20px); }
    100% { opacity: 1; transform: translateY(0); }
}
</style>
@endsection
