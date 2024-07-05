<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriesSeeder extends Seeder
{
    public function run()
    {
        DB::table('catagories')->insert([
            ['id' => 1, 'catagory_name' => 'Sedan', 'created_at' => Carbon::parse('2024-06-12 22:46:04'), 'updated_at' => Carbon::parse('2024-06-12 22:46:04')],
            ['id' => 2, 'catagory_name' => 'SUV', 'created_at' => Carbon::parse('2024-06-12 22:46:04'), 'updated_at' => Carbon::parse('2024-06-12 22:46:04')],
            ['id' => 3, 'catagory_name' => 'Truck', 'created_at' => Carbon::parse('2024-06-12 22:46:04'), 'updated_at' => Carbon::parse('2024-06-12 22:46:04')],
            ['id' => 4, 'catagory_name' => 'Coupe', 'created_at' => Carbon::parse('2024-06-12 22:46:04'), 'updated_at' => Carbon::parse('2024-06-12 22:46:04')],
            ['id' => 5, 'catagory_name' => 'Convertible', 'created_at' => Carbon::parse('2024-06-12 22:46:04'), 'updated_at' => Carbon::parse('2024-06-12 22:46:04')],
            ['id' => 6, 'catagory_name' => 'Hatchback', 'created_at' => Carbon::parse('2024-06-12 22:46:46'), 'updated_at' => Carbon::parse('2024-06-12 22:46:46')],
            ['id' => 7, 'catagory_name' => 'Minivan', 'created_at' => Carbon::parse('2024-06-12 22:46:46'), 'updated_at' => Carbon::parse('2024-06-12 22:46:46')],
            ['id' => 8, 'catagory_name' => 'Luxury', 'created_at' => Carbon::parse('2024-06-12 22:46:46'), 'updated_at' => Carbon::parse('2024-06-12 22:46:46')],
            ['id' => 9, 'catagory_name' => 'Electric', 'created_at' => Carbon::parse('2024-06-12 22:46:46'), 'updated_at' => Carbon::parse('2024-06-12 22:46:46')],
            ['id' => 10, 'catagory_name' => 'Sports Car', 'created_at' => Carbon::parse('2024-06-12 22:46:46'), 'updated_at' => Carbon::parse('2024-06-12 22:46:46')],
        ],);
    }
}
