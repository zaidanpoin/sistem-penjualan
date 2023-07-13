<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelanggan;

class pelangganController extends Controller
{

    public function index(){
        $p = pelanggan::limit(10)->get();

        return view('pelanggan.index',compact('p'));
    }

    public function create(){
        return view('pelanggan.addPelanggan');
    }

    public function store(Request $request){
    pelanggan::create($request->post());

    return redirect('/pelanggan');

    }

    public function edit($id){

        $p = pelanggan::where('id_pelanggan', $id)->get();;

        return view('pelanggan.edit_pelanggan',compact('p'));
    }

    public function update(Request $request,$id){

        $plg = pelanggan::find($id);
        $plg->fill($request->post())->save();

        return redirect('/pelanggan');

    }

    public function delete($id){
        $plg = pelanggan::find($id);
        $plg->delete();

        return redirect()->back();
    }


}
