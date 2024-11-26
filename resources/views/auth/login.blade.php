@extends('layouts.main')

@section('style')
<!-- import another style file -->
@endsection

@section('main')

<div class="bg-primarys h-screen overflow-auto">

    <div class="container md:w-[90%] mx-auto px-4 py-8 min-h-screen flex items-center justify-center">

        <div class="w-1/2 bg-gray-50 rounded-md py-6 px-8 shadow-md">
            <img src="{{ asset('image/logo-myrajamobil.png') }}" class="h-10 mx-auto mb-4" alt="Logo"/>
            <div class="text-2xl font-ibm mb-2">Masuk ke akun Anda</div>
            <div class="font-heebo mb-8">Selamat Datang kembali! Login dengan data diri yang Anda masukkan saat registrasi</div>
            <form method="POST" action="{{ route('login', app()->getLocale()) }}">
                @csrf
                <div>
                    <label for="email" class="form-label">Email <span class="text-red-500">*</span></label>
                    <input type="email" id="email" name="email" class="form-control" required>
                    @error('email')
                    <div class="text-red-600 text-xs">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-4">
                    <label for="password" class="form-label">Password <span class="text-red-500">*</span></label>
                    <input type="password" id="password" name="password" class="form-control" required>
                    @error('password')
                    <div class="text-red-600 text-xs">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-4 flex items-center justify-between">
                    <div class="flex items-center mb-4">
                        <input id="remember" name="remember" type="checkbox" value="" {{ old('remember') ? 'checked' : '' }} class="w-4 h-4 text-orange-500 bg-gray-100 border-gray-400 rounded focus:ring-orange-500 focus:ring-2">
                        <label for="remember" class="ms-2 text-sm form-label mb-0">Remember me</label>
                    </div>
                    <div class="mb-4">
                        <a href="javascript:void(0);" class="text-sm form-label hover:text-orange-500 transition duration-150 ease-in" data-modal-target="forgot-modal" data-modal-toggle="forgot-modal">Lupa Password?</a>
                    </div>
                </div>
                @if($errors->any())
                    <div class="mt-4">
                        <ul class="text-xs text-red-500">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="mt-10 space-y-4">
                    <div>
                        <button type="submit" class="buttons py-3 bg-orange-500 hover:bg-orange-600 w-full rounded-md text-lg">
                            Masuk
                        </button>
                    </div>
                    <div class="flex justify-center">
                        <a href="{{ route('register', app()->getLocale()) }}" class="buttons-outline hover:bg-orange-200 hover:border-orange-200 hover:text-orange-600 rounded-md border-0 hover:bg-transparent"><span class="text-black/60">Belum punya akun?</span> Daftar Sekarang</a>
                    </div>
                </div>
            </form>
        </div>

    </div>

</div>


<!-- Main modal -->
<div id="forgot-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-gray-50 rounded-lg shadow dark:bg-gray-700">
            <form action="#" method="POST">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <div class="text-2xl font-ibm mb-2">Lupa Password</div>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="forgot-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <div>
                        <label for="email-forgot" class="form-label">Masukan Email <span class="text-red-500">*</span></label>
                        <input type="email" id="email-forgot" name="email-forgot" class="form-control" required>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5 md:pb-6 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button type="submit" class="buttons py-3 bg-orange-500 hover:bg-orange-600 w-full rounded-md font-ibm text-lg">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection

@section('scripts')
<!-- import another js file -->
@endsection