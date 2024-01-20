<x-guest-layout>
    <div>
        <div class="p-10 ps-20">
            <a href="{{ url('home') }}" class="text-start">
                <h1 class="text-4xl font-serif font-extrabold text-[#296099]">
                    Care Mind
                </h1>
            </a>
        </div>
        <div class="flex py-10 p-10 ps-24">
            <div class="bg-[#3B8A97] w-72 rounded-xl p-10 max-h-5xl h-96 flex items-center">
                <div class="flex flex-col gap-y-5 pb-20">
                    <p class="text-white text-2xl">
                        Butuh Teman Curhat? Ayo ngobrol dengan Pawsy!
                    </p>
                    <a href={{ url('chatpawsy') }}
                        class="bg-[#FFA842] px-4 py-4 rounded-xl text-white font-bold text-lg text-center">
                        Mulai ngobrol
                    </a>
                    <img src="/img/pawsy.png" alt="" class="absolute left-32 top-[26rem] max-w-44">
                </div>
            </div>
            <div class="max-w-[60rem] mx-auto sm:px-6 lg:px-8 py-3 flex flex-col gap-y-4">
                <div class="flex flex-col gap-y-4">
                    <h1 class="text-6xl text-center text-[#00224F] font-bold">
                        {{ $artikels->title }}
                    </h1>
                    <p class="text-center">Author: {{ $artikels->author->nama }}</p>
                </div>
                <img src="/gambarartikel.png" alt="" class='max-w-5xl object-cover'>
                <p>
                    {{ $artikels->content }}
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>
