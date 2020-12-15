<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class neighborhoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('neighborhoods')->truncate();

        DB::table('neighborhoods')->insert(['neighborhood'=>"9 de julio",'slug'=>"9-de-julio",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Acantilados",'slug'=>"acantilados",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Aeropuerto",'slug'=>"aeropuerto",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Alfar",'slug'=>"alfar",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Antártida Argentina",'slug'=>"antartida-argentina",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Autodromo",'slug'=>"autodromo",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Barrio 180",'slug'=>"barrio-180",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Bernardino Rivadavia",'slug'=>"bernardino-rivadavia",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Belgrano",'slug'=>"belgrano",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Belisario Roldán",'slug'=>"belisario-roldan",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Bosque Alegre",'slug'=>"bosque-alegre",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Bosque grande",'slug'=>"bosque-grande",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Bosque peralta ramos",'slug'=>"bosque-peralta-ramos",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Caisamar",'slug'=>"caisamar",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Centenario",'slug'=>"centenario",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Centro",'slug'=>"centro",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Cerrito",'slug'=>"cerrito",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Cerrito sur",'slug'=>"cerrito-sur",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Cerrito San Salvador",'slug'=>"cerrito-san-salvador",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Colina alegre",'slug'=>"colina-alegre",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Colinas de Peralta Ramos",'slug'=>"colinas-de-peralta-ramos",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Constitución",'slug'=>"constitucion",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Coronel Dorrego",'slug'=>"coronel-dorrego",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Costa azul",'slug'=>"costa-azul",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Divino rostro",'slug'=>"divino-rostro",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Don Bosco",'slug'=>"don-bosco",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Don Emilio",'slug'=>"don-emilio",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Dorrego",'slug'=>"dorrego",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"El grosellar",'slug'=>"el-grosellar",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"El jardin",'slug'=>"el-jardin",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"El martillo",'slug'=>"el-martillo",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"El progreso",'slug'=>"el-progreso",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Estrada",'slug'=>"estrada",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Etchpare",'slug'=>"etchepare",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Faro",'slug'=>"faro",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Faro norte",'slug'=>"faro-norte",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Florentino Ameghino",'slug'=>"florentino-ameghino",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"General Pueyrredon",'slug'=>"general-pueyrredon",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Hipodromo",'slug'=>"hipodromo",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"J. López de Gomara",'slug'=>"lopez-de-gomara",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Jorge Newbery",'slug'=>"jorge-newbery",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Juramento",'slug'=>"juramento",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"La florida",'slug'=>"la-florida",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"La perla",'slug'=>"la-perla",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"La zulema",'slug'=>"la-zulema",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Las américas",'slug'=>"las-americas",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Las avenidas",'slug'=>"las-avenidas",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Las canteras",'slug'=>"las-canteras",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Las lilas",'slug'=>"las-lilas",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Las heras",'slug'=>"las-heras",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Las retamas",'slug'=>"las-retamas",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Libertad",'slug'=>"libertad",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Lomas del golf",'slug'=>"lomas-del-golf",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Los acantilados",'slug'=>"los-acantilados",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Los pinares",'slug'=>"los-pinares",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Los tilos",'slug'=>"los-tilos",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Los troncos",'slug'=>"los-troncos",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Malvinas Argentinas",'slug'=>"malvinas-argentinas",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Mar y sol",'slug'=>"mar-y-sol",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Montemar",'slug'=>"montemar",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Nueva pompeya",'slug'=>"nueva-pompeya",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Nuevo golf",'slug'=>"nuevo-golf",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Parque hermoso",'slug'=>"parque-hermoso",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Parque la florida",'slug'=>"parque-la-florida",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Parque Luro",'slug'=>"parque-luro",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Parque Palermo",'slug'=>"parque-palermo",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Parque Peña",'slug'=>"parque-pena",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Peralta Ramos oeste",'slug'=>"peralta-ramos",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Pinos de Anchorena",'slug'=>"pinos-de-anchorena",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Playa chapadmalal",'slug'=>"playa-chapadmalal",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Playa grande",'slug'=>"playa-grande",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Playa los lobos",'slug'=>"playa-los-lobos",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Playa serena",'slug'=>"playa-serena",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Primera junta",'slug'=>"primera-junta",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Pueyrredon",'slug'=>"pueyrredon",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Punta mogotes",'slug'=>"punta-mogotes",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Regional",'slug'=>"regional",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Rumenco",'slug'=>"rumenco",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"San Antini",'slug'=>"san-antini",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"San Carlos",'slug'=>"san-carlos",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"San Eduardo",'slug'=>"san-eduardo",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"San Geronimo",'slug'=>"san-geromino",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"San Jacinto",'slug'=>"san-jacinto",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"San José",'slug'=>"san-jose",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"San Juan",'slug'=>"san-juan",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"San Martín",'slug'=>"san-martin",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"San Patricio",'slug'=>"san-patricio",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"San Salvador",'slug'=>"san-salvador",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Santa Mónica",'slug'=>"santa-monica",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Santa Rita",'slug'=>"santa-rita",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Santa Rosa de lima",'slug'=>"santa-rosa-de-lima",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Santa Rosa del mar",'slug'=>"santa-rosa-del-mar",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Sarmiento",'slug'=>"sarmiento",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Stalla Maris",'slug'=>"stella-maris",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Termas Huinco",'slug'=>"termas-huinco",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Villa Lourdes",'slug'=>"villa-lourdes",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Villa primavera",'slug'=>"villa-primavera",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Virgen de lujan",'slug'=>"virgen-de-lujan",'id_city'=>1]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Zacagnini",'slug'=>"zacagnini",'id_city'=>1]);
    }
}
