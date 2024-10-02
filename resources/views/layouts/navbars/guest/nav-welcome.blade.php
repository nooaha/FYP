<!-- Navbar -->
<nav
  class="navbar navbar-expand-lg position-absolute top-0 z-index-3 my-3 {{ (Request::is('static-sign-up') ? 'w-100 shadow-none  navbar-transparent mt-4' : 'blur blur-rounded shadow py-2 start-0 end-0 mx4') }}">
  <div class="container-fluid {{ (Request::is('static-sign-up') ? 'container' : 'container-fluid') }}">
    <!--<a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 >
      <h5>PediPulse</h5>
    </a>-->
    <a class="align-items-center d-flex justify-content-center m-0 navbar-brand text-wrap" {{ (Request::is('static-sign-up') ? 'text-white' : '') }}" href="{{ url('/') }}">
      <img src="{{ asset('assets/img/logo.png') }}" alt="PediPulse Logo" style="max-height: 60px; width: auto;">
    </a>

    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation"
      aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon mt-2">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse" id="navigation">
      <ul class="navbar-nav mx-auto">
        @if (auth()->user())
      <li class="nav-item">
        <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="{{ url('paparan-utama') }}">
        <i class="fa fa-chart-pie opacity-6 me-1 {{ (Request::is('static-sign-up') ? '' : 'text-dark') }}"></i>
        Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link me-2" href="{{ url('user-profile') }}">
        <i class="fa fa-user opacity-6 me-1 {{ (Request::is('static-sign-up') ? '' : 'text-dark') }}"></i>
        Profile
        </a>
      </li>
    @endif
        <li class="nav-item">
          <a class="nav-link me-2" href="#home">
              <strong>
                  Halaman Utama
              </strong>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#aboutUs">
            <strong>
                  Tentang Kami
              </strong>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#contactUs">
            <strong>
                  Hubungi Kami
              </strong>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav d-flex justify-content-end pt-2" >
        <li class="nav-item">
          <a class="btn btn-primary me-2" aria-current="page"  href="{{ auth()->user() ? url('static-sign-in') : url('login') }}">
            Log Masuk</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-secondary me-2" aria-current="page" href="{{ auth()->user() ? url('static-sign-up') : url('register') }}">
            Daftar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->
