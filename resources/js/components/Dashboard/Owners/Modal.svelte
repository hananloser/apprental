<script>
  import Form from "./_Form.svelte";
  import { push } from "svelte-spa-router";
  import { createEventDispatcher, onMount } from "svelte";
  import toastr from "toastr";
  let owners;
  let selected;
  let owner = {
    owner_id: 1,
    nama_depan: "",
    nama_belakang: "",
    alamat: "",
    no_hp: "",
    foto: "",
    rekening: "",
    no_rekening: ""
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
    formdata.append("nama_depan", owner.nama_depan);
    formdata.append("nama_belakang", owner.nama_belakang);
    formdata.append("alamat", owner.alamat);
    formdata.append("no_hp", owner.no_hp);
    formdata.append("rekening", owner.rekening);
    formdata.append("no_rekening", owner.no_rekening);
    formdata.append("foto", files[0], files[0].name);

    var requestOptions = {
      method: "POST",
      headers: myHeaders,
      body: formdata,
      redirect: "follow"
    };
    let res = await fetch(
      "/api/v1/owners",
      requestOptions
    );
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
              <label for="jenis">Nama Depan</label>
              <input
                type="text"
                name="jenis"
                class="form-control"
                bind:value={owner.nama_depan} />
            </div>

            <div class="form-group">
              <label for="jenis">Nama Belakang</label>
              <input
                type="text"
                name="jenis"
                class="form-control"
                bind:value={owner.nama_belakang} />
            </div>

            <div class="form-group">
              <label for="jenis">Alamat</label>
              <input
                type="text"
                name="warna"
                class="form-control"
                bind:value={owner.alamat} />
            </div>

            <div class="form-group">
              <label for="jenis">No Hp</label>
              <input
                type="text"
                name="nomor_chasis"
                class="form-control"
                bind:value={owner.no_hp} />
            </div>

            <div class="form-group">
              <label for="jenis">rekening</label>
              <input
                type="text"
                name="nomor_chasis"
                class="form-control"
                bind:value={owner.rekening} />
              <small class="muted">{owner.rekening}</small>
            </div>

            <div class="form-group">
              <label for="jenis">No rekening</label>
              <input
                type="text"
                name="nomor_chasis"
                class="form-control"
                bind:value={owner.no_rekening} />
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
