<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        App\Models\BrandMaster::create([
            'status_id'	=> 1,
            'product_id'	=> 1,
            'image_id'	=> 1,
            'name'	=> 'Matahari',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
    }
}
