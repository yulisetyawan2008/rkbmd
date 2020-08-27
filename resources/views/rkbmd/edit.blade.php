@extends('layouts.master')

@section('content')
    <div class="jumbotron bg-primary">
        <div class="card">
            <div class="card-header">
                <h3>Form Edit RKBMD Pengadaan</h3>
                <p>Edit Rencana Kebutuhan Barang Milik Daerah Pengadaan</p>
            </div>
            <div class="card-body">
                <div class="ml-3">
                    <form action="/rkbmd/{{$rkbmd->id}}" method="POST">
                        @csrf 
                        @method('PUT')
                        <div class="form-group">
                            <label for="program_id">Program</label>
                            <select class="form-control" id="program_id" name = "program_id">
                                @foreach($programs as $program)
                                    @if($program->id == $rkbmd->program_id)
                                        <option value="{{$program->id}}" selected>{{$program->program}}</option>
                                    @else
                                        <option value="{{$program->id}}">{{$program->program}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kegiatan_id">Kegiatan</label>
                            <select class="form-control" id="kegiatan_id" name = "kegiatan_id">
                                @foreach($kegiatans as $kegiatan)
                                    @if($kegiatan->id == $rkbmd->kegiatan_id)
                                        <option value="{{$kegiatan->id}}" selected>{{$kegiatan->kegiatan}}</option>
                                    @else
                                        <option value="{{$kegiatan->id}}">{{$kegiatan->kegiatan}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="output_id">Output</label>
                            <select class="form-control" id="output_id" name = "output_id">
                                @foreach($outputs as $output)
                                    @if($output->id == $rkbmd->output_id)
                                        <option value="{{$output->id}}" selected>{{$output->output}}</option>
                                    @else
                                        <option value="{{$output->id}}">{{$output->output}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="bmd_id">Nama Barang</label>
                            <select class="form-control" id="bmd_id" name = "bmd_id">
                                @foreach($bmds as $bmd)
                                    @if($bmd->id == $rkbmd->bmd_id)
                                        <option value="{{$bmd->id}}" selected>{{$bmd->nm_barang}} dengan jumlah barang {{$bmd->jml}}</option>
                                    @else
                                        <option value="{{$bmd->id}}">{{$bmd->nm_barang}} dengan jumlah barang {{$bmd->jml}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="jml_usul">Jumlah yang diusulkan</label>
                            <input type="text" class="form-control" id="jml_usul" name = "jml_usul" value="{{$rkbmd->jml_usul}}">
                        </div>
                        <div class="form-group">
                            <label for="jml_maks">Jumlah Maksimum</label>
                            <input type="text" class="form-control" id="jml_maks" name = "jml_maks" value="{{$rkbmd->jml_maks}}">
                        </div>
                        <div class="form-group">
                            <label for="jml_riil">Jumlah Kebutuhan Riil</label>
                            <input type="text" class="form-control" id="jml_riil" name = "jml_riil" value="{{$rkbmd->jml_riil}}">
                        </div>
                        <div class="form-group">
                            <label for="satuan">Satuan</label>
                            <input type="text" class="form-control" id="satuan" name = "satuan" value="{{$rkbmd->satuan}}">
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