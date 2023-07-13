<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    use HasFactory;
    protected $table='pelanggan';
    protected $fillable=['id_pelanggan','nm_pelanggan','alamat','telepon','email'];
    protected $primaryKey = 'id_pelanggan';
    public $incrementing = false;


    public function pesan(){
        return $this->hasOne('App\Models\pesan', 'id_pelanggan', 'id_pelanggan');




    }


}
