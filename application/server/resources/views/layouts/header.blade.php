<header class="navbar navbar-expand-md d-print-none">
  <div class="container-xl">
    <button class="navbar-toggler" data-bs-toggle="collapse"
      data-bs-target="#navbar-menu" type="button" aria-controls="navbar-menu"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <h1
      class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-md-3 pe-0">
      <a href="/">
        <img class="navbar-brand-image d-block object-contain"
          src="{{ Vite::image('red_cross.svg') }}"
          alt="{{ config('app.name') }}">
      </a>
    </h1>
    <div class="navbar-nav order-md-last flex-row">
      <div class="d-none d-md-flex">
        <a class="nav-link hide-theme-dark px-0" data-bs-toggle="tooltip"
          data-bs-placement="bottom" href="?theme=dark"
          title="Enable dark mode">
          <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
          <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24"
            height="24" viewBox="0 0 24 24" stroke-width="2"
            stroke="currentColor" fill="none" stroke-linecap="round"
            stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path
              d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
          </svg>
        </a>
        <a class="nav-link hide-theme-light px-0" data-bs-toggle="tooltip"
          data-bs-placement="bottom" href="?theme=light"
          title="Enable light mode">
          <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
          <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24"
            height="24" viewBox="0 0 24 24" stroke-width="2"
            stroke="currentColor" fill="none" stroke-linecap="round"
            stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
            <path
              d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
          </svg>
        </a>
        <div class="nav-item dropdown d-none d-md-flex me-3">
          <a class="nav-link px-0" data-bs-toggle="dropdown" href="#"
            aria-label="Show notifications" tabindex="-1">
            <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
            <svg class="icon" xmlns="http://www.w3.org/2000/svg"
              width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
              stroke="currentColor" fill="none" stroke-linecap="round"
              stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path
                d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
              <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
            </svg>
            <span class="badge bg-red"></span>
          </a>
          <div
            class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Last updates</h3>
              </div>
              <div class="list-group list-group-flush list-group-hoverable">
                <div class="list-group-item">
                  <div class="row align-items-center">
                    <div class="col-auto"><span
                        class="status-dot status-dot-animated bg-red d-block"></span>
                    </div>
                    <div class="col text-truncate">
                      <a class="text-body d-block" href="#">Example
                        1</a>
                      <div class="d-block text-secondary text-truncate mt-n1">
                        Change deprecated html tags to text decoration
                        classes (#29604)
                      </div>
                    </div>
                    <div class="col-auto">
                      <a class="list-group-item-actions" href="#">
                        <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                        <svg class="icon text-muted"
                          xmlns="http://www.w3.org/2000/svg" width="24"
                          height="24" viewBox="0 0 24 24" stroke-width="2"
                          stroke="currentColor" fill="none"
                          stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z"
                            fill="none" />
                          <path
                            d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="list-group-item">
                  <div class="row align-items-center">
                    <div class="col-auto"><span
                        class="status-dot d-block"></span></div>
                    <div class="col text-truncate">
                      <a class="text-body d-block" href="#">Example
                        2</a>
                      <div class="d-block text-secondary text-truncate mt-n1">
                        justify-content:between ⇒
                        justify-content:space-between (#29734)
                      </div>
                    </div>
                    <div class="col-auto">
                      <a class="list-group-item-actions show" href="#">
                        <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                        <svg class="icon text-yellow"
                          xmlns="http://www.w3.org/2000/svg" width="24"
                          height="24" viewBox="0 0 24 24" stroke-width="2"
                          stroke="currentColor" fill="none"
                          stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z"
                            fill="none" />
                          <path
                            d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="list-group-item">
                  <div class="row align-items-center">
                    <div class="col-auto"><span
                        class="status-dot d-block"></span></div>
                    <div class="col text-truncate">
                      <a class="text-body d-block" href="#">Example
                        3</a>
                      <div class="d-block text-secondary text-truncate mt-n1">
                        Update change-version.js (#29736)
                      </div>
                    </div>
                    <div class="col-auto">
                      <a class="list-group-item-actions" href="#">
                        <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                        <svg class="icon text-muted"
                          xmlns="http://www.w3.org/2000/svg" width="24"
                          height="24" viewBox="0 0 24 24" stroke-width="2"
                          stroke="currentColor" fill="none"
                          stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z"
                            fill="none" />
                          <path
                            d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="list-group-item">
                  <div class="row align-items-center">
                    <div class="col-auto"><span
                        class="status-dot status-dot-animated bg-green d-block"></span>
                    </div>
                    <div class="col text-truncate">
                      <a class="text-body d-block" href="#">Example
                        4</a>
                      <div class="d-block text-secondary text-truncate mt-n1">
                        Regenerate package-lock.json (#29730)
                      </div>
                    </div>
                    <div class="col-auto">
                      <a class="list-group-item-actions" href="#">
                        <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                        <svg class="icon text-muted"
                          xmlns="http://www.w3.org/2000/svg" width="24"
                          height="24" viewBox="0 0 24 24" stroke-width="2"
                          stroke="currentColor" fill="none"
                          stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z"
                            fill="none" />
                          <path
                            d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      @include('layouts.menu')
    </div>

    <div class="navbar-collapse collapse" id="navbar-menu">
      <div
        class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="./">
              <span
                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" viewBox="0 0 24 24"
                  stroke-width="2" stroke="currentColor" fill="none"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                  <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                  <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                </svg>
              </span>
              <span class="nav-link-title">
                Home
              </span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
              data-bs-auto-close="outside" href="#navbar-help" role="button"
              aria-expanded="false">
              <span
                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/lifebuoy -->
                <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" viewBox="0 0 24 24"
                  stroke-width="2" stroke="currentColor" fill="none"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                  <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                  <path d="M15 15l3.35 3.35" />
                  <path d="M9 15l-3.35 3.35" />
                  <path d="M5.65 5.65l3.35 3.35" />
                  <path d="M18.35 5.65l-3.35 3.35" />
                </svg>
              </span>
              <span class="nav-link-title">
                Ajuda
              </span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#" target="_blank"
                rel="noopener">
                FAQ
              </a>
              <a class="dropdown-item" href="#" target="_blank"
                rel="noopener">
                Contacte-nos
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>
