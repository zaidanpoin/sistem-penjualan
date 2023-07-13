<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelanggan;
use App\Models\pesan;
use App\Models\Produk;
use App\Models\Detil_pesan;
use App\Models\faktur;
use App\Models\kuitansi;

class laporanController extends Controller
{
    public function laporanTanggal(){

        $p = pesan::all();



        return view('laporan.laporanTanggal',compact('p'));

    }

    public function filter(Request $request){
        $p = pesan::whereBetween('tgl_pesan',[$request->tanggalawal,$request->tanggalakhir])->get();

        return view('laporan.laporanTanggal',compact('p')) ;
    }

    public function laporanPelanggan(){
        $p = pesan::with('Detil_pesan')->get();
        $pl = pelanggan::all();

        return view('laporan.laporanPelanggan',compact('p','pl'));
    }

    public function filterPelanggan(Request $request){

        $p = pesan::with('Detil_pesan')->where('id_pelanggan',$request->id_pelanggan)->get();
        $pl = pelanggan::all();

        return view('laporan.laporanPelanggan',compact('p','pl'));
    }

    public function filterProduk(Request $request){

        $p = Detil_pesan::with('pesan')->where('id_produk',$request->id_produk)->get();
        $pl =produk::all();

        return view('laporan.laporanProduk',compact('p','pl'));
    }

    public function laporanProduk(){
        $p = Detil_pesan::all();
        $pl = produk::all();


        return view('laporan.laporanProduk',compact('p','pl'));
    }
}
