<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemeliharaan;
use App\Program;
use App\Kegiatan;
use App\Output;
use App\Bmd;
use App\Exports\PemeliharaansExport;
use Maatwebsite\Excel\Facades\Excel;

class PemeliharaanController extends Controller
{
    public function index(){
        $pemeliharaans = Pemeliharaan::all();
        return view('pemeliharaan.index', compact('pemeliharaans'));
    }

    public function create(){
        $programs = Program::all();
        $kegiatans = Kegiatan::all();
        $outputs = Output::all();
        $bmds = Bmd::all();
        return view('pemeliharaan.form', compact('programs', 'kegiatans', 'outputs', 'bmds'));
    }

    public function store(Request $request){
        $new_item = new Pemeliharaan;

        $new_item->program_id = $request->program_id;
        $new_item->kegiatan_id = $request->kegiatan_id;
        $new_item->output_id = $request->output_id;
        $new_item->bmd_id = $request->bmd_id;
        $new_item->sat = $request->sat;
        $new_item->status = $request->status;
        $new_item->baik = $request->baik;
        $new_item->rr = $request->rr;
        $new_item->rb = $request->rb;
        $new_item->nm_pemeliharaan = $request->nm_pemeliharaan;
        $new_item->jml_pelihara = $request->jml_pelihara;
        $new_item->keterangan = $request->keterangan;

        $new_item->save();

        return redirect('/pemeliharaan');
    }

    public function export(){
        return Excel::download(new PemeliharaansExport, 'pemeliharaan.xlsx');
    }

    public function edit($id){
        $pemeliharaan = Pemeliharaan::find($id);
        $programs = Program::all();
        $kegiatans = Kegiatan::all();
        $outputs = Output::all();
        $bmds = Bmd::all();
        return view('pemeliharaan.edit', compact('pemeliharaan', 'programs', 'kegiatans', 'outputs', 'bmds'));
    }

    public function update($id, Request $request){
        $new_item = Pemeliharaan::find($id);

        $new_item->program_id = $request->program_id;
        $new_item->kegiatan_id = $request->kegiatan_id;
        $new_item->output_id = $request->output_id;
        $new_item->bmd_id = $request->bmd_id;
        $new_item->sat = $request->sat;
        $new_item->status = $request->status;
        $new_item->baik = $request->baik;
        $new_item->rr = $request->rr;
        $new_item->rb = $request->rb;
        $new_item->nm_pemeliharaan = $request->nm_pemeliharaan;
        $new_item->jml_pelihara = $request->jml_pelihara;
        $new_item->keterangan = $request->keterangan;

        $new_item->save();

        return redirect('/pemeliharaan');
    }

    public function destroy($id){
        $pemeliharaan = Pemeliharaan::find($id);
        $pemeliharaan->delete();
        return redirect('/pemeliharaan');
    }
}
