@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Daftar Usulan Pemeliharaan</h3>
            <p>Masukkan semua rencana pemeliharaan</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <a href="/pemeliharaan/create" class="btn btn-primary">Tambah Pemeliharaan</a>
                </div>
                <div class="col-md-6">
                    <a href="/pemeliharaan/export" class="btn btn-primary">Cetak Excel</a>
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
                        <th>Jml Barang</th>
                        <th>Satuan</th>
                        <th>Status Barang</th>
                        <th>Baik</th>
                        <th>Rusak Ringan</th>
                        <th>Rusak Berat</th>
                        <th>Nama Pemeliharaan</th>
                        <th>Jumlah Dipelihara</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pemeliharaans as $pemeliharaan)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$pemeliharaan->program->program}}</td>
                        <td>{{$pemeliharaan->kegiatan->kegiatan}}</td>
                        <td>{{$pemeliharaan->output->output}}</td>
                        <td>{{$pemeliharaan->bmd->kd_barang}}</td>
                        <td>{{$pemeliharaan->bmd->nm_barang}}</td>
                        <td>{{$pemeliharaan->bmd->jml}}</td>
                        <td>{{$pemeliharaan->sat}}</td>
                        <td>{{$pemeliharaan->status}}</td>
                        <td>{{$pemeliharaan->baik}}</td>
                        <td>{{$pemeliharaan->rr}}</td>
                        <td>{{$pemeliharaan->rb}}</td>
                        <td>{{$pemeliharaan->nm_pemeliharaan}}</td>
                        <td>{{$pemeliharaan->jml_pelihara}}</td>
                        <td>{{$pemeliharaan->keterangan}}</td>
                        <td>
                            <a href="/pemeliharaan/{{$pemeliharaan->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                            <form action="/pemeliharaan/{{$pemeliharaan->id}}" method="POST" style="display: inline">
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
