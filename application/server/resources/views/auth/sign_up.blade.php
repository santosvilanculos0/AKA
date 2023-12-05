@extends('layouts.default')

@section('body')
  <div class="page page-center d-flex flex-column">
    <div class="container-tight container py-4">
      <div class="mb-4 text-center">
        <a class="navbar-brand navbar-brand-autodark" href=".">
          <img class="navbar-brand-image" src="./static/logo.svg" alt="Tabler"
            width="110" height="32">
        </a>
      </div>

      <div class="card card-md">
        <div class="card-body">
          <h2 class="card-title mb-4 text-center">Create new account</h2>
          <form method="POST" action="{{ route('sign_up') }}">
            @csrf

            <div class="mb-3">
              <label class="form-label" for="name">Full name</label>
              <input id="name" name="name" type="text"
                value="{{ old('name') }}" @class(['form-control', 'is-invalid' => $errors->get('name')])
                maxlength="255" required autocomplete="name" />
              @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label class="form-label" for="email">Email address</label>
              <input id="email" name="email" type="email"
                value="{{ old('email') }}" @class(['form-control', 'is-invalid' => $errors->get('email')])
                maxlength="255" required autocomplete="email">
              @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label class="form-label" for="password">Password</label>
              <div @class([
                  'input-group input-group-flat',
                  'is-invalid' => $errors->get('password'),
              ])>
                <input class="form-control" name="password" type="password"
                  minlength="8" maxlength="20" required
                  autocomplete="new-password">
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
              @else
                <small class="form-hint">
                  Your password must be 8-20 characters long, contain letters and
                  numbers, and must not contain
                  spaces, special characters, or emoji.
                </small>
              @enderror
            </div>

            <div class="mb-3">
              <label class="form-label" for="password_confirmation">
                Confirm Password
              </label>
              <div class="input-group input-group-flat">
                <input class="form-control" id="password_confirmation"
                  name="password_confirmation" type="password" minlength="8"
                  maxlength="20" required autocomplete="new-password">
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

            <div class="mb-3">
              <label class="form-check">
                <input class="form-check-input" type="checkbox" />
                <span class="form-check-label">
                  Agree the
                  <a href="./terms-of-service.html" tabindex="-1">
                    terms and policy
                  </a>
                  .
                </span>
              </label>
            </div>

            <div class="form-footer">
              <button class="btn btn-primary w-100" type="submit">Create new
                account</button>
            </div>
          </form>
        </div>
      </div>

      <div class="text-secondary mt-3 text-center">
        Already have account?
        <a href="{{ route('sign_in') }}" tabindex="-1">
          Sign in
        </a>
      </div>
    </div>
  </div>
@endsection
