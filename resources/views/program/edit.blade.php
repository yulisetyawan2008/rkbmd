@extends('layouts.master')

@section('content')
    <div class="jumbotron bg-primary">
        <div class="card">
            <div class="card-header">
                <h3>Form Edit Program</h3>
                <p>Edit program</p>
            </div>
            <div class="card-body">
                <div class="ml-3">
                    <form action="/program/{{$program->id}}" method="POST">
                        @csrf 
                        @method('PUT')
                        <div class="form-group">
                            <label for="program">Program</label>
                            <input type="text" class="form-control" id="program" name = "program" value="{{$program->program}}">
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