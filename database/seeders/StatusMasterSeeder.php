<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MasterData\StatusMaster;

class StatusMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StatusMaster::create([
            'status_id'	=> 1,
            'name'	=> 'active',
            'description'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        StatusMaster::create([
            'status_id'	=> 2,
            'name'	=> 'inactive',
            'description'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        StatusMaster::create([
            'status_id'	=> 3,
            'name'	=> 'registered',
            'description'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        StatusMaster::create([
            'status_id'	=> 4,
            'name'	=> 'banned',
            'description'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        StatusMaster::create([
            'status_id'	=> 5,
            'name'	=> 'pending',
            'description'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        StatusMaster::create([
            'status_id'	=> 6,
            'name'	=> 'expired',
            'description'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        StatusMaster::create([
            'status_id'	=> 7,
            'name'	=> 'sold-out',
            'description'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        StatusMaster::create([
            'status_id'	=> 8,
            'name'	=> 'on-sale',
            'description'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        StatusMaster::create([
            'status_id'	=> 9,
            'name'	=> 'available',
            'description'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        StatusMaster::create([
            'status_id'	=> 10,
            'name'	=> 'pre-ordered',
            'description'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        StatusMaster::create([
            'status_id'	=> 11,
            'name'	=> 'delivered',
            'description'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        StatusMaster::create([
            'status_id'	=> 12,
            'name'	=> 'on-delivery',
            'description'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        StatusMaster::create([
            'status_id'	=> 13,
            'name'	=> 'on-return',
            'description'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        StatusMaster::create([
            'status_id'	=> 14,
            'name'	=> 'returning',
            'description'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
        StatusMaster::create([
            'status_id'	=> 15,
            'name'	=> 'cancelled',
            'description'	=> '-',
            'lang'	=> 1,
            'lang_id'	=> 1, 
        ]);
    }
}
