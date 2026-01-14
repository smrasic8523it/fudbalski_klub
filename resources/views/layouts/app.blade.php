<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fudbalski klub</title>
</head>
<body>
    @include('layouts.navigation') {{-- ovo dodaje gornju navigaciju --}}

    <div class="container">
        @yield('content') {{-- ovde će se prikazivati sadržaj konkretne stranice --}}
    </div>
</body>
</html>
