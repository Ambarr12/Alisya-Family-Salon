<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Alisya Family Salon' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portofolio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/testimonials.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js"
        integrity="sha512-b+nQTCdtTBIRIbraqNEwsjB6UvL3UEMkXnhzd8awtCYh0Kcsjl9uEgwVFVbhoj3uu1DO1ZMacNvLoyJJiNfcvg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body class="antialiased">
    <x-layout title="Home Page">
        <!-- Hero Section -->
        <div class="flex justify-around items-center container">
            <div class="brand" data-aos="zoom-in-up">
                <h1 class="brand-name">Welcome to</h1>
                <h1 class="brand-name">Alisya Family Salon</h1>
                <p class="line-text">
                    ━━━━━
                    <img src="{{ asset('images/scissors.svg') }}" alt="scissors" width="90px">
                    ━━━━━
                </p>
            </div>
            <div class="img-thumbnail">
                <img src="{{ asset('images/thumbnail.png') }}" alt="thumbnail">
            </div>
        </div>

        <!-- About Section -->
        <div id="about">
            <x-about />
        </div>

        <!-- Services Section -->
        <div id="services">
            <h2 class="title">Layanan Kami</h2>
            <x-card :cards="$cards" />
        </div>

        <!-- Portfolio Section -->
        <div id="porthofolio">
            <x-portofolio :portofolio="$portofolio" />
        </div>

        <!-- Testimonials Section -->
        <div class="testimonial-container" id="testimonials">
            <div class="testimonial-wrapper">
                <h2 class="title">Testimonial Pelanggan Kami yang Setia</h2>
                <div class="track-card-testimoni" id="sliderTrack">
                    <x-testimoni-card :testimonials="$testimonials" />
                </div>
            </div>
            <div class="dot-indicators" id="dotIndicators"></div>
        </div>


        <!-- Contact Section -->
        <h2 class="title">Hubungi Kami</h2>
        <div class="contact-container" id="contact">
            <x-maps-point query="{{ $query }}" />
            <x-form-contact-me />
        </div>
    </x-layout>

</body>

</html>
