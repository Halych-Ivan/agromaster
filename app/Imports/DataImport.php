<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;


class DataImport implements ToCollection
{
    use Importable;


    public function collection(Collection $rows)
    {
    }

}
