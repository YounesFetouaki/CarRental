<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BrandsSeeder extends Seeder
{
    public function run()
    {
        DB::table('brands')->insert([
            ['id' => 1, 'brand_name' => 'Toyota', 'created_at' => Carbon::parse('2024-06-12 22:43:29'), 'updated_at' => Carbon::parse('2024-06-12 22:43:29')],
            ['id' => 2, 'brand_name' => 'Ford', 'created_at' => Carbon::parse('2024-06-12 22:43:29'), 'updated_at' => Carbon::parse('2024-06-12 22:43:29')],
            ['id' => 3, 'brand_name' => 'BMW', 'created_at' => Carbon::parse('2024-06-12 22:43:29'), 'updated_at' => Carbon::parse('2024-06-12 22:43:29')],
            ['id' => 4, 'brand_name' => 'Honda', 'created_at' => Carbon::parse('2024-06-12 22:43:29'), 'updated_at' => Carbon::parse('2024-06-12 22:43:29')],
            ['id' => 5, 'brand_name' => 'Chevrolet', 'created_at' => Carbon::parse('2024-06-12 22:43:29'), 'updated_at' => Carbon::parse('2024-06-12 22:43:29')],
            ['id' => 6, 'brand_name' => 'Audi', 'created_at' => Carbon::parse('2024-06-12 22:43:57'), 'updated_at' => Carbon::parse('2024-06-12 22:43:57')],
            ['id' => 7, 'brand_name' => 'Mercedes-Benz', 'created_at' => Carbon::parse('2024-06-12 22:43:57'), 'updated_at' => Carbon::parse('2024-06-12 22:43:57')],
            ['id' => 8, 'brand_name' => 'Nissan', 'created_at' => Carbon::parse('2024-06-12 22:43:57'), 'updated_at' => Carbon::parse('2024-06-12 22:43:57')],
            ['id' => 9, 'brand_name' => 'Volkswagen', 'created_at' => Carbon::parse('2024-06-12 22:43:57'), 'updated_at' => Carbon::parse('2024-06-12 22:43:57')],
            ['id' => 10, 'brand_name' => 'Hyundai', 'created_at' => Carbon::parse('2024-06-12 22:43:57'), 'updated_at' => Carbon::parse('2024-06-12 22:43:57')],
        ]);
    }
}