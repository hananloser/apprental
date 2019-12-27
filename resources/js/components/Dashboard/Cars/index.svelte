<script>
  import { onMount } from "svelte";
  import Router from "svelte-spa-router";
  import {link} from 'svelte-spa-router';

  let dataCars;
  onMount(async () => {
    const response = await fetch("/api/v1/cars/owners");
    const result = await response.json();
    dataCars = result;
  });
</script>

<div class="container-fluid mt--6">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <table class="table">
          <thead>
            <th>No</th>
            <th>Jenis</th>
            <th>No Polisi</th>
            <th>No Chasis</th>
            <th>Action</th>
          </thead>
          <tbody>
            {#if dataCars}
              {#each dataCars as item, key}
                <tr>
                  <td>{key + 1}</td>
                  <td>{item.jenis}</td>
                  <td>{item.plat_polisi}</td>
                  <td>{item.nomor_chasis}</td>
                  <td>
                    <a href="/dashboard/cars/{item.car_id}" use:link>
                      <i class="fa fa-eye" />
                    </a>
                  </td>
                </tr>
              {:else}
                <h2>Data Nya Kosong</h2>
              {/each}
            {:else}
              <h1>..Loading</h1>
            {/if}
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
