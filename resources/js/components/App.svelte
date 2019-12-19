<script>
    import Router  from "svelte-spa-router"
    import Navbar from "./atoms/Navbar.svelte"
    import {push , pop , link}  from "svelte-spa-router"
    import {routes} from "../routes.js"
</script>

<style>

</style>

<div >
    <Router {routes}/>
</div>


