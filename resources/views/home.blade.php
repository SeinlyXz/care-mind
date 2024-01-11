@extends('layout.app')
@section('content')
<title>
    Home
</title>
<div class="h-screen w-full flex justify-center">
    <img src="/vertical-line.svg" alt="" class="absolute w-48 min-h-screen left-1">
    <div class="bg-white w-full ps-10 pe-20 pt-10">
        <div>
            <a href="#" class="font-serif text-teal-800 text-7xl font-bold">
                Care Mind
            </a>
        </div>
        <div class="flex h-[600px] items-end justify-end px-10">
            <div class="flex flex-col gap-y-10">
                <h1 class="text-7xl text-teal-950 font-semibold absolute top-64 w-[850px]">
                    Jaga Jiwa, Jalin Harapan:
                    Bersama Care Mind
                </h1>
                <p class="w-[550px]">
                    Di tengah kehidupan yang sering kali penuh tantangan, kita semua perlu tempat untuk berbagi, mendengar, dan memulihkan keseimbangan emosi kita. Care Mind hadir khusus untuk Anda yang merasa membutuhkan dukungan emosional. Mari bergabung, saling mendengar, dan bersama-sama menciptakan ruang aman bagi jiwa kita. Karena setiap perasaan berharga, dan setiap jiwa pantas mendapatkan perhatian. Bersama Care Mind, Anda tidak sendirian. 
                </p>
                <button class="bg-teal-900 px-3 py-4 rounded-xl text-xl w-60 text-white">
                    Konsultasi Sekarang
                </button>
            </div>
        </div>
    </div>
    <div class="bg-teal-800 w-full pt-10">
        <div class="flex gap-3 -ms-5">
            <button class="bg-teal-800 px-[35px] py-4 text-white rounded-xl text-3xl">Tentang Kami</button>
            <button class="bg-teal-800 px-[35px] py-4 text-white rounded-xl text-3xl">Galeri</button>
            <button class="bg-teal-800 px-[35px] py-4 text-white rounded-xl text-3xl">Kontak</button>
        </div>
        <div class="absolute top-72">
            <img src="/img/oren-hi.png" alt="">
        </div>
    </div>
</div>
<div class="h-screen w-full flex justify-center">
    <div class="bg-white w-full p-52">
        <img src="/vertical-line.svg" alt="" class="absolute w-48 left-1">
        <div class="w-[500px]">
            <p class="text-4xl font-semibold">
            Para Kucing Lucu yang Siap Dengar Curhatanmu!
            </p>
        </div>
    </div>
</div>
<div class="h-screen w-full flex justify-center py-32">
    <div class="bg-[#3B8A978C] w-[800px] flex-shrink-0 ms-1.5 ">
    </div>
    <div class="relative w-full bg-white h-96 my-auto -ms-32">
        <div class="p-32 space-y-5 flex">
            <button class="text-teal-600 font-bold text-5xl px-3 ">
                <
            </button>
            <div class="">
                <h1 class="text-4xl font-bold">
                    Panduan Emosi Sehari-hari
                </h1>
                <h4 class="text-1xl base ">
                Tips dan trik untuk mengelola stres, cemas, dan perasaan lainnya dalam kehidupan sehari-hari.
                </h4>
                <button class="text-white px-5 py-3 bg-teal-500 rounded-2xl">
                    Baca Sekarang
                </button>
            </div>
            <button class="text-teal-600 font-bold text-5xl px-10" >
                >
            </button>
        </div>
    </div>
</div>
<div class="min-h-screen w-full flex justify-center">
    <div class="flex flex-col">
        <div class="bg-white">
            <div class= "">
                <p class="text-5xl font-semibold ">
                    Butuh Tindakan Lanjut?
                    
                </p>
                <br>
                <p class="text-5xl font-semibold ">
                Obrolkan dengan Para Ahli
                </p>
            </div>
        </div>
        <div class="bg-white pt-32">
            <div class="flex justify-between gap-x-3">
                <div class="bg-[#3B8A978C] rounded-2xl flex flex-col items-center pt-5 pb-5 px-5">
                    <div class="w-[200px] flex justify-center">
                        <img src="/img/I_Putu_Galang_Dharma_Putra-removebg-preview.png" class="w-52 object-cover">               
                    </div>
                    <p class="text-white text-center text-lg font-normal mt-4 w-52">
                        I Putu Galang Dharma Putra S S.Psi., M.Psi., P.
                    </p>
                </div>
                <div class="bg-[#3B8A978C] rounded-2xl flex flex-col items-center pt-5 pb-5 px-5">
                    <div class="w-[200px] flex justify-center">
                        <img src="/img/Nana_Gerhana-removebg-preview.png" alt="" class="w-52 object-cover">
                    </div>
                    <p class="text-white text-lg text-center font-normal mt-4 w-52">
                        Nana Gerhana M.Psi, Psikolog, C.NN
                    </p>
                </div>
                <div class="bg-[#3B8A978C] rounded-2xl flex flex-col items-center pt-5 pb-5 px-5">
                    <div class="w-[200px] flex justify-center">
                        <img src="/img/Rida_Yana-removebg-preview.png" alt="" class="w-52 object-cover">
                    </div>
                    <p class="text-white text-lg font-normal text-center mt-4 w-52">
                        Rida Yana Primanita S.Psi., M.Psi., P.
                    </p>
                </div>
                <div class="bg-[#3B8A978C] rounded-2xl flex flex-col items-center pt-5 pb-5 px-5">
                    <div class="w-[200px] flex justify-center">
                        <img src="/img/Ayu_Pradani-removebg-preview.png" alt="" class="w-52 object-cover">
                    </div>
                    <p class="text-white text-lg text-center font-normal mt-4 w-52">
                        Ayu Pradani S. Putri M.Psi. Psikolog
                    </p>
                </div>
    
                <div class="bg-[#3B8A978C] rounded-2xl flex flex-col items-center pt-5 pb-5 px-5">
                    <div class="w-[200px] flex flex-col">
                        <img src="/img/Sri_Wiraswati-removebg-preview.png" alt="" class="w-52 object-cover">
                    </div>
                    <p class="text-white text-xl w-52 text-center font-normal mt-4">
                        A A K Sri Wiraswati M.Psi. Psikolog
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="w-full flex justify-between">
    <div class="bg-white ps-52">
        <div class="h-screen w-[500px] flex flex-col justify-center items-start gap-y-7">
            <h1 class="text-5xl font-bold flex px-50">
                Komunitas Peduli
            </h1>
            <p class="text-xl font-semibold">
                Tempat untuk berbagi pengalaman, curhat, dan 
                mendapatkan dukungan dari anggota komunitas 
                lain yang memiliki perjuangan emosional serupa.
            </p>
            <div class="flex justify-center">
                <button class="bg-[#296099] px-4 py-3 rounded-xl text-2xl text-white">
                    Gabung Sekarang
                </button>
            </div>
        </div>
    </div>
    <div class="bg-[#3B8A97] w-[900px] my-32">
        
    </div>
</div>






@endsection