@extends('layout.app')
@section('content')
<div class="pb-5 pt-4 p-10">
    <a href="" class='text-[rgb(41,96,153)] text-6xl font-bold '>Care Mind</a>
</div>
<div class="flex justify-between py-10 mx-10 gap-x-10">
    <div class="w-full">
        <img src="images/ocean.png" alt="" class="w-[700px] object-cover">
        <div class="absolute -bottom-52 right-96 w-[700px] h-1 border-0 rounded bg-orange-500"></div>
    </div>

    <div class="border border-[#FFA842] -top-10 pt-52 px-10 pb-1  rounded-xl w-full">
        <h1 class="absolute top-20 -bottom-20 right-80 text-9xl">CONTACT</h1>
        <form action="">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama:</label>
                <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Pesan:</label>
                <textarea id="message" name="message" rows="4" class="w-full p-11 border border-gray-300 rounded-md"></textarea>
            </div>
            <div class="flex justify-center">
                <button type="submit" class="bg-blue-500 text-white px-72 py-2 rounded-xl">Kirim</button>
            </div>
        </form>
    </div>
</div>






@endsection