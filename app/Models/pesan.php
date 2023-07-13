<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesan extends Model
{
    use HasFactory;
    protected $table='pesan';
    protected $fillable=['id_pesan','id_pelanggan','tgl_pesan'];
    protected $primaryKey = 'id_pesan';

    public function pelanggan(){
        return $this->belongsTo('App\Models\pelanggan', 'id_pelanggan', 'id_pelanggan');


    }



    public function Detil_pesan(){
        return $this->hasMany('App\Models\Detil_pesan', 'id_pesan', 'id_pesan');


    }
}
