@extends('layouts.master')

@section('content')
    <div class="jumbotron bg-primary">
        <div class="card">
            <div class="card-header">
                <h3>Form Edit Kegiatan</h3>
                <p>Edit Kegiatan</p>
            </div>
            <div class="card-body">
                <div class="ml-3">
                    <form action="/kegiatan/{{$kegiatan->id}}" method="POST">
                        @csrf 
                        @method('PUT')
                        <div class="form-group">
                            <label for="kegiatan">Kegiatan</label>
                            <input type="text" class="form-control" id="kegiatan" name = "kegiatan" value="{{$kegiatan->kegiatan}}">
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