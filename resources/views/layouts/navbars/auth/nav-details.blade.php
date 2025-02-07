<!-- Navbar -->
<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 my-3 {{ (Request::is('static-sign-up') ? 'w-100 shadow-none  navbar-transparent mt-4' : 'blur blur-rounded shadow py-2 start-0 end-0 mx4') }}">
    <div class="container-fluid {{ (Request::is('static-sign-up') ? 'container' : 'container-fluid') }}">
      <!--<a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 >
        <h5>PediPulse</h5>
      </a>-->
      <a class="align-items-center d-flex justify-content-center m-0 navbar-brand text-wrap" {{ (Request::is('static-sign-up') ? 'text-white' : '') }}" href="{{ url('/') }}">
        <img src="{{ asset('assets/img/logo.png') }}" alt="PediPulse Logo" style="max-height: 60px; width: auto;">
      </a>

      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav mx-auto">
          @if (auth()->user())
              <ul class="navbar-nav  justify-content-end">
              <li class="nav-item d-flex align-items-center">
                  <a href="{{ url('/logout')}}" class="nav-link text-body font-weight-bold px-0">
                      <i class="fa fa-user me-sm-1"></i>
                      <span class="d-sm-inline d-none">Sign Out</span>
                  </a>
              </li>
              </ul>
          @endif

        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
