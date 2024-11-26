@extends('layouts.app')

@section('style')
<link href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css" rel="stylesheet">
@endsection

@section('main')

@include('components.navbar-layouts', [$caption_text])

<div class="wrapper-card">
    <div class="text-end mb-4 max-sm:flex max-sm:gap-1">
        <a href="{{ route('requestservice.inputsa', app()->getLocale()) }}" class="buttons orange py-2.5 px-8 rounded-md inline-block">
            <i class='bx bx-plus'></i>
            Tambah Data Service
        </a>
        <button class="buttons-outline green py-2.5 rounded-md">
            <i class='bx bxs-file'></i>
            Export Xls
        </button>
    </div>
    <div class="grid md:grid-cols-2 gap-2 md:gap-4">
        <div class="flex gap-2 md:gap-4">
            <div class="md:basis-[250px]">
                <label for="sorting" class="form-label">Urutkan Berdasarkan</label>
                <select name="sorting" class="form-control" id="sorting">
                    <option value="" selected disabled>Pilih</option>
                    <option label="Sort by name A - Z" value="string:ASC,name">Sort by name A - Z</option>
                    <option label="Sort by name Z - A" value="string:DESC,name">Sort by name Z - A</option>
                    <option label="Sort by Newest Request" value="string:DESC,request">Sort by Newest Request</option>
                    <option label="Sort by Oldest Request" value="string:ASC,request">Sort by Oldest Request</option>
                    <option label="Sort by Newest Date Service" value="string:DESC,date">Sort by Newest Date Service</option>
                    <option label="Sort by Oldest Date Service" value="string:ASC,date">Sort by Oldest Date Service</option>
                </select>
            </div>
            <div class="md:basis-[250px]">
                <label for="date_range" class="form-label">Cari Dari Tanggal</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <i class='bx bxs-calendar text-xl dark:text-gray-300'></i>
                    </div>
                    <input type="text" name="date_range" id="date_range" class="form-control group form-validation" required>
                </div>
            </div>
        </div>
        <div class="flex md:justify-end">
            <div class="max-sm:w-full">
                <label class="form-label">Cari per Minggu</label>
                <div class="inline-flex rounded-md shadow-sm max-sm:w-full" role="group">
                    <button type="button" class="px-4 py-2 text-sm font-medium bg-secondarys border border-gray-400 rounded-s-lg hover:bg-primarys focus:z-10 focus:ring-2 focus:ring-gray-500 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 transition-all duration-150 ease-in">
                        <i class='bx bx-left-arrow-alt text-xl'></i>
                    </button>
                    <button type="button" disabled class="px-4 py-2.5 text-sm font-medium max-sm:w-full bg-gray-50 border-t border-b border-gray-400 focus:z-10 dark:bg-gray-800 dark:border-gray-700">
                        {{ $data_period['start'] .' - '. $data_period['end'] }}
                    </button>
                    <button type="button" class="px-4 py-2 text-sm font-medium bg-secondarys border border-gray-400 rounded-e-lg hover:bg-primarys focus:z-10 focus:ring-2 focus:ring-gray-500 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 transition-all duration-150 ease-in">
                        <i class='bx bx-right-arrow-alt text-xl'></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-10">
        <div class="overflow-x-scroll overflow-y-hidden">
            <table class="table data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Model</th>
                        <th>Phone</th>
                        <th>Booking Date</th>
                        <th>Request Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js" defer></script>

<script type="text/javascript" defer>
    addEventListener("DOMContentLoaded", (event) => {
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('requestservice.datasa', app()->getLocale()) }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'model',
                    name: 'model'
                },
                {
                    data: 'phone',
                    name: 'phone'
                },
                {
                    data: 'testdrive_date',
                    name: 'testdrive_date'
                },
                {
                    data: 'request_date',
                    name: 'request_date'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });

        // call after getdata in datatable
        setTimeout(() => {
            rowData.init();
        }, 6000);

        let rowData = {
            init: function() {
                rowData.hapus();
            },
            hapus: function() {
                let itemrows = document.querySelectorAll(".delete-row");

                itemrows.forEach(element => {
                    element.addEventListener("click", function() {
                        let dataattr = element.getAttribute("data-row");

                        Swal.fire({
                            title: "Are you sure?",
                            text: "Want to delete data with ID "+dataattr,
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
                });
            }
        }

        flatpickr("#date_range", {
            mode: "range",
            enableTime: false,
            dateFormat: "Y-m-d",
            // minDate: "today",
            onChange: function(selectedDates, dateStr, instance) {
                console.log("change");
            },
        });
    });
</script>
@endsection