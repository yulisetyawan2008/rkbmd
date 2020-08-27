@extends('layouts.master')

@section('content')
    <div class="jumbotron bg-primary">
        <div class="card">
            <div class="card-header">
                <h3>Form Input Program</h3>
                <p>Masukkan semua program</p>
            </div>
            <div class="card-body">
                <div class="ml-3">
                    <form action="/program" method="POST">
                        @csrf 
                        <div class="form-group">
                            <label for="program">Program</label>
                            <input type="text" class="form-control" id="program" name = "program" placeholder="Nama Program">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection