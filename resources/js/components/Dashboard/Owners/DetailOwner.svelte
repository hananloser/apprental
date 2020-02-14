<script>
  import { onMount } from "svelte";
  import { link } from "svelte-spa-router";
  import DescCard from "./DescCard.svelte";
  export let params = {};
  let OwnerID;

  onMount(async () => {
    let res = await fetch(`/api/v1/owners/${params.ownerID}/detail`);
    let json = await res.json();
    OwnerID = json[0];
    console.log(OwnerID);
  });
</script>

{#if OwnerID}
  <div class="container-fluid mt--7 mb-7">
    <div class="card">
      <div class="card-header">
        <h2>Detail Owner</h2>
        <a href="/dashboard/owners" use:link class="btn btn-warning pull-right">
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
                  src="/uploads/thumb/owner/{OwnerID.foto}"
                  alt="Card image cap" />
              </div>
            </div>
          </div>
          <div class="col-lg-7 col-sm-12 ml-4">
            <DescCard {OwnerID} />
          </div>
        </div>
      </div>
    </div>
  </div>
{:else}
  <div class="text-center">Loading ..</div>
{/if}
