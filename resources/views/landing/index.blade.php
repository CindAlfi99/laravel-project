<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<title>Laundry</title>

	<!-- Bootstrap core CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>


	<!-- Custom styles for this template -->
	<link href="{{asset('css/landing.css')}}" rel="stylesheet">
</head>

<body>

	<header class="site-header sticky-top py-1">
		<nav class="container d-flex flex-column flex-md-row justify-content-between">
			<div class="d-flex flex-row justify-content-between">
				<a class="py-2" href="/" aria-label="Product">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
						stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img"
						viewBox="0 0 24 24">
						<title>Product</title>
						<circle cx="12" cy="12" r="10" />
						<path
							d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
					</svg>
				</a>
				<a class="py-2 ms-5 me-3 d-none d-md-inline-block" href="#about">About</a>
				<a class="py-2 mx-3 d-none d-md-inline-block" href="#">Services</a>
				<a class="py-2 mx-3 d-none d-md-inline-block" href="#pricing">Pricing</a>
			</div>
			<div>
				<button type="button" class="btn btn-primary btn-sm py-2" data-bs-toggle="modal"
					data-bs-target="#loginModal">
					Login
				</button>
				<button type="button" class="btn btn-warning btn-sm py-2" data-bs-toggle="modal"
					data-bs-target="#registerModal">
					Register
				</button>
			</div>
		</nav>
	</header>

	<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="loginModalLabel">Login</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form method="POST" action="{{ route('login') }}">
						@csrf
						<div class="mb-3">
							<label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
							<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" name="email" aria-describedby="emailHelp">
							@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
						<div class="mb-3">
							<label for="password" class="form-label">{{ __('Password') }}</label>
							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
							@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="mb-3 form-check">
							<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
							<label class="form-check-label" for="remember">
								{{ __('Remember Me') }}
							</label>
						</div>
						<button type="submit" class="btn btn-primary">
							{{ __('Login') }}
						</button>

						@if (Route::has('password.request'))
							<a class="btn btn-link" href="{{ route('password.request') }}">
								{{ __('Forgot Your Password?') }}
							</a>
						@endif
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="registerModalLabel">Login</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form method="POST" action="{{ route('register') }}">
						@csrf
						<div class="mb-3">
							<label for="name" class="form-label">{{ __('Name') }}</label>
							<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name" aria-describedby="nameHelp" required autofocus>
							@error('name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
						<div class="mb-3">
							<label for="emailReg" class="form-label">{{ __('E-Mail Address') }}</label>
							<input id="emailReg" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" aria-describedby="emailHelp">
							@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
						<div class="mb-3">
							<label for="passwordReg" class="form-label">{{ __('Password') }}</label>
							<input id="passwordReg" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
							@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="mb-3">
							<label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
							<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
						</div>
						<button type="submit" class="btn btn-primary">
							{{ __('Register') }}
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<main>
		<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
			<div class="col-md-5 p-lg-5 mx-auto my-5">
				<h1 class="display-4 fw-normal">Punny headline</h1>
				<p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with
					this
					example based on Apple’s marketing pages.</p>
				<a class="btn btn-outline-secondary" href="#">Coming soon</a>
			</div>
			<div class="product-device shadow-sm d-none d-md-block"></div>
			<div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
		</div>

		<section id="about">
			<div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
				<div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
					<div class="my-3 py-3">
						<h2 class="display-5">Another headline</h2>
						<p class="lead">And an even wittier subheading.</p>
					</div>
					<div class="bg-light shadow-sm mx-auto"
						style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
					</div>
				</div>
				<div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
					<div class="my-3 p-3">
						<h2 class="display-5">Another headline</h2>
						<p class="lead">And an even wittier subheading.</p>
					</div>
					<div class="bg-dark shadow-sm mx-auto"
						style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
				</div>
			</div>
		</section>

		<div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
			<div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
				<div class="my-3 p-3">
					<h2 class="display-5">Another headline</h2>
					<p class="lead">And an even wittier subheading.</p>
				</div>
				<div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
				</div>
			</div>
			<div class="bg-primary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
				<div class="my-3 py-3">
					<h2 class="display-5">Another headline</h2>
					<p class="lead">And an even wittier subheading.</p>
				</div>
				<div class="bg-light shadow-sm mx-auto"
					style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
			</div>
		</div>

		<div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
			<div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
				<div class="my-3 p-3">
					<h2 class="display-5">Another headline</h2>
					<p class="lead">And an even wittier subheading.</p>
				</div>
				<div class="bg-body shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
				</div>
			</div>
			<div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
				<div class="my-3 py-3">
					<h2 class="display-5">Another headline</h2>
					<p class="lead">And an even wittier subheading.</p>
				</div>
				<div class="bg-body shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
				</div>
			</div>
		</div>

		<section id="pricing">
			<div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
				<div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
					<div class="my-3 p-3">
						<h2 class="display-5">Another headline</h2>
						<p class="lead">And an even wittier subheading.</p>
					</div>
					<div class="bg-body shadow-sm mx-auto"
						style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
				</div>
				<div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
					<div class="my-3 py-3">
						<h2 class="display-5">Another headline</h2>
						<p class="lead">And an even wittier subheading.</p>
					</div>
					<div class="bg-body shadow-sm mx-auto"
						style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
				</div>
			</div>
		</section>
	</main>

	<footer class="container py-5">
		<div class="row">
			<div class="col-12 col-md">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
					stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img"
					viewBox="0 0 24 24">
					<title>Product</title>
					<circle cx="12" cy="12" r="10" />
					<path
						d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
				</svg>
				<small class="d-block mb-3 text-muted">&copy; 2017–2021</small>
			</div>
			<div class="col-6 col-md">
				<h5>Features</h5>
				<ul class="list-unstyled text-small">
					<li><a class="link-secondary" href="#">Cool stuff</a></li>
					<li><a class="link-secondary" href="#">Random feature</a></li>
					<li><a class="link-secondary" href="#">Team feature</a></li>
					<li><a class="link-secondary" href="#">Stuff for developers</a></li>
					<li><a class="link-secondary" href="#">Another one</a></li>
					<li><a class="link-secondary" href="#">Last time</a></li>
				</ul>
			</div>
			<div class="col-6 col-md">
				<h5>Resources</h5>
				<ul class="list-unstyled text-small">
					<li><a class="link-secondary" href="#">Resource name</a></li>
					<li><a class="link-secondary" href="#">Resource</a></li>
					<li><a class="link-secondary" href="#">Another resource</a></li>
					<li><a class="link-secondary" href="#">Final resource</a></li>
				</ul>
			</div>
			<div class="col-6 col-md">
				<h5>Resources</h5>
				<ul class="list-unstyled text-small">
					<li><a class="link-secondary" href="#">Business</a></li>
					<li><a class="link-secondary" href="#">Education</a></li>
					<li><a class="link-secondary" href="#">Government</a></li>
					<li><a class="link-secondary" href="#">Gaming</a></li>
				</ul>
			</div>
			<div class="col-6 col-md">
				<h5>About</h5>
				<ul class="list-unstyled text-small">
					<li><a class="link-secondary" href="#">Team</a></li>
					<li><a class="link-secondary" href="#">Locations</a></li>
					<li><a class="link-secondary" href="#">Privacy</a></li>
					<li><a class="link-secondary" href="#">Terms</a></li>
				</ul>
			</div>
		</div>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
	</script>

</body>

</html>