<script>
  import Router from "svelte-spa-router";
  import { link, replace } from "svelte-spa-router";
  import NotFound from "../notFound.svelte";
  export let params = {};
  const prefix = "/cars";
  const routes = {
    "/:params": NotFound
  };

  console.log(params);
</script>

<!-- markup (zero or more items) goes here -->

<div class="container">
  <h2>Halaman Cars</h2>
    <a href="/cars/notfound" use:link>Tampil Halaman Not Found</a>
  <Router {routes} {prefix} />
</div>
