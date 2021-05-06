<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockProduk extends Model
{
    protected $connection = 'mysql';
    protected $table = 'koperasi_bersama.stok_produk';
    protected $primaryKey = 'id_stok';
    public $timestamps = false;
}
