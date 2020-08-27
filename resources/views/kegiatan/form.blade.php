@extends('layouts.master')

@section('content')
    <div class="jumbotron bg-primary">
        <div class="card">
            <div class="card-header">
                <h3>Form Input Kegiatan</h3>
                <p>Masukkan semua kegiatan dahulu</p>
            </div>
            <div class="card-body">
                <div class="ml-3">
                    <form action="/kegiatan" method="POST">
                        @csrf 
                        <div class="form-group">
                            <label for="kegiatan">Kegiatan</label>
                            <input type="text" class="form-control" id="kegiatan" name = "kegiatan" placeholder="Nama Kegiatan">
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