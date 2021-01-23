<?php

namespace App\Imports;

use App\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Product([
            'name'        => $row['name'],
            'description' => $row['description'],
            'price'       => $row['price'],
            'category_id' => $row['category_id'],
        ]);
    }
}
