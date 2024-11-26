@extends('layouts.app')

@section('style')
<link href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css" rel="stylesheet">
@endsection

@section('main')

@include('components.navbar-layouts', [$caption_text])

<div class="wrapper-card">
    <div class="text-end">
        <a href="{{ route('salesadvisor.add', app()->getLocale()) }}" class="buttons orange py-2.5 px-8 rounded-md inline-block">
            <i class='bx bx-plus'></i>
            Tambah Sales Advisor
        </a>
    </div>
    <div class="mt-10">
        <div class="overflow-x-scroll overflow-y-hidden">
            <table class="table data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Dealer</th>
                        <th>Kategori</th>
                        <th>Status</th>
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
<script>
    addEventListener("DOMContentLoaded", (event) => {
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('salesadvisor.datasa', app()->getLocale()) }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'dealer',
                    name: 'dealer'
                },
                {
                    data: 'kategori',
                    name: 'kategori'
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

    });
</script>
@endsection