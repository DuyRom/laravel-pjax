@extends('master')
@section('title','Page 1')
@section('content')
	<h2 class="mb-4">Page 1</h2>
    <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            @for($i=1;$i < 200; $i++)
            <tr>
                <td>{{$i}}</td>
                <td>Page 1 Name {{$i}}</td>
                <td>Page 1 Email {{$i}}</td>
                <td>Page 1 Username {{$i}}</td>
                <td>Page 1 phone {{$i}}</td>
            </tr>
            @endfor
        </tbody>
    </table>
@endsection
