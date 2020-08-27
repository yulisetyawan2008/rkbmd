<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan;

class KegiatanController extends Controller
{
    public function index(){
        $kegiatans = Kegiatan::all();
        return view('kegiatan.index', compact('kegiatans'));
    }

    public function create(){
        return view('kegiatan.form');
    }

    public function store(Request $request){
        $new_item = new Kegiatan;

        $new_item->kegiatan = $request->kegiatan;

        $new_item->save();

        return redirect('/kegiatan');
    }

    public function edit($id){
        $kegiatan = Kegiatan::find($id);
        return view('kegiatan.edit', compact('kegiatan'));
    }

    public function update($id, Request $request){
        $new_item = Kegiatan::find($id);

        $new_item->kegiatan = $request->kegiatan;

        $new_item->save();

        return redirect('/kegiatan');
    }

    public function destroy($id){
        $kegiatan = Kegiatan::find($id);
        $kegiatan->delete();
        return redirect('/kegiatan');
    }
}
