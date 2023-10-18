<!DOCTYPE html>
<html lang="en" class="bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pizza Planet</title>
    <link rel="stylesheet" href="{{ asset('css/loading.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    @vite('resources/css/app.css')
</head>

<body>
    <header>
        <x-common.navbar />
    </header>
    <main class="px-4 py-5">
        {{ $slot }}
    </main>
    <x-common.toast />
</body>

</html>
