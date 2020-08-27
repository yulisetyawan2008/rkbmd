@extends('layouts.master')

@section('content')
    <div class="jumbotron bg-primary">
        <div class="card">
            <div class="card-header">
                <h3>Form Input RKBMD Pengadaan</h3>
                <p>Masukkan Rencana Kebutuhan Barang Milik Daerah Pengadaan</p>
            </div>
            <div class="card-body">
                <div class="ml-3">
                    <form action="/rkbmd" method="POST">
                        @csrf 
                        <div class="form-group">
                            <label for="program_id">Program</label>
                            <select class="form-control" id="program_id" name = "program_id">
                                @foreach($programs as $program)
                                    <option value="{{$program->id}}">{{$program->program}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kegiatan_id">Kegiatan</label>
                            <select class="form-control" id="kegiatan_id" name = "kegiatan_id">
                                @foreach($kegiatans as $kegiatan)
                                    <option value="{{$kegiatan->id}}">{{$kegiatan->kegiatan}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="output_id">Output</label>
                            <select class="form-control" id="output_id" name = "output_id">
                                @foreach($outputs as $output)
                                    <option value="{{$output->id}}">{{$output->output}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="bmd_id">Nama Barang</label>
                            <select class="form-control" id="bmd_id" name = "bmd_id">
                                @foreach($bmds as $bmd)
                                    <option value="{{$bmd->id}}">{{$bmd->nm_barang}} dengan jumlah barang {{$bmd->jml}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="jml_usul">Jumlah yang diusulkan</label>
                            <input type="text" class="form-control" id="jml_usul" name = "jml_usul" placeholder="Jumlah Usulan">
                        </div>
                        <div class="form-group">
                            <label for="jml_maks">Jumlah Maksimum</label>
                            <input type="text" class="form-control" id="jml_maks" name = "jml_maks" placeholder="Jumlah Maksimum = Jumlah barang + Jumlah Usulan">
                        </div>
                        <div class="form-group">
                            <label for="jml_riil">Jumlah Kebutuhan Riil</label>
                            <input type="text" class="form-control" id="jml_riil" name = "jml_riil" placeholder="isikan sama dengan jumlah usulan">
                        </div>
                        <div class="form-group">
                            <label for="satuan">Satuan</label>
                            <input type="text" class="form-control" id="satuan" name = "satuan" placeholder="Satuan">
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