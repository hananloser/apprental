<script>
  // your script goes here
  import {link} from 'svelte-spa-router'
</script>

<style>
  /* your styles go here */
</style>

<nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
  <div class="container px-4">
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbar-collapse-main"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" />
    </button>
    <div class="collapse navbar-collapse" id="navbar-collapse-main">
      <!-- Collapse header -->
      <div class="navbar-collapse-header d-md-none">
        <div class="row">
          <div class="col-6 collapse-brand" />
          <div class="col-6 collapse-close">
            <button
              type="button"
              class="navbar-toggler"
              data-toggle="collapse"
              data-target="#navbar-collapse-main"
              aria-controls="sidenav-main"
              aria-expanded="false"
              aria-label="Toggle sidenav">
              <span />
              <span />
            </button>
          </div>
        </div>
      </div>
      <!-- Navbar items -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link nav-link-icon" href="/dashboard" use:link>
            <i class="ni ni-planet" />
            <span class="nav-link-inner--text">Dashboard</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
