<script>
  import Router from "svelte-spa-router";
  import { link, push, replace } from "svelte-spa-router";
  import Cars from "./Cars/index.svelte";
  import Owner from "./Owners/index.svelte";
  import Price from "./Prices/index.svelte";
  import Users from "./Users/index.svelte";
  import Detail from "./Cars/DetailCars.svelte";
  import Transaksi from "./Transaksi/index.svelte";
  import Navbar from "./Component/Navbar.svelte";
  import Nav from "./Component/barNav.svelte";
  import Header from "./Component/Header.svelte";
  import MapMonitor from './Map/index.svelte'
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
    /**  Tampilakn Halaman Cars */
    "/cars": Cars,
    // Menampilkan Halaman Detail Cars
    "/cars/:carid": Detail,
    // Menampilkan Halaman Owners
    "/owners": Owner,
    // Menampilkan Halaman Price
    "/prices": Price,
    //Menampilkan halaman Transaksi
    "/transaksi": Transaksi,
    // Menampilkan Halaman User
    "/users": Users,
    // Halaman Monitor
    "/map": MapMonitor
  };

  console.log(params);
</script>

<Navbar />
<div class="main-content">
  <Nav />
  <Header />
  <Router {routes} {prefix} />
</div>
