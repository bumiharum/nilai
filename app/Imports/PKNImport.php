<?php

namespace App\Imports;

use App\PKN;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PKNImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new PKN([
          'nama' => $row['nama'],
          'S1' => $row['s1'],
          'P1' => $row['p1'],
          'K1' => $row['k1'],
          'S2' => $row['s2'],
          'P2' => $row['p2'],
          'K2' => $row['k2'],
          'S3' => $row['s3'],
          'P3' => $row['p3'],
          'K3' => $row['k3'],
          'S4' => $row['s4'],
          'P4' => $row['p4'],
          'K4' => $row['k4'],
          'S5' => $row['s5'],
          'P5' => $row['p5'],
          'K5' => $row['k5'],
          'S6' => $row['s6'],
          'P6' => $row['p6'],
          'K6' => $row['k6'],
          'NB' => $row['nb']
        ]);
    }
}
