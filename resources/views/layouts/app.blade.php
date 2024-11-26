<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyRajamobil</title>

    <meta name="description" content="Beli Mobil Baru dan Mobil Bekas Secara Online, Tidak Perlu ke Dealer, Proses Cepat dan Mudah. Dapatkan Penawaran Harga Mobil , TDP Murah dan Angsuran Ringan.">
    <meta property="fb:app_id" content="181411581975733">
    <meta property="og:title" content="Beli Mobil Online Cepat dan Mudah">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.rajamobil.com">
    <meta property="og:image" content="https://www.rajamobil.com/themes/rmperjuangan/images/logo/logo-rajamobil-2015.png">
    <meta property="og:description" content="Beli Mobil Baru dan Mobil Bekas Secara Online, Tidak Perlu ke Dealer, Proses Cepat dan Mudah. Dapatkan Penawaran Harga Mobil , TDP Murah dan Angsuran Ringan.">
    <meta name="publisher" content="RajaMobil.com">
    <meta name="content-language" content="id.in">
    <meta name="distribution" content="RajaMobil : Jual Beli Mobil Baru dan Bekas Harga Murah">
    <meta name="msvalidate.01" content="EF945FF5D3FE1A18CCA2F16107AF3A37">
    <meta name="google-site-verification" content="HQ6p5LarfA7gdbS9ezG-DhMsQ1VDFrR2M7iWFieRf1I">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('image/favicon.ico') }}" type="image/x-icon" />

    <!-- import css file -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{ mix('css/app-style.css') }}" rel="stylesheet">
    @yield('style')
</head>

<body class="bg-secondarys dark:bg-gray-900 transition-all duration-500 ease-in">

    @include('layouts.loading')

    <main role="main" class="max-w-[1800px] mx-auto">

        <div class="relative">
            <x-sidebar-menu></x-sidebar-menu>

            <div class="main-layouts">
                @yield('main')
            </div>
        </div>

    </main>

    <!-- import js file -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" defer></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js" defer></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ mix('js/app-script.js') }}"></script>
    @yield('scripts')

</body>

</html>