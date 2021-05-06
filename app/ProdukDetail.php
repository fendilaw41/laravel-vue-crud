<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdukDetail extends Model
{
    protected $connection = 'mysql';
    protected $table = 'koperasi_bersama.produk_detail';
    protected $primaryKey = 'id_produk_detail';
    public $timestamps = false;

    public function commerce()
    {
        return $this->hasOne('App\ProdukCommerce', 'produk_id');
    }

    public function stok()
    {
        return $this->belongsTo('App\StockProduk', 'id_produk', 'id_produk');
    }
}
