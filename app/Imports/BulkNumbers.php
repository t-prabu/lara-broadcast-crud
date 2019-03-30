<?php

namespace App\Imports;

use App\Numbers;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class BulkNumbers implements ToModel, WithHeadingRow
{
    
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Numbers([
           'name'     => $row['name'],
           'number'    => $row['number'], 
           'numbers_network_id_foreign' => $row['network_id'],
        ]);
    }
}
