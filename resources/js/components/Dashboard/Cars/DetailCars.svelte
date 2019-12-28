<script>
  import { onMount } from "svelte";
  export let params = {};
  let carByid;

  onMount(async () => {
    let res = await fetch("/api/v1/cars/" + params.carid);
    let json = await res.json();
    carByid = json.data[0];
    console.log(carByid)
  });

</script>
{#if carByid}
  <div class="container mt-2 shadow">
    <div class="card">
      <div class="card-header">
        <h2>Detail Cars</h2>
      </div>
      <div class="card-body">
        <ul>
          <li>{carByid.jenis}</li>
          <li>{carByid.warna}</li>
          <li>{carByid.plat_polisi}</li>
          <li>{carByid.model_tahun}</li>
        </ul>
      </div>
    </div>
  </div>
{:else}
    <div class="text-center">
        Loading ..
    </div>
{/if}
