<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Home</title>
</head>

<body>
    <div class="h-screen flex items-center justify-center">
        <div class="shadow-xl rounded-2xl">
            <div class="bg-white px-16 py-8 md:px-48 md:py-36 rounded-2xl grid grid-cols-1 grid-flow-row gap-y-8 md:gap-y-10">
                <h1 class="md:text-3xl text-md font-semibold text-gray-500">Kamu Butuh Bantuan Darurat?</h1>
                <div class="flex gap-3 justify-center">
                    <a href="{{url('chatpawsy')}}" class="bg-teal-500 px-[30px] py-1 md:py-2 rounded-xl text-white text-md md:text-xl">Iya</a>
                    <a href="{{url('home')}}" class="bg-teal-500 px-[30px] py-1 md:py-2 rounded-xl text-white text-md md:text-xl">Tidak</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
