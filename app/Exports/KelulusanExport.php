<?php

namespace App\Exports;

use App\Models\Kelulusan;
use Maatwebsite\Excel\Concerns\FromCollection;

class KelulusanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kelulusan::all();
    }
}
