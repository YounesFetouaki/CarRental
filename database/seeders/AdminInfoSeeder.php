<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AdminInfoSeeder extends Seeder
{
    public function run()
    {
        DB::table('admin_info')->insert([
            [
                'admin_id' => 2,
                'name' => 'Admin',
                'phone' => '0620000000',
                'username' => 'admin1',
                'email' => 'admin1@admin.com',
                'password' => 'eyJpdiI6IkFrUFRoRXFoZ0ZmYi9ybW05anpkMEE9PSIsInZhbHVlIjoiOTJ4SVoySjVsNmFsYWNaM3FBdTVqdz09IiwibWFjIjoiYzc2ODUxMDlkZTQyNzljMmMyM2ZiN2ExYjQ5M2MwNDZlY2Q2NWQ5OTE5NTY5ZGY0ZGFkODhhYzcwNTRjZjg1NCIsInRhZyI6IiJ9',
                'reference_code' => 'AB96',
                'created_at' => Carbon::parse('2024-06-08 10:53:28'),
                'updated_at' => Carbon::parse('2024-06-08 10:53:28'),
            ],
        ]);
    }
}
