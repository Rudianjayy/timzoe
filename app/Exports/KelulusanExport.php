<?php

namespace App\Exports;

use App\Models\Suratkelulusan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class KelulusanExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Kelulusan::all();
    // }
    public function __construct(string $keyword)
    {
        $this->nama_siswa = $keyword;
    }
    public function view(): View
    {
        $data = Suratkelulusan::all();
        return view('kurikulum.kelulusan.suratkelulusanexcel',compact('data'));
    }
}
