<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $size = [35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45];
        foreach ($size as $value) {
            DB::table('size')->insert([
                'size' => $value,
            ]);
        }
    }
}
