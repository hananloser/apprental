<script>
  import { fade, fly } from "svelte/transition";
  import { onMount } from "svelte";
  import {push , pop , replace } from "svelte-spa-router"
  let visable = false;

  let dataLogin = {
    email: "",
    password: ""
  };

  const login = e => {
    e.preventDefault();
    replace('/dashboard')
  };
  onMount(() => {
    visable = true;
  });
</script>

{#if visable}
  <div in:fly={{ y: 200, duration: 500 }} class="container mt-4">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header bg-dark">
            <h3 class="text-center text-white">Login</h3>
          </div>
          <div class="card-body">
            <form on:submit={login}>
              <div class="form-group">
                <input
                  type="email"
                  name="email"
                  id="email"
                  required
                  class="form-control"
                  placeholder="Masukan Email"
                  bind:value={dataLogin.email} />
              </div>
              <br />
              <div class="form-group">
                <input
                  type="password"
                  name="password"
                  id="password"
                  required
                  class="form-control"
                  placeholder="Masukan Password"
                  bind:value={dataLogin.password} />
              </div>
              <button type="submit" class="btn btn-success text-center">
                Login
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
{/if}
