@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Daftar Program</h3>
            <p>Masukkan semua program</p>
        </div>
        <div class="card-body">
            <a href="/program/create" class="btn btn-primary">Tambah Program</a>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Program</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($programs as $program)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$program->program}}</td>
                        <td>
                            <a href="/program/{{$program->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                            <form action="/program/{{$program->id}}" method="POST" style="display: inline">
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
