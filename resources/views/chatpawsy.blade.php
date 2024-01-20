@extends('layout.app')
@section('content')
    <title>
        Chat Pawsy
    </title>
    <div class="bg-[#3B8A97] md:flex md:justify-between min-h-screen">
        <div class="md:flex md:justify-between md:mx-10 pb-5">
            <div class="md:hidden pt-4 flex justify-between px-5">
                <div class="md:hidden block my-auto">
                    <button>
                        <svg width="35px" height="35px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" id="Editable-line" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><line fill="none" id="XMLID_103_" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="7" x2="25" y1="16" y2="16"/><line fill="none" id="XMLID_102_" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="7" x2="25" y1="25" y2="25"/><line fill="none" id="XMLID_101_" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" x1="7" x2="25" y1="7" y2="7"/></svg>
                    </button>
                </div>
                <div class="flex flex-col items-center pe-8">
                    <a href="{{ url('home') }}" class='text-white text-3xl font-bold'>Care Mind</a>
                    <small class="text-sm text-white">Chat Pawsy</small>
                </div>
                <div class=""></div>
            </div>
            {{-- Care Mind And Other Decription On Desktop View --}}
            <div class="hidden md:block pe-20 my-auto">
                <div class="ps-11 pb-4 pt-10">
                    <a href="{{url('home')}}" class='text-white text-7xl font-bold'>Care Mind</a>
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
            <div class="flex flex-col md:flex-row items-center">
                <div class="px-2">
                    <div class="md:flex md:justify-center md:max-w-[800px] w-[23rem] md:w-full max-w-[24rem]">
                        <div class="md:w-[800px] pt-10">
                            <div class="md:flex md:flex-col bg-gray-100 rounded-3xl">
                                <div class="bg-[#3B8A97] opacity-80 py-2 flex justify-between">
                                    <div class="flex">
                                        <img class="w-24 px-2" src="img/pawsy.png" alt="">
                                        <div class=" flex flex-col justify my-auto">
                                            <h1 class="text-lg text-left text-white">PAWSY</h1>
                                            <div class="status-loading"></div>
                                        </div>
                                    </div>
                                    <div class="my-auto px-5">
                                        <button id="clearButton">
                                            <div class="bg-red-600 hover:bg-red-700 ease-in-out duration-500 flex items-center p-2 rounded-lg shadow-lg">
                                                <x-trashbin />
                                            </div>
                                        </button>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="flex-grow overflow-y-scroll h-[32rem] max-h-[32rem]">
                                        <div class="flex flex-col space-y-2 md:p-4 p-2 chat-message">
                                            {{-- <div class="flex items-center self-end rounded-xl rounded-tr bg-blue-500 py-2 px-3 text-white">
                                                <p>This is a sender message</p>
                                            </div>
                                            <div class="flex items-center self-start rounded-xl rounded-tl bg-gray-300 py-2 px-3">
                                                <p>This is a receiver message</p>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <form>
                                        <div class="flex md:p-3 p-3">
                                            <input type="text" name="message" id="message" placeholder="Sampaikan pesanmu..."
                                                class="w-full rounded-full border border-gray-300 px-4 py-2 focus:ring-teal-500"
                                                autocomplete="off" />
                                            <button type="submit" class="ml-2 rounded-full bg-[#3B8A97] p-2 text-white hover:bg-[#307580]">
                                                <x-send-icon />
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
