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

      <div class="card card-md">
        <div class="card-body">
          <h2 class="card-title mb-4 text-center">Registar</h2>
          <form method="POST" action="{{ route('sign_up') }}">
            @csrf

            <div class="mb-3">
              <label class="form-label" for="name">Nome completo</label>
              <input id="name" name="name" type="text"
                value="{{ old('name') }}" @class(['form-control', 'is-invalid' => $errors->get('name')])
                maxlength="255" required autocomplete="name" />
              @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label class="form-label" for="email">Email</label>
              <input id="email" name="email" type="email"
                value="{{ old('email') }}" @class(['form-control', 'is-invalid' => $errors->get('email')])
                maxlength="255" required autocomplete="email">
              @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label class="form-label" for="password">Palavra-passe</label>
              <input name="password" type="password" @class(['form-control', 'is-invalid' => $errors->get('password')])
                minlength="8" required autocomplete="new-password">
              @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
              @else
                <small class="form-hint">
                  A sua palavra-passe deve ter pelo menos 8 caracteres e não pode
                  conter espaços, caracteres especiais ou emojis.
                </small>
              @enderror
            </div>

            <div class="mb-3">
              <label class="form-label" for="password_confirmation">
                Confirmar palavra-passe
              </label>
              <input class="form-control" id="password_confirmation"
                name="password_confirmation" type="password" minlength="8"
                maxlength="20" required autocomplete="new-password">
            </div>

            <div class="mb-3">
              <label @class(['form-check', 'is-invalid' => $errors->get('condition')])>
                <input class="form-check-input" name="condition" type="checkbox"
                  @checked(!!old('condition')) />
                <span class="form-check-label">
                  Aceito os Termos de Utilização e reconheço a Política de
                  Privacidade e a Política de Cookies.
                </span>
              </label>
              @error('condition')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-footer">
              <button class="btn btn-primary w-100"
                type="submit">Registar</button>
            </div>
          </form>
        </div>
      </div>

      <div class="text-secondary mt-3 text-center">
        Já possui uma conta?
        <a href="{{ route('sign_in') }}" tabindex="-1">
          Inicie uma sessão
        </a>
      </div>
    </div>
  </div>
@endsection
