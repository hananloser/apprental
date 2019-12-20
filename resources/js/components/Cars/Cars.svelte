<script>
  import { push } from "svelte-spa-router";
  import { onDestroy } from "svelte";
  const access_token = window.localStorage.getItem("access_token");
  if (access_token == null || access_token == "") {
    push("/login");
  }
</script>

<style>
  /* your styles go here */
</style>

<!-- markup (zero or more items) goes here -->

<main>
  <p>{access_token}</p>
</main>
