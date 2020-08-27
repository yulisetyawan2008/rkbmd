<?php

namespace App\Exports;

use App\Pemeliharaan;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;

class PemeliharaansExport implements FromCollection, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection(){
        return Pemeliharaan::all();
    }

    public function map($pemeliharaan): array{
        return [
            $pemeliharaan->program->program,
            $pemeliharaan->kegiatan->kegiatan,
            $pemeliharaan->output->output,
            $pemeliharaan->bmd->kd_barang,
            $pemeliharaan->bmd->nm_barang,
            $pemeliharaan->bmd->jml,
            $pemeliharaan->sat,
            $pemeliharaan->status,
            $pemeliharaan->baik,
            $pemeliharaan->rr,
            $pemeliharaan->rb,
            $pemeliharaan->nm_pemeliharaan,
            $pemeliharaan->jml_pelihara,
            $pemeliharaan->keterangan
            
        ];
    }
}
