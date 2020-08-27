<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Output;

class OutputController extends Controller
{
    public function index(){
        $outputs = Output::all();
        return view('output.index', compact('outputs'));
    }

    public function create(){
        return view('output.form');
    }

    public function store(Request $request){
        $new_item = new Output;

        $new_item->output = $request->output;

        $new_item->save();

        return redirect('/output');
    }

    public function edit($id){
        $output = Output::find($id);
        return view('output.edit', compact('output'));
    }

    public function update($id, Request $request){
        $new_item = Output::find($id);

        $new_item->output = $request->output;

        $new_item->save();

        return redirect('/output');
    }

    public function destroy($id){
        $output = Output::find($id);
        $output->delete();
        return redirect('/output');
    }
}
