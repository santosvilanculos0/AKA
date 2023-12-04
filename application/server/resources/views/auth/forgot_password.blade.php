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
  <script src="./dist/js/demo-theme.min.js?1692870487"></script>
  <div class="page page-center">
    <div class="container-tight container py-4">
      @if (session('status'))
        <div class="alert alert-info alert-dismissible" role="alert">
          <div class="d-flex">
            <div>
              <!-- Download SVG icon from http://tabler-icons.io/i/info-circle -->
              <svg class="icon alert-icon" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                <path d="M12 9h.01"></path>
                <path d="M11 12h1v4h1"></path>
              </svg>
            </div>
            <div>
              {{ session('status') }}
            </div>
          </div>
          <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
        </div>
      @endif
      <div class="mb-4 text-center">
        <a class="navbar-brand navbar-brand-autodark" href=".">
          <img class="navbar-brand-image" src="./static/logo.svg" alt="Tabler"
            width="110" height="32">
        </a>
      </div>
      <div class="card card-md">
        <div class="card-body">
          <h2 class="card-title mb-4 text-center">Forgot password</h2>
          <p class="text-secondary mb-4">
            Enter your email address and your
            password will be reset and emailed to you.
          </p>

          <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="mb-3">
              <label class="form-label" for="email">Email address</label>
              <input id="email" name="email" type="email"
                value="{{ old('email') }}" @class(['form-control', 'is-invalid' => $errors->get('email')])
                maxlength="255" required autocomplete="email">
              @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror

              @if (session('status') && !$errors->get('email'))
                <small class="form-hint">
                  {{ session('status') }}
                </small>
              @endif
            </div>

            <div class="form-footer">
              <button class="btn btn-primary w-100" type="submit">
                <!-- Download SVG icon from http://tabler-icons.io/i/mail -->
                <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" viewBox="0 0 24 24"
                  stroke-width="2" stroke="currentColor" fill="none"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path
                    d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                  <path d="M3 7l9 6l9 -6" />
                </svg>
                Send me new password
              </button>
            </div>
          </form>
        </div>
      </div>

      <div class="text-secondary mt-3 text-center">
        Forget it,
        <a href="{{ route('sign_in') }}">
          send me back
        </a>
        to the sign in screen.
      </div>
    </div>
  </div>
</body>

</html>
