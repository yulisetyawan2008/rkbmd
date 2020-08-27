@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Daftar Output</h3>
            <p>Masukkan semua output</p>
        </div>
        <div class="card-body">
            <a href="/output/create" class="btn btn-primary">Tambah Output</a>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Output</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($outputs as $output)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$output->output}}</td>
                        <td>
                            <a href="/output/{{$output->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                            <form action="/output/{{$output->id}}" method="POST" style="display: inline">
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
