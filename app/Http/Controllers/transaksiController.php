<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelanggan;
use App\Models\pesan;
use App\Models\Produk;
use App\Models\Detil_pesan;
use App\Models\faktur;
use App\Models\kuitansi;

class transaksiController extends Controller
{
    // penjualan
    public function penjualan_index(){
        $p = pelanggan::all();
        $ps = pesan::all();

        return view('transaksi.penjualan',compact('p','ps'));
    }

    public function penjualan_store(Request $request){
        pesan::create($request->post());

        return redirect('/penjualan');
    }

    public function detail($id){

        $produk = Produk::all();
        $detil = Detil_pesan::where('id_pesan',$id)->get();

        return view('transaksi.detail',compact('id','produk','detil'));
    }

    public function storeDetail(Request $request ,$id){
        Detil_pesan::create($request->post());


        return redirect( '/detilPesan/' .$id);
    }


    // faktur
    public function faktur_index(){
        $p = Pesan::all();
        $f = faktur::all();
        return view('transaksi.faktur',compact('p','f'));
    }


    public function faktur_store(Request $request){
        faktur::create($request->post());

        return redirect()->back();
    }

    public function kuitansi_index(){

        $p = faktur::all();

        $k = kuitansi::all();


        return view('transaksi.kuitansi',compact('p','k'));
    }

    public function kuitansi_store (Request $request){
        kuitansi::create($request->post());

        // dd($request);
        return redirect()->back();
    }

}
