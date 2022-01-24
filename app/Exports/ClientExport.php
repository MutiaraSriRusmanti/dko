<?php

namespace App\Exports;

use App\Models\tahap1;
use Maatwebsite\Excel\Concerns\FromCollection;

class ClientExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return tahap1::all();
    }
}
