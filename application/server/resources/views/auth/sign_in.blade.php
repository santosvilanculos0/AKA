<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1, viewport-fit=cover" />

  <title>{{ config('app.name') }}</title>

  @vite(['resources/scss/index.scss', 'resources/js/index.js'])
</head>

<body class="d-flex flex-column">
  <div class="page page-center">
    <div class="container-tight container py-4">
      <div class="mb-4 text-center">
        <a class="navbar-brand navbar-brand-autodark" href=".">
          <img class="navbar-brand-image" src="./static/logo.svg" alt="Tabler"
            width="110" height="32">
        </a>
      </div>

      <div class="card card-md">
        <div class="card-body">
          <h2 class="h2 mb-4 text-center">Login to your account</h2>
          <form method="POST" action="{{ route('sign_in') }}">
            @csrf

            <div class="mb-3">
              <label class="form-label" for="email">Email address</label>
              <input id="email" name="email" type="email"
                value="{{ old('email') }}" @class(['form-control', 'is-invalid' => $errors->get('email')])
                required autocomplete="email">
              @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-2">
              <label class="form-label" for="password">
                Password
                @if (Route::has('password.request'))
                  <span class="form-label-description">
                    <a href="{{ route('password.request') }}">
                      I forgot password
                    </a>
                  </span>
                @endif
              </label>

              <div class="input-group input-group-flat is-invalid">
                <input class="form-control" name="password" type="password"
                  required autocomplete="current-password">
                <span class="input-group-text">
                  <a class="link-secondary" data-bs-toggle="tooltip"
                    href="#" title="Show password">
                    {{-- eye --}}
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                      width="24" height="24" viewBox="0 0 24 24"
                      stroke-width="2" stroke="currentColor" fill="none"
                      stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                      <path
                        d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                    </svg>
                  </a>
                </span>
              </div>
            </div>

            <div class="mb-2">
              <label class="form-check">
                <input class="form-check-input" name="remember"
                  type="checkbox" />
                <span class="form-check-label">Remember me on this device</span>
              </label>
            </div>

            <div class="form-footer">
              <button class="btn btn-primary w-100" type="submit">
                Sign in
              </button>
            </div>
          </form>
        </div>
      </div>
      <div class="text-secondary mt-3 text-center">
        Don't have account yet?
        <a href="{{ route('sign_up') }}" tabindex="-1">Sign up</a>
      </div>
    </div>
  </div>
</body>

</html>
