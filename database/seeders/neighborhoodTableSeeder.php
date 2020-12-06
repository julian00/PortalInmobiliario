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

        DB::table('neighborhoods')->insert(['neighborhood'=>"9 de julio"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Acantilados"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Aeropuerto"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Alfar"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Antártida Argentina"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Autodromo"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Barrio 180"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Bernardino Rivadavia"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Belgrano"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Belisario Roldán"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Bosque Alegre"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Bosque grande"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Bosque peralta ramos"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Caisamar"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Centenario"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Centro"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Cerrito"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Cerrito sur"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Cerrito San Salvador"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Colina alegre"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Colinas de Peralta Ramos"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Constitución"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Coronel Dorrego"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Costa azul"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Divino rostro"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Don Bosco"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Don Emilio"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Dorrego"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"El grosellar"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"El jardin"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"El martillo"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"El progreso"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Estrada"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Etchpare"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Faro"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Faro norte"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Florentino Ameghino"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"General Pueyrredon"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Hipodromo"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"J. López de Gomara"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Jorge Newbery"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Juramento"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"La florida"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"La perla"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"La zulema"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Las américas"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Las avenidas"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Las canteras"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Las lilas"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Las heras"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Las retamas"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Libertad"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Lomas del golf"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Los acantilados"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Los pinares"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Los tilos"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Los troncos"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Malvinas Argentinas"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Mar y sol"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Montemar"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Nueva pompeya"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Nuevo golf"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Parque hermoso"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Parque la florida"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Parque Luro"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Parque Palermo"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Parque Peña"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Peralta Ramos oeste"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Pinos de Anchorena"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Playa chapadmalal"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Playa grande"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Playa los lobos"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Playa serena"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Primera junta"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Pueyrredon"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Punta mogotes"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Regional"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Rumenco"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"San Antini"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"San Carlos"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"San Eduardo"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"San Geronimo"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"San Jacinto"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"San José"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"San Juan"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"San Martín"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"San Patricio"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"San Salvador"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Santa Mónica"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Santa Rita"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Santa Rosa de lima"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Santa Rosa del mar"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Sarmiento"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Stalla Maris"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Termas Huinco"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Villa Lourdes"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Villa primavera"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Virgen de lujan"]);
        DB::table('neighborhoods')->insert(['neighborhood'=>"Zacagnini"]);
    }
}
