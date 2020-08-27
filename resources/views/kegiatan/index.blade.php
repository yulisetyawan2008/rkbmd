@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Daftar Kegiatan</h3>
            <p>Masukkan semua kegiatan dulu</p>
        </div>
        <div class="card-body">
            <a href="/kegiatan/create" class="btn btn-primary">Tambah Kegiatan</a>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kegiatan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kegiatans as $kegiatan)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$kegiatan->kegiatan}}</td>
                        <td>
                            <a href="/kegiatan/{{$kegiatan->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                            <form action="/kegiatan/{{$kegiatan->id}}" method="POST" style="display: inline">
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
