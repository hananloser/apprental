<script>
  import { fade, fly } from "svelte/transition";
  import { onMount } from "svelte";
  let visable = false;

  let dataLogin = {
    email: "",
    password: "",
    name : "",
  };

  const login = e => {
    e.preventDefault();
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
            <h3 class="text-center text-white">Register</h3>
          </div>
          <div class="card-body">
            <form on:submit={login}>
              <div class="form-group">
                <input
                  type="text"
                  name="name"
                  id="name"
                  required
                  class="form-control"
                  placeholder="Masukan Nama"
                  bind:value={dataLogin.name} />
              </div>
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
               <div class="form-group">
                <input
                  type="password"
                  name="confir_password"
                  id="confir_password"
                  required
                  class="form-control"
                  placeholder="Masukan Ulang Password"
                  bind:value={dataLogin.password} />
              </div>
              <button type="submit" class="btn btn-success text-center">
                Register
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
{/if}
