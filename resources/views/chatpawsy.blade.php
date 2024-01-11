@extends('layout.app')
@section('content')
<div class="bg-[#3B8A97] w-full">
    <div class="flex justify-between py-10 mx-24">
        <div>
            <div class="ps-11 pb-4 pt-4 p-10">
                <a href="" class='text-white text-7xl font-bold '>Care Mind</a>
            </div>
            <br>
            <div class="ps-16">
                <div class="bg-[#71B9C5] rounded-lg bg-opacity-25 w-96 h-28  ">
                    <p class="text-white px-6 pt-3 text-2xl">Meditasi yang bisa dilakukan saat terpuruk</p>
                </div><br>
                <div class="bg-[#71B9C5] rounded-lg bg-opacity-25 p-7 w-96 h-28 ">
                    <p class="text-white -px-1 -pt-9 text-sm">"Bukanlah harta yang menjadikan hidup kaya, melainkan bagaimana kita memandangnya."
                        ~Epicurus </p>
                </div><br>
                <div class="bg-[#71B9C5] rounded-lg bg-opacity-25 p-7 w-96 h-28">
                    <p class="text-white -px-1 -pt-9 text-lg"> Merasa butuh penanganan lebih?</p>
                    <button class="bg-[#2E5A61] text-white font-bold py-2 px-4 rounded-lg">Hubungi Psikolog</button>
                </div><br>
                <div class="bg-[#2E5A61] rounded-lg bg-opacity-25 p-7 w-96 h-40">
                    <p class="text-white -px-1 -pt-9 text-lg"> Layanan Darurat </p>
                    <p class="text-white">Hotline </p>
                    <p class="text-white">>> 119 extension 8</p>
                    <p class="text-white">Call Center Halo Kemenkes </p>
                    <p class="text-white"> >> 1500-567</p>
                </div><br>
            </div>
        </div>
        <div class="top-2.5 width-[400px] height-[100px] w-[700px]">
            <div class="flex h-screen flex-col bg-gray-100 rounded-2xl">
                <div class="bg-[#3B8A97] opacity-80 py-2 flex justify-items-start">
                    <img class="w-24 px-2" src="images/oren-hi.png" alt="">
                    <div class=" flex flex-col justify my-auto">
                        <h1 class="text-lg text-left text-white "> PAWSY</h1>
                        <p class="  text-left text-white ">your friend </p>
                    </div>
                </div>
                <div class="flex-grow overflow-y-auto">
                    <div class="flex flex-col space-y-2 p-4">
                        <!-- Individual chat message -->
                        <div class="flex items-center self-end rounded-xl rounded-tr bg-blue-500 py-2 px-3 text-white">
                            <p>This is a sender message</p>
                        </div>
                        <div class="flex items-center self-start rounded-xl rounded-tl bg-gray-300 py-2 px-3">
                            <p>This is a receiver message</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center p-4">
                    <input type="text" placeholder="Type your message..." class="w-full rounded-lg border border-gray-300 px-4 py-2" />
                    <button class="ml-2 rounded-lg bg-blue-500 px-4 py-2 text-white">Send</button>
                </div>
            </div>
        </div>

    </div>
    @endsection