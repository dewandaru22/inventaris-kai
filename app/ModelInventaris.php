<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelInventaris extends Model
{
    protected $table = 'inventaris';

    protected $fillable = ['no_inventaris','nama_barang','jumlah','satuan','harga_barang_item','bagian','kedudukan','tahun'];
}
