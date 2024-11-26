@extends('layouts.app')

@section('style')
<link href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css" rel="stylesheet">
@endsection

@section('main')

@include('components.navbar-layouts', [$caption_text])

<div class="wrapper-card">
    <div class="text-end">
        <button class="buttons-outline green py-2.5 rounded-md" id="dropdownDownload" data-dropdown-toggle="btn-download">
            <i class='bx bxs-file'></i>
            Export Xls
        </button>
    </div>
    <div class="overflow-x-scroll overflow-y-hidden mt-10">
        <table class="table data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Target</th>
                    <th>No Polisi</th>
                    <th>Nama</th>
                    <th>Kode</th>
                    <th>Tanggal</th>
                    <th>Klaim Via</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
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
            ajax: "{{ route('voucher.listdata', app()->getLocale()) }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'target',
                    name: 'target'
                },
                {
                    data: 'nopol',
                    name: 'nopol'
                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'code',
                    name: 'code'
                },
                {
                    data: 'tanggal',
                    name: 'tanggal'
                },
                {
                    data: 'klaimvia',
                    name: 'klaimvia'
                },
                {
                    data: 'status',
                    name: 'status'
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
                            text: "Want to delete data with ID " + dataattr,
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

    });
</script>
@endsection