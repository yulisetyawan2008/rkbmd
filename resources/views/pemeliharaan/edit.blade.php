@extends('layouts.master')

@section('content')
    <div class="jumbotron bg-primary">
        <div class="card">
            <div class="card-header">
                <h3>Form Edit Pemeliharaan</h3>
                <p>Edit rencana pemeliharaan tahun 2021</p>
            </div>
            <div class="card-body">
                <div class="ml-3">
                    <form action="/pemeliharaan/{{$pemeliharaan->id}}" method="POST">
                        @csrf 
                        @method('PUT')
                        <div class="form-group">
                            <label for="program_id">Program</label>
                            <select class="form-control" id="program_id" name = "program_id">
                                @foreach($programs as $program)
                                    @if($program->id == $pemeliharaan->program_id)
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
                                    @if($kegiatan->id == $pemeliharaan->kegiatan_id)
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
                                    @if($output->id == $pemeliharaan->output_id)
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
                                    @if($bmd->id == $pemeliharaan->bmd_id)
                                        <option value="{{$bmd->id}}" selected>{{$bmd->nm_barang}} dengan jumlah barang {{$bmd->jml}}</option>
                                    @else
                                        <option value="{{$bmd->id}}">{{$bmd->nm_barang}} dengan jumlah barang {{$bmd->jml}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sat">Satuan</label>
                            <input type="text" class="form-control" id="sat" name = "sat" value="{{$pemeliharaan->sat}}">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" class="form-control" id="status" name = "status" value="{{$pemeliharaan->status}}">
                        </div>
                        <div class="form-group">
                            <label for="baik">Jumlah Kondisi Barang Baik</label>
                            <input type="text" class="form-control" id="baik" name = "baik" value="{{$pemeliharaan->baik}}">
                        </div>
                        <div class="form-group">
                            <label for="rr">Jumlah Kondisi Barang Rusak Ringan</label>
                            <input type="text" class="form-control" id="rr" name = "rr" value="{{$pemeliharaan->rr}}">
                        </div>
                        <div class="form-group">
                            <label for="rb">Jumlah Kondisi Barang Rusak Berat</label>
                            <input type="text" class="form-control" id="rb" name = "rb" value="{{$pemeliharaan->rb}}">
                        </div>
                        <div class="form-group">
                            <label for="nm_pemeliharaan">Nama Pemeliharaan</label>
                            <input type="text" class="form-control" id="nm_pemeliharaan" name = "nm_pemeliharaan" value="{{$pemeliharaan->nm_pemeliharaan}}">
                        </div>
                        <div class="form-group">
                            <label for="jml_pelihara">Jumlah yang akan dipelihara</label>
                            <input type="text" class="form-control" id="jml_pelihara" name = "jml_pelihara" value="{{$pemeliharaan->jml_pelihara}}">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name = "keterangan" value="{{$pemeliharaan->keterangan}}">
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