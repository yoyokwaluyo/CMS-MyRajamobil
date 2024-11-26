@extends('layouts.app')

@section('style')
<link href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css" rel="stylesheet">
@endsection

@section('main')

@include('components.navbar-layouts', [$caption_text])

<div class="wrapper-card">
    <div class="flex items-center justify-between max-sm:flex-col max-sm:gap-4 mb-10">
        <div class="inline-flex rounded-md shadow-sm">
            <a href="{{ route('voucher.zone', app()->getLocale()) }}" aria-current="page" class="px-4 py-2.5 text-sm font-medium bg-secondarys border border-gray-400 rounded-s-lg hover:bg-primarys focus:z-10 focus:ring-2 focus:ring-gray-700 focus:text-gray-700 dark:bg-gray-600 dark:border-gray-700 dark:text-gray-100 dark:hover:text-gray-200 dark:hover:bg-gray-700 dark:focus:ring-gray-400 transition-all duration-150 ease-in">
                Buat Master Zone
            </a>
            <a href="{{ route('voucher.addVoucher', app()->getLocale()) }}" class="px-4 py-2.5 text-sm font-medium bg-secondarys border-t border-b border-gray-400 hover:bg-primarys focus:z-10 focus:ring-2 focus:ring-gray-700 focus:text-gray-700 dark:bg-gray-600 dark:border-gray-700 dark:text-gray-100 dark:hover:text-gray-200 dark:hover:bg-gray-700 dark:focus:ring-gray-400 transition-all duration-150 ease-in">
                Buat E-Voucher
            </a>
            <a href="{{ route('voucher.passcode', app()->getLocale()) }}" class="px-4 py-2.5 text-sm font-medium bg-secondarys border border-gray-400 rounded-e-lg hover:bg-primarys focus:z-10 focus:ring-2 focus:ring-gray-700 focus:text-gray-700 dark:bg-gray-600 dark:border-gray-700 dark:text-gray-100 dark:hover:text-gray-200 dark:hover:bg-gray-700 dark:focus:ring-gray-400 transition-all duration-150 ease-in">
                Buat Master Passcode
            </a>
        </div>
        <div class="flex rounded-md justify-end" role="group">
            <a href="{{ asset('files/kelolaservicexls.xlsx') }}" download="kelolaservicexls.xlsx" title="Download Format Xls" class="px-4 py-2.5 text-sm font-medium bg-secondarys border border-gray-400 rounded-s-lg hover:bg-primarys focus:z-10 focus:ring-2 focus:ring-gray-500 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 transition-all duration-150 ease-in">
                <i class='bx bxs-file'></i>
                Export Xls
            </a>
            <div class="file-button">
                <label for="import-file-service">
                    <i class='bx bxs-file'></i>
                    Import Xls
                </label>
                <input id="import-file-service" type="file" />
            </div>
        </div>
    </div>

    <div class="hidden text-end mb-4" id="button-action-table">
        <div class="inline-flex rounded-md shadow-sm">
            <button aria-current="page" data-modal-target="kirim-voucher-modal" data-modal-toggle="kirim-voucher-modal" class="px-4 py-2.5 text-sm font-medium bg-secondarys border border-gray-400 rounded-s-lg hover:bg-primarys focus:z-10 focus:ring-2 focus:ring-gray-700 focus:text-gray-700 dark:bg-gray-600 dark:border-gray-700 dark:text-gray-100 dark:hover:text-gray-200 dark:hover:bg-gray-700 dark:focus:ring-gray-400 transition-all duration-150 ease-in">
                Kirim
            </button>
            <button id="hapusCheck" class="px-4 py-2.5 text-sm font-medium bg-secondarys border-t border-b border-gray-400 hover:bg-primarys focus:z-10 focus:ring-2 focus:ring-gray-700 focus:text-gray-700 dark:bg-gray-600 dark:border-gray-700 dark:text-gray-100 dark:hover:text-gray-200 dark:hover:bg-gray-700 dark:focus:ring-gray-400 transition-all duration-150 ease-in">
                Hapus
            </button>
            <button id="checkAll" data-check="checkall" class="px-4 py-2.5 text-sm font-medium bg-secondarys border border-gray-400 rounded-e-lg hover:bg-primarys focus:z-10 focus:ring-2 focus:ring-gray-700 focus:text-gray-700 dark:bg-gray-600 dark:border-gray-700 dark:text-gray-100 dark:hover:text-gray-200 dark:hover:bg-gray-700 dark:focus:ring-gray-400 transition-all duration-150 ease-in">
                Check All
            </button>
        </div>
    </div>

    <div class="overflow-x-scroll overflow-y-hidden">
        <table class="table data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Target Customer</th>
                    <th>Deskripsi</th>
                    <th>Masa Berlaku</th>
                    <th>Kode Voucher</th>
                    <th>Created Time</th>
                    <th>Last Updated</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>


    <!-- Main modal -->
    <div id="kirim-voucher-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-gray-50 rounded-lg shadow dark:bg-gray-800">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Pilih customer yang akan dikirimkan voucher
                    </h3>
                    <button type="button" id="input-close" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="kirim-voucher-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4" id="input-content">
                    <form action="#" class="space-y-4">
                        <div>
                            <label for="search" class="form-label">Search</label>
                            <input type="text" name="search" class="form-control" id="search">
                        </div>
                        <div>
                            <label for="date_range" class="form-label">Pilih Tanggal</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <i class='bx bxs-calendar text-xl dark:text-gray-300'></i>
                                </div>
                                <input type="text" name="date_range" id="date_range" class="form-control group form-validation" required>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <div class="overflow-x-scroll overflow-y-hidden border border-gray-300 dark:border-gray-700">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nomor Polisi</th>
                                    <th>Nama Pelanggan</th>
                                    <th>No Whatsapp</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ABC Zone</td>
                                    <td>ABC Testing</td>
                                    <td>082191273412</td>
                                    <td>
                                        <input name="check_voucher" type="checkbox" value="1" class="form-checkbox checkbox-modal">
                                    </td>
                                </tr>
                                <tr>
                                    <td>ABC Zone</td>
                                    <td>ABC Testing</td>
                                    <td>082191273412</td>
                                    <td>
                                        <input name="check_voucher" type="checkbox" value="1" class="form-checkbox checkbox-modal">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div>&nbsp;</div>
                    <div>
                        <button type="submit" id="btn-kirim-form" disabled class="buttons w-full py-2.5 rounded-md text-sm">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js" defer></script>
