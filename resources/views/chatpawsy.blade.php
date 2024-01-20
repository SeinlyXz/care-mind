@extends('layout.app')
@section('content')
    <title>
        Chat Pawsy
    </title>
    <div class="bg-[#3B8A97] w-full" @props(['top'])>
        <div class="md:hidden block pt-4 px-2">
            <a href="{{ url('home') }}" class='text-white text-3xl font-bold'>Care Mind</a>
        </div>
        <div class="flex justify-between md:mx-10 md:h-screen min-h-screen">
            <div class="hidden md:block">
                <div class="ps-11 pb-4 pt-10">
                    <a href="" class='text-white text-7xl font-bold '>Care Mind</a>
                </div>
                <div class="ps-16 flex flex-col gap-y-5">
                    <div class="bg-[#71B9C5] rounded-lg bg-opacity-25 w-96 h-28">
                        <p class="text-white px-6 pt-3 text-2xl">Meditasi yang bisa dilakukan saat terpuruk</p>
                    </div>
                    <div class="bg-[#71B9C5] rounded-lg bg-opacity-25 p-7 w-96 h-28 ">
                        <p class="text-white -px-1 -pt-9 text-sm">"Bukanlah harta yang menjadikan hidup kaya, melainkan
                            bagaimana kita memandangnya."
                            ~Epicurus </p>
                    </div>
                    <div class="bg-[#71B9C5] rounded-lg bg-opacity-25 p-7 w-96 h-28">
                        <p class="text-white -px-1 -pt-9 text-lg"> Merasa butuh penanganan lebih?</p>
                        <div class="pt-2">
                            <a href="{{ url('chatpsikolog') }}"
                                class="bg-[#3B8A97] hover:bg-[#2E5A61] text-white font-bold py-2 px-4 rounded-lg">Hubungi
                                Psikolog</a>
                        </div>
                    </div>
                    <div class="bg-[#2E5A61] rounded-lg bg-opacity-25 p-7 w-96 h-40 text-white">
                        <p class="-px-1 -pt-9 text-lg"> Layanan Darurat </p>
                        <p class="">Hotline </p>
                        <p class="">>> 119 extension 8</p>
                        <p class="">Call Center Halo Kemenkes </p>
                        <p class=""> >> 1500-567</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row max-w-full">
                <div class="md:w-[800px] pt-10">
                    <div class="md:flex md:flex-col bg-gray-100 rounded-2xl">
                        <div class="bg-[#3B8A97] opacity-80 py-2 flex justify-items-start">
                            <img class="w-24 px-2" src="img/pawsy.png" alt="">
                            <div class=" flex flex-col justify my-auto">
                                <h1 class="text-lg text-left text-white">PAWSY</h1>
                                <div class="status-loading"></div>
                            </div>
                        </div>
                        <div class="flex-grow overflow-y-scroll h-[32rem] max-h-[32rem]">
                            <div class="flex flex-col space-y-2 md:p-4 p-2 chat-message">
                            </div>
                        </div>
                        <form>
                            <div class="flex md:p-3 p-3">
                                <input type="text" name="message" id="message" placeholder="Sampaikan pesanmu..."
                                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-teal-500" autocomplete="off"/>
                                <button type="submit" class="ml-2 rounded-lg bg-[#3B8A97] px-4 py-2 text-white">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="md:hidden block pt-3 pb-5 px-2">
                    <div class=" flex flex-col gap-y-4">
                        <div class="bg-[#71B9C5] px-3 shadow-lg rounded-lg bg-opacity-25 flex justify-start items-center p-1 h-28">
                            <p class="text-white">Meditasi yang bisa dilakukan saat terpuruk</p>
                        </div>
                        <div class="bg-[#71B9C5] px-3 shadow-lg rounded-lg bg-opacity-25 flex justify-start items-center p-1 h-28">
                            <p class="text-white">"Bukanlah harta yang menjadikan hidup kaya, melainkan
                                bagaimana kita memandangnya."
                                ~Epicurus </p>
                        </div>
                        <div class="bg-[#71B9C5] px-3 shadow-lg rounded-lg bg-opacity-25 p-1 h-28 flex justify-start items-center">
                            <div class="">
                                <p class="text-white text-lg"> Merasa butuh penanganan lebih?</p>
                                <div class="pt-2">
                                    <a href="{{ url('chatpsikolog') }}"
                                        class="bg-[#3B8A97] hover:bg-[#2E5A61] text-white font-bold py-2 px-4 rounded-lg">Hubungi
                                        Psikolog</a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-[#2E5A61] rounded-lg bg-opacity-25 p-7 h-40 text-white">
                            <p class="-px-1 -pt-9 text-lg"> Layanan Darurat </p>
                            <p class="">Hotline </p>
                            <p class="">>> 119 extension 8</p>
                            <p class="">Call Center Halo Kemenkes </p>
                            <p class=""> >> 1500-567</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.apiurl = "{{ url('chatpawsy') }}"    
    </script>
    @vite('resources/js/chatpawsy.js')
@endsection