<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Primary Meta Tags -->
        <title>{{ config('app.name', 'Fountain of Peace') }} - @yield('title')</title>
        <meta name="title" content="{{ config('app.name', 'Fountain of Peace') }} - @yield('title')">
        <meta name="description" content="Empowering vulnerable children in Uganda through love, education, and care. Join Fountain of Peace Children's Foundation in building futures, transforming communities, and creating lasting impact.">
        <meta name="keywords" content="Fountain of Peace Uganda, child sponsorship Uganda, orphan care Uganda, Christian child care, Uganda education support, child welfare NGO, community development Uganda, child sponsorship program, Uganda children's foundation, humanitarian aid Uganda, child education support, Christian missions Uganda, vulnerable children support, Uganda child care center, African child sponsorship">
        
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="{{ config('app.name', 'Fountain of Peace') }} - @yield('title')">
        <meta property="og:description" content="Transform lives of vulnerable children in  Uganda through partnership. Join Fountain of Peace in providing education, healthcare, and hope.">
        <meta property="og:image" content="{{ asset('images/logo.jpg') }}">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="{{ url()->current() }}">
        <meta property="twitter:title" content="{{ config('app.name', 'Fountain of Peace') }} - @yield('title')">
        <meta property="twitter:description" content="Transform lives of vulnerable children in  Uganda through partnership. Join Fountain of Peace in providing education, healthcare, and hope.">
        <meta property="twitter:image" content="{{ asset('images/logo.jpg') }}">

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/logo.jpg') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo.jpg') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logo.jpg') }}">
        <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ asset('images/logo.jpg') }}" color="#13AFD1">
        <meta name="msapplication-TileColor" content="#13AFD1">
        <meta name="theme-color" content="#ffffff">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <!-- Header -->
        @include('layouts.partials.header')

        <!-- Main Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        @include('layouts.partials.footer')
    </body>
</html>