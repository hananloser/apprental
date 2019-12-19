  <script>
    import UserSetting from "./molecules/item.svelte";
  </script>

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
                src="../assets/img/theme/team-1-800x800.jpg" />
            </span>
          </div>
        </a>
        <!-- User Menu Setting pop Up  -->
         <UserSetting />
      </li>
    </ul>
