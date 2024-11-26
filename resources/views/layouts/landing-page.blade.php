@extends('layouts.main')

@section('style')
<!-- import another style file -->
@endsection

@section('main')

<div class="bg-primarys">
    <div class="relative">
        <img src="{{ asset('image/background-landing-page.jpg') }}" alt="image" class="w-full object-cover object-center h-screen">
        <div class="absolute z-[1019] w-full h-screen top-0 left-0">
            <nav class="max-w-[1800px] mx-auto border-gray-200">
                <div class="container md:w-[90%] mx-auto px-4 flex flex-wrap items-center justify-between h-full md:h-24 py-4">
                    <a href="{{ route('landingpage', app()->getLocale()) }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img src="{{ asset('image/logo-myrajamobil.png') }}" class="h-10" alt="Logo" />
                    </a>
                    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                    <div class="hidden w-full md:block md:w-auto max-sm:mt-6" id="navbar-default">
                        <ul class="font-medium flex flex-row max-sm:justify-end max-sm:divide-y md:gap-4">
                            <li class="mr-2">
                                <a href="{{ route('login', app()->getLocale()) }}" class="buttons-outline font-ibm hover:bg-orange-200 hover:border-orange-200 hover:text-orange-600 rounded-md">Masuk</a>
                            </li>
                            <li class="mr-2">
                                <a href="{{ route('register', app()->getLocale()) }}" class="buttons font-ibm bg-orange-500 text-white hover:bg-orange-600 rounded-md">Daftar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container md:w-[90%] mx-auto px-4 mt-20">
                <h1 class="text-4xl md:text-5xl leading-[1.3] md:leading-[1.4] font-ibm mb-14">Tingkatkan penjualan <br>Mobil baru Anda <br>Bersama <span class="text-orange-500">RajaMobil.com</span></h1>
                <!-- <a href="/" class="buttons py-4 px-14 text-lg bg-orange-500 text-white hover:bg-orange-600 rounded-md">Mulai Gratis!</a> -->
            </div>
        </div>
    </div>
    <hr>
    <div class="container md:w-[90%] mx-auto px-4 py-14">
        <div class="text-2xl md:text-3xl font-ibm text-center">Telah menggunakan & berjualan di <span class="text-orange-500">RajaMobil.com</span></div>
        <div class="flex items-center justify-center md:w-1/2 mx-auto mt-14">
            <div class="w-[200px] md:p-4 text-center space-y-2">
                <i class='bx bxs-factory text-6xl'></i>
                <div class="font-ibm text-2xl md:text-4xl">27</div>
                <div class="font-heebo md:text-lg">Brand</div>
            </div>
            <div class="w-[200px] md:p-4 text-center space-y-2">
                <i class='bx bxs-group text-6xl'></i>
                <div class="font-ibm text-2xl md:text-4xl">7000+</div>
                <div class="font-heebo md:text-lg">Wiraniaga</div>
            </div>
            <div class="w-[200px] md:p-4 text-center space-y-2">
                <i class='bx bxs-business text-6xl'></i>
                <div class="font-ibm text-2xl md:text-4xl">900+</div>
                <div class="font-heebo md:text-lg">Cabang Dealer</div>
            </div>
        </div>
    </div>

    <div class="bg-secondarys py-20">
        <div class="container md:w-[90%] mx-auto px-4">
            <div class="text-4xl md:text-5xl leading-[1.2] md:leading-[1.3] font-ibm text-center mb-4">Cara Tercepat untuk <br>Jual Mobil Baru</div>
            <div class="text-lg font-heebo text-center"><span class="text-orange-500">RajaMobil.com</span> memberikan seperangkat kemudahan untuk berjualan mobil baru secara instan.</div>
            <img data-src="{{ asset('image/landing-1.png') }}" alt="image" class="lazy mx-auto mt-14">
        </div>
    </div>

    <div class="container md:w-[90%] mx-auto px-4 py-14">
        <div class="text-4xl md:text-5xl leading-[1.2] md:leading-[1.3] font-ibm text-center mb-4">Produk Kami</div>

        <div class="space-y-14 mt-14">
            <div class="md:w-1/2 mx-auto space-y-4">
                <div class="text-2xl md:text-3xl font-ibm text-center">Website Instant</div>
                <div class="font-heebo md:text-lg text-center">Buat diri Anda dapat ditemukan di internet dengan memiliki halaman online atau website. Mendaftar di RajaMobil.com akan secara instan mendapatkan halaman online yang menjadi showroom virtual pribadi Anda.</div>
                <img data-src="{{ asset('image/landing-2.png') }}" alt="image" class="lazy mx-auto">
            </div>
            <div class="md:w-1/2 mx-auto space-y-4">
                <div class="text-2xl md:text-3xl font-ibm text-center">RajaMobil Traffic</div>
                <div class="font-heebo md:text-lg text-center">Puluhan ribu orang mengunjungi RajaMobil.com setiap harinya, dan mencari wiraniaga yang dapat membantu mereka menemukan mobil idaman mereka.</div>
                <img data-src="{{ asset('image/landing-3.png') }}" alt="image" class="lazy mx-auto">
            </div>
            <div class="md:w-1/2 mx-auto space-y-4">
                <div class="text-2xl md:text-3xl font-ibm text-center">Sistem Manajemen Pelanggan & Penjualan</div>
                <div class="font-heebo md:text-lg text-center">Jangan pernah terlewat peluang lagi ! Semua peluang akan dihantarkan langsung ke genggaman Anda. Aman, dan selalu menjadi milik Anda. Sistem kami membereskan semua administrasi dan manajemen penjualan & pelanggan, sehingga Anda dapat fokus memberikan yang terbaik untuk pelanggan.</div>
                <img data-src="{{ asset('image/landing-4.png') }}" alt="image" class="lazy mx-auto">
            </div>
        </div>
    </div>

    <div class="bg-secondarys py-20">
        <div class="container md:w-[90%] mx-auto px-4">
            <div class="grid md:grid-cols-2 place-items-center gap-10 md:gap-8">
                <div>
                    <img data-src="{{ asset('image/landing-5.png') }}" alt="image" class="lazy">
                </div>
                <div>
                    <div class="text-2xl md:text-3xl font-ibm mb-2">Gratis</div>
                    <div class="font-heebo md:text-lg mb-4">Semua fasilitas ini akan anda dapatkan secara gratis sejak bergabung atau terdaftar di <span class="text-orange-500">Rajamobil.com</span></div>
                    <div class="border border-gray-500 rounded-md p-4 flex items-center max-sm:flex-wrap gap-4 max-sm:pb-8">
                        <div><i class='bx bxs-phone text-4xl'></i></div>
                        <div>
                            <div class="font-heebo text-sm">Customer Care</div>
                            <div class="text-2xl md:text-3xl font-ibm">021 8068-2356</div>
                            <div class="font-heebo text-sm">Senin-Jumat, 08:00-17:00 WIB</div>
                        </div>
                        <div class="mx-auto md:ml-auto max-sm:mt-4">
                            <a href="{{ route('login', app()->getLocale()) }}" class="buttons py-3.5 px-11 md:px-14 text-lg bg-orange-500 text-white hover:bg-orange-600 rounded-md">Mulai Sekarang!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@section('scripts')
<!-- import another js file -->
@endsection