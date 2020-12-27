<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class currenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('currencies')->truncate();

        DB::table('currencies')->insert(['currency'=>"Peso",'symbol'=>'$']);
        DB::table('currencies')->insert(['currency'=>"Dolar",'symbol'=>'U$S']);
    }
}
