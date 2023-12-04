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
      <form class="card card-md" method="POST"
        action="{{ route('password.confirm') }}">
        <div class="card-body">
          <div class="mb-4">
            <h2 class="card-title text-center">Authentication required</h2>
            <p class="text-secondary">
              This is a secure area of the application. Please confirm your
              password before continuing.
            </p>
          </div>
          <div class="mb-4 text-center">
            <span class="avatar avatar-xl mb-3"
              style="background-image: url(./static/avatars/000m.jpg)"></span>
            <h3>{{ auth()->user()->name }}</h3>
          </div>

          @csrf

          <div class="mb-3">
            <label class="form-label" for="password">Password</label>
            <div @class([
                'input-group input-group-flat',
                'is-invalid' => $errors->get('password'),
            ])>
              <input class="form-control" name="password" type="password"
                minlength="8" maxlength="20" required
                autocomplete="current-password">
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
            @error('password')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div>
            <button class="btn btn-primary w-100" type="submit">
              <!-- Download SVG icon from http://tabler-icons.io/i/lock-open -->
              <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                  d="M5 11m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" />
                <path d="M12 16m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                <path d="M8 11v-5a4 4 0 0 1 8 0" />
              </svg>
              Confirm
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
