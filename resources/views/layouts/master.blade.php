<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ Vite::asset('resources/img/favicon.ico') }}" type="image/x-icon">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <header class="bg-dark py-5 my-5 text-center text-danger">
        <h1 class="fw-semibold">Laravel Movies</h1>
    </header>
    <main class="mb-5">
        @yield('content')
    </main>

</body>

</html>
