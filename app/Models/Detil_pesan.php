<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detil_pesan extends Model
{
    use HasFactory;
    protected $table='detil_pesan';
    protected $fillable=['id_pesan','id_produk','jumlah','harga'];


    public function Produk(){
        return $this->belongsTo('App\Models\Produk','id_produk','id_produk');
    }

    public function pesan(){
        return $this->belongsTo('App\Models\pesan','id_pesan','id_pesan');
    }




}
