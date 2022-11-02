<header class="site-header header-1absolute-header">
    <div class="container-fluid pr-lg--30 pl-lg--30">
      <nav class="navbar site-navbar offcanvas-active navbar-expand-lg navbar-light">
        <!-- Brand Logo-->
        <div class="brand-logo"><a href="javascript:"><img src="./image/png/l1-logo.png" alt=""></a></div>
        <div class="collapse navbar-collapse" id="mobile-menu">
          <div class="navbar-nav ml-lg-auto mr--10">
            <ul class="navbar-nav main-menu">
              <li class="nav-item dropdown">
                <a class="nav-link" id="navbarDropdown" href="{{ route('getIndex') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>Home</b></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="navbarDropdown2" href="{{ route('getPricing') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>Pricing</b></a>
            
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('getContact') }}" role="button" aria-expanded="false"><b>Contact Us</b></a>
              </li>
            </ul>
            <button class="btn-close navbar-toggler" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="true" aria-label="Toggle navigation">
              <i class="icon icon-simple-remove"></i>
            </button>
          </div>
          <button class="btn-close" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="true" aria-label="Toggle navigation">
            <i class="icon icon-e-remove"></i>
          </button>
        </div>
        <div class="header-button site-header__btns  site-header__btns--09 d-flex align-items-center">
          @if (auth()->check())
              <a href="{{ route('getProfile') }}" class="ms-2 text-{{ $header_mode }}">Hello,
                  {{ auth()->user()->name }}</a>
              <div class="v-divider"></div>
              <a class="btn btn-transparent btn-1" href="{{ route('getLogout') }}">
                  <b>Logout</b>
              </a>
          @else
              <a class="btn btn-transparent btn-1 text-dark" href="{{ route('getSignin') }}">
                  <b>Login</b>
              </a>
              <a class="btn btn--primary btn-header hvr-bounce-to-left" href="{{ route('getSignup') }}">
                 <b> Sign Up</b>
              </a>
          @endif
      </div>
      </nav>
    </div>
  </header>