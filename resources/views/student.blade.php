@extends('master')
@section('title','Datatable')
@section('content')
	<h2 class="mb-4">Laravel 7|8 Yajra Datatables Example</h2>
    <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Phone</th>
                <th>DOB</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
@endsection
@push('js')
 <script defer  src="{{asset('/js/student.js?v='.time())}}"></script>
@endpush