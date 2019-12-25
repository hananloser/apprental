import Login from "./components/auth/Login.svelte";
import Dashboard from './components/Dashboard/Dashboard.svelte'
export let routes = {
    "/": Login,
    "/dashboard" : Dashboard,
    "/dashboard/*" : Dashboard,
};
