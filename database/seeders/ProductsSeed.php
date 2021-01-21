<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ProductsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([

            'name'=>'букет1',
            'price'=>'9999 рублей',
            'descriptione'=>'Описание товараОписание товараОписание товара'
        ]);

        Product::create([

            'name'=>'букет2',
            'price'=>'9000 рублей',
            'descriptione'=>'Описание товараОписание товараОписание товара'
        ]);
        //
    }
}
