@extends('layout.app')
@section('content')
<section>
    <div class="">
        <div class="bg-[#3B8A97] w-full">
            <div class="">
                <div class="pb-10 pt-4 p-10">
                    <a href="{{ url('home') }}" class='text-white text-6xl font-bold '>Care Mind</a>
                </div>
                <div class="h-screen">
                    <div class="flex item-center justify-center rounded-xl">
                        <img src="images/ocean.png" class="w-96 object-cover">
                    </div>
                    <br>
                    <div class="flex justify-center">
                        <p class="w-[550px] text-center text-white">
                            Care Mind adalah platform yang berdedikasi untuk membantu individu
                            yang sedang menghadapi tantangan emosi. Sebagai teman virtual yang siap mendengar,
                            kami menyediakan layanan live chat dengan maskot kami, Pawsy, seekor kucing yang penuh kasih sayang.
                            Di sini, setiap orang diberikan ruang aman untuk berbagi, curhat, dan mencari pemahaman
                            tentang perasaan yang mereka alami.
                        </p>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="bg-white w-full pb-20">
                    <div class="py-20">
                        <div class="">
                            <div class="float-right w-1/3 h-4 p-4">
                                <img src="images/ocean.png" width="429px" height="513px">
                            </div>
                            <div class="flex justify-left pb-20 pt-5">
                                <p class="float-left px-40 ">
                                    Care Mind dirancang khusus untuk individu yang merasa memerlukan dukungan emosional,
                                    mulai dari mereka yang mengalami stres, cemas, hingga perasaan kesepian.
                                    Meskipun kami bukan pengganti profesional kesehatan mental, kami berusaha menjadi pendengar yang empatik dan memfasilitasi koneksi positif bagi setiap pengguna.
                                </p>
                            </div>
                            <div class="flex flex-col gap-y-5">
                                <p class="text-orange-500 font-bold px-40 text-4xl">Misi Kami</p>
                                <div class="flex justify-left">
                                    <p class="float-left w-3/6 h-90 px-40 ">
                                        Misi kami di Care Mind adalah menciptakan komunitas yang mendukung, memahami, dan menginspirasi satu sama lain.
                                        Selain layanan live chat dengan Pawsy, kami juga menyajikan kumpulan artikel tentang perbaikan diri,
                                        strategi mengatasi emosi, dan tips kesejahteraan mental.
                                        Kami juga bangga memiliki ruang komunitas di mana individu dengan pengalaman dan perasaan yang serupa dapat saling berinteraksi, mendukung, dan membangun hubungan yang bermakna. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" max-h-10">
                <img class="w-32 left-40 absolute top-[105rem] max-h-52 object-contain" src="images/putih2.png" alt="">
                <div class="absolute rounded-t-xl justify-center inset-x-10 top-[110rem] h-16 bg-[#A3C6CC] flex py-6">
                    <small class="text-white text-sm">Copyright @caremind </small>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection