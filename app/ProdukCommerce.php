<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdukCommerce extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'bersama_koperasi.product_commerce';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo('App\ProdukDetail', 'id_produk_detail');
    }

}
