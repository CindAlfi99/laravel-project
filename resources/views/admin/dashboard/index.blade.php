@extends('layout.base')

@section('title', 'Dashboard')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
        <strong class="text-capitalize">{!! session('success') !!}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-sm">
            <div class="card text-white bg-primary mb-3 text-center">
                <div class="card-header">Total Customer</div>
                <div class="card-body">
                    <h4 class="card-title">100</h4>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card text-white bg-primary mb-3 text-center">
                <div class="card-header">Total Transaksi</div>
                <div class="card-body">
                    <h4 class="card-title">100</h4>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card text-white bg-primary mb-3 text-center">
                <div class="card-header">Order Hari Ini</div>
                <div class="card-body">
                    <h4 class="card-title">100</h4>
                </div>
            </div>
        </div>
    </div>
    <h3>Pesanan</h3>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Pesanan</th>
            <th scope="col">Tanggal Pesan</th>
            <th scope="col">Tanggal Selesai</th>
            <th scope="col">Status</th>
            <th scope="col">Status Pembayaran</th>
            <th scope="col">Detail</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Baju, celana</td>
            <td>29 Maret 2021</td>
            <td>29 Maret 2021</td>
            <td>Belum</td>
            <td>Belum</td>
            <td><btn class="btn btn-primary">Lihat</btn></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Baju, celana</td>
            <td>30 Maret 2021</td>
            <td>30 Maret 2021</td>
            <td>Belum</td>
            <td>Belum</td>
            <td><btn class="btn btn-primary">Lihat</btn></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry the Bird</td>
            <td>Baju, celana</td>
            <td>31 Maret 2021</td>
            <td>31 Maret 2021</td>
            <td>Belum</td>
            <td>Lunas</td>
            <td><btn class="btn btn-primary">Lihat</btn></td>
          </tr>
        </tbody>
    </table>
</main>
@endsection

@section('scriptextra')
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
    integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
</script>
<script src="{{ asset('js/dashboard.js')}}"></script>
<script>
    var btnClose = document.querySelector('.btn-close')
    setTimeout(() => {
        btnClose.click()
    }, 3000);
</script>
@endsection