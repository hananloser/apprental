
<script>
    export let OwnerID ;
</script>

<div class="card">
  <div class="card-header bg-primary">
    <div class="card-title text-white">
      <span class="display-4">Deskripsi</span>
      <span>{OwnerID.nama_depan}</span>
    </div>
  </div>
  <div class="card-body">
    <ul class="list-group">
      <div class="row">
        <div class="col">
          <li class="list-group-item">
            <i class="fa fa-car mx-1" />
            <span>Nama: {OwnerID.nama_belakang}</span>
          </li>
          <li class="list-group-item">
            <i class="fa fa-paint-brush" />
            <span>Alamat: {OwnerID.alamat}</span>
          </li>
        </div>
        <div class="col">
          <li class="list-group-item">
            <i class="fa fa-car mx-1" />
            <span>No HP :{OwnerID.no_hp}</span>
          </li>
          <li class="list-group-item">
            <i class="fa fa-car mx-1" />
            <span>Rekening :{OwnerID.rekening}</span>
          </li>
        </div>
        <div class="col">
          <li class="list-group-item">
            <i class="fa fa-archive mx-1" />
            <span>No Rek :{OwnerID.no_rekening}</span>
          </li>
        </div>
      </div>
    </ul>
  </div>
</div>
