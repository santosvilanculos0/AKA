@extends('layouts.default')

@section('body')
  <div class="page page-center d-flex flex-column">
    <div class="container-tight container py-4">
      <div class="mb-4 text-center">
        <a class="navbar-brand navbar-brand-autodark" href="/">
          <img class="navbar-brand-image d-block object-contain"
            src="{{ Vite::image('red_cross.svg') }}" alt="{{ config('app.name') }}">
        </a>
      </div>

      <form method="POST" action="{{ route('sign_in') }}">
        <div class="card card-md">
          <div class="card-body">
            <h2 class="h2 mb-4 text-center">Iniciar sessão</h2>
            @csrf

            <div class="mb-3">
              <label class="form-label" for="email">Email</label>
              <input id="email" name="email" type="email"
                value="{{ old('email') }}" @class(['form-control', 'is-invalid' => $errors->get('email')]) required
                autocomplete="username">
              @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-2">
              <label class="form-label" for="password">
                Palavra-passe
                @if (Route::has('password.request'))
                  <span class="form-label-description">
                    <a href="{{ route('password.request') }}">
                      Esqueceu-se da palavra-passe?
                    </a>
                  </span>
                @endif
              </label>
              <input class="form-control" id="password" name="password"
                type="password" required autocomplete="current-password">
            </div>

            <div class="mb-2">
              <label class="form-check">
                <input class="form-check-input" name="remember" type="checkbox" />
                <span class="form-check-label">
                  Manter a sessão neste dispositivo.
                </span>
              </label>
            </div>

            <div class="form-footer">
              <button class="btn btn-primary w-100" type="submit">
                Iniciar sessão
              </button>
            </div>
          </div>
        </div>
      </form>

      <div class="text-secondary mt-3 text-center">
        Não possui uma conta?
        <a href="{{ route('sign_up') }}" tabindex="-1">
          Regista-te
        </a>
      </div>
    </div>
  </div>
@endsection
