@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Daftar Barang Milik Daerah</h3>
            <p>Barang Milik Daerah di Perangkat Daerah tertentu</p>
        </div>
        <div class="card-body">
            
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Jumlah Barang</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bmds as $bmd)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$bmd->kd_barang}}</td>
                        <td>{{$bmd->nm_barang}}</td>
                        <td>{{$bmd->jml}}</td>
                        <td>{{$bmd->ket}}</td>
                        <td>
                            <a href="/bmd/{{$bmd->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
