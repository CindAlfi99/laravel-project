@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
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
</div>
@endsection
