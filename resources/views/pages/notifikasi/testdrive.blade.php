@extends('layouts.app')

@section('style')
<link href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css" rel="stylesheet">
@endsection

@section('main')

@include('components.navbar-layouts', [$caption_text])

<div class="wrapper-card">
    <div class="mt-10">
        <div class="overflow-x-scroll overflow-y-hidden">
            <table class="table data-table">
                <thead>
                    <tr>
                    <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Model</th>
                        <th>Phone</th>
                        <th>Request Date</th>
                        <th>Testdrive Date</th>
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
            ajax: "{{ route('requesttestdrive.data', app()->getLocale()) }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
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
                    data: 'request_date',
                    name: 'request_date'
                },
                {
                    data: 'testdrive_date',
                    name: 'testdrive_date'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });
    });
</script>
@endsection