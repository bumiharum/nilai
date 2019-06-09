<?php

namespace App\Exports;

use App\PAI;
use Maatwebsite\Excel\Concerns\FromCollection;

class PAIExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PAI::all();
    }
}
