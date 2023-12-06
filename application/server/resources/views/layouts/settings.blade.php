@extends('layouts.default')

@section('body')
  <div class="page">
    @include('layouts.header')

    <div class="page-wrapper">
      <div class="page-body">
        <div class="container-xl">
          <div class="row g-4">
            <div class="col-12 col-md-3">
              <nav>
                {{-- <h4 class="subheader">Conta</h4> --}}
                <div class="list-group list-group-transparent">
                  <a class="list-group-item list-group-item-action d-flex align-items-center active"
                    href="{{ route('settings') }}">Perfil</a>

                  <a class="list-group-item list-group-item-action d-flex align-items-center"
                    href="#">Conta</a>

                  <a class="list-group-item list-group-item-action d-flex align-items-center"
                    href="#">Aparência</a>

                  <a class="list-group-item list-group-item-action d-flex align-items-center"
                    href="#">Notificações</a>
                </div>

                <div class="hr my-1"></div>

                <h4 class="subheader mt-4">Acesso</h4>

                <div class="list-group list-group-transparent">
                  <a class="list-group-item list-group-item-action d-flex align-items-center"
                    href="#">Palavra-passe</a>
                </div>

                <div class="list-group list-group-transparent">
                  <a class="list-group-item list-group-item-action d-flex align-items-center"
                    href="#">Email</a>
                </div>

                <div class="hr my-1"></div>

                <h4 class="subheader mt-4">API</h4>

                <div class="list-group list-group-transparent">
                  <a class="list-group-item list-group-item-action"
                    href="#">Token</a>
                </div>

                <div class="hr my-1"></div>

                <h4 class="subheader mt-4">Experiência</h4>

                <div class="list-group list-group-transparent">
                  <a class="list-group-item list-group-item-action"
                    href="#">Feedback</a>
                </div>
              </nav>
            </div>
            <div class="col-12 col-md-9 d-flex flex-column">
              @yield('right')
            </div>
          </div>
        </div>
      </div>

      @include('layouts.footer')
    </div>
  </div>
@endsection
