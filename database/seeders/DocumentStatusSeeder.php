<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            ['id' => 1, 'name' => 'Draft', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Pending', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Signed', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'Canceled', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => 'Expired', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'name' => 'Rejected', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('document_status')->insert($statuses);
    }
}
