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
        <h1 class="h2">Detail</h1>
    </div>

    <div class="row">
      <div class="col-sm">
        Nama: Mark
      </div>
    </div>
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