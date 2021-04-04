@extends('layout.admin.base')

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

        @foreach($customers as $customer)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$customer->name}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->created_at}}</td>

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