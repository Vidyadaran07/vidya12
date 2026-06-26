<style>
    /* Modern CSS Reset & Core Document Rules */
    *, *::before, *::after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    html, body {
        height: 100%;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f8fafc; /* Soft off-white canvas */
        color: #1e293b;
        line-height: 1.5;

        /* Modern Sticky Footer Fix via Flexbox Layout */
        display: flex;
        flex-direction: column;
    }

    /* Main Content Container Layout */
    .main-layout-content {
        flex: 1 0 auto; /* Instructs section to dynamically absorb all empty screen real estate */
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    /* Basic Utility Classes for quick page scaffolding */
    .text-center { text-align: center; }
    .mt-4 { margin-top: 1.5rem; }
    .mb-4 { margin-bottom: 1.5rem; }
</style>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Real Estate Management')</title>
</head>
<body>

    @include('layouts.nav')

    <main class="main-layout-content">
        @yield('content')
    </main>

    @include('layouts.footer')

</body>
</html>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        console.log('Laravel System Application Master Layout Loaded successfully.');
        // Add global browser script initializations here if needed
    });
</script>
