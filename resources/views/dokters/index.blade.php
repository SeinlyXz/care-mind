<x-guest-layout>
    <title>
        Dokter
    </title>
    <div class="py-10">
        <div class="flex justify-between px-40">
            <a href="{{url('home')}}">
                <h1 class="text-4xl font-extrabold drop-shadow-xl text-[#3B8A97] font-serif">Care Mind</h1>
            </a>
            <h2 class="text-4xl">Dokter yang Siap Melayani</h2>
        </div>
        <div class="flex justify-center">
            <div class="grid grid-cols-3 grid-flow-row gap-x-28 gap-y-10 p-10">
                @foreach ($dokters as $dokter)
                    <div class="bg-[#3B8A97] w-72 rounded-xl p-5 flex flex-col shadow-xl shadow-gray-400">
                        <div class="flex justify-center mb-5">
                            <img src="{{ $dokter->profile_picture }}" alt="" class="w-32 object-cover rounded-full">
                        </div>
                        <div class="my-auto text-white flex flex-col gap-y-4">
                            <div class="space-y-2">
                                <p class="text-lg font-bold">{{ $dokter->nama }}</p>
                                <p class="text-sm">{{ $dokter->email }}</p>
                                <p class="font-bold">Biaya: Rp {{ number_format($dokter->harga, 0, ',', '.') }}</p>
                            </div>
                            <a href="{{ route('dokter.show', [$dokter->id_dokter]) }}">
                                <button class="bg-[#D9D9D9] px-3 py-1 w-full rounded-xl hover:bg-gray-400 text-[#2E5A61] hover:text-black">
                                    Chat Sekarang
                                </button>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="px-52">
            {{ $dokters->links() }}
        </div>
    </div>
</x-guest-layout>
