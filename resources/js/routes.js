import Login from "./components/auth/Login.svelte";
import Dashboard from './components/Dashboard/Dashboard.svelte'
export let routes = {
    // Ini Endpoit View untuk Login
    "/": Login,
    //End point Untuk Halaman Dashboard
    // Notice Tiap Route di Lakukan Berdasarkan Group
    // Silakan Cek Di Folder Dashboard file Dashboard.svelte

    "/dashboard" : Dashboard,
    "/dashboard/*" : Dashboard,
};
