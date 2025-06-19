<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('products')->insert([
            [
                'name' => 'Laptop',          
                'category_id' => 1,
                'price' => 3500,
                'stock' => 150,
            ],
            [
                'name' => 'Roman',
                'category_id' => 2,
                'price' => 45,
                'stock' => 150,
            ],
            [
                'name' => 'Geacă',
                'category_id' => 3,
                'price' => 250,
                'stock' => 150,
            ],
            [
                'name' => 'perna',
                'category_id' => 4,
                'price' => 20,
                'stock' => 150,
            ]                    
        ]);
    }
}
