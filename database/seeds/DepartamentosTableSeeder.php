<?php

use Illuminate\Database\Seeder;

class DepartamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
       {
         //delete users table records
         DB::table('departamentos')->delete();
         //insert some dummy records
         DB::table('departamentos')->insert(array(
    array( // row #0
        'id' => 1,
        'nombre' => 'Amazonas',
    ),
    array( // row #1
        'id' => 2,
        'nombre' => 'Antioquia',
    ),
    array( // row #2
        'id' => 3,
        'nombre' => 'Arauca',
    ),
    array( // row #3
        'id' => 4,
        'nombre' => 'Atlántico',
    ),
    array( // row #4
        'id' => 5,
        'nombre' => 'Bolívar',
    ),
    array( // row #5
        'id' => 6,
        'nombre' => 'Boyacá',
    ),
    array( // row #6
        'id' => 7,
        'nombre' => 'Caldas',
    ),
    array( // row #7
        'id' => 8,
        'nombre' => 'Caquetá',
    ),
    array( // row #8
        'id' => 9,
        'nombre' => 'Casanare',
    ),
    array( // row #9
        'id' => 10,
        'nombre' => 'Cauca',
    ),
    array( // row #10
        'id' => 11,
        'nombre' => 'Cesar',
    ),
    array( // row #11
        'id' => 12,
        'nombre' => 'Chocó',
    ),
    array( // row #12
        'id' => 13,
        'nombre' => 'Córdoba',
    ),
    array( // row #13
        'id' => 14,
        'nombre' => 'Cundinamarca',
    ),
    array( // row #14
        'id' => 15,
        'nombre' => 'Güainia',
    ),
    array( // row #15
        'id' => 16,
        'nombre' => 'Guaviare',
    ),
    array( // row #16
        'id' => 17,
        'nombre' => 'Huila',
    ),
    array( // row #17
        'id' => 18,
        'nombre' => 'La Guajira',
    ),
    array( // row #18
        'id' => 19,
        'nombre' => 'Magdalena',
    ),
    array( // row #19
        'id' => 20,
        'nombre' => 'Meta',
    ),
    array( // row #20
        'id' => 21,
        'nombre' => 'Nariño',
    ),
    array( // row #21
        'id' => 22,
        'nombre' => 'Norte de Santander',
    ),
    array( // row #22
        'id' => 23,
        'nombre' => 'Putumayo',
    ),
    array( // row #23
        'id' => 24,
        'nombre' => 'Quindio',
    ),
    array( // row #24
        'id' => 25,
        'nombre' => 'Risaralda',
    ),
    array( // row #25
        'id' => 26,
        'nombre' => 'San Andrés y Providencia',
    ),
    array( // row #26
        'id' => 27,
        'nombre' => 'Santander',
    ),
    array( // row #27
        'id' => 28,
        'nombre' => 'Sucre',
    ),
    array( // row #28
        'id' => 29,
        'nombre' => 'Tolima',
    ),
    array( // row #29
        'id' => 30,
        'nombre' => 'Valle del Cauca',
    ),
    array( // row #30
        'id' => 31,
        'nombre' => 'Vaupés',
    ),
    array( // row #31
        'id' => 32,
        'nombre' => 'Vichada',
    ),
          ));
       }
}
