<script>
  import FormInput from "./atoms/FormInput.svelte";
  import { push } from "svelte-spa-router";
  let url = "/api/auth/login";
  let user = {
    email: "",
    password: ""
  };
  const login = async () => {
    const res = await fetch(url, {
      method: "POST",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify(user)
    });
    const result = await res.json();
    if(res.ok) {
        console.log("berhasil login")
        window.localStorage.setItem("access_token" , result.access_token)
        push("/cars" , {replace : true})
    }else if(res.status == 401) {
        alert("gagal login")
        user.email = ""
        user.password = ""
    }
  };

  if(window.localStorage.getItem("access_token") != null ) {
      console.log("sudah login")
      push("/cars" , {replace : true})
  }

</script>
<div class="container mt--8 pb-5">
  <div class="row justify-content-center">
    <div class="col-lg-5 col-md-7">
      <div class="card bg-secondary shadow border-0">
        <div class="card-body px-lg-5 py-lg-5">
          <form role="form" on:submit|preventDefault={login}>
            <FormInput icons={'fa fa-user'}>
              <input
                type="email"
                class="form-control"
                placeholder="Email"
                required
                bind:value={user.email} />
            </FormInput>
            <FormInput icons={'fa fa-lock'}>
              <input
                type="password"
                required
                class="form-control"
                placeholder="Password"
                bind:value={user.password} />
            </FormInput>
            <div class="text-center">
              <button type="submit" class="btn btn-primary my-4">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
