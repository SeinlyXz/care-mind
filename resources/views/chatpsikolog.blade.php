@extends('layout.app')
@section('content')
    <div class="bg-[#3B8A97] w-full min-h-screen p-10">
        <div class="flex justify-between pb-10 mx-24 space-x-20">
            <div>
                <div class="pe-10 py-7">
                    <a href="{{ url('home') }}" class='text-white text-7xl font-bold'>Care Mind</a>
                </div>
                <div class="space-y-8">
                    <div class="bg-[#71B9C5] rounded-lg bg-opacity-25 w-96 h-96">
                        <div class="space-y-2">
                            <div class="flex justify-center">
                                <img class="w-80 px-5 rounded-full" src="{{ $dokter->profile_picture }}" alt="">
                            </div>
                            <div class="space-y-2">
                                <p class="text-white text-center font-bold">{{ $dokter->nama }}</p>
                                <div class="">
                                    <p class="text-white text-center">Nomor STR:</p>
                                    <p class="text-white text-center">1224821203382202</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-[#2E5A61] rounded-lg bg-opacity-55 p-7 w-96 h-40">
                        <p class="text-white -px-1 -pt-9 text-lg"> Layanan Darurat </p>
                        <p class="text-white">Hotline </p>
                        <p class="text-white">>> 119 extension 8</p>
                        <p class="text-white">Call Center Halo Kemenkes </p>
                        <p class="text-white"> >> 1500-567</p>
                    </div>
                </div>
            </div>
            <div class="md:w-[800px] pt-10">
                <div class="md:flex md:flex-col bg-gray-100 rounded-2xl">
                    <div class="bg-[#3B8A97] opacity-80 py-2 flex justify-items-start">
                        <img class="w-20 px-2 rounded-full object-cover" src="{{ $dokter->profile_picture }}" alt="">
                        <div class=" flex flex-col justify my-auto">
                            <h1 class="text-lg text-left text-white">{{ $dokter->nama }}</h1>
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
                                class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-teal-500"
                                autocomplete="off" />
                            <input type="hidden" value="{{$dokter->nama}}" id="nama_dokter">
                            <button type="submit" class="ml-2 rounded-lg bg-[#3B8A97] px-4 py-2 text-white">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.apiurl = "{{ url('dokter') }}";
    </script>
    @vite('resources/js/chatpsikolog.js')
@endsection
