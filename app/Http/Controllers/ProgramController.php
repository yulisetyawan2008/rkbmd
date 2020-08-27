<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;

class ProgramController extends Controller
{
    public function index(){
        $programs = Program::all();
        return view('program.index', compact('programs'));
    }

    public function create(){
        return view('program.form');
    }

    public function store(Request $request){
        $new_item = new Program;

        $new_item->program = $request->program;

        $new_item->save();

        return redirect('/program');
    }

    public function edit($id){
        $program = Program::find($id);
        return view('program.edit', compact('program'));
    }

    public function update($id, Request $request){
        $new_item = Program::find($id);

        $new_item->program = $request->program;

        $new_item->save();

        return redirect('/program');
    }

    public function destroy($id){
        $program = Program::find($id);
        $program->delete();
        return redirect('/program');
    }
}
