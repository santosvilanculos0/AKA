<div class="nav-item dropdown">
  <a class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
    href="#" aria-label="Open user menu">
    <span class="avatar avatar-sm rounded-0"
      style="background-image: url({{ auth()->user()->image_url }})">
    </span>
    <div class="d-none d-xl-block ps-2">
      <div>{{ auth()->user()->name }}</div>
      <div class="small text-secondary mt-1">UI Designer</div>
    </div>
  </a>

  <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
    <a class="dropdown-item" href="#">
      <x-icon.layout-dashboard class="dropdown-item-icon" />
      Dashboard
    </a>

    <a class="dropdown-item" href="#">
      <x-icon.user class="dropdown-item-icon" />
      Perfil
    </a>

    <a class="dropdown-item" href="#">
      <x-icon.message-report class="dropdown-item-icon" />
      Feedback
    </a>

    <div class="dropdown-divider my-1"></div>

    <a class="dropdown-item" href="{{ route('settings.account') }}">
      <x-icon.settings class="dropdown-item-icon" />
      Configurações
    </a>

    <div class="dropdown-divider my-1"></div>

    <form action="{{ route('sign_out') }}" method="POST">
      @csrf
      <button class="dropdown-item text-red" type="submit">
        <x-icon.logout class="dropdown-item-icon text-red" />
        Logout
      </button>
    </form>
  </div>
</div>
