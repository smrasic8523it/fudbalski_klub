<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fudbalski klub - Guest</title>
    <!-- Ovde možeš dodati CSS fajlove -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100">

    {{-- Navigacija (ako želiš da bude top bar) --}}
    @include('layouts.navigation')

    <div class="container mx-auto mt-10">
        {{ $slot }} {{-- Ovo je slot gde auth forme (login/register) dolaze --}}
    </div>

    <!-- Ovde možeš dodati JS fajlove -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
