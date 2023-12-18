<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        App\Models\ImageMaster::create([
            'image_master_id'	=> 1,
            'product_id'	=> 1,
            'status_id'	=> 1,
            'category_id'	=> 1,
            'name'	=> 'img1',
            'image'	=> 'img1.png',
            'description' => '-',
            'table_name' => '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
    }
}
