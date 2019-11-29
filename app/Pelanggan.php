<?php

namespace App;

use App\Http\Controllers\Transaksi;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
  protected $guarded = [];
  protected $table  = 'pelanggans';

  public function transaksis()
  {
    $this->hasMany(Transaksi::class);
  }
}
