<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class provinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('provinces')->truncate();

        DB::table('provinces')->insert(['province'=>"Buenos Aires",'slug'=>"buenos-aires"]);
    }
}
