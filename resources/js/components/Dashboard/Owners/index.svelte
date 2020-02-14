<script>
  import { onMount } from "svelte";
  import Modal from "./Modal.svelte";
  import Router from "svelte-spa-router";
  import { link } from "svelte-spa-router";
  import toastr from "toastr";

  let dataOwners;


  onMount(async () => {
    const response = await fetch("/api/v1/owners");
    const result = await response.json();
    dataOwners = result;
  });

  async function reloadHalaman() {
    const response = await fetch("/api/v1/owners");
    const result = await response.json();
    dataOwners = result;
  }

  async function reloadHalama(event) {
    if (event.type == "reload") {
      const response = await fetch("/api/v1/owners");
      const result = await response.json();
      dataOwners = result;
    }
  }

  const deleteData = async (car_id, owner_id) => {
    let header = new Headers();
    header.append("X-Requested-With", "XMLHttpRequest");
    header.append(
      "Authorization",
      "Bearer " + localStorage.getItem("access_token")
    );
    let response = await fetch(`/api/v1/owners/car/${owner_id}/${car_id}`, {
      method: "DELETE",
      headers: header
    });
    let resJson = await response.json();
    reloadHalaman();
  };
</script>

<div class="container-fluid mt--7 mb-7">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h3>Data Mobil</h3>
          <button
            type="button"
            class="btn btn-primary"
            data-toggle="modal"
            data-target="#exampleModal">
            + Tambah
          </button>
        </div>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <th>No</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>NoHp</th>
              <th>Action</th>
            </thead>
            <tbody>
              {#if dataOwners}
                {#each dataOwners as item, key}
                  <tr>
                    <td>{key + 1}</td>
                    <td>{item.nama_depan}</td>
                    <td>{item.alamat}</td>
                    <td>{item.no_hp}</td>
                    <td>
                      <a href="/dashboard/owners/{item.owner_id}/detail" use:link>
                        <i class="fa fa-eye" />
                      </a>
                    </td>
                  </tr>
                {:else}
                  <h2 class="text-center">Data Nya Kosong</h2>
                {/each}
              {:else}
                <div class="text-center">Loading ...</div>
              {/if}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Teriman custom Event nya disini -->
<Modal on:reload={reloadHalama} {dataOwners} />
