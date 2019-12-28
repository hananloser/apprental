
<script>
    import {link} from 'svelte-spa-router'
</script>


<nav
  class="navbar navbar-vertical fixed-left navbar-expand-md navbar-dark
  bg-dark"
  id="sidenav-main">
  <div class="container-fluid">
    <!-- Toggler -->
    <!-- Brand -->
    <a class="navbar-brand pt-0" href="./index.html">
      <img
        src="./assets/img/brand/blue.png"
        class="navbar-brand-img"
        alt="..." />
    </a>
    <!-- User -->
    <ul class="nav align-items-center d-md-none">
      <li class="nav-item dropdown">
        <a
          class="nav-link nav-link-icon"
          href="/"
          role="button"
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false">
          <i class="ni ni-bell-55" />
        </a>
        <div
          class="dropdown-menu dropdown-menu-arrow dropdown-menu-right"
          aria-labelledby="navbar-default_dropdown_1">
          <a class="dropdown-item" href="/">Action</a>
          <a class="dropdown-item" href="/">Another action</a>
          <div class="dropdown-divider" />
          <a class="dropdown-item" href="/">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a
          class="nav-link"
          href="/"
          role="button"
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false">
          <div class="media align-items-center">
            <span class="avatar avatar-sm rounded-circle">
              <img
                alt="Image placeholder"
                src="./assets/img/theme/team-1-800x800.jpg " />
            </span>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
          <div class=" dropdown-header noti-title">
            <h6 class="text-overflow m-0">Welcome!</h6>
          </div>
          <div class="dropdown-divider" />
          <a href="/!" class="dropdown-item">
            <i class="ni ni-user-run" />
            <span>Logout</span>
          </a>
        </div>
      </li>
    </ul>
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
      <!-- Collapse header -->
      <div class="navbar-collapse-header d-md-none">
        <div class="row">
          <div class="col-6 collapse-brand" />
          <div class="col-6 collapse-close">
            <button
              type="button"
              class="navbar-toggler"
              data-toggle="collapse"
              data-target="/sidenav-collapse-main"
              aria-controls="sidenav-main"
              aria-expanded="false"
              aria-label="Toggle sidenav">
              <span />
              <span />
            </button>
          </div>
        </div>
      </div>
      <!-- Navigation -->
      <ul class="navbar-nav">
        <li class="nav-item active ">
          <a class="nav-link active " href="/dashboard" use:link>
            <i class="ni ni-tv-2 text-primary" />
            Dashboard
          </a>
        </li>
        <li class="nav-item active ">
          <a class="nav-link" href="/dashboard/cars" use:link>
            <i class="fa fa-car text-primary" />
            Cars
          </a>
        </li>
        <li class="nav-item active ">
          <a class="nav-link" href="/dashboard/cars" use:link>
            <i class="fa fa-user text-primary" />
            Owners
          </a>
        </li>
        <li class="nav-item active ">
          <a class="nav-link" href="/dashboard/prices" use:link>
            <i class="fa fa-cart-arrow-down text-primary" />
            Prices
          </a>
        </li>
        <li class="nav-item active ">
          <a class="nav-link" href="/dashboard/transaksi" use:link>
            <i class="fa fa-shopping-cart text-primary" />
            Transaksi
          </a>
        </li>
        <li class="nav-item active ">
          <a class="nav-link" href="/dashboard/map" use:link>
            <i class="fa fa-map text-primary" />
            Monitor
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
