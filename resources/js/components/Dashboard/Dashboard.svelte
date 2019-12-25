<script>
  import Router from "svelte-spa-router";
  import { link, push, replace } from "svelte-spa-router";
  import Cars from "./Cars/index.svelte";
  import Owner from "./Owners/index.svelte";
  import Price from "./Prices/index.svelte";
  import Users from "./Users/index.svelte";
  // Parasm ini Berfungsi untuk menerima semua data yang di kirim kan di url
  export let params = {};
  //prefix ini Berfungsi untuk menandakan tujuan asli pada route yang akan di
  //Eksekusi Duluan ketika user Meneriaman url /dashboard/blabla pada route di
  //url
  let prefix = "/dashboard";
  const routes = {
    // TODO : tambah Route sesuai Dengan View yang Ada
    // Tolong Perbaiki Menejemn Root Folder pada Tiap View

    // ! penting
    // /:params <-- ini berarti parameter yang dikirim kan di URL

    "/cars": Cars,
    "/owners": Owner,
    "/prices": Price,
    "/users": Users
  };

  console.log(params);
</script>
<!-- TODO BUAT VIEW UNTUK DASHBOARD -->
<div class="container">
  <ul>
    <li>
      <a href="/dashboard/cars" use:link>Cars</a>
    </li>
    <li>
      <a href="/dashboard/owners" use:link>owners</a>
    </li>
    <li>
      <a href="/dashboard/prices" use:link>Prices</a>
    </li>
    <li>
      <a href="/dashboard/users" use:link>Users</a>
    </li>
  </ul>
</div>

<Router {routes} {prefix} />
