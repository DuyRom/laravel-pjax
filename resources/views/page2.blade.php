@extends('master')
@section('title','Page 2')
@section('content')
	<h2 class="mb-4">Page 2</h2>
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
                <td>Page 2 Name {{$i}}</td>
                <td>Page 2 Email {{$i}}</td>
                <td>Page 2 Username {{$i}}</td>
                <td>Page 2 phone {{$i}}</td>
            </tr>
            @endfor
        </tbody>
    </table>
@endsection
