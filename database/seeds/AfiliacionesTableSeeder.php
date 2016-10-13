<?php

use Illuminate\Database\Seeder;

class AfiliacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
        {
          //delete users table records
          DB::table('afiliaciones')->delete();
          //insert some dummy records
          DB::table('afiliaciones')->insert(array(
     array( // row #0
         'codigo_empresa' => 1,
         'nombre' => 'Emsanar',
     ),
     array( // row #0
         'codigo_empresa' => 2,
         'nombre' => 'Asmet Salud',
     ),
     array( // row #0
         'codigo_empresa' => 3,
         'nombre' => 'Confamiliar',
     ),
     array( // row #0
         'codigo_empresa' => 4,
         'nombre' => 'SaludCoop',
     ),

           ));
        }
}
