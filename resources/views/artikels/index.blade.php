@if (Auth::user())
    <x-app-layout>
        <div class="flex flex-col bg-slate-200 rounded-xl py-4 min-h-screen">
            <div class="">
                @foreach ($artikels as $artikel)
                    <div class="w-[55rem] mx-auto sm:px-6 lg:px-8 py-3">
                        <a href="{{ url('artikel', ['artikels' => $artikel->id]) }}">
                            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5 hover:bg-slate-100">
                                <h1 class="text-3xl font-bold mb-5">{{ $artikel->title }}</h1>
                                <p class="line-clamp-1">{{ $artikel->content }}</p>
                                <p class="text-sm text-gray-500 mt-2">Dibuat oleh {{ $artikel->author->nama }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="px-96 py-14">
                {{ $artikels->links() }}
            </div>
        </div>
    </x-app-layout>
@else
    @extends('layout.app')
    @section('content')
    <title>
        Artikel
    </title>
    <div class="bg-slate-200 min-h-screen">
        <div class="ps-20 p-10 pb-5">
            <a href="{{url("home")}}" class="my-auto">
                <h1 class="text-teal-500 text-2xl font-bold font-serif">
                    Care Mind
                </h1>
            </a>
        </div>
        <div class="flex flex-col rounded-xl">
            <div class="flex justify-center py-3 space-x-52">
                <h1 class="text-5xl text-teal-600 font-bold">
                    Daftar Artikel
                </h1>
            </div>
            <div class="">
                @foreach ($artikels as $artikel)
                    <div class="w-[55rem] mx-auto sm:px-6 lg:px-8 py-3">
                        <a href="{{ url('artikel', ['artikels' => $artikel->id]) }}">
                            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5 hover:bg-slate-100">
                                <h1 class="text-3xl font-bold mb-5">{{ $artikel->title }}</h1>
                                <p class="line-clamp-1">{{ $artikel->content }}</p>
                                <p class="text-sm text-gray-500 mt-2">Dibuat oleh {{ $artikel->author->nama }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="px-96 py-14">
                {{ $artikels->links() }}
            </div>
        </div>
    </div>
    @endsection
@endif
