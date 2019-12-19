<script>
    import {push , link , pop } from "svelte-spa-router"
</script>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="/" use:link>Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/Register" use:link>Register</a>
    </li>
  </ul>
</nav>
