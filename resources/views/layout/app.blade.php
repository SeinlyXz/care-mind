<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="/img/pawsy.png" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <main>
        @yield('content')
    </main>
</body>

</html>
