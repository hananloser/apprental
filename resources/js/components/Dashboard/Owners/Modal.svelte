<script>
  import Form from "./_Form.svelte";
  import { push } from "svelte-spa-router";
  import { createEventDispatcher, onMount } from "svelte";
  import toastr from "toastr";
  let owners;
  let selected;
  let cars = {
    owner_id: "",
    warna: "",
    plat_polisi: "",
    nomor_chasis: "",
    kapasitas: "",
    model_tahun: "",
    gambar: "",
    jenis: ""
  };

  let files;
  let ownerId;

  const dispatch = createEventDispatcher();

  // =========================================================================
  // ambl Owner
  // =========================================================================
  onMount(async () => {
    let res = await fetch("/api/v1/owners");
    let json = await res.json();
    owners = json;
  });
  // =========================================================================
  // Tambah data
  // =========================================================================
  const tambahData = async e => {
    e.preventDefault();
    var myHeaders = new Headers();
    myHeaders.append("X-Requested-With", "XMLHttpRequest");
    myHeaders.append(
      "Authorization",
      "Bearer " + localStorage.getItem("access_token")
    );
    // Siap kan data Untuk Di kirim lewat formData
    var formdata = new FormData();
    formdata.append("warna", cars.warna);
    formdata.append("plat_polisi", cars.plat_polisi);
    formdata.append("nomor_chasis", cars.nomor_chasis);
    formdata.append("kapasitas", cars.kapasitas);
    formdata.append("model_tahun", cars.model_tahun);
    formdata.append("jenis", cars.jenis);
    formdata.append("gambar", files[0], files[0].name);

    var requestOptions = {
      method: "POST",
      headers: myHeaders,
      body: formdata,
      redirect: "follow"
    };
    let res = await fetch("/api/v1/owners/car/" + selected.owner_id, requestOptions);
    let json = await res.json();
    // Tutup modal Setelah data berhasil di tambahkan
    window.$("#exampleModal").modal("hide");
    // Kirim kan custom event ke component Root agar halaman di reload
    dispatch("reload", {
      reload: "tolong reload halaman"
    });
    toastr.success("data berhasil di tambahkan", "Info");
    //  Reset Kembali Form nya
    document.querySelector("form").reset();

    const updateData = id => {
      console.log(id);
    };
  };
</script>

<!-- Modal -->
<div
  class="modal fade "
  id="exampleModal"
  tabindex="-1"
  role="dialog"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
      </div>
      <form on:submit={tambahData} id="myForm" method="post">
        <div class="modal-body">
          <Form>
            <div class="form-group">
              <select name="owner" bind:value={selected} class="form-control">
                {#if !owners}
                  <option value="">tunggu</option>
                {:else}
                  <option value="">Pili Owner</option>
                  {#each owners as owner}
                    <option value={owner}>{owner.nama_depan}</option>
                  {/each}
                {/if}
              </select>
            </div>
            <div class="form-group">
              <label for="jenis">Plat polisi</label>
              <input
                type="text"
                name="jenis"
                class="form-control"
                bind:value={cars.plat_polisi} />
              <small class="muted">{cars.plat_polisi}</small>
            </div>

            <div class="form-group">
              <label for="jenis">Jenis</label>
              <input
                type="text"
                name="jenis"
                class="form-control"
                bind:value={cars.jenis} />
              <small class="muted">{cars.jenis}</small>
            </div>

            <div class="form-group">
              <label for="jenis">warna</label>
              <input
                type="text"
                name="warna"
                class="form-control"
                bind:value={cars.warna} />
              <small class="muted">{cars.warna}</small>
            </div>

            <div class="form-group">
              <label for="jenis">Nomor chasis</label>
              <input
                type="text"
                name="nomor_chasis"
                class="form-control"
                bind:value={cars.nomor_chasis} />
              <small class="muted">{cars.nomor_chasis}</small>
            </div>

             <div class="form-group">
              <label for="jenis">Model Tahun</label>
              <input
                type="text"
                name="nomor_chasis"
                class="form-control"
                bind:value={cars.model_tahun} />
              <small class="muted">{cars.model_tahun}</small>
            </div>

               <div class="form-group">
              <label for="jenis">Kapasitas</label>
              <input
                type="text"
                name="nomor_chasis"
                class="form-control"
                bind:value={cars.kapasitas} />
              <small class="muted">{cars.kapasitas}</small>
            </div>


            <input type="file" bind:files class="form-control" />
          </Form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            Tutup
          </button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
