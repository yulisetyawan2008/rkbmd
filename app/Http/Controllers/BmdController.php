<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bmd;

class BmdController extends Controller
{
    public function index(){
        $bmds = Bmd::all();
        return view('bmd.index', compact('bmds'));
    }

    public function create(){
        return view('bmd.form');
    }

    public function edit($id){
        $bmd = Bmd::find($id);
        return view('bmd.edit', compact('bmd'));
    }

    public function update($id, Request $request){
        
        $new_bmd = Bmd::find($id);
        
        $new_bmd->kd_barang = $request->kd_barang;
        $new_bmd->nm_barang = $request->nm_barang;
        $new_bmd->jml = $request->jml;
        $new_bmd->ket = $request->ket;

        $new_bmd->save();

        return redirect('/bmd');
    }

    public function search(Request $request){
        $search = $request->get('search');
        $bmds = Bmd::where('nm_barang', 'like', '%'.$search.'%')->paginate(100);
        return view('bmd.index', compact('bmds'));
    }
}
