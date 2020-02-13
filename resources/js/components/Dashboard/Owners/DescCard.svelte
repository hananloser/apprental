
<script>
    export let carByid ;
</script>

<div class="card">
  <div class="card-header bg-primary">
    <div class="card-title text-white">
      <span class="display-4">Deskripsi</span>
      <span>{carByid.owner.nama_depan}</span>
    </div>
  </div>
  <div class="card-body">
    <ul class="list-group">
      <div class="row">
        <div class="col">
          <li class="list-group-item">
            <i class="fa fa-car mx-1" />
            <span>Jenis {carByid.jenis}</span>
          </li>
          <li class="list-group-item">
            <i class="fa fa-paint-brush" />
            <span>Warna {carByid.warna}</span>
          </li>
        </div>
        <div class="col">
          <li class="list-group-item">
            <i class="fa fa-car mx-1" />
            <span>Plat :{carByid.plat_polisi}</span>
          </li>
          <li class="list-group-item">
            <i class="fa fa-car mx-1" />
            <span>Chasis :{carByid.nomor_chasis}</span>
          </li>
        </div>
        <div class="col">
          <li class="list-group-item">
            <i class="fa fa-archive mx-1" />
            <span>Capacity :{carByid.kapasitas}</span>
          </li>
          <li class="list-group-item">
            <i class="fa fa-car mx-1" />
            <span>Model {carByid.model_tahun}</span>
          </li>
        </div>
      </div>
    </ul>
  </div>
</div>
