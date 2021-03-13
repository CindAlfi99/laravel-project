<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link href="{{asset('css/fixlanding.css')}}" rel="stylesheet">
  <title>Welcome,Rumah Laundry 381</title>
</head>

<body>
  <section id="id">

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="/"><span>R'L381</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>



        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/dashboard">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Contact</a>
            </li>

          </ul>

        </div>
        <div class="collapse navbar-collapse navv" id="navbarNav">
          <ul class="navbar-nav ml-auto">


            <li class="nav-item">
              <button class="nav-link btn-light rounded-pill  mr-1" href="#" data-toggle="modal" data-target="#exampleModal"><span>Sign In</span></button>
            </li>
            <li class="nav-item">
              <button class="nav-link btn-light rounded-pill  mr-1" href="#"><span>Sign Up</span></button>
            </li>


          </ul>

        </div>
      </div>
    </nav>
    <!-- Optional JavaScript; choose one of the two! -->
  </section>

  <!-- banner -->
  <section id="banner">
    <div class="banner">
      <div class="container">
        <div class="row ">
          <div class="col-md-6">
            <h4 class="title">Hallo, Saya cindi</h4>
            <p>Terimakasih,telah berkunjung</p>
            <a href="" class="btn btn-warning">Klik Disini</a>
          </div>
          <div class="col-md-6">
            <img class="img" src="{{asset('img/tim.png')}}" alt="" width="500" height="400">
          </div>
        </div>
      </div>
    </div>

    <svg class="wave" xmins="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#fff" fill-opacity="1" d="M0, 192L120,202.7C240,213,480,235,720,208C960,181,1200,107,1320,69.3L1440,32L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
    </svg>
  </section>
  <!- Features -->
    <section id="features">
      <div class="container mt-4">
        <h2 class="text-center mb-5">Apakah anda ingin memakai services kami?
        </h2>

        <div class="row text-center">
          <div class="col-md-4 features">
            <h4>Marketing</h4>
            <img src="{{asset('img/work.png')}}" class="img-fluid" alt="">

            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus dicta dolor sunt autem. Facere quidem voluptas deleniti ab ipsum. Quam sed officiis repellat quidem? Culpa deserunt consequuntur ut laboriosam blanditiis.</p>
          </div>
          <div class="col-md-4 features">
            <h4>Online</h4>
            <img src="{{asset('img/work.png')}}" class="img-fluid" alt="">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus dicta dolor sunt autem. Facere quidem voluptas deleniti ab ipsum. Quam sed officiis repellat quidem? Culpa deserunt consequuntur ut laboriosam blanditiis.</p>
          </div>
          <div class="col-md-4 features">
            <h4>Stok</h4>
            <img src="{{asset('img/work.png')}}" class="img-fluid" alt="">

            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus dicta dolor sunt autem. Facere quidem voluptas deleniti ab ipsum. Quam sed officiis repellat quidem? Culpa deserunt consequuntur ut laboriosam blanditiis.</p>
          </div>
        </div>

      </div>
    </section>
    <!-- preacing -->
    <section id="pricing" class="bg-light">
      <div class="container">
        <h2 class="text-center mb-3">Mengapa memilih kami?</h2>
        <div class="row">
          <div class="col-md-6">
            <h4>Harga yg terjangkau</h4>
            <ul>
              <li><span>Paket 1</span><a href="" class="btn btn-primary">Rp.6000</a></li>
              <li><span>Paket 2</span><a href="" class="btn btn-primary">Rp.7000</a></li>
              <li><span>Paket 3</span><a href="" class="btn btn-primary">Rp.8000</a></li>
              <li><span>Paket 4</span><a href="" class="btn btn-primary">Rp.9000</a></li>
              <li><span>Paket Spesial Promo</span><a href="" class="btn btn-warning">Rp.10000</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <img src="{{asset('img/why.png')}}" alt="" width="500" height="500">
          </div>
        </div>
      </div>
    </section>
    <section id="contact" class="mt-3">
      <div class="container">
        <h4 class="text-center">Pemesanan</h4>
        <div class="row">
          <div class="col-md-6">

            <img src="{{asset('img/contact.png')}}" alt="" width="500" height="500">
          </div>
          <div class="col-md-5 mt-3">
            <h4>Via Online</h4><br>
            <h5>Buat Akun <a href="">Klik Disini</a></h5><br>
            <p>Atau bisa langsung datang ke tempat</p>
            <div class="card" style="width: 18rem;">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Rumah laundry 381</li>
                <li class="list-group-item">Jl.abcd lorong panjaitan, 30123</li>
                <li class="list-group-item"><a href="">Maps</a></li>
              </ul>
            </div>



          </div>
        </div>

      </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Sign In</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>