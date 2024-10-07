<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            "name"=>"redme",
            "price"=>"20000",
            "cetagery"=>"mobile",
            "image"=>"WhatsApp Image 2024-09-28 at 16.34.32_c0c96c39.jpg",
            "descripation"=>"this is very beautiful mobile"
        ]);
    }
}
