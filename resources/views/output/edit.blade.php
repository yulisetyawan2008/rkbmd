@extends('layouts.master')

@section('content')
    <div class="jumbotron bg-primary">
        <div class="card">
            <div class="card-header">
                <h3>Form Edit Output</h3>
                <p>Edit output</p>
            </div>
            <div class="card-body">
                <div class="ml-3">
                    <form action="/output/{{$output->id}}" method="POST">
                        @csrf 
                        @method('PUT')
                        <div class="form-group">
                            <label for="output">Output</label>
                            <input type="text" class="form-control" id="output" name = "output" value="{{$output->output}}">
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