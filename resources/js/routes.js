import Login from "../js/components/auth/Login.svelte"
import Dashboard from "../js/components/screens/Dashboard.svelte"
import Register from "../js/components/auth/Register.svelte"
export let routes = {
    "/" : Dashboard ,
    "/register" : Register ,
    "/login" : Login
}
