import Cars from "./components/Cars/Cars.svelte";
import Login from "./components/auth/Login.svelte";
import NotFound from "./components/notFound.svelte";
import {wrap} from "svelte-spa-router"
export let routes = {
    "/": Login,
    "/cars": Cars,
    "/cars/*": Cars,
    "/*": NotFound,


};
