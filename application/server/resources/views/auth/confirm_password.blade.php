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
      <form class="card card-md" method="POST"
        action="{{ route('password.confirm') }}">
        <div class="card-body">
          <div class="mb-4 text-center">
            <h2 class="card-title">Autenticação necessária</h2>
            <p class="text-secondary">
              Esta é uma área segura da aplicação. Por favor, confirme a sua
              palavra-passe antes de continuar.
            </p>
          </div>
          <div class="mb-4 text-center">
            <span class="avatar avatar-xl mb-3"
              style="background-image: url(./static/avatars/000m.jpg)"></span>
            <h3>{{ auth()->user()->name }}</h3>
          </div>

          @csrf

          <div class="mb-3">
            <label class="form-label" for="password">Palavra-passe</label>

            <input name="password" type="password" @class(['form-control', 'is-invalid' => $errors->get('password')])
              minlength="8" maxlength="20" required
              autocomplete="current-password">
            @error('password')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div>
            <button class="btn btn-primary w-100" type="submit">
              <!-- Download SVG icon from http://tabler-icons.io/i/lock-open -->
              <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                  d="M5 11m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" />
                <path d="M12 16m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                <path d="M8 11v-5a4 4 0 0 1 8 0" />
              </svg>
              Confirmar
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
