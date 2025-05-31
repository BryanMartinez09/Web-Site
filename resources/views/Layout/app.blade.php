<!DOCTYPE html>
<html lang="en" x-data="{ open: true, userOpen: false }" class="h-full overflow-x-hidden bg-[#0f172a]">

<head>
    <meta charset="UTF-8">
    <title>Portafolio</title>
    @vite('resources/css/app.css')

    <!-- Iconos FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />

    <style>
    [x-cloak] { display: none !important; }
</style>

</head>

<body class="h-full text-white flex overflow-hidden">

    <!-- SIDEBAR -->
    @include('partials.navbar')

    <!-- CONTENIDO PRINCIPAL -->
    <main
        :class="open ? 'ml-64' : 'ml-16'"
        class="transition-all duration-500 ease-in-out w-full h-full overflow-y-auto px-4 pt-6 pb-20"
    >
        @yield('content')
    </main>

    <!-- AOS Script Init -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            easing: 'ease-in-out',
        });
    </script>

</body>
</html>
