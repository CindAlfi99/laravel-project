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
  <title>Rumah Laundry 381 - About</title>
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
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
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

  <section class="container mt-5">
      <h1 class="h3">About Us</h1>
      <article>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur incidunt odio impedit deleniti suscipit vitae temporibus officia eveniet dolorum mollitia. Ipsam ducimus quos, illum neque voluptatem possimus nulla? Ullam, vero!
      </article>
  </section>
  <footer class="my-4 text-center">
    <p class="mb-0">&copy; 2021 Rumah Laundry 381, Palembang, Indonesia.</p>
  </footer>
</body>

</html>