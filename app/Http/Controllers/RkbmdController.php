<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use App\Kegiatan;
use App\Output;
use App\Bmd;
use App\Rkbmd;
use App\Exports\RkbmdsExport;
use Maatwebsite\Excel\Facades\Excel;

class RkbmdController extends Controller
{
    public function index(){
        $rkbmds = Rkbmd::all();
        return view('rkbmd.index', compact('rkbmds'));
    }

    public function create(){
        $programs = Program::all();
        $kegiatans = Kegiatan::all();
        $outputs = Output::all();
        $bmds = Bmd::all();
        return view('rkbmd.form', compact('programs', 'kegiatans', 'outputs', 'bmds'));
    }

    public function store(Request $request){
        $new_item = new Rkbmd;

        $new_item->program_id = $request->program_id;
        $new_item->kegiatan_id = $request->kegiatan_id;
        $new_item->output_id = $request->output_id;
        $new_item->bmd_id = $request->bmd_id;
        $new_item->jml_usul = $request->jml_usul;
        $new_item->jml_riil = $request->jml_riil;
        $new_item->jml_maks = $request->jml_maks;
        $new_item->satuan = $request->satuan;

        $new_item->save();

        return redirect('/rkbmd');
    }

    public function export(){
        return Excel::download(new RkbmdsExport, 'rkbmd.xlsx');
    }

    public function edit($id){
        $rkbmd = Rkbmd::find($id);
        $programs = Program::all();
        $kegiatans = Kegiatan::all();
        $outputs = Output::all();
        $bmds = Bmd::all();
        return view('rkbmd.edit', compact('rkbmd', 'programs', 'kegiatans', 'outputs', 'bmds'));
    }

    public function update($id, Request $request){
        $new_item = Rkbmd::find($id);

        $new_item->program_id = $request->program_id;
        $new_item->kegiatan_id = $request->kegiatan_id;
        $new_item->output_id = $request->output_id;
        $new_item->bmd_id = $request->bmd_id;
        $new_item->jml_usul = $request->jml_usul;
        $new_item->jml_riil = $request->jml_riil;
        $new_item->jml_maks = $request->jml_maks;
        $new_item->satuan = $request->satuan;

        $new_item->save();

        return redirect('/rkbmd');
    }

    public function destroy($id){
        $rkbmd = Rkbmd::find($id);
        $rkbmd->delete();
        return redirect('/rkbmd');
    }
}
