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
          'semester_3' => $row[7],
          'pengetahuan_3' => $row[8],
          'keterampilan_3' => $row[9],
          'semester_4' => $row[10],
          'pengetahuan_4' => $row[11],
          'keterampilan_4' => $row[12],
          'semester_5' => $row[13],
          'pengetahuan_5' => $row[14],
          'keterampilan_5' => $row[15],
          'semester_6' => $row[16],
          'pengetahuan_6' => $row[17],
          'keterampilan_6' => $row[18]
        ]);
    }
}
