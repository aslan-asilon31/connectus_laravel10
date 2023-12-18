<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IssueMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $issue_masters = [
                [
                    'id' => 10,
                    'description' => 'Assigned',
                    'aktif' => 1,
                    'type' => 'oracle',
                    'mssubcategory_id' => null,
                ],
                [
                    'id' => 13,
                    'description' => 'Bug',
                    'aktif' => 1,
                    'type' => 'oracle',
                    'mssubcategory_id' => null,
                ],
                [
                    'id' => 2,
                    'description' => 'Bugs',
                    'aktif' => 1,
                    'type' => null,
                    'mssubcategory_id' => null,
                ],
                [
                    'id' => 0,
                    'description' => 'Change Request',
                    'aktif' => 1,
                    'type' => 'network',
                    'mssubcategory_id' => null,
                ],
                [
                    'id' => 38,
                    'description' => 'Cleanup',
                    'aktif' => 1,
                    'type' => 'network',
                    'mssubcategory_id' => 200,
                ],
                [
                    'id' => 4,
                    'description' => 'Data',
                    'aktif' => 1,
                    'type' => null,
                    'mssubcategory_id' => null,
                ],
                [
                    'id' => 8,
                    'description' => 'Import Data',
                    'aktif' => 1,
                    'type' => 'oracle',
                    'mssubcategory_id' => null,
                ],
                [
                    'id' => 7,
                    'description' => 'Inactive',
                    'aktif' => 0,
                    'type' => 'oracle',
                    'mssubcategory_id' => null,
                ],
                [
                    'id' => 11,
                    'description' => 'New',
                    'aktif' => 1,
                    'type' => 'oracle',
                    'mssubcategory_id' => null,
                ],
                [
                    'id' => 1,
                    'description' => 'New Request',
                    'aktif' => 1,
                    'type' => null,
                    'mssubcategory_id' => null,
                ],
                [
                    'id' => 66,
                    'description' => 'New Task',
                    'aktif' => 1,
                    'type' => 'network',
                    'mssubcategory_id' => 192,
                ],
                [
                    'id' => 3,
                    'description' => 'Setup',
                    'aktif' => 1,
                    'type' => null,
                    'mssubcategory_id' => null,
                ],
                [
                    'id' => 19,
                    'description' => 'Troubleshoot',
                    'aktif' => 1,
                    'type' => 'network',
                    'mssubcategory_id' => 193,
                ],
                [
                    'id' => 9,
                    'description' => 'Update',
                    'aktif' => 1,
                    'type' => 'oracle',
                    'mssubcategory_id' => null,
                ],
            ];

            DB::table('issue_masters')->insert($issue_masters);
    }
}
