import Cars from "./components/Cars/Cars.svelte"
import Login from "./components/auth/Login.svelte"
export let routes = {
    "/" : Cars,
    "/login" : Login
}
