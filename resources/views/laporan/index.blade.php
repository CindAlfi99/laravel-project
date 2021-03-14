@extends('layout.laporan')
@section('head')

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>
@endsection
@section('title', 'Laporan')
@section('content')
<table class=" m-4 table col-lg-9" border="1">
    <thead class="thead-dark">

        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Pemesanan</th>
            <th scope="col">Aksi</th>

        </tr>

    </thead>
    <tbody>

        @foreach($constumers as $const)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$const->name}}</td>
            <td>{{$const->email}}</td>
            <td>{{$const->created_at}}</td>

            <td><a href="" class="badge badge-success">Edit</a><a href="" class="badge badge-danger">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('scriptextra')
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
<script src="{{ asset('js/dashboard.js')}}"></script>
@endsection