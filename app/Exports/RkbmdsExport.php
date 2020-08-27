<?php

namespace App\Exports;

use App\Rkbmd;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;


class RkbmdsExport implements FromCollection, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection(){
        return Rkbmd::all();
    }

    public function map($rkbmd): array{
        return [
            $rkbmd->program->program,
            $rkbmd->kegiatan->kegiatan,
            $rkbmd->output->output,
            $rkbmd->bmd->kd_barang,
            $rkbmd->bmd->nm_barang,
            $rkbmd->satuan,
            $rkbmd->jml_usul,
            $rkbmd->jml_maks,
            $rkbmd->bmd->jml,
            $rkbmd->jml_riil
        ];
    }
}
