<?php

namespace App\Exports;

use App\PKN;
use Maatwebsite\Excel\Concerns\FromCollection;

class PKNExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PKN::latest()->get();
    }
}
