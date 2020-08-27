@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Daftar RKBMD</h3>
            <p>Masukkan Rencana Kebutuhan Barang Milik Daerah</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <a href="/rkbmd/create" class="btn btn-primary">Tambah RKBMD</a>
                </div>
                <div class="col-md-6">
                    <a href="/rkbmd/export" class="btn btn-primary">Cetak Excel</a>
                </div>
            </div>
            
            
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Program</th>
                        <th>Kegiatan</th>
                        <th>Output</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Satuan</th>
                        <th>Jml Usul/Riil</th>
                        <th>Jml Maks</th>
                        <th>Jml Optimal</th>
                        
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rkbmds as $rkbmd)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$rkbmd->program->program}}</td>
                        <td>{{$rkbmd->kegiatan->kegiatan}}</td>
                        <td>{{$rkbmd->output->output}}</td>
                        <td>{{$rkbmd->bmd->kd_barang}}</td>
                        <td>{{$rkbmd->bmd->nm_barang}}</td>
                        <td>{{$rkbmd->satuan}}</td>
                        <td>{{$rkbmd->jml_usul}}</td>
                        <td>{{$rkbmd->jml_maks}}</td>
                        <td>{{$rkbmd->bmd->jml}}</td>
                        
                        <td>
                            <a href="/rkbmd/{{$rkbmd->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                            <form action="/rkbmd/{{$rkbmd->id}}" method="POST" style="display: inline">
                                @csrf 
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
