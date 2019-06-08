<?php

namespace App\Imports;

use App\PAI;
use Maatwebsite\Excel\Concerns\ToModel;

class PAIImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new PAI([
          'nama' => $row[0],
          'semester_1' => $row[1],
          'pengetahuan_1' => $row[2],
          'keterampilan_1' => $row[3],
          'semester_2' => $row[4],
          'pengetahuan_2' => $row[5],
          'keterampilan_2' => $row[6],
        ]);
    }
}
