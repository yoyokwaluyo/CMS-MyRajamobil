@extends('layouts.app')

@section('style')
@endsection

@section('main')

@include('components.navbar-layouts', [$caption_text])

<div class="wrapper-card">
    <div class="flex justify-between items-end max-sm:justify-center gap-4">
        <div class="grow">
            <div class="relative md:w-1/2">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <i class='bx bx-search text-xl dark:text-gray-300'></i>
                </div>
                <input type="text" name="date_cust" id="dateCust" class="form-control group py-2.5" placeholder="Cari Promo Model">
            </div>
        </div>
        <div class="grow">
            <button class="buttons orange rounded-md py-1.5 flex gap-2 items-center ml-auto max-sm:px-1 max-sm:text-xs">
                <i class='bx bx-plus text-xl'></i>
                Buat Paket Promo
            </button>
        </div>
    </div>
    <div class="mt-6 md:mt-10 space-y-8">
        <div class="overflow-x-scroll overflow-y-hidden border border-gray-300 dark:border-gray-700">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID Promo</th>
                        <th>Model</th>
                        <th>DP</th>
                        <th>Angsuran</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>199289</td>
                        <td>Promo Honda Brio</td>
                        <td>Rp. 20.000.000</td>
                        <td>Rp. 1.000.000</td>
                        <td>
                            <div class="flex items-center gap-4">
                                <label class="inline-flex items-center cursor-pointer">
                                    <input type="checkbox" name="enable" value="" class="sr-only peer" checked>
                                    <div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                </label>
                                <a href="{{ route('promo.add', app()->getLocale()) }}" class='text-xs buttons py-2 rounded-md'>
                                    Edit
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>199281</td>
                        <td>Promo Honda BRV N7X</td>
                        <td>Rp. 20.000.000</td>
                        <td>Rp. 1.000.000</td>
                        <td>
                            <div class="flex items-center gap-4">
                                <label class="inline-flex items-center cursor-pointer">
                                    <input type="checkbox" name="enable" value="" class="sr-only peer">
                                    <div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                </label>
                                <a href="{{ route('promo.add', app()->getLocale()) }}" class='text-xs buttons py-2 rounded-md'>
                                    Edit
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li>
                        <a href="#" class="">
                            <span class="sr-only">Previous</span>
                            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="">1</a>
                    </li>
                    <li>
                        <a href="#" class="">2</a>
                    </li>
                    <li>
                        <a href="#" aria-current="page" class="active">3</a>
                    </li>
                    <li>
                        <a href="#" class="">4</a>
                    </li>
                    <li>
                        <a href="#" class="">5</a>
                    </li>
                    <li>
                        <a href="#" class="">
                            <span class="sr-only">Next</span>
                            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- state not found -->
        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-200 dark:bg-gray-700 dark:text-red-400" role="alert">
            <span class="font-medium">Mohon Maaf.. hasil pencarian Anda tidak dapat ditemukan.</span> <br>
            Silakan lakukan pencarian dengan kata kunci / filter lain.
        </div>

    </div>
</div>

@endsection

@section('scripts')
<script>
    addEventListener("DOMContentLoaded", (event) => {
        setTimeout(() => {

        }, 1000);

    });
</script>
@endsection