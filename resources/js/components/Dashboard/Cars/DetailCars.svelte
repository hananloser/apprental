<script>
  import { onMount } from "svelte";
  import { link } from "svelte-spa-router";
  import DescCard from "./DescCard.svelte";
  export let params = {};
  let carByid;

  onMount(async () => {
    let res = await fetch("/api/v1/cars/" + params.carid);
    let json = await res.json();
    carByid = json.data[0];
    console.log(carByid);
  });
</script>

{#if carByid}
  <div class="container-fluid mt--7 mb-7">
    <div class="card">
      <div class="card-header">
        <h2>Detail Cars</h2>
        <a href="/dashboard/cars" use:link class="btn btn-warning pull-right">
          Back
        </a>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-4">
            <div class="card shadow">
              <div class="card">
                <img
                  height="300"
                  width="400"
                  class="card-img-top"
                  src="/uploads/thumb/cars/{carByid.gambar}"
                  alt="Card image cap" />
              </div>
            </div>
          </div>
          <div class="col-lg-7 col-sm-12 ml-4">
            <DescCard {carByid} />
          </div>
        </div>
      </div>
    </div>
  </div>
{:else}
  <div class="text-center">Loading ..</div>
{/if}
