@extends('layouts.master')

@section('content')
    <div class="jumbotron bg-primary">
        <div class="card">
            <div class="card-header">
                <h3>Form Edit BMD</h3>
                <p>Edit BMD</p>
            </div>
            <div class="card-body">
                <div class="ml-3">
                    <form action="/bmd/{{$bmd->id}}" method="POST">
                        @csrf 
                        @method('PUT')
                        <div class="form-group">
                            <label for="kd_barang">Kode Barang</label>
                            <input type="text" class="form-control" id="kd_barang" name = "kd_barang" value="{{$bmd->kd_barang}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nm_barang">Nama Barang</label>
                            <input type="text" class="form-control" id="nm_barang" name = "nm_barang" value="{{$bmd->nm_barang}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="jml">Jumlah Barang</label>
                            <input type="text" class="form-control" id="jml" name = "jml" value="{{$bmd->jml}}">
                        </div>
                        <div class="form-group">
                            <label for="ket">Keterangan</label>
                            <input type="text" class="form-control" id="ket" name = "ket" value="{{$bmd->ket}}">
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