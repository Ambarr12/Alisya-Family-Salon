<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'My Application' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/alert.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js"
        integrity="sha512-b+nQTCdtTBIRIbraqNEwsjB6UvL3UEMkXnhzd8awtCYh0Kcsjl9uEgwVFVbhoj3uu1DO1ZMacNvLoyJJiNfcvg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


</head>

<body class="antialiased">
    <x-navbar :brand="'Alisya Family Salon'" :links="[
        ['url' => '/', 'label' => 'home'],
        ['url' => '#about', 'label' => 'about us'],
        ['url' => '#services', 'label' => 'services'],
        ['url' => '#porthofolio', 'label' => 'porthofolio'],
        ['url' => '#testimonials', 'label' => 'testimonials'],
        ['url' => '#contact', 'label' => 'contact'],
    ]" />
    <x-alert />

    <div class="loader-container" id="loader">
        <div class="custom-loader"></div>
    </div>
    <main>
        {{ $slot }}
    </main>
    <footer class="footers">
        &copy; {{ date('Y') }} - hak cipta designed by alisya family salon. Semua hak dilindungi
    </footer>
    <script src="{{ asset('js/landing.js') }}"></script>
    <script src="{{ asset('js/testimonial-slider.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</body>

</html>
