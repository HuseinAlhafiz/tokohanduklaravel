<nav
  class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
  data-aos="fade-down"
>
  <div class="container d-flex justify-content-between">
    <a href="{{url('/') }}" class="navbar-brand">
      <img src="{{ asset('images/logo.svg') }}" alt="Logo" />
    </a>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarResponsive"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="{{url('/') }}" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="{{url('/categories') }}" class="nav-link">Categories</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Rewards</a>
        </li>
        <li class="nav-item">
          <a href="/register.html" class="nav-link">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>