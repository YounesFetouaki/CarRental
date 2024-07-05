<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            AdminInfoSeeder::class,
            BrandsSeeder::class,
            CategoriesSeeder::class,
            FinalVendorsSeeder::class,
            ProductsSeeder::class,
            UserSeeder::class,
            VendorSeeder::class,
        ]);
    }
}
