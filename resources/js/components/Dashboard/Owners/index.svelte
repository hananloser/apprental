<script>
  import { onMount } from "svelte";
  import Modal from "./Modal.svelte";
  import Router from "svelte-spa-router";
  import { link } from "svelte-spa-router";
  import toastr from "toastr";

  let dataCars;


  onMount(async () => {
    const response = await fetch("/api/v1/cars/owners");
    const result = await response.json();
    dataCars = result;
  });

  async function reloadHalaman() {
    const response = await fetch("/api/v1/cars/owners");
    const result = await response.json();
    dataCars = result;
  }

  async function reloadHalama(event) {
    if (event.type == "reload") {
      const response = await fetch("/api/v1/cars/owners");
      const result = await response.json();
      dataCars = result;
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

  //   Tampilakan Notifikasi
  const notifDelete = async (car_id, owner_id) => {
    toastr.options = {
      closeButton: true,
      debug: false,
      newestOnTop: true,
      progressBar: true,
      positionClass: "toast-top-right",
      preventDuplicates: false,
      showDuration: "300",
      hideDuration: "1000",
      timeOut: "5000",
      extendedTimeOut: "1000",
      showEasing: "swing",
      hideEasing: "linear",
      showMethod: "fadeIn",
      hideMethod: "fadeOut",
      onclick: () => deleteData(car_id, owner_id)
    };
    toastr.warning("Anda yakin ? klik notif ini", "info");
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
                      <button
                        class="btn btn-danger btn-sm ml-2"
                        on:click={() => notifDelete(item.car_id, item.owner.owner_id)}>
                        <i class="fa fa-trash " />
                      </button>
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
<Modal on:reload={reloadHalama} {dataCars} />
