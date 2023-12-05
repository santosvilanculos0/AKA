@extends('layouts.default')

@section('body')
  <div class="page page-center d-flex flex-column">

    <div class="container-tight container py-4">

      @if (session('status') == 'verification-link-sent')
        <div class="alert alert-info alert-dismissible" role="alert">
          <div class="d-flex">
            <div>
              <!-- Download SVG icon from http://tabler-icons.io/i/info-circle -->
              <svg class="icon alert-icon" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                <path d="M12 9h.01"></path>
                <path d="M11 12h1v4h1"></path>
              </svg>
            </div>
            <div>
              A new verification link has been sent to the email address you
              provided during registration.
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
          <h2 class="card-title mb-4 text-center">Verify Email</h2>
          <p class="text-secondary mb-4">
            Thanks for signing up! Before getting started, could you verify your
            email address by clicking on the link we just emailed to you? If you
            didn't receive the email, we will gladly send you another.
          </p>

          <div class="form-footer">
            <form method="POST" action="{{ route('verification.send') }}">
              @csrf

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
                Resend Verification Email
              </button>
            </form>
            <form class="mt-2" method="POST" action="{{ route('logout') }}">
              @csrf

              <button class="btn w-100" type="submit">
                <svg class="icon icon-tabler icon-tabler-logout"
                  xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                  fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path
                    d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                  <path d="M9 12h12l-3 -3" />
                  <path d="M18 15l3 -3" />
                </svg>
                Log Out
              </button>
            </form>
          </div>
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
@endsection
