<div class="container-fluid">
    <div
      class="row navbar navbar-expand-md navbar-expand-lg"
      id="mid-nav-bar"
    >
      <!-- logo image -->
      <div class="navbar-brand col-lg-3 col-md-3 col-sm-4">
        <img src="../images/logo/logo.png" alt="logo image" id="logo-img" />
      </div>
      <!-- navbar-toggler for small devices -->
      <button
        class="navbar-toggler col-sm-2"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarToggler"
        aria-controls="navbarToggler"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- search for the desktop -->
      <div id="search" class="col-lg-6 col-md-5 desktop-menu">
        @include('partials._search')
      </div>
      <!-- login signup buttons for the desktop -->
      <div class="col-lg-2 col-md-3 desktop-menu buttons">
        <a href="#" role="button" class="btn btn-success">Sign up</a>
        <a href="#" role="button" class="btn btn-outline-success"
          >Log in</a
        >
      </div>
    </div>
  </div>
  <!-- bottom navigation bar -->
  @include('partials.navigation._linksNavBar')
  <!-- menu for small devices -->
  <div class="mobile-menu collapse navbar-collapse" id="navbarToggler">
    <div class="row">
      @include('partials._search')
    </div>
    <div>
      <ul class="row">
        <li class="col-sm-4">
          <a href="#" class="btn btn-secondary buttons" role="button"
            >All products</a
          >
        </li>
        <li class="col-sm-4">
          <a href="#" class="btn btn-secondary buttons" role="button">t-shirts</a>
        </li>
        <li class="col-sm-4">
          <a href="#" class="btn btn-secondary buttons" role="button">shoes</a>
        </li>
      </ul>
      <ul class="row">
        <li class="col-sm-6">
          <a href="#" class="btn btn-secondary buttons" role="button">trousers</a>
        </li>
        <li class="col-sm-6">
          <a href="#" role="button" class="btn btn-warning buttons"
            >special offers</a
          >
        </li>
      </ul>
      <div class="col-sm-12 buttons" id="login-signup">
        <a href="#" role="button" class="btn btn-success">Sign up</a>
        <a href="#" role="button" class="btn btn-outline-success"
          >Log in</a
        >
      </div>
    </div>
  </div>
</div>