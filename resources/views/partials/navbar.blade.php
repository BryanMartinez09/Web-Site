<!-- NAVBAR - SIN x-data -->


<!-- Sidebar -->
<aside
    :class="open ? 'w-64' : 'w-16'"
    class="fixed top-0 left-0 h-screen bg-gradient-to-b from-[#0f172a] via-[#111827] to-[#0f172a] text-white shadow-2xl flex flex-col justify-between rounded-r-3xl transition-all duration-500 ease-in-out overflow-hidden z-40"
>

    <!-- Header -->
    <div class="p-4 flex items-center justify-between">
        <span x-show="open" x-transition.opacity.duration.500ms class="text-xl font-bold tracking-wide">Menú</span>
        <button @click="open = !open"
            class="text-white text-2xl hover:scale-110 hover:text-blue-400 transition-transform duration-300">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    <!-- Navegación -->
    <nav class="flex-1 px-2 mt-6 space-y-2">
        @php
            $links = [
                ['href' => route('inicio'), 'icon' => 'fa-home', 'text' => 'Inicio', 'active' => request()->routeIs('inicio')],
                ['href' => route('habilidades'), 'icon' => 'fa-cogs', 'text' => 'Habilidades', 'active' => request()->routeIs('habilidades')],
                ['href' => route('proyectos'), 'icon' => 'fa-wallet', 'text' => 'Proyectos', 'active' => request()->routeIs('proyectos')],
                ['href' => route('about'), 'icon' => 'fa-user', 'text' => 'Sobre mi', 'active' => request()->routeIs('about')],
                ['href' => route('contacto'), 'icon' => 'fa-envelope', 'text' => 'Contacto', 'active' => request()->routeIs('contacto')],
            ];
        @endphp

        @foreach ($links as $link)
            <a href="{{ $link['href'] }}"
               class="group relative flex items-center gap-3 p-3 rounded-xl transition-all duration-300 transform hover:scale-[1.04] hover:shadow-lg hover:bg-blue-500 {{ $link['active'] ? 'bg-blue-600' : 'hover:bg-white/10' }}">
                <i class="fas {{ $link['icon'] }} text-lg group-hover:rotate-12 group-hover:text-white transition-transform duration-300"></i>
                <span x-show="open" x-transition.opacity.duration.400ms>{{ $link['text'] }}</span>
            </a>
        @endforeach
    </nav>

    <!-- Footer -->
    <div class="p-4 border-t border-white/10 space-y-4 relative">
        <div class="flex gap-3 justify-center" x-show="open" x-transition.opacity.duration.400ms>
            <a href="https://github.com/BryanMartinez09" target="_blank" class="text-xl hover:text-blue-400 transition">
                <i class="fab fa-github"></i>
            </a>
            <a href="https://www.linkedin.com/in/bryan-martinez-006785319" target="_blank" class="text-xl hover:text-blue-400 transition">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>

        <div class="flex items-center gap-3 mt-3 relative">
            <button @click="userOpen = !userOpen"
                class="w-10 h-10 rounded-full overflow-hidden ring-2 ring-blue-500 hover:scale-105 transition">
                <img src="{{ asset('images/Bryan.jpeg') }}" alt="Avatar">
            </button>
            <div x-show="open" x-transition.opacity.duration.400ms>
                <p class="text-sm font-bold">Bryan Martinez</p>
                <p class="text-xs text-gray-400">Desarrollador</p>
            </div>

            <!-- Dropdown -->
            <div x-show="userOpen" @click.away="userOpen = false"
                class="absolute bottom-16 left-16 bg-white/10 backdrop-blur-md p-3 rounded-lg shadow-xl space-y-2 text-sm z-50 w-40">
                <a href="#perfil" class="block hover:text-blue-400">Mi Perfil</a>
                <a href="#configuracion" class="block hover:text-blue-400">Configuración</a>
            </div>
        </div>
    </div>
</aside>
