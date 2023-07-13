<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table='produk';
    protected $fillable=['id_produk','nm_produk','satuan','harga','stock'];
    protected $primaryKey = 'id_produk';
    public $incrementing = false;


    public function Detil_pesan(){
        return $this->hasMany('App\Models\Detil_pesan','id_produk','id_produk');
    }


}