<script>
    addEventListener("DOMContentLoaded", (event) => {
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('voucher.listdatainput', app()->getLocale()) }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'target',
                    name: 'target'
                },
                {
                    data: 'deskripsi',
                    name: 'deskripsi'
                },
                {
                    data: 'berlaku',
                    name: 'berlaku'
                },
                {
                    data: 'code',
                    name: 'code'
                },
                {
                    data: 'created',
                    name: 'created'
                },
                {
                    data: 'updated',
                    name: 'updated'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });

        setTimeout(() => {
            uploadFile.submit();
            checkbox.checked();
            modalKirim.init();
        }, 6000);

        let modalKirim = {
            init: function() {
                modalKirim.form();
            },
            form: function() {
                let btnForm = document.querySelector("#btn-kirim-form");
                let checkbox = document.querySelectorAll(".checkbox-modal");

                $(".checkbox-modal").on('click', function() {
                    var arr = [];
                    $(".checkbox-modal").each(function(index) {
                        var $box = $(this);
                        ($box.is(":checked")) ? arr.push(true): arr.push(false);
                    });

                    if (arr.includes(true)) {
                        btnForm.classList.add("orange");
                        btnForm.setAttribute("disabled", false);
                    } else {
                        btnForm.classList.remove("orange");
                        btnForm.setAttribute("disabled", true);
                    }
                });
            }
        }

        let checkbox = {
            checked: function() {
                let inputCheck = document.querySelectorAll(".checkbox_table");
                let buttonGroup = document.querySelector("#button-action-table");
                let btnCheckAll = document.querySelector("#checkAll");
                let btnDelete = document.querySelector("#hapusCheck");

                $(".checkbox_table").on('click', function() {
                    var arr = [];
                    $(".checkbox_table").each(function(index) {
                        var $box = $(this);
                        ($box.is(":checked")) ? arr.push(true): arr.push(false);
                    });

                    if (arr.includes(true)) {
                        buttonGroup.classList.remove("hidden");
                    } else {
                        buttonGroup.classList.add("hidden");
                    }
                });

                btnCheckAll.addEventListener("click", function(e) {
                    var attr = btnCheckAll.getAttribute("data-check");

                    if (attr == "checkall") {
                        btnCheckAll.setAttribute("data-check", "uncheckall");
                        btnCheckAll.innerHTML = "Un Check All";
                    } else {
                        btnCheckAll.setAttribute("data-check", "checkall");
                        btnCheckAll.innerHTML = "Check All";
                    }

                    $(".checkbox_table").each(function(index) {
                        var $box = $(this);
                        (attr == "checkall") ? $box.prop("checked", true): $box.prop("checked", false);
                    });

                    if (attr == "uncheckall") buttonGroup.classList.add("hidden");
                });

                btnDelete.addEventListener("click", function() {
                    Swal.fire({
                        title: "Are you sure?",
                        text: "Want to delete data with ID ",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Yes, delete it!"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire({
                                title: "Deleted!",
                                text: "Your data has been deleted.",
                                icon: "success"
                            });
                        }
                    });
                });
            }
        }

        let uploadFile = {
            submit: function() {
                let files = document.querySelector("#import-file-service");

                files.addEventListener("change", function(e) {
                    console.log(e.target.value);
                });
            }
        }

        flatpickr("#date_range", {
            mode: "range",
            enableTime: false,
            dateFormat: "Y-m-d",
            minDate: "today",
            onChange: function(selectedDates, dateStr, instance) {
                console.log("change");
            },
        });
    });
</script>
@endsection