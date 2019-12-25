<script>
  import Router from "svelte-spa-router";
  import { link, push, replace } from "svelte-spa-router";
  import Cars from "./Cars/Cars.svelte";
  import Owner from "./Owners/index.svelte";
  export let params = {};
  let prefix = "/dashboard";
  const routes = {
    "/cars": Cars,
    "/owners" : Owner
  };

  console.log(params);
</script>

<div class="container">
  <ul>
    <li>
      <a href="/dashboard/cars" use:link>Cars</a>
    </li>
     <li>
      <a href="/dashboard/owners" use:link>owners</a>
    </li>
  </ul>
</div>

<Router {routes} {prefix} />
