@extends('layouts.master')

@section('content')
    <div class="jumbotron bg-primary">
        <div class="card">
            <div class="card-header">
                <h3>Form Input Pemeliharaan</h3>
                <p>Masukkan pemeliharaan</p>
            </div>
            <div class="card-body">
                <div class="ml-3">
                    <form action="/pemeliharaan" method="POST">
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
                            <label for="sat">Satuan</label>
                            <input type="text" class="form-control" id="sat" name = "sat" placeholder="Satuan">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" class="form-control" id="status" name = "status" placeholder="digunakan sendiri atau pinjam pakai">
                        </div>
                        <div class="form-group">
                            <label for="baik">Jumlah Kondisi Barang Baik</label>
                            <input type="text" class="form-control" id="baik" name = "baik" placeholder="jumlah kondisi baik">
                        </div>
                        <div class="form-group">
                            <label for="rr">Jumlah Kondisi Barang Rusak Ringan</label>
                            <input type="text" class="form-control" id="rr" name = "rr" placeholder="jumlah kondisi rusak ringan">
                        </div>
                        <div class="form-group">
                            <label for="rb">Jumlah Kondisi Barang Rusak Berat</label>
                            <input type="text" class="form-control" id="rb" name = "rb" placeholder="jumlah kondisi rusak berat">
                        </div>
                        <div class="form-group">
                            <label for="nm_pemeliharaan">Nama Pemeliharaan</label>
                            <input type="text" class="form-control" id="nm_pemeliharaan" name = "nm_pemeliharaan" placeholder="Nama Pemeliharaan">
                        </div>
                        <div class="form-group">
                            <label for="jml_pelihara">Jumlah yang akan dipelihara</label>
                            <input type="text" class="form-control" id="jml_pelihara" name = "jml_pelihara" placeholder="Jumlah barang yang akan dipelihara">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name = "keterangan" placeholder="Keterangan Pemeliharaan">
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