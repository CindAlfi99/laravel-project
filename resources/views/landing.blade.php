<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link href="{{asset('css/fixlanding.css')}}" rel="stylesheet">
  <title>Rumah Laundry 381</title>
  @laravelPWA
</head>

<body>
  <section id="navbar">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/"><span>R'L381</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/about')}}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Contact</a>
            </li>
          </ul>
        </div>
        <div class="collapse navbar-collapse navv" id="navbarNav">
          <ul class="navbar-nav ml-md-auto">
            <li class="nav-item mr-md-2 mb-2 mb-md-0">
              <button class="nav-link btn btn-light btn-custom" href="#" data-toggle="modal" data-target="#modalSignIn"><span>Sign In</span></button>
            </li>
            <li class="nav-item">
              <button class="nav-link btn btn-light btn-custom" href="/register" data-toggle="modal" data-target="#modalSignUp"><span>Sign Up</span></button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Optional JavaScript; choose one of the two! -->
  </section>

  <!-- banner -->
  <section id="banner">
    <div class="banner mt-5 mt-md-0">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 order-2 order-md-1 text-center text-md-left banner-text">
            <h1 class="h3">Hai, Kami Rumah Laundry 381!</h1>
            <p class="h5">Terimakasih telah berkunjung</p>
            <a href="#" class="btn btn-warning text-white btn-custom">Bergabung bersama kami</a>
          </div>
          <div class="col-12 col-md-6 order-1 order-md-2 mb-4 mb-md-0">
            <img
              class="img"
              src="{{asset('img/tim.png')}}"
              alt="Illustration"
              width="100%"
            >
          </div>
        </div>
      </div>
    </div>

    <svg class="wave" xmins="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#fff" fill-opacity="1" d="M0, 192L120,202.7C240,213,480,235,720,208C960,181,1200,107,1320,69.3L1440,32L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
    </svg>
  </section>
  <!-- Features -->
  <section id="features">
    <div class="container mt-5">
      <h2 class="text-center mb-3 mb-md-5">Apakah anda ingin memakai services kami?</h2>
      <div class="row text-center">
        <div class="col-md-4 mb-3 mb-md-0">
          <h4 class="mb-0">Marketing</h4>
          <img
            src="{{asset('img/work.png')}}"
            class="img-fluid"
            alt="work"
          >
          <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus dicta dolor sunt autem. Facere quidem voluptas deleniti ab ipsum. Quam sed officiis repellat quidem? Culpa deserunt consequuntur ut laboriosam blanditiis.</p>
        </div>
        <div class="col-md-4 mb-3 mb-md-0">
          <h4 class="mb-0">Online</h4>
          <img
            src="{{asset('img/work.png')}}"
            class="img-fluid"
            alt="work"
          >
          <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus dicta dolor sunt autem. Facere quidem voluptas deleniti ab ipsum. Quam sed officiis repellat quidem? Culpa deserunt consequuntur ut laboriosam blanditiis.</p>
        </div>
        <div class="col-md-4 mb-3 mb-md-0">
          <h4 class="mb-0">Stok</h4>
          <img
            src="{{asset('img/work.png')}}"
            class="img-fluid"
            alt="work"
          >
          <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus dicta dolor sunt autem. Facere quidem voluptas deleniti ab ipsum. Quam sed officiis repellat quidem? Culpa deserunt consequuntur ut laboriosam blanditiis.</p>
        </div>
      </div>

    </div>
  </section>
  <!-- preacing -->
  <section id="pricing" class="bg-light">
    <div class="container">
      <h2 class="text-center mb-3">Mengapa memilih kami?</h2>
      <div class="row px-2">
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
          <img
            src="{{asset('img/why.png')}}"
            alt="Why us"
            width="100%"
          >
        </div>
      </div>
    </div>
  </section>
  <section id="contact" class="mt-3">
    <div class="container">
      <h2 class="text-center mb-3">Pemesanan</h2>
      <div class="row px-2">
        <div class="col-md-6">
          <img
            src="{{asset('img/contact.png')}}"
            alt="Contact"
            width="100%"
          >
        </div>
        <div class="col-md-6 mt-3">
          <h5>Via Online</h5>
          <p>Buat akun <a href="#">disini</a></p>
          <p>Atau bisa langsung datang ke gerai kami di:</p>
          <div class="card">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Rumah laundry 381</li>
              <li class="list-group-item">Jl. abcd lorong panjaitan, Palembang, Sumatera, Selatan, Indonesia 30123</li>
              <li class="list-group-item"><a href="">Maps</a></li>
            </ul>
          </div>



        </div>
      </div>

    </div>
  </section>
  <footer class="my-4 text-center">
    <p class="mb-0">&copy; 2021 Rumah Laundry 381, Palembang, Indonesia.</p>
  </footer>

  <!-- Modal Sign In -->
  <div class="modal fade" id="modalSignIn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sign In</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- isi -->
          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-6 offset-md-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                  <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                  </label>
                </div>
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
                </a>
                @endif
              </div>
            </div>
          </form>
          <!-- batas -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>

  <!-- Modal sign up -->
  <div class="modal fade" id="modalSignUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- isi -->

          <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

              <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  {{ __('Register') }}
                </button>
              </div>
            </div>
          </form>

          <!-- batas -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

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