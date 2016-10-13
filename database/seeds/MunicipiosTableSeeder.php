<?php

use Illuminate\Database\Seeder;

class MunicipiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
       {
         //delete users table records
         DB::table('municipios')->delete();
         //insert some dummy records
         DB::table('municipios')->insert(array(
    array( // row #0
        'id' => 1,
        'nombre' => 'Leticia',
        'departamento_id' => 1,
    ),
    array( // row #1
        'id' => 2,
        'nombre' => 'Puerto Nariño',
        'departamento_id' => 1,
    ),
    array( // row #2
        'id' => 3,
        'nombre' => 'Abejorral',
        'departamento_id' => 2,
    ),
    array( // row #3
        'id' => 4,
        'nombre' => 'Abriaquí',
        'departamento_id' => 2,
    ),
    array( // row #4
        'id' => 5,
        'nombre' => 'Alejandria',
        'departamento_id' => 2,
    ),
    array( // row #5
        'id' => 6,
        'nombre' => 'Amagá',
        'departamento_id' => 2,
    ),
    array( // row #6
        'id' => 7,
        'nombre' => 'Amalfi',
        'departamento_id' => 2,
    ),
    array( // row #7
        'id' => 8,
        'nombre' => 'Andes',
        'departamento_id' => 2,
    ),
    array( // row #8
        'id' => 9,
        'nombre' => 'Angelópolis',
        'departamento_id' => 2,
    ),
    array( // row #9
        'id' => 10,
        'nombre' => 'Angostura',
        'departamento_id' => 2,
    ),
    array( // row #10
        'id' => 11,
        'nombre' => 'Anorí',
        'departamento_id' => 2,
    ),
    array( // row #11
        'id' => 12,
        'nombre' => 'Anzá',
        'departamento_id' => 2,
    ),
    array( // row #12
        'id' => 13,
        'nombre' => 'Apartadó',
        'departamento_id' => 2,
    ),
    array( // row #13
        'id' => 14,
        'nombre' => 'Arboletes',
        'departamento_id' => 2,
    ),
    array( // row #14
        'id' => 15,
        'nombre' => 'Argelia',
        'departamento_id' => 2,
    ),
    array( // row #15
        'id' => 16,
        'nombre' => 'Armenia',
        'departamento_id' => 2,
    ),
    array( // row #16
        'id' => 17,
        'nombre' => 'Barbosa',
        'departamento_id' => 2,
    ),
    array( // row #17
        'id' => 18,
        'nombre' => 'Bello',
        'departamento_id' => 2,
    ),
    array( // row #18
        'id' => 19,
        'nombre' => 'Belmira',
        'departamento_id' => 2,
    ),
    array( // row #19
        'id' => 20,
        'nombre' => 'Betania',
        'departamento_id' => 2,
    ),
    array( // row #20
        'id' => 21,
        'nombre' => 'Betulia',
        'departamento_id' => 2,
    ),
    array( // row #21
        'id' => 22,
        'nombre' => 'Bolívar',
        'departamento_id' => 2,
    ),
    array( // row #22
        'id' => 23,
        'nombre' => 'Briceño',
        'departamento_id' => 2,
    ),
    array( // row #23
        'id' => 24,
        'nombre' => 'Burítica',
        'departamento_id' => 2,
    ),
    array( // row #24
        'id' => 25,
        'nombre' => 'Caicedo',
        'departamento_id' => 2,
    ),
    array( // row #25
        'id' => 26,
        'nombre' => 'Caldas',
        'departamento_id' => 2,
    ),
    array( // row #26
        'id' => 27,
        'nombre' => 'Campamento',
        'departamento_id' => 2,
    ),
    array( // row #27
        'id' => 28,
        'nombre' => 'Caracolí',
        'departamento_id' => 2,
    ),
    array( // row #28
        'id' => 29,
        'nombre' => 'Caramanta',
        'departamento_id' => 2,
    ),
    array( // row #29
        'id' => 30,
        'nombre' => 'Carepa',
        'departamento_id' => 2,
    ),
    array( // row #30
        'id' => 31,
        'nombre' => 'Carmen de Viboral',
        'departamento_id' => 2,
    ),
    array( // row #31
        'id' => 32,
        'nombre' => 'Carolina',
        'departamento_id' => 2,
    ),
    array( // row #32
        'id' => 33,
        'nombre' => 'Caucasia',
        'departamento_id' => 2,
    ),
    array( // row #33
        'id' => 34,
        'nombre' => 'Cañasgordas',
        'departamento_id' => 2,
    ),
    array( // row #34
        'id' => 35,
        'nombre' => 'Chigorodó',
        'departamento_id' => 2,
    ),
    array( // row #35
        'id' => 36,
        'nombre' => 'Cisneros',
        'departamento_id' => 2,
    ),
    array( // row #36
        'id' => 37,
        'nombre' => 'Cocorná',
        'departamento_id' => 2,
    ),
    array( // row #37
        'id' => 38,
        'nombre' => 'Concepción',
        'departamento_id' => 2,
    ),
    array( // row #38
        'id' => 39,
        'nombre' => 'Concordia',
        'departamento_id' => 2,
    ),
    array( // row #39
        'id' => 40,
        'nombre' => 'Copacabana',
        'departamento_id' => 2,
    ),
    array( // row #40
        'id' => 41,
        'nombre' => 'Cáceres',
        'departamento_id' => 2,
    ),
    array( // row #41
        'id' => 42,
        'nombre' => 'Dabeiba',
        'departamento_id' => 2,
    ),
    array( // row #42
        'id' => 43,
        'nombre' => 'Don Matías',
        'departamento_id' => 2,
    ),
    array( // row #43
        'id' => 44,
        'nombre' => 'Ebéjico',
        'departamento_id' => 2,
    ),
    array( // row #44
        'id' => 45,
        'nombre' => 'El Bagre',
        'departamento_id' => 2,
    ),
    array( // row #45
        'id' => 46,
        'nombre' => 'Entrerríos',
        'departamento_id' => 2,
    ),
    array( // row #46
        'id' => 47,
        'nombre' => 'Envigado',
        'departamento_id' => 2,
    ),
    array( // row #47
        'id' => 48,
        'nombre' => 'Fredonia',
        'departamento_id' => 2,
    ),
    array( // row #48
        'id' => 49,
        'nombre' => 'Frontino',
        'departamento_id' => 2,
    ),
    array( // row #49
        'id' => 50,
        'nombre' => 'Giraldo',
        'departamento_id' => 2,
    ),
    array( // row #50
        'id' => 51,
        'nombre' => 'Girardota',
        'departamento_id' => 2,
    ),
    array( // row #51
        'id' => 52,
        'nombre' => 'Granada',
        'departamento_id' => 2,
    ),
    array( // row #52
        'id' => 53,
        'nombre' => 'Guadalupe',
        'departamento_id' => 2,
    ),
    array( // row #53
        'id' => 54,
        'nombre' => 'Guarne',
        'departamento_id' => 2,
    ),
    array( // row #54
        'id' => 55,
        'nombre' => 'Guatapé',
        'departamento_id' => 2,
    ),
    array( // row #55
        'id' => 56,
        'nombre' => 'Gómez Plata',
        'departamento_id' => 2,
    ),
    array( // row #56
        'id' => 57,
        'nombre' => 'Heliconia',
        'departamento_id' => 2,
    ),
    array( // row #57
        'id' => 58,
        'nombre' => 'Hispania',
        'departamento_id' => 2,
    ),
    array( // row #58
        'id' => 59,
        'nombre' => 'Itagüí',
        'departamento_id' => 2,
    ),
    array( // row #59
        'id' => 60,
        'nombre' => 'Ituango',
        'departamento_id' => 2,
    ),
    array( // row #60
        'id' => 61,
        'nombre' => 'Jardín',
        'departamento_id' => 2,
    ),
    array( // row #61
        'id' => 62,
        'nombre' => 'Jericó',
        'departamento_id' => 2,
    ),
    array( // row #62
        'id' => 63,
        'nombre' => 'La Ceja',
        'departamento_id' => 2,
    ),
    array( // row #63
        'id' => 64,
        'nombre' => 'La Estrella',
        'departamento_id' => 2,
    ),
    array( // row #64
        'id' => 65,
        'nombre' => 'La Pintada',
        'departamento_id' => 2,
    ),
    array( // row #65
        'id' => 66,
        'nombre' => 'La Unión',
        'departamento_id' => 2,
    ),
    array( // row #66
        'id' => 67,
        'nombre' => 'Liborina',
        'departamento_id' => 2,
    ),
    array( // row #67
        'id' => 68,
        'nombre' => 'Maceo',
        'departamento_id' => 2,
    ),
    array( // row #68
        'id' => 69,
        'nombre' => 'Marinilla',
        'departamento_id' => 2,
    ),
    array( // row #69
        'id' => 70,
        'nombre' => 'Medellín',
        'departamento_id' => 2,
    ),
    array( // row #70
        'id' => 71,
        'nombre' => 'Montebello',
        'departamento_id' => 2,
    ),
    array( // row #71
        'id' => 72,
        'nombre' => 'Murindó',
        'departamento_id' => 2,
    ),
    array( // row #72
        'id' => 73,
        'nombre' => 'Mutatá',
        'departamento_id' => 2,
    ),
    array( // row #73
        'id' => 74,
        'nombre' => 'Nariño',
        'departamento_id' => 2,
    ),
    array( // row #74
        'id' => 75,
        'nombre' => 'Nechí',
        'departamento_id' => 2,
    ),
    array( // row #75
        'id' => 76,
        'nombre' => 'Necoclí',
        'departamento_id' => 2,
    ),
    array( // row #76
        'id' => 77,
        'nombre' => 'Olaya',
        'departamento_id' => 2,
    ),
    array( // row #77
        'id' => 78,
        'nombre' => 'Peque',
        'departamento_id' => 2,
    ),
    array( // row #78
        'id' => 79,
        'nombre' => 'Peñol',
        'departamento_id' => 2,
    ),
    array( // row #79
        'id' => 80,
        'nombre' => 'Pueblorrico',
        'departamento_id' => 2,
    ),
    array( // row #80
        'id' => 81,
        'nombre' => 'Puerto Berrío',
        'departamento_id' => 2,
    ),
    array( // row #81
        'id' => 82,
        'nombre' => 'Puerto Nare',
        'departamento_id' => 2,
    ),
    array( // row #82
        'id' => 83,
        'nombre' => 'Puerto Triunfo',
        'departamento_id' => 2,
    ),
    array( // row #83
        'id' => 84,
        'nombre' => 'Remedios',
        'departamento_id' => 2,
    ),
    array( // row #84
        'id' => 85,
        'nombre' => 'Retiro',
        'departamento_id' => 2,
    ),
    array( // row #85
        'id' => 86,
        'nombre' => 'Ríonegro',
        'departamento_id' => 2,
    ),
    array( // row #86
        'id' => 87,
        'nombre' => 'Sabanalarga',
        'departamento_id' => 2,
    ),
    array( // row #87
        'id' => 88,
        'nombre' => 'Sabaneta',
        'departamento_id' => 2,
    ),
    array( // row #88
        'id' => 89,
        'nombre' => 'Salgar',
        'departamento_id' => 2,
    ),
    array( // row #89
        'id' => 90,
        'nombre' => 'San Andrés de Cuerquía',
        'departamento_id' => 2,
    ),
    array( // row #90
        'id' => 91,
        'nombre' => 'San Carlos',
        'departamento_id' => 2,
    ),
    array( // row #91
        'id' => 92,
        'nombre' => 'San Francisco',
        'departamento_id' => 2,
    ),
    array( // row #92
        'id' => 93,
        'nombre' => 'San Jerónimo',
        'departamento_id' => 2,
    ),
    array( // row #93
        'id' => 94,
        'nombre' => 'San José de Montaña',
        'departamento_id' => 2,
    ),
    array( // row #94
        'id' => 95,
        'nombre' => 'San Juan de Urabá',
        'departamento_id' => 2,
    ),
    array( // row #95
        'id' => 96,
        'nombre' => 'San Luís',
        'departamento_id' => 2,
    ),
    array( // row #96
        'id' => 97,
        'nombre' => 'San Pedro',
        'departamento_id' => 2,
    ),
    array( // row #97
        'id' => 98,
        'nombre' => 'San Pedro de Urabá',
        'departamento_id' => 2,
    ),
    array( // row #98
        'id' => 99,
        'nombre' => 'San Rafael',
        'departamento_id' => 2,
    ),
    array( // row #99
        'id' => 100,
        'nombre' => 'San Roque',
        'departamento_id' => 2,
    ),
    array( // row #100
        'id' => 101,
        'nombre' => 'San Vicente',
        'departamento_id' => 2,
    ),
    array( // row #101
        'id' => 102,
        'nombre' => 'Santa Bárbara',
        'departamento_id' => 2,
    ),
    array( // row #102
        'id' => 103,
        'nombre' => 'Santa Fé de Antioquia',
        'departamento_id' => 2,
    ),
    array( // row #103
        'id' => 104,
        'nombre' => 'Santa Rosa de Osos',
        'departamento_id' => 2,
    ),
    array( // row #104
        'id' => 105,
        'nombre' => 'Santo Domingo',
        'departamento_id' => 2,
    ),
    array( // row #105
        'id' => 106,
        'nombre' => 'Santuario',
        'departamento_id' => 2,
    ),
    array( // row #106
        'id' => 107,
        'nombre' => 'Segovia',
        'departamento_id' => 2,
    ),
    array( // row #107
        'id' => 108,
        'nombre' => 'Sonsón',
        'departamento_id' => 2,
    ),
    array( // row #108
        'id' => 109,
        'nombre' => 'Sopetrán',
        'departamento_id' => 2,
    ),
    array( // row #109
        'id' => 110,
        'nombre' => 'Tarazá',
        'departamento_id' => 2,
    ),
    array( // row #110
        'id' => 111,
        'nombre' => 'Tarso',
        'departamento_id' => 2,
    ),
    array( // row #111
        'id' => 112,
        'nombre' => 'Titiribí',
        'departamento_id' => 2,
    ),
    array( // row #112
        'id' => 113,
        'nombre' => 'Toledo',
        'departamento_id' => 2,
    ),
    array( // row #113
        'id' => 114,
        'nombre' => 'Turbo',
        'departamento_id' => 2,
    ),
    array( // row #114
        'id' => 115,
        'nombre' => 'Támesis',
        'departamento_id' => 2,
    ),
    array( // row #115
        'id' => 116,
        'nombre' => 'Uramita',
        'departamento_id' => 2,
    ),
    array( // row #116
        'id' => 117,
        'nombre' => 'Urrao',
        'departamento_id' => 2,
    ),
    array( // row #117
        'id' => 118,
        'nombre' => 'Valdivia',
        'departamento_id' => 2,
    ),
    array( // row #118
        'id' => 119,
        'nombre' => 'Valparaiso',
        'departamento_id' => 2,
    ),
    array( // row #119
        'id' => 120,
        'nombre' => 'Vegachí',
        'departamento_id' => 2,
    ),
    array( // row #120
        'id' => 121,
        'nombre' => 'Venecia',
        'departamento_id' => 2,
    ),
    array( // row #121
        'id' => 122,
        'nombre' => 'Vigía del Fuerte',
        'departamento_id' => 2,
    ),
    array( // row #122
        'id' => 123,
        'nombre' => 'Yalí',
        'departamento_id' => 2,
    ),
    array( // row #123
        'id' => 124,
        'nombre' => 'Yarumal',
        'departamento_id' => 2,
    ),
    array( // row #124
        'id' => 125,
        'nombre' => 'Yolombó',
        'departamento_id' => 2,
    ),
    array( // row #125
        'id' => 126,
        'nombre' => 'Yondó (Casabe)',
        'departamento_id' => 2,
    ),
    array( // row #126
        'id' => 127,
        'nombre' => 'Zaragoza',
        'departamento_id' => 2,
    ),
    array( // row #127
        'id' => 128,
        'nombre' => 'Arauca',
        'departamento_id' => 3,
    ),
    array( // row #128
        'id' => 129,
        'nombre' => 'Arauquita',
        'departamento_id' => 3,
    ),
    array( // row #129
        'id' => 130,
        'nombre' => 'Cravo Norte',
        'departamento_id' => 3,
    ),
    array( // row #130
        'id' => 131,
        'nombre' => 'Fortúl',
        'departamento_id' => 3,
    ),
    array( // row #131
        'id' => 132,
        'nombre' => 'Puerto Rondón',
        'departamento_id' => 3,
    ),
    array( // row #132
        'id' => 133,
        'nombre' => 'Saravena',
        'departamento_id' => 3,
    ),
    array( // row #133
        'id' => 134,
        'nombre' => 'Tame',
        'departamento_id' => 3,
    ),
    array( // row #134
        'id' => 135,
        'nombre' => 'Baranoa',
        'departamento_id' => 4,
    ),
    array( // row #135
        'id' => 136,
        'nombre' => 'Barranquilla',
        'departamento_id' => 4,
    ),
    array( // row #136
        'id' => 137,
        'nombre' => 'Campo de la Cruz',
        'departamento_id' => 4,
    ),
    array( // row #137
        'id' => 138,
        'nombre' => 'Candelaria',
        'departamento_id' => 4,
    ),
    array( // row #138
        'id' => 139,
        'nombre' => 'Galapa',
        'departamento_id' => 4,
    ),
    array( // row #139
        'id' => 140,
        'nombre' => 'Juan de Acosta',
        'departamento_id' => 4,
    ),
    array( // row #140
        'id' => 141,
        'nombre' => 'Luruaco',
        'departamento_id' => 4,
    ),
    array( // row #141
        'id' => 142,
        'nombre' => 'Malambo',
        'departamento_id' => 4,
    ),
    array( // row #142
        'id' => 143,
        'nombre' => 'Manatí',
        'departamento_id' => 4,
    ),
    array( // row #143
        'id' => 144,
        'nombre' => 'Palmar de Varela',
        'departamento_id' => 4,
    ),
    array( // row #144
        'id' => 145,
        'nombre' => 'Piojo',
        'departamento_id' => 4,
    ),
    array( // row #145
        'id' => 146,
        'nombre' => 'Polonuevo',
        'departamento_id' => 4,
    ),
    array( // row #146
        'id' => 147,
        'nombre' => 'Ponedera',
        'departamento_id' => 4,
    ),
    array( // row #147
        'id' => 148,
        'nombre' => 'Puerto Colombia',
        'departamento_id' => 4,
    ),
    array( // row #148
        'id' => 149,
        'nombre' => 'Repelón',
        'departamento_id' => 4,
    ),
    array( // row #149
        'id' => 150,
        'nombre' => 'Sabanagrande',
        'departamento_id' => 4,
    ),
    array( // row #150
        'id' => 151,
        'nombre' => 'Sabanalarga',
        'departamento_id' => 4,
    ),
    array( // row #151
        'id' => 152,
        'nombre' => 'Santa Lucía',
        'departamento_id' => 4,
    ),
    array( // row #152
        'id' => 153,
        'nombre' => 'Santo Tomás',
        'departamento_id' => 4,
    ),
    array( // row #153
        'id' => 154,
        'nombre' => 'Soledad',
        'departamento_id' => 4,
    ),
    array( // row #154
        'id' => 155,
        'nombre' => 'Suan',
        'departamento_id' => 4,
    ),
    array( // row #155
        'id' => 156,
        'nombre' => 'Tubará',
        'departamento_id' => 4,
    ),
    array( // row #156
        'id' => 157,
        'nombre' => 'Usiacuri',
        'departamento_id' => 4,
    ),
    array( // row #157
        'id' => 158,
        'nombre' => 'Achí',
        'departamento_id' => 5,
    ),
    array( // row #158
        'id' => 159,
        'nombre' => 'Altos del Rosario',
        'departamento_id' => 5,
    ),
    array( // row #159
        'id' => 160,
        'nombre' => 'Arenal',
        'departamento_id' => 5,
    ),
    array( // row #160
        'id' => 161,
        'nombre' => 'Arjona',
        'departamento_id' => 5,
    ),
    array( // row #161
        'id' => 162,
        'nombre' => 'Arroyohondo',
        'departamento_id' => 5,
    ),
    array( // row #162
        'id' => 163,
        'nombre' => 'Barranco de Loba',
        'departamento_id' => 5,
    ),
    array( // row #163
        'id' => 164,
        'nombre' => 'Calamar',
        'departamento_id' => 5,
    ),
    array( // row #164
        'id' => 165,
        'nombre' => 'Cantagallo',
        'departamento_id' => 5,
    ),
    array( // row #165
        'id' => 166,
        'nombre' => 'Cartagena',
        'departamento_id' => 5,
    ),
    array( // row #166
        'id' => 167,
        'nombre' => 'Cicuco',
        'departamento_id' => 5,
    ),
    array( // row #167
        'id' => 168,
        'nombre' => 'Clemencia',
        'departamento_id' => 5,
    ),
    array( // row #168
        'id' => 169,
        'nombre' => 'Córdoba',
        'departamento_id' => 5,
    ),
    array( // row #169
        'id' => 170,
        'nombre' => 'El Carmen de Bolívar',
        'departamento_id' => 5,
    ),
    array( // row #170
        'id' => 171,
        'nombre' => 'El Guamo',
        'departamento_id' => 5,
    ),
    array( // row #171
        'id' => 172,
        'nombre' => 'El Peñon',
        'departamento_id' => 5,
    ),
    array( // row #172
        'id' => 173,
        'nombre' => 'Hatillo de Loba',
        'departamento_id' => 5,
    ),
    array( // row #173
        'id' => 174,
        'nombre' => 'Magangué',
        'departamento_id' => 5,
    ),
    array( // row #174
        'id' => 175,
        'nombre' => 'Mahates',
        'departamento_id' => 5,
    ),
    array( // row #175
        'id' => 176,
        'nombre' => 'Margarita',
        'departamento_id' => 5,
    ),
    array( // row #176
        'id' => 177,
        'nombre' => 'María la Baja',
        'departamento_id' => 5,
    ),
    array( // row #177
        'id' => 178,
        'nombre' => 'Mompós',
        'departamento_id' => 5,
    ),
    array( // row #178
        'id' => 179,
        'nombre' => 'Montecristo',
        'departamento_id' => 5,
    ),
    array( // row #179
        'id' => 180,
        'nombre' => 'Morales',
        'departamento_id' => 5,
    ),
    array( // row #180
        'id' => 181,
        'nombre' => 'Norosí',
        'departamento_id' => 5,
    ),
    array( // row #181
        'id' => 182,
        'nombre' => 'Pinillos',
        'departamento_id' => 5,
    ),
    array( // row #182
        'id' => 183,
        'nombre' => 'Regidor',
        'departamento_id' => 5,
    ),
    array( // row #183
        'id' => 184,
        'nombre' => 'Río Viejo',
        'departamento_id' => 5,
    ),
    array( // row #184
        'id' => 185,
        'nombre' => 'San Cristobal',
        'departamento_id' => 5,
    ),
    array( // row #185
        'id' => 186,
        'nombre' => 'San Estanislao',
        'departamento_id' => 5,
    ),
    array( // row #186
        'id' => 187,
        'nombre' => 'San Fernando',
        'departamento_id' => 5,
    ),
    array( // row #187
        'id' => 188,
        'nombre' => 'San Jacinto',
        'departamento_id' => 5,
    ),
    array( // row #188
        'id' => 189,
        'nombre' => 'San Jacinto del Cauca',
        'departamento_id' => 5,
    ),
    array( // row #189
        'id' => 190,
        'nombre' => 'San Juan de Nepomuceno',
        'departamento_id' => 5,
    ),
    array( // row #190
        'id' => 191,
        'nombre' => 'San Martín de Loba',
        'departamento_id' => 5,
    ),
    array( // row #191
        'id' => 192,
        'nombre' => 'San Pablo',
        'departamento_id' => 5,
    ),
    array( // row #192
        'id' => 193,
        'nombre' => 'Santa Catalina',
        'departamento_id' => 5,
    ),
    array( // row #193
        'id' => 194,
        'nombre' => 'Santa Rosa ',
        'departamento_id' => 5,
    ),
    array( // row #194
        'id' => 195,
        'nombre' => 'Santa Rosa del Sur',
        'departamento_id' => 5,
    ),
    array( // row #195
        'id' => 196,
        'nombre' => 'Simití',
        'departamento_id' => 5,
    ),
    array( // row #196
        'id' => 197,
        'nombre' => 'Soplaviento',
        'departamento_id' => 5,
    ),
    array( // row #197
        'id' => 198,
        'nombre' => 'Talaigua Nuevo',
        'departamento_id' => 5,
    ),
    array( // row #198
        'id' => 199,
        'nombre' => 'Tiquisio (Puerto Rico)',
        'departamento_id' => 5,
    ),
    array( // row #199
        'id' => 200,
        'nombre' => 'Turbaco',
        'departamento_id' => 5,
    ),
    array( // row #200
        'id' => 201,
        'nombre' => 'Turbaná',
        'departamento_id' => 5,
    ),
    array( // row #201
        'id' => 202,
        'nombre' => 'Villanueva',
        'departamento_id' => 5,
    ),
    array( // row #202
        'id' => 203,
        'nombre' => 'Zambrano',
        'departamento_id' => 5,
    ),
    array( // row #203
        'id' => 204,
        'nombre' => 'Almeida',
        'departamento_id' => 6,
    ),
    array( // row #204
        'id' => 205,
        'nombre' => 'Aquitania',
        'departamento_id' => 6,
    ),
    array( // row #205
        'id' => 206,
        'nombre' => 'Arcabuco',
        'departamento_id' => 6,
    ),
    array( // row #206
        'id' => 207,
        'nombre' => 'Belén',
        'departamento_id' => 6,
    ),
    array( // row #207
        'id' => 208,
        'nombre' => 'Berbeo',
        'departamento_id' => 6,
    ),
    array( // row #208
        'id' => 209,
        'nombre' => 'Beteitiva',
        'departamento_id' => 6,
    ),
    array( // row #209
        'id' => 210,
        'nombre' => 'Boavita',
        'departamento_id' => 6,
    ),
    array( // row #210
        'id' => 211,
        'nombre' => 'Boyacá',
        'departamento_id' => 6,
    ),
    array( // row #211
        'id' => 212,
        'nombre' => 'Briceño',
        'departamento_id' => 6,
    ),
    array( // row #212
        'id' => 213,
        'nombre' => 'Buenavista',
        'departamento_id' => 6,
    ),
    array( // row #213
        'id' => 214,
        'nombre' => 'Busbanza',
        'departamento_id' => 6,
    ),
    array( // row #214
        'id' => 215,
        'nombre' => 'Caldas',
        'departamento_id' => 6,
    ),
    array( // row #215
        'id' => 216,
        'nombre' => 'Campohermoso',
        'departamento_id' => 6,
    ),
    array( // row #216
        'id' => 217,
        'nombre' => 'Cerinza',
        'departamento_id' => 6,
    ),
    array( // row #217
        'id' => 218,
        'nombre' => 'Chinavita',
        'departamento_id' => 6,
    ),
    array( // row #218
        'id' => 219,
        'nombre' => 'Chiquinquirá',
        'departamento_id' => 6,
    ),
    array( // row #219
        'id' => 220,
        'nombre' => 'Chiscas',
        'departamento_id' => 6,
    ),
    array( // row #220
        'id' => 221,
        'nombre' => 'Chita',
        'departamento_id' => 6,
    ),
    array( // row #221
        'id' => 222,
        'nombre' => 'Chitaraque',
        'departamento_id' => 6,
    ),
    array( // row #222
        'id' => 223,
        'nombre' => 'Chivatá',
        'departamento_id' => 6,
    ),
    array( // row #223
        'id' => 224,
        'nombre' => 'Chíquiza',
        'departamento_id' => 6,
    ),
    array( // row #224
        'id' => 225,
        'nombre' => 'Chívor',
        'departamento_id' => 6,
    ),
    array( // row #225
        'id' => 226,
        'nombre' => 'Ciénaga',
        'departamento_id' => 6,
    ),
    array( // row #226
        'id' => 227,
        'nombre' => 'Coper',
        'departamento_id' => 6,
    ),
    array( // row #227
        'id' => 228,
        'nombre' => 'Corrales',
        'departamento_id' => 6,
    ),
    array( // row #228
        'id' => 229,
        'nombre' => 'Covarachía',
        'departamento_id' => 6,
    ),
    array( // row #229
        'id' => 230,
        'nombre' => 'Cubará',
        'departamento_id' => 6,
    ),
    array( // row #230
        'id' => 231,
        'nombre' => 'Cucaita',
        'departamento_id' => 6,
    ),
    array( // row #231
        'id' => 232,
        'nombre' => 'Cuitiva',
        'departamento_id' => 6,
    ),
    array( // row #232
        'id' => 233,
        'nombre' => 'Cómbita',
        'departamento_id' => 6,
    ),
    array( // row #233
        'id' => 234,
        'nombre' => 'Duitama',
        'departamento_id' => 6,
    ),
    array( // row #234
        'id' => 235,
        'nombre' => 'El Cocuy',
        'departamento_id' => 6,
    ),
    array( // row #235
        'id' => 236,
        'nombre' => 'El Espino',
        'departamento_id' => 6,
    ),
    array( // row #236
        'id' => 237,
        'nombre' => 'Firavitoba',
        'departamento_id' => 6,
    ),
    array( // row #237
        'id' => 238,
        'nombre' => 'Floresta',
        'departamento_id' => 6,
    ),
    array( // row #238
        'id' => 239,
        'nombre' => 'Gachantivá',
        'departamento_id' => 6,
    ),
    array( // row #239
        'id' => 240,
        'nombre' => 'Garagoa',
        'departamento_id' => 6,
    ),
    array( // row #240
        'id' => 241,
        'nombre' => 'Guacamayas',
        'departamento_id' => 6,
    ),
    array( // row #241
        'id' => 242,
        'nombre' => 'Guateque',
        'departamento_id' => 6,
    ),
    array( // row #242
        'id' => 243,
        'nombre' => 'Guayatá',
        'departamento_id' => 6,
    ),
    array( // row #243
        'id' => 244,
        'nombre' => 'Guicán',
        'departamento_id' => 6,
    ),
    array( // row #244
        'id' => 245,
        'nombre' => 'Gámeza',
        'departamento_id' => 6,
    ),
    array( // row #245
        'id' => 246,
        'nombre' => 'Izá',
        'departamento_id' => 6,
    ),
    array( // row #246
        'id' => 247,
        'nombre' => 'Jenesano',
        'departamento_id' => 6,
    ),
    array( // row #247
        'id' => 248,
        'nombre' => 'Jericó',
        'departamento_id' => 6,
    ),
    array( // row #248
        'id' => 249,
        'nombre' => 'La Capilla',
        'departamento_id' => 6,
    ),
    array( // row #249
        'id' => 250,
        'nombre' => 'La Uvita',
        'departamento_id' => 6,
    ),
    array( // row #250
        'id' => 251,
        'nombre' => 'La Victoria',
        'departamento_id' => 6,
    ),
    array( // row #251
        'id' => 252,
        'nombre' => 'Labranzagrande',
        'departamento_id' => 6,
    ),
    array( // row #252
        'id' => 253,
        'nombre' => 'Macanal',
        'departamento_id' => 6,
    ),
    array( // row #253
        'id' => 254,
        'nombre' => 'Maripí',
        'departamento_id' => 6,
    ),
    array( // row #254
        'id' => 255,
        'nombre' => 'Miraflores',
        'departamento_id' => 6,
    ),
    array( // row #255
        'id' => 256,
        'nombre' => 'Mongua',
        'departamento_id' => 6,
    ),
    array( // row #256
        'id' => 257,
        'nombre' => 'Monguí',
        'departamento_id' => 6,
    ),
    array( // row #257
        'id' => 258,
        'nombre' => 'Moniquirá',
        'departamento_id' => 6,
    ),
    array( // row #258
        'id' => 259,
        'nombre' => 'Motavita',
        'departamento_id' => 6,
    ),
    array( // row #259
        'id' => 260,
        'nombre' => 'Muzo',
        'departamento_id' => 6,
    ),
    array( // row #260
        'id' => 261,
        'nombre' => 'Nobsa',
        'departamento_id' => 6,
    ),
    array( // row #261
        'id' => 262,
        'nombre' => 'Nuevo Colón',
        'departamento_id' => 6,
    ),
    array( // row #262
        'id' => 263,
        'nombre' => 'Oicatá',
        'departamento_id' => 6,
    ),
    array( // row #263
        'id' => 264,
        'nombre' => 'Otanche',
        'departamento_id' => 6,
    ),
    array( // row #264
        'id' => 265,
        'nombre' => 'Pachavita',
        'departamento_id' => 6,
    ),
    array( // row #265
        'id' => 266,
        'nombre' => 'Paipa',
        'departamento_id' => 6,
    ),
    array( // row #266
        'id' => 267,
        'nombre' => 'Pajarito',
        'departamento_id' => 6,
    ),
    array( // row #267
        'id' => 268,
        'nombre' => 'Panqueba',
        'departamento_id' => 6,
    ),
    array( // row #268
        'id' => 269,
        'nombre' => 'Pauna',
        'departamento_id' => 6,
    ),
    array( // row #269
        'id' => 270,
        'nombre' => 'Paya',
        'departamento_id' => 6,
    ),
    array( // row #270
        'id' => 271,
        'nombre' => 'Paz de Río',
        'departamento_id' => 6,
    ),
    array( // row #271
        'id' => 272,
        'nombre' => 'Pesca',
        'departamento_id' => 6,
    ),
    array( // row #272
        'id' => 273,
        'nombre' => 'Pisva',
        'departamento_id' => 6,
    ),
    array( // row #273
        'id' => 274,
        'nombre' => 'Puerto Boyacá',
        'departamento_id' => 6,
    ),
    array( // row #274
        'id' => 275,
        'nombre' => 'Páez',
        'departamento_id' => 6,
    ),
    array( // row #275
        'id' => 276,
        'nombre' => 'Quipama',
        'departamento_id' => 6,
    ),
    array( // row #276
        'id' => 277,
        'nombre' => 'Ramiriquí',
        'departamento_id' => 6,
    ),
    array( // row #277
        'id' => 278,
        'nombre' => 'Rondón',
        'departamento_id' => 6,
    ),
    array( // row #278
        'id' => 279,
        'nombre' => 'Ráquira',
        'departamento_id' => 6,
    ),
    array( // row #279
        'id' => 280,
        'nombre' => 'Saboyá',
        'departamento_id' => 6,
    ),
    array( // row #280
        'id' => 281,
        'nombre' => 'Samacá',
        'departamento_id' => 6,
    ),
    array( // row #281
        'id' => 282,
        'nombre' => 'San Eduardo',
        'departamento_id' => 6,
    ),
    array( // row #282
        'id' => 283,
        'nombre' => 'San José de Pare',
        'departamento_id' => 6,
    ),
    array( // row #283
        'id' => 284,
        'nombre' => 'San Luís de Gaceno',
        'departamento_id' => 6,
    ),
    array( // row #284
        'id' => 285,
        'nombre' => 'San Mateo',
        'departamento_id' => 6,
    ),
    array( // row #285
        'id' => 286,
        'nombre' => 'San Miguel de Sema',
        'departamento_id' => 6,
    ),
    array( // row #286
        'id' => 287,
        'nombre' => 'San Pablo de Borbur',
        'departamento_id' => 6,
    ),
    array( // row #287
        'id' => 288,
        'nombre' => 'Santa María',
        'departamento_id' => 6,
    ),
    array( // row #288
        'id' => 289,
        'nombre' => 'Santa Rosa de Viterbo',
        'departamento_id' => 6,
    ),
    array( // row #289
        'id' => 290,
        'nombre' => 'Santa Sofía',
        'departamento_id' => 6,
    ),
    array( // row #290
        'id' => 291,
        'nombre' => 'Santana',
        'departamento_id' => 6,
    ),
    array( // row #291
        'id' => 292,
        'nombre' => 'Sativanorte',
        'departamento_id' => 6,
    ),
    array( // row #292
        'id' => 293,
        'nombre' => 'Sativasur',
        'departamento_id' => 6,
    ),
    array( // row #293
        'id' => 294,
        'nombre' => 'Siachoque',
        'departamento_id' => 6,
    ),
    array( // row #294
        'id' => 295,
        'nombre' => 'Soatá',
        'departamento_id' => 6,
    ),
    array( // row #295
        'id' => 296,
        'nombre' => 'Socha',
        'departamento_id' => 6,
    ),
    array( // row #296
        'id' => 297,
        'nombre' => 'Socotá',
        'departamento_id' => 6,
    ),
    array( // row #297
        'id' => 298,
        'nombre' => 'Sogamoso',
        'departamento_id' => 6,
    ),
    array( // row #298
        'id' => 299,
        'nombre' => 'Somondoco',
        'departamento_id' => 6,
    ),
    array( // row #299
        'id' => 300,
        'nombre' => 'Sora',
        'departamento_id' => 6,
    ),
    array( // row #300
        'id' => 301,
        'nombre' => 'Soracá',
        'departamento_id' => 6,
    ),
    array( // row #301
        'id' => 302,
        'nombre' => 'Sotaquirá',
        'departamento_id' => 6,
    ),
    array( // row #302
        'id' => 303,
        'nombre' => 'Susacón',
        'departamento_id' => 6,
    ),
    array( // row #303
        'id' => 304,
        'nombre' => 'Sutamarchán',
        'departamento_id' => 6,
    ),
    array( // row #304
        'id' => 305,
        'nombre' => 'Sutatenza',
        'departamento_id' => 6,
    ),
    array( // row #305
        'id' => 306,
        'nombre' => 'Sáchica',
        'departamento_id' => 6,
    ),
    array( // row #306
        'id' => 307,
        'nombre' => 'Tasco',
        'departamento_id' => 6,
    ),
    array( // row #307
        'id' => 308,
        'nombre' => 'Tenza',
        'departamento_id' => 6,
    ),
    array( // row #308
        'id' => 309,
        'nombre' => 'Tibaná',
        'departamento_id' => 6,
    ),
    array( // row #309
        'id' => 310,
        'nombre' => 'Tibasosa',
        'departamento_id' => 6,
    ),
    array( // row #310
        'id' => 311,
        'nombre' => 'Tinjacá',
        'departamento_id' => 6,
    ),
    array( // row #311
        'id' => 312,
        'nombre' => 'Tipacoque',
        'departamento_id' => 6,
    ),
    array( // row #312
        'id' => 313,
        'nombre' => 'Toca',
        'departamento_id' => 6,
    ),
    array( // row #313
        'id' => 314,
        'nombre' => 'Toguí',
        'departamento_id' => 6,
    ),
    array( // row #314
        'id' => 315,
        'nombre' => 'Topagá',
        'departamento_id' => 6,
    ),
    array( // row #315
        'id' => 316,
        'nombre' => 'Tota',
        'departamento_id' => 6,
    ),
    array( // row #316
        'id' => 317,
        'nombre' => 'Tunja',
        'departamento_id' => 6,
    ),
    array( // row #317
        'id' => 318,
        'nombre' => 'Tunungua',
        'departamento_id' => 6,
    ),
    array( // row #318
        'id' => 319,
        'nombre' => 'Turmequé',
        'departamento_id' => 6,
    ),
    array( // row #319
        'id' => 320,
        'nombre' => 'Tuta',
        'departamento_id' => 6,
    ),
    array( // row #320
        'id' => 321,
        'nombre' => 'Tutasá',
        'departamento_id' => 6,
    ),
    array( // row #321
        'id' => 322,
        'nombre' => 'Ventaquemada',
        'departamento_id' => 6,
    ),
    array( // row #322
        'id' => 323,
        'nombre' => 'Villa de Leiva',
        'departamento_id' => 6,
    ),
    array( // row #323
        'id' => 324,
        'nombre' => 'Viracachá',
        'departamento_id' => 6,
    ),
    array( // row #324
        'id' => 325,
        'nombre' => 'Zetaquirá',
        'departamento_id' => 6,
    ),
    array( // row #325
        'id' => 326,
        'nombre' => 'Úmbita',
        'departamento_id' => 6,
    ),
    array( // row #326
        'id' => 327,
        'nombre' => 'Aguadas',
        'departamento_id' => 7,
    ),
    array( // row #327
        'id' => 328,
        'nombre' => 'Anserma',
        'departamento_id' => 7,
    ),
    array( // row #328
        'id' => 329,
        'nombre' => 'Aranzazu',
        'departamento_id' => 7,
    ),
    array( // row #329
        'id' => 330,
        'nombre' => 'Belalcázar',
        'departamento_id' => 7,
    ),
    array( // row #330
        'id' => 331,
        'nombre' => 'Chinchiná',
        'departamento_id' => 7,
    ),
    array( // row #331
        'id' => 332,
        'nombre' => 'Filadelfia',
        'departamento_id' => 7,
    ),
    array( // row #332
        'id' => 333,
        'nombre' => 'La Dorada',
        'departamento_id' => 7,
    ),
    array( // row #333
        'id' => 334,
        'nombre' => 'La Merced',
        'departamento_id' => 7,
    ),
    array( // row #334
        'id' => 335,
        'nombre' => 'La Victoria',
        'departamento_id' => 7,
    ),
    array( // row #335
        'id' => 336,
        'nombre' => 'Manizales',
        'departamento_id' => 7,
    ),
    array( // row #336
        'id' => 337,
        'nombre' => 'Manzanares',
        'departamento_id' => 7,
    ),
    array( // row #337
        'id' => 338,
        'nombre' => 'Marmato',
        'departamento_id' => 7,
    ),
    array( // row #338
        'id' => 339,
        'nombre' => 'Marquetalia',
        'departamento_id' => 7,
    ),
    array( // row #339
        'id' => 340,
        'nombre' => 'Marulanda',
        'departamento_id' => 7,
    ),
    array( // row #340
        'id' => 341,
        'nombre' => 'Neira',
        'departamento_id' => 7,
    ),
    array( // row #341
        'id' => 342,
        'nombre' => 'Norcasia',
        'departamento_id' => 7,
    ),
    array( // row #342
        'id' => 343,
        'nombre' => 'Palestina',
        'departamento_id' => 7,
    ),
    array( // row #343
        'id' => 344,
        'nombre' => 'Pensilvania',
        'departamento_id' => 7,
    ),
    array( // row #344
        'id' => 345,
        'nombre' => 'Pácora',
        'departamento_id' => 7,
    ),
    array( // row #345
        'id' => 346,
        'nombre' => 'Risaralda',
        'departamento_id' => 7,
    ),
    array( // row #346
        'id' => 347,
        'nombre' => 'Río Sucio',
        'departamento_id' => 7,
    ),
    array( // row #347
        'id' => 348,
        'nombre' => 'Salamina',
        'departamento_id' => 7,
    ),
    array( // row #348
        'id' => 349,
        'nombre' => 'Samaná',
        'departamento_id' => 7,
    ),
    array( // row #349
        'id' => 350,
        'nombre' => 'San José',
        'departamento_id' => 7,
    ),
    array( // row #350
        'id' => 351,
        'nombre' => 'Supía',
        'departamento_id' => 7,
    ),
    array( // row #351
        'id' => 352,
        'nombre' => 'Villamaría',
        'departamento_id' => 7,
    ),
    array( // row #352
        'id' => 353,
        'nombre' => 'Viterbo',
        'departamento_id' => 7,
    ),
    array( // row #353
        'id' => 354,
        'nombre' => 'Albania',
        'departamento_id' => 8,
    ),
    array( // row #354
        'id' => 355,
        'nombre' => 'Belén de los Andaquíes',
        'departamento_id' => 8,
    ),
    array( // row #355
        'id' => 356,
        'nombre' => 'Cartagena del Chairá',
        'departamento_id' => 8,
    ),
    array( // row #356
        'id' => 357,
        'nombre' => 'Curillo',
        'departamento_id' => 8,
    ),
    array( // row #357
        'id' => 358,
        'nombre' => 'El Doncello',
        'departamento_id' => 8,
    ),
    array( // row #358
        'id' => 359,
        'nombre' => 'El Paujil',
        'departamento_id' => 8,
    ),
    array( // row #359
        'id' => 360,
        'nombre' => 'Florencia',
        'departamento_id' => 8,
    ),
    array( // row #360
        'id' => 361,
        'nombre' => 'La Montañita',
        'departamento_id' => 8,
    ),
    array( // row #361
        'id' => 362,
        'nombre' => 'Milán',
        'departamento_id' => 8,
    ),
    array( // row #362
        'id' => 363,
        'nombre' => 'Morelia',
        'departamento_id' => 8,
    ),
    array( // row #363
        'id' => 364,
        'nombre' => 'Puerto Rico',
        'departamento_id' => 8,
    ),
    array( // row #364
        'id' => 365,
        'nombre' => 'San José del Fragua',
        'departamento_id' => 8,
    ),
    array( // row #365
        'id' => 366,
        'nombre' => 'San Vicente del Caguán',
        'departamento_id' => 8,
    ),
    array( // row #366
        'id' => 367,
        'nombre' => 'Solano',
        'departamento_id' => 8,
    ),
    array( // row #367
        'id' => 368,
        'nombre' => 'Solita',
        'departamento_id' => 8,
    ),
    array( // row #368
        'id' => 369,
        'nombre' => 'Valparaiso',
        'departamento_id' => 8,
    ),
    array( // row #369
        'id' => 370,
        'nombre' => 'Aguazul',
        'departamento_id' => 9,
    ),
    array( // row #370
        'id' => 371,
        'nombre' => 'Chámeza',
        'departamento_id' => 9,
    ),
    array( // row #371
        'id' => 372,
        'nombre' => 'Hato Corozal',
        'departamento_id' => 9,
    ),
    array( // row #372
        'id' => 373,
        'nombre' => 'La Salina',
        'departamento_id' => 9,
    ),
    array( // row #373
        'id' => 374,
        'nombre' => 'Maní',
        'departamento_id' => 9,
    ),
    array( // row #374
        'id' => 375,
        'nombre' => 'Monterrey',
        'departamento_id' => 9,
    ),
    array( // row #375
        'id' => 376,
        'nombre' => 'Nunchía',
        'departamento_id' => 9,
    ),
    array( // row #376
        'id' => 377,
        'nombre' => 'Orocué',
        'departamento_id' => 9,
    ),
    array( // row #377
        'id' => 378,
        'nombre' => 'Paz de Ariporo',
        'departamento_id' => 9,
    ),
    array( // row #378
        'id' => 379,
        'nombre' => 'Pore',
        'departamento_id' => 9,
    ),
    array( // row #379
        'id' => 380,
        'nombre' => 'Recetor',
        'departamento_id' => 9,
    ),
    array( // row #380
        'id' => 381,
        'nombre' => 'Sabanalarga',
        'departamento_id' => 9,
    ),
    array( // row #381
        'id' => 382,
        'nombre' => 'San Luís de Palenque',
        'departamento_id' => 9,
    ),
    array( // row #382
        'id' => 383,
        'nombre' => 'Sácama',
        'departamento_id' => 9,
    ),
    array( // row #383
        'id' => 384,
        'nombre' => 'Tauramena',
        'departamento_id' => 9,
    ),
    array( // row #384
        'id' => 385,
        'nombre' => 'Trinidad',
        'departamento_id' => 9,
    ),
    array( // row #385
        'id' => 386,
        'nombre' => 'Támara',
        'departamento_id' => 9,
    ),
    array( // row #386
        'id' => 387,
        'nombre' => 'Villanueva',
        'departamento_id' => 9,
    ),
    array( // row #387
        'id' => 388,
        'nombre' => 'Yopal',
        'departamento_id' => 9,
    ),
    array( // row #388
        'id' => 389,
        'nombre' => 'Almaguer',
        'departamento_id' => 10,
    ),
    array( // row #389
        'id' => 390,
        'nombre' => 'Argelia',
        'departamento_id' => 10,
    ),
    array( // row #390
        'id' => 391,
        'nombre' => 'Balboa',
        'departamento_id' => 10,
    ),
    array( // row #391
        'id' => 392,
        'nombre' => 'Bolívar',
        'departamento_id' => 10,
    ),
    array( // row #392
        'id' => 393,
        'nombre' => 'Buenos Aires',
        'departamento_id' => 10,
    ),
    array( // row #393
        'id' => 394,
        'nombre' => 'Cajibío',
        'departamento_id' => 10,
    ),
    array( // row #394
        'id' => 395,
        'nombre' => 'Caldono',
        'departamento_id' => 10,
    ),
    array( // row #395
        'id' => 396,
        'nombre' => 'Caloto',
        'departamento_id' => 10,
    ),
    array( // row #396
        'id' => 397,
        'nombre' => 'Corinto',
        'departamento_id' => 10,
    ),
    array( // row #397
        'id' => 398,
        'nombre' => 'El Tambo',
        'departamento_id' => 10,
    ),
    array( // row #398
        'id' => 399,
        'nombre' => 'Florencia',
        'departamento_id' => 10,
    ),
    array( // row #399
        'id' => 400,
        'nombre' => 'Guachené',
        'departamento_id' => 10,
    ),
    array( // row #400
        'id' => 401,
        'nombre' => 'Guapí',
        'departamento_id' => 10,
    ),
    array( // row #401
        'id' => 402,
        'nombre' => 'Inzá',
        'departamento_id' => 10,
    ),
    array( // row #402
        'id' => 403,
        'nombre' => 'Jambaló',
        'departamento_id' => 10,
    ),
    array( // row #403
        'id' => 404,
        'nombre' => 'La Sierra',
        'departamento_id' => 10,
    ),
    array( // row #404
        'id' => 405,
        'nombre' => 'La Vega',
        'departamento_id' => 10,
    ),
    array( // row #405
        'id' => 406,
        'nombre' => 'López (Micay)',
        'departamento_id' => 10,
    ),
    array( // row #406
        'id' => 407,
        'nombre' => 'Mercaderes',
        'departamento_id' => 10,
    ),
    array( // row #407
        'id' => 408,
        'nombre' => 'Miranda',
        'departamento_id' => 10,
    ),
    array( // row #408
        'id' => 409,
        'nombre' => 'Morales',
        'departamento_id' => 10,
    ),
    array( // row #409
        'id' => 410,
        'nombre' => 'Padilla',
        'departamento_id' => 10,
    ),
    array( // row #410
        'id' => 411,
        'nombre' => 'Patía (El Bordo)',
        'departamento_id' => 10,
    ),
    array( // row #411
        'id' => 412,
        'nombre' => 'Piamonte',
        'departamento_id' => 10,
    ),
    array( // row #412
        'id' => 413,
        'nombre' => 'Piendamó',
        'departamento_id' => 10,
    ),
    array( // row #413
        'id' => 414,
        'nombre' => 'Popayán',
        'departamento_id' => 10,
    ),
    array( // row #414
        'id' => 415,
        'nombre' => 'Puerto Tejada',
        'departamento_id' => 10,
    ),
    array( // row #415
        'id' => 416,
        'nombre' => 'Puracé (Coconuco)',
        'departamento_id' => 10,
    ),
    array( // row #416
        'id' => 417,
        'nombre' => 'Páez (Belalcazar)',
        'departamento_id' => 10,
    ),
    array( // row #417
        'id' => 418,
        'nombre' => 'Rosas',
        'departamento_id' => 10,
    ),
    array( // row #418
        'id' => 419,
        'nombre' => 'San Sebastián',
        'departamento_id' => 10,
    ),
    array( // row #419
        'id' => 420,
        'nombre' => 'Santa Rosa',
        'departamento_id' => 10,
    ),
    array( // row #420
        'id' => 421,
        'nombre' => 'Santander de Quilichao',
        'departamento_id' => 10,
    ),
    array( // row #421
        'id' => 422,
        'nombre' => 'Silvia',
        'departamento_id' => 10,
    ),
    array( // row #422
        'id' => 423,
        'nombre' => 'Sotara (Paispamba)',
        'departamento_id' => 10,
    ),
    array( // row #423
        'id' => 424,
        'nombre' => 'Sucre',
        'departamento_id' => 10,
    ),
    array( // row #424
        'id' => 425,
        'nombre' => 'Suárez',
        'departamento_id' => 10,
    ),
    array( // row #425
        'id' => 426,
        'nombre' => 'Timbiquí',
        'departamento_id' => 10,
    ),
    array( // row #426
        'id' => 427,
        'nombre' => 'Timbío',
        'departamento_id' => 10,
    ),
    array( // row #427
        'id' => 428,
        'nombre' => 'Toribío',
        'departamento_id' => 10,
    ),
    array( // row #428
        'id' => 429,
        'nombre' => 'Totoró',
        'departamento_id' => 10,
    ),
    array( // row #429
        'id' => 430,
        'nombre' => 'Villa Rica',
        'departamento_id' => 10,
    ),
    array( // row #430
        'id' => 431,
        'nombre' => 'Aguachica',
        'departamento_id' => 11,
    ),
    array( // row #431
        'id' => 432,
        'nombre' => 'Agustín Codazzi',
        'departamento_id' => 11,
    ),
    array( // row #432
        'id' => 433,
        'nombre' => 'Astrea',
        'departamento_id' => 11,
    ),
    array( // row #433
        'id' => 434,
        'nombre' => 'Becerríl',
        'departamento_id' => 11,
    ),
    array( // row #434
        'id' => 435,
        'nombre' => 'Bosconia',
        'departamento_id' => 11,
    ),
    array( // row #435
        'id' => 436,
        'nombre' => 'Chimichagua',
        'departamento_id' => 11,
    ),
    array( // row #436
        'id' => 437,
        'nombre' => 'Chiriguaná',
        'departamento_id' => 11,
    ),
    array( // row #437
        'id' => 438,
        'nombre' => 'Curumaní',
        'departamento_id' => 11,
    ),
    array( // row #438
        'id' => 439,
        'nombre' => 'El Copey',
        'departamento_id' => 11,
    ),
    array( // row #439
        'id' => 440,
        'nombre' => 'El Paso',
        'departamento_id' => 11,
    ),
    array( // row #440
        'id' => 441,
        'nombre' => 'Gamarra',
        'departamento_id' => 11,
    ),
    array( // row #441
        'id' => 442,
        'nombre' => 'Gonzalez',
        'departamento_id' => 11,
    ),
    array( // row #442
        'id' => 443,
        'nombre' => 'La Gloria',
        'departamento_id' => 11,
    ),
    array( // row #443
        'id' => 444,
        'nombre' => 'La Jagua de Ibirico',
        'departamento_id' => 11,
    ),
    array( // row #444
        'id' => 445,
        'nombre' => 'La Paz (Robles)',
        'departamento_id' => 11,
    ),
    array( // row #445
        'id' => 446,
        'nombre' => 'Manaure Balcón del Cesar',
        'departamento_id' => 11,
    ),
    array( // row #446
        'id' => 447,
        'nombre' => 'Pailitas',
        'departamento_id' => 11,
    ),
    array( // row #447
        'id' => 448,
        'nombre' => 'Pelaya',
        'departamento_id' => 11,
    ),
    array( // row #448
        'id' => 449,
        'nombre' => 'Pueblo Bello',
        'departamento_id' => 11,
    ),
    array( // row #449
        'id' => 450,
        'nombre' => 'Río de oro',
        'departamento_id' => 11,
    ),
    array( // row #450
        'id' => 451,
        'nombre' => 'San Alberto',
        'departamento_id' => 11,
    ),
    array( // row #451
        'id' => 452,
        'nombre' => 'San Diego',
        'departamento_id' => 11,
    ),
    array( // row #452
        'id' => 453,
        'nombre' => 'San Martín',
        'departamento_id' => 11,
    ),
    array( // row #453
        'id' => 454,
        'nombre' => 'Tamalameque',
        'departamento_id' => 11,
    ),
    array( // row #454
        'id' => 455,
        'nombre' => 'Valledupar',
        'departamento_id' => 11,
    ),
    array( // row #455
        'id' => 456,
        'nombre' => 'Acandí',
        'departamento_id' => 12,
    ),
    array( // row #456
        'id' => 457,
        'nombre' => 'Alto Baudó (Pie de Pato)',
        'departamento_id' => 12,
    ),
    array( // row #457
        'id' => 458,
        'nombre' => 'Atrato (Yuto)',
        'departamento_id' => 12,
    ),
    array( // row #458
        'id' => 459,
        'nombre' => 'Bagadó',
        'departamento_id' => 12,
    ),
    array( // row #459
        'id' => 460,
        'nombre' => 'Bahía Solano (Mútis)',
        'departamento_id' => 12,
    ),
    array( // row #460
        'id' => 461,
        'nombre' => 'Bajo Baudó (Pizarro)',
        'departamento_id' => 12,
    ),
    array( // row #461
        'id' => 462,
        'nombre' => 'Belén de Bajirá',
        'departamento_id' => 12,
    ),
    array( // row #462
        'id' => 463,
        'nombre' => 'Bojayá (Bellavista)',
        'departamento_id' => 12,
    ),
    array( // row #463
        'id' => 464,
        'nombre' => 'Cantón de San Pablo',
        'departamento_id' => 12,
    ),
    array( // row #464
        'id' => 465,
        'nombre' => 'Carmen del Darién (CURBARADÓ)',
        'departamento_id' => 12,
    ),
    array( // row #465
        'id' => 466,
        'nombre' => 'Condoto',
        'departamento_id' => 12,
    ),
    array( // row #466
        'id' => 467,
        'nombre' => 'Cértegui',
        'departamento_id' => 12,
    ),
    array( // row #467
        'id' => 468,
        'nombre' => 'El Carmen de Atrato',
        'departamento_id' => 12,
    ),
    array( // row #468
        'id' => 469,
        'nombre' => 'Istmina',
        'departamento_id' => 12,
    ),
    array( // row #469
        'id' => 470,
        'nombre' => 'Juradó',
        'departamento_id' => 12,
    ),
    array( // row #470
        'id' => 471,
        'nombre' => 'Lloró',
        'departamento_id' => 12,
    ),
    array( // row #471
        'id' => 472,
        'nombre' => 'Medio Atrato',
        'departamento_id' => 12,
    ),
    array( // row #472
        'id' => 473,
        'nombre' => 'Medio Baudó',
        'departamento_id' => 12,
    ),
    array( // row #473
        'id' => 474,
        'nombre' => 'Medio San Juan (ANDAGOYA)',
        'departamento_id' => 12,
    ),
    array( // row #474
        'id' => 475,
        'nombre' => 'Novita',
        'departamento_id' => 12,
    ),
    array( // row #475
        'id' => 476,
        'nombre' => 'Nuquí',
        'departamento_id' => 12,
    ),
    array( // row #476
        'id' => 477,
        'nombre' => 'Quibdó',
        'departamento_id' => 12,
    ),
    array( // row #477
        'id' => 478,
        'nombre' => 'Río Iró',
        'departamento_id' => 12,
    ),
    array( // row #478
        'id' => 479,
        'nombre' => 'Río Quito',
        'departamento_id' => 12,
    ),
    array( // row #479
        'id' => 480,
        'nombre' => 'Ríosucio',
        'departamento_id' => 12,
    ),
    array( // row #480
        'id' => 481,
        'nombre' => 'San José del Palmar',
        'departamento_id' => 12,
    ),
    array( // row #481
        'id' => 482,
        'nombre' => 'Santa Genoveva de Docorodó',
        'departamento_id' => 12,
    ),
    array( // row #482
        'id' => 483,
        'nombre' => 'Sipí',
        'departamento_id' => 12,
    ),
    array( // row #483
        'id' => 484,
        'nombre' => 'Tadó',
        'departamento_id' => 12,
    ),
    array( // row #484
        'id' => 485,
        'nombre' => 'Unguía',
        'departamento_id' => 12,
    ),
    array( // row #485
        'id' => 486,
        'nombre' => 'Unión Panamericana (ÁNIMAS)',
        'departamento_id' => 12,
    ),
    array( // row #486
        'id' => 487,
        'nombre' => 'Ayapel',
        'departamento_id' => 13,
    ),
    array( // row #487
        'id' => 488,
        'nombre' => 'Buenavista',
        'departamento_id' => 13,
    ),
    array( // row #488
        'id' => 489,
        'nombre' => 'Canalete',
        'departamento_id' => 13,
    ),
    array( // row #489
        'id' => 490,
        'nombre' => 'Cereté',
        'departamento_id' => 13,
    ),
    array( // row #490
        'id' => 491,
        'nombre' => 'Chimá',
        'departamento_id' => 13,
    ),
    array( // row #491
        'id' => 492,
        'nombre' => 'Chinú',
        'departamento_id' => 13,
    ),
    array( // row #492
        'id' => 493,
        'nombre' => 'Ciénaga de Oro',
        'departamento_id' => 13,
    ),
    array( // row #493
        'id' => 494,
        'nombre' => 'Cotorra',
        'departamento_id' => 13,
    ),
    array( // row #494
        'id' => 495,
        'nombre' => 'La Apartada y La Frontera',
        'departamento_id' => 13,
    ),
    array( // row #495
        'id' => 496,
        'nombre' => 'Lorica',
        'departamento_id' => 13,
    ),
    array( // row #496
        'id' => 497,
        'nombre' => 'Los Córdobas',
        'departamento_id' => 13,
    ),
    array( // row #497
        'id' => 498,
        'nombre' => 'Momil',
        'departamento_id' => 13,
    ),
    array( // row #498
        'id' => 499,
        'nombre' => 'Montelíbano',
        'departamento_id' => 13,
    ),
    array( // row #499
        'id' => 500,
        'nombre' => 'Monteria',
        'departamento_id' => 13,
    ),
    array( // row #500
        'id' => 501,
        'nombre' => 'Moñitos',
        'departamento_id' => 13,
    ),
    array( // row #501
        'id' => 502,
        'nombre' => 'Planeta Rica',
        'departamento_id' => 13,
    ),
    array( // row #502
        'id' => 503,
        'nombre' => 'Pueblo Nuevo',
        'departamento_id' => 13,
    ),
    array( // row #503
        'id' => 504,
        'nombre' => 'Puerto Escondido',
        'departamento_id' => 13,
    ),
    array( // row #504
        'id' => 505,
        'nombre' => 'Puerto Libertador',
        'departamento_id' => 13,
    ),
    array( // row #505
        'id' => 506,
        'nombre' => 'Purísima',
        'departamento_id' => 13,
    ),
    array( // row #506
        'id' => 507,
        'nombre' => 'Sahagún',
        'departamento_id' => 13,
    ),
    array( // row #507
        'id' => 508,
        'nombre' => 'San Andrés Sotavento',
        'departamento_id' => 13,
    ),
    array( // row #508
        'id' => 509,
        'nombre' => 'San Antero',
        'departamento_id' => 13,
    ),
    array( // row #509
        'id' => 510,
        'nombre' => 'San Bernardo del Viento',
        'departamento_id' => 13,
    ),
    array( // row #510
        'id' => 511,
        'nombre' => 'San Carlos',
        'departamento_id' => 13,
    ),
    array( // row #511
        'id' => 512,
        'nombre' => 'San José de Uré',
        'departamento_id' => 13,
    ),
    array( // row #512
        'id' => 513,
        'nombre' => 'San Pelayo',
        'departamento_id' => 13,
    ),
    array( // row #513
        'id' => 514,
        'nombre' => 'Tierralta',
        'departamento_id' => 13,
    ),
    array( // row #514
        'id' => 515,
        'nombre' => 'Tuchín',
        'departamento_id' => 13,
    ),
    array( // row #515
        'id' => 516,
        'nombre' => 'Valencia',
        'departamento_id' => 13,
    ),
    array( // row #516
        'id' => 517,
        'nombre' => 'Agua de Dios',
        'departamento_id' => 14,
    ),
    array( // row #517
        'id' => 518,
        'nombre' => 'Albán',
        'departamento_id' => 14,
    ),
    array( // row #518
        'id' => 519,
        'nombre' => 'Anapoima',
        'departamento_id' => 14,
    ),
    array( // row #519
        'id' => 520,
        'nombre' => 'Anolaima',
        'departamento_id' => 14,
    ),
    array( // row #520
        'id' => 521,
        'nombre' => 'Apulo',
        'departamento_id' => 14,
    ),
    array( // row #521
        'id' => 522,
        'nombre' => 'Arbeláez',
        'departamento_id' => 14,
    ),
    array( // row #522
        'id' => 523,
        'nombre' => 'Beltrán',
        'departamento_id' => 14,
    ),
    array( // row #523
        'id' => 524,
        'nombre' => 'Bituima',
        'departamento_id' => 14,
    ),
    array( // row #524
        'id' => 525,
        'nombre' => 'Bogotá D.C.',
        'departamento_id' => 14,
    ),
    array( // row #525
        'id' => 526,
        'nombre' => 'Bojacá',
        'departamento_id' => 14,
    ),
    array( // row #526
        'id' => 527,
        'nombre' => 'Cabrera',
        'departamento_id' => 14,
    ),
    array( // row #527
        'id' => 528,
        'nombre' => 'Cachipay',
        'departamento_id' => 14,
    ),
    array( // row #528
        'id' => 529,
        'nombre' => 'Cajicá',
        'departamento_id' => 14,
    ),
    array( // row #529
        'id' => 530,
        'nombre' => 'Caparrapí',
        'departamento_id' => 14,
    ),
    array( // row #530
        'id' => 531,
        'nombre' => 'Carmen de Carupa',
        'departamento_id' => 14,
    ),
    array( // row #531
        'id' => 532,
        'nombre' => 'Chaguaní',
        'departamento_id' => 14,
    ),
    array( // row #532
        'id' => 533,
        'nombre' => 'Chipaque',
        'departamento_id' => 14,
    ),
    array( // row #533
        'id' => 534,
        'nombre' => 'Choachí',
        'departamento_id' => 14,
    ),
    array( // row #534
        'id' => 535,
        'nombre' => 'Chocontá',
        'departamento_id' => 14,
    ),
    array( // row #535
        'id' => 536,
        'nombre' => 'Chía',
        'departamento_id' => 14,
    ),
    array( // row #536
        'id' => 537,
        'nombre' => 'Cogua',
        'departamento_id' => 14,
    ),
    array( // row #537
        'id' => 538,
        'nombre' => 'Cota',
        'departamento_id' => 14,
    ),
    array( // row #538
        'id' => 539,
        'nombre' => 'Cucunubá',
        'departamento_id' => 14,
    ),
    array( // row #539
        'id' => 540,
        'nombre' => 'Cáqueza',
        'departamento_id' => 14,
    ),
    array( // row #540
        'id' => 541,
        'nombre' => 'El Colegio',
        'departamento_id' => 14,
    ),
    array( // row #541
        'id' => 542,
        'nombre' => 'El Peñón',
        'departamento_id' => 14,
    ),
    array( // row #542
        'id' => 543,
        'nombre' => 'El Rosal',
        'departamento_id' => 14,
    ),
    array( // row #543
        'id' => 544,
        'nombre' => 'Facatativá',
        'departamento_id' => 14,
    ),
    array( // row #544
        'id' => 545,
        'nombre' => 'Fosca',
        'departamento_id' => 14,
    ),
    array( // row #545
        'id' => 546,
        'nombre' => 'Funza',
        'departamento_id' => 14,
    ),
    array( // row #546
        'id' => 547,
        'nombre' => 'Fusagasugá',
        'departamento_id' => 14,
    ),
    array( // row #547
        'id' => 548,
        'nombre' => 'Fómeque',
        'departamento_id' => 14,
    ),
    array( // row #548
        'id' => 549,
        'nombre' => 'Fúquene',
        'departamento_id' => 14,
    ),
    array( // row #549
        'id' => 550,
        'nombre' => 'Gachalá',
        'departamento_id' => 14,
    ),
    array( // row #550
        'id' => 551,
        'nombre' => 'Gachancipá',
        'departamento_id' => 14,
    ),
    array( // row #551
        'id' => 552,
        'nombre' => 'Gachetá',
        'departamento_id' => 14,
    ),
    array( // row #552
        'id' => 553,
        'nombre' => 'Gama',
        'departamento_id' => 14,
    ),
    array( // row #553
        'id' => 554,
        'nombre' => 'Girardot',
        'departamento_id' => 14,
    ),
    array( // row #554
        'id' => 555,
        'nombre' => 'Granada',
        'departamento_id' => 14,
    ),
    array( // row #555
        'id' => 556,
        'nombre' => 'Guachetá',
        'departamento_id' => 14,
    ),
    array( // row #556
        'id' => 557,
        'nombre' => 'Guaduas',
        'departamento_id' => 14,
    ),
    array( // row #557
        'id' => 558,
        'nombre' => 'Guasca',
        'departamento_id' => 14,
    ),
    array( // row #558
        'id' => 559,
        'nombre' => 'Guataquí',
        'departamento_id' => 14,
    ),
    array( // row #559
        'id' => 560,
        'nombre' => 'Guatavita',
        'departamento_id' => 14,
    ),
    array( // row #560
        'id' => 561,
        'nombre' => 'Guayabal de Siquima',
        'departamento_id' => 14,
    ),
    array( // row #561
        'id' => 562,
        'nombre' => 'Guayabetal',
        'departamento_id' => 14,
    ),
    array( // row #562
        'id' => 563,
        'nombre' => 'Gutiérrez',
        'departamento_id' => 14,
    ),
    array( // row #563
        'id' => 564,
        'nombre' => 'Jerusalén',
        'departamento_id' => 14,
    ),
    array( // row #564
        'id' => 565,
        'nombre' => 'Junín',
        'departamento_id' => 14,
    ),
    array( // row #565
        'id' => 566,
        'nombre' => 'La Calera',
        'departamento_id' => 14,
    ),
    array( // row #566
        'id' => 567,
        'nombre' => 'La Mesa',
        'departamento_id' => 14,
    ),
    array( // row #567
        'id' => 568,
        'nombre' => 'La Palma',
        'departamento_id' => 14,
    ),
    array( // row #568
        'id' => 569,
        'nombre' => 'La Peña',
        'departamento_id' => 14,
    ),
    array( // row #569
        'id' => 570,
        'nombre' => 'La Vega',
        'departamento_id' => 14,
    ),
    array( // row #570
        'id' => 571,
        'nombre' => 'Lenguazaque',
        'departamento_id' => 14,
    ),
    array( // row #571
        'id' => 572,
        'nombre' => 'Machetá',
        'departamento_id' => 14,
    ),
    array( // row #572
        'id' => 573,
        'nombre' => 'Madrid',
        'departamento_id' => 14,
    ),
    array( // row #573
        'id' => 574,
        'nombre' => 'Manta',
        'departamento_id' => 14,
    ),
    array( // row #574
        'id' => 575,
        'nombre' => 'Medina',
        'departamento_id' => 14,
    ),
    array( // row #575
        'id' => 576,
        'nombre' => 'Mosquera',
        'departamento_id' => 14,
    ),
    array( // row #576
        'id' => 577,
        'nombre' => 'Nariño',
        'departamento_id' => 14,
    ),
    array( // row #577
        'id' => 578,
        'nombre' => 'Nemocón',
        'departamento_id' => 14,
    ),
    array( // row #578
        'id' => 579,
        'nombre' => 'Nilo',
        'departamento_id' => 14,
    ),
    array( // row #579
        'id' => 580,
        'nombre' => 'Nimaima',
        'departamento_id' => 14,
    ),
    array( // row #580
        'id' => 581,
        'nombre' => 'Nocaima',
        'departamento_id' => 14,
    ),
    array( // row #581
        'id' => 582,
        'nombre' => 'Pacho',
        'departamento_id' => 14,
    ),
    array( // row #582
        'id' => 583,
        'nombre' => 'Paime',
        'departamento_id' => 14,
    ),
    array( // row #583
        'id' => 584,
        'nombre' => 'Pandi',
        'departamento_id' => 14,
    ),
    array( // row #584
        'id' => 585,
        'nombre' => 'Paratebueno',
        'departamento_id' => 14,
    ),
    array( // row #585
        'id' => 586,
        'nombre' => 'Pasca',
        'departamento_id' => 14,
    ),
    array( // row #586
        'id' => 587,
        'nombre' => 'Puerto Salgar',
        'departamento_id' => 14,
    ),
    array( // row #587
        'id' => 588,
        'nombre' => 'Pulí',
        'departamento_id' => 14,
    ),
    array( // row #588
        'id' => 589,
        'nombre' => 'Quebradanegra',
        'departamento_id' => 14,
    ),
    array( // row #589
        'id' => 590,
        'nombre' => 'Quetame',
        'departamento_id' => 14,
    ),
    array( // row #590
        'id' => 591,
        'nombre' => 'Quipile',
        'departamento_id' => 14,
    ),
    array( // row #591
        'id' => 592,
        'nombre' => 'Ricaurte',
        'departamento_id' => 14,
    ),
    array( // row #592
        'id' => 593,
        'nombre' => 'San Antonio de Tequendama',
        'departamento_id' => 14,
    ),
    array( // row #593
        'id' => 594,
        'nombre' => 'San Bernardo',
        'departamento_id' => 14,
    ),
    array( // row #594
        'id' => 595,
        'nombre' => 'San Cayetano',
        'departamento_id' => 14,
    ),
    array( // row #595
        'id' => 596,
        'nombre' => 'San Francisco',
        'departamento_id' => 14,
    ),
    array( // row #596
        'id' => 597,
        'nombre' => 'San Juan de Río Seco',
        'departamento_id' => 14,
    ),
    array( // row #597
        'id' => 598,
        'nombre' => 'Sasaima',
        'departamento_id' => 14,
    ),
    array( // row #598
        'id' => 599,
        'nombre' => 'Sesquilé',
        'departamento_id' => 14,
    ),
    array( // row #599
        'id' => 600,
        'nombre' => 'Sibaté',
        'departamento_id' => 14,
    ),
    array( // row #600
        'id' => 601,
        'nombre' => 'Silvania',
        'departamento_id' => 14,
    ),
    array( // row #601
        'id' => 602,
        'nombre' => 'Simijaca',
        'departamento_id' => 14,
    ),
    array( // row #602
        'id' => 603,
        'nombre' => 'Soacha',
        'departamento_id' => 14,
    ),
    array( // row #603
        'id' => 604,
        'nombre' => 'Sopó',
        'departamento_id' => 14,
    ),
    array( // row #604
        'id' => 605,
        'nombre' => 'Subachoque',
        'departamento_id' => 14,
    ),
    array( // row #605
        'id' => 606,
        'nombre' => 'Suesca',
        'departamento_id' => 14,
    ),
    array( // row #606
        'id' => 607,
        'nombre' => 'Supatá',
        'departamento_id' => 14,
    ),
    array( // row #607
        'id' => 608,
        'nombre' => 'Susa',
        'departamento_id' => 14,
    ),
    array( // row #608
        'id' => 609,
        'nombre' => 'Sutatausa',
        'departamento_id' => 14,
    ),
    array( // row #609
        'id' => 610,
        'nombre' => 'Tabio',
        'departamento_id' => 14,
    ),
    array( // row #610
        'id' => 611,
        'nombre' => 'Tausa',
        'departamento_id' => 14,
    ),
    array( // row #611
        'id' => 612,
        'nombre' => 'Tena',
        'departamento_id' => 14,
    ),
    array( // row #612
        'id' => 613,
        'nombre' => 'Tenjo',
        'departamento_id' => 14,
    ),
    array( // row #613
        'id' => 614,
        'nombre' => 'Tibacuy',
        'departamento_id' => 14,
    ),
    array( // row #614
        'id' => 615,
        'nombre' => 'Tibirita',
        'departamento_id' => 14,
    ),
    array( // row #615
        'id' => 616,
        'nombre' => 'Tocaima',
        'departamento_id' => 14,
    ),
    array( // row #616
        'id' => 617,
        'nombre' => 'Tocancipá',
        'departamento_id' => 14,
    ),
    array( // row #617
        'id' => 618,
        'nombre' => 'Topaipí',
        'departamento_id' => 14,
    ),
    array( // row #618
        'id' => 619,
        'nombre' => 'Ubalá',
        'departamento_id' => 14,
    ),
    array( // row #619
        'id' => 620,
        'nombre' => 'Ubaque',
        'departamento_id' => 14,
    ),
    array( // row #620
        'id' => 621,
        'nombre' => 'Ubaté',
        'departamento_id' => 14,
    ),
    array( // row #621
        'id' => 622,
        'nombre' => 'Une',
        'departamento_id' => 14,
    ),
    array( // row #622
        'id' => 623,
        'nombre' => 'Venecia (Ospina Pérez)',
        'departamento_id' => 14,
    ),
    array( // row #623
        'id' => 624,
        'nombre' => 'Vergara',
        'departamento_id' => 14,
    ),
    array( // row #624
        'id' => 625,
        'nombre' => 'Viani',
        'departamento_id' => 14,
    ),
    array( // row #625
        'id' => 626,
        'nombre' => 'Villagómez',
        'departamento_id' => 14,
    ),
    array( // row #626
        'id' => 627,
        'nombre' => 'Villapinzón',
        'departamento_id' => 14,
    ),
    array( // row #627
        'id' => 628,
        'nombre' => 'Villeta',
        'departamento_id' => 14,
    ),
    array( // row #628
        'id' => 629,
        'nombre' => 'Viotá',
        'departamento_id' => 14,
    ),
    array( // row #629
        'id' => 630,
        'nombre' => 'Yacopí',
        'departamento_id' => 14,
    ),
    array( // row #630
        'id' => 631,
        'nombre' => 'Zipacón',
        'departamento_id' => 14,
    ),
    array( // row #631
        'id' => 632,
        'nombre' => 'Zipaquirá',
        'departamento_id' => 14,
    ),
    array( // row #632
        'id' => 633,
        'nombre' => 'Útica',
        'departamento_id' => 14,
    ),
    array( // row #633
        'id' => 634,
        'nombre' => 'Inírida',
        'departamento_id' => 15,
    ),
    array( // row #634
        'id' => 635,
        'nombre' => 'Calamar',
        'departamento_id' => 16,
    ),
    array( // row #635
        'id' => 636,
        'nombre' => 'El Retorno',
        'departamento_id' => 16,
    ),
    array( // row #636
        'id' => 637,
        'nombre' => 'Miraflores',
        'departamento_id' => 16,
    ),
    array( // row #637
        'id' => 638,
        'nombre' => 'San José del Guaviare',
        'departamento_id' => 16,
    ),
    array( // row #638
        'id' => 639,
        'nombre' => 'Acevedo',
        'departamento_id' => 17,
    ),
    array( // row #639
        'id' => 640,
        'nombre' => 'Agrado',
        'departamento_id' => 17,
    ),
    array( // row #640
        'id' => 641,
        'nombre' => 'Aipe',
        'departamento_id' => 17,
    ),
    array( // row #641
        'id' => 642,
        'nombre' => 'Algeciras',
        'departamento_id' => 17,
    ),
    array( // row #642
        'id' => 643,
        'nombre' => 'Altamira',
        'departamento_id' => 17,
    ),
    array( // row #643
        'id' => 644,
        'nombre' => 'Baraya',
        'departamento_id' => 17,
    ),
    array( // row #644
        'id' => 645,
        'nombre' => 'Campoalegre',
        'departamento_id' => 17,
    ),
    array( // row #645
        'id' => 646,
        'nombre' => 'Colombia',
        'departamento_id' => 17,
    ),
    array( // row #646
        'id' => 647,
        'nombre' => 'Elías',
        'departamento_id' => 17,
    ),
    array( // row #647
        'id' => 648,
        'nombre' => 'Garzón',
        'departamento_id' => 17,
    ),
    array( // row #648
        'id' => 649,
        'nombre' => 'Gigante',
        'departamento_id' => 17,
    ),
    array( // row #649
        'id' => 650,
        'nombre' => 'Guadalupe',
        'departamento_id' => 17,
    ),
    array( // row #650
        'id' => 651,
        'nombre' => 'Hobo',
        'departamento_id' => 17,
    ),
    array( // row #651
        'id' => 652,
        'nombre' => 'Isnos',
        'departamento_id' => 17,
    ),
    array( // row #652
        'id' => 653,
        'nombre' => 'La Argentina',
        'departamento_id' => 17,
    ),
    array( // row #653
        'id' => 654,
        'nombre' => 'La Plata',
        'departamento_id' => 17,
    ),
    array( // row #654
        'id' => 655,
        'nombre' => 'Neiva',
        'departamento_id' => 17,
    ),
    array( // row #655
        'id' => 656,
        'nombre' => 'Nátaga',
        'departamento_id' => 17,
    ),
    array( // row #656
        'id' => 657,
        'nombre' => 'Oporapa',
        'departamento_id' => 17,
    ),
    array( // row #657
        'id' => 658,
        'nombre' => 'Paicol',
        'departamento_id' => 17,
    ),
    array( // row #658
        'id' => 659,
        'nombre' => 'Palermo',
        'departamento_id' => 17,
    ),
    array( // row #659
        'id' => 660,
        'nombre' => 'Palestina',
        'departamento_id' => 17,
    ),
    array( // row #660
        'id' => 661,
        'nombre' => 'Pital',
        'departamento_id' => 17,
    ),
    array( // row #661
        'id' => 662,
        'nombre' => 'Pitalito',
        'departamento_id' => 17,
    ),
    array( // row #662
        'id' => 663,
        'nombre' => 'Rivera',
        'departamento_id' => 17,
    ),
    array( // row #663
        'id' => 664,
        'nombre' => 'Saladoblanco',
        'departamento_id' => 17,
    ),
    array( // row #664
        'id' => 665,
        'nombre' => 'San Agustín',
        'departamento_id' => 17,
    ),
    array( // row #665
        'id' => 666,
        'nombre' => 'Santa María',
        'departamento_id' => 17,
    ),
    array( // row #666
        'id' => 667,
        'nombre' => 'Suaza',
        'departamento_id' => 17,
    ),
    array( // row #667
        'id' => 668,
        'nombre' => 'Tarqui',
        'departamento_id' => 17,
    ),
    array( // row #668
        'id' => 669,
        'nombre' => 'Tello',
        'departamento_id' => 17,
    ),
    array( // row #669
        'id' => 670,
        'nombre' => 'Teruel',
        'departamento_id' => 17,
    ),
    array( // row #670
        'id' => 671,
        'nombre' => 'Tesalia',
        'departamento_id' => 17,
    ),
    array( // row #671
        'id' => 672,
        'nombre' => 'Timaná',
        'departamento_id' => 17,
    ),
    array( // row #672
        'id' => 673,
        'nombre' => 'Villavieja',
        'departamento_id' => 17,
    ),
    array( // row #673
        'id' => 674,
        'nombre' => 'Yaguará',
        'departamento_id' => 17,
    ),
    array( // row #674
        'id' => 675,
        'nombre' => 'Íquira',
        'departamento_id' => 17,
    ),
    array( // row #675
        'id' => 676,
        'nombre' => 'Albania',
        'departamento_id' => 18,
    ),
    array( // row #676
        'id' => 677,
        'nombre' => 'Barrancas',
        'departamento_id' => 18,
    ),
    array( // row #677
        'id' => 678,
        'nombre' => 'Dibulla',
        'departamento_id' => 18,
    ),
    array( // row #678
        'id' => 679,
        'nombre' => 'Distracción',
        'departamento_id' => 18,
    ),
    array( // row #679
        'id' => 680,
        'nombre' => 'El Molino',
        'departamento_id' => 18,
    ),
    array( // row #680
        'id' => 681,
        'nombre' => 'Fonseca',
        'departamento_id' => 18,
    ),
    array( // row #681
        'id' => 682,
        'nombre' => 'Hatonuevo',
        'departamento_id' => 18,
    ),
    array( // row #682
        'id' => 683,
        'nombre' => 'La Jagua del Pilar',
        'departamento_id' => 18,
    ),
    array( // row #683
        'id' => 684,
        'nombre' => 'Maicao',
        'departamento_id' => 18,
    ),
    array( // row #684
        'id' => 685,
        'nombre' => 'Manaure',
        'departamento_id' => 18,
    ),
    array( // row #685
        'id' => 686,
        'nombre' => 'Riohacha',
        'departamento_id' => 18,
    ),
    array( // row #686
        'id' => 687,
        'nombre' => 'San Juan del Cesar',
        'departamento_id' => 18,
    ),
    array( // row #687
        'id' => 688,
        'nombre' => 'Uribia',
        'departamento_id' => 18,
    ),
    array( // row #688
        'id' => 689,
        'nombre' => 'Urumita',
        'departamento_id' => 18,
    ),
    array( // row #689
        'id' => 690,
        'nombre' => 'Villanueva',
        'departamento_id' => 18,
    ),
    array( // row #690
        'id' => 691,
        'nombre' => 'Algarrobo',
        'departamento_id' => 19,
    ),
    array( // row #691
        'id' => 692,
        'nombre' => 'Aracataca',
        'departamento_id' => 19,
    ),
    array( // row #692
        'id' => 693,
        'nombre' => 'Ariguaní (El Difícil)',
        'departamento_id' => 19,
    ),
    array( // row #693
        'id' => 694,
        'nombre' => 'Cerro San Antonio',
        'departamento_id' => 19,
    ),
    array( // row #694
        'id' => 695,
        'nombre' => 'Chivolo',
        'departamento_id' => 19,
    ),
    array( // row #695
        'id' => 696,
        'nombre' => 'Ciénaga',
        'departamento_id' => 19,
    ),
    array( // row #696
        'id' => 697,
        'nombre' => 'Concordia',
        'departamento_id' => 19,
    ),
    array( // row #697
        'id' => 698,
        'nombre' => 'El Banco',
        'departamento_id' => 19,
    ),
    array( // row #698
        'id' => 699,
        'nombre' => 'El Piñon',
        'departamento_id' => 19,
    ),
    array( // row #699
        'id' => 700,
        'nombre' => 'El Retén',
        'departamento_id' => 19,
    ),
    array( // row #700
        'id' => 701,
        'nombre' => 'Fundación',
        'departamento_id' => 19,
    ),
    array( // row #701
        'id' => 702,
        'nombre' => 'Guamal',
        'departamento_id' => 19,
    ),
    array( // row #702
        'id' => 703,
        'nombre' => 'Nueva Granada',
        'departamento_id' => 19,
    ),
    array( // row #703
        'id' => 704,
        'nombre' => 'Pedraza',
        'departamento_id' => 19,
    ),
    array( // row #704
        'id' => 705,
        'nombre' => 'Pijiño',
        'departamento_id' => 19,
    ),
    array( // row #705
        'id' => 706,
        'nombre' => 'Pivijay',
        'departamento_id' => 19,
    ),
    array( // row #706
        'id' => 707,
        'nombre' => 'Plato',
        'departamento_id' => 19,
    ),
    array( // row #707
        'id' => 708,
        'nombre' => 'Puebloviejo',
        'departamento_id' => 19,
    ),
    array( // row #708
        'id' => 709,
        'nombre' => 'Remolino',
        'departamento_id' => 19,
    ),
    array( // row #709
        'id' => 710,
        'nombre' => 'Sabanas de San Angel (SAN ANGEL)',
        'departamento_id' => 19,
    ),
    array( // row #710
        'id' => 711,
        'nombre' => 'Salamina',
        'departamento_id' => 19,
    ),
    array( // row #711
        'id' => 712,
        'nombre' => 'San Sebastián de Buenavista',
        'departamento_id' => 19,
    ),
    array( // row #712
        'id' => 713,
        'nombre' => 'San Zenón',
        'departamento_id' => 19,
    ),
    array( // row #713
        'id' => 714,
        'nombre' => 'Santa Ana',
        'departamento_id' => 19,
    ),
    array( // row #714
        'id' => 715,
        'nombre' => 'Santa Bárbara de Pinto',
        'departamento_id' => 19,
    ),
    array( // row #715
        'id' => 716,
        'nombre' => 'Santa Marta',
        'departamento_id' => 19,
    ),
    array( // row #716
        'id' => 717,
        'nombre' => 'Sitionuevo',
        'departamento_id' => 19,
    ),
    array( // row #717
        'id' => 718,
        'nombre' => 'Tenerife',
        'departamento_id' => 19,
    ),
    array( // row #718
        'id' => 719,
        'nombre' => 'Zapayán (PUNTA DE PIEDRAS)',
        'departamento_id' => 19,
    ),
    array( // row #719
        'id' => 720,
        'nombre' => 'Zona Bananera (PRADO - SEVILLA)',
        'departamento_id' => 19,
    ),
    array( // row #720
        'id' => 721,
        'nombre' => 'Acacías',
        'departamento_id' => 20,
    ),
    array( // row #721
        'id' => 722,
        'nombre' => 'Barranca de Upía',
        'departamento_id' => 20,
    ),
    array( // row #722
        'id' => 723,
        'nombre' => 'Cabuyaro',
        'departamento_id' => 20,
    ),
    array( // row #723
        'id' => 724,
        'nombre' => 'Castilla la Nueva',
        'departamento_id' => 20,
    ),
    array( // row #724
        'id' => 725,
        'nombre' => 'Cubarral',
        'departamento_id' => 20,
    ),
    array( // row #725
        'id' => 726,
        'nombre' => 'Cumaral',
        'departamento_id' => 20,
    ),
    array( // row #726
        'id' => 727,
        'nombre' => 'El Calvario',
        'departamento_id' => 20,
    ),
    array( // row #727
        'id' => 728,
        'nombre' => 'El Castillo',
        'departamento_id' => 20,
    ),
    array( // row #728
        'id' => 729,
        'nombre' => 'El Dorado',
        'departamento_id' => 20,
    ),
    array( // row #729
        'id' => 730,
        'nombre' => 'Fuente de Oro',
        'departamento_id' => 20,
    ),
    array( // row #730
        'id' => 731,
        'nombre' => 'Granada',
        'departamento_id' => 20,
    ),
    array( // row #731
        'id' => 732,
        'nombre' => 'Guamal',
        'departamento_id' => 20,
    ),
    array( // row #732
        'id' => 733,
        'nombre' => 'La Macarena',
        'departamento_id' => 20,
    ),
    array( // row #733
        'id' => 734,
        'nombre' => 'Lejanías',
        'departamento_id' => 20,
    ),
    array( // row #734
        'id' => 735,
        'nombre' => 'Mapiripan',
        'departamento_id' => 20,
    ),
    array( // row #735
        'id' => 736,
        'nombre' => 'Mesetas',
        'departamento_id' => 20,
    ),
    array( // row #736
        'id' => 737,
        'nombre' => 'Puerto Concordia',
        'departamento_id' => 20,
    ),
    array( // row #737
        'id' => 738,
        'nombre' => 'Puerto Gaitán',
        'departamento_id' => 20,
    ),
    array( // row #738
        'id' => 739,
        'nombre' => 'Puerto Lleras',
        'departamento_id' => 20,
    ),
    array( // row #739
        'id' => 740,
        'nombre' => 'Puerto López',
        'departamento_id' => 20,
    ),
    array( // row #740
        'id' => 741,
        'nombre' => 'Puerto Rico',
        'departamento_id' => 20,
    ),
    array( // row #741
        'id' => 742,
        'nombre' => 'Restrepo',
        'departamento_id' => 20,
    ),
    array( // row #742
        'id' => 743,
        'nombre' => 'San Carlos de Guaroa',
        'departamento_id' => 20,
    ),
    array( // row #743
        'id' => 744,
        'nombre' => 'San Juan de Arama',
        'departamento_id' => 20,
    ),
    array( // row #744
        'id' => 745,
        'nombre' => 'San Juanito',
        'departamento_id' => 20,
    ),
    array( // row #745
        'id' => 746,
        'nombre' => 'San Martín',
        'departamento_id' => 20,
    ),
    array( // row #746
        'id' => 747,
        'nombre' => 'Uribe',
        'departamento_id' => 20,
    ),
    array( // row #747
        'id' => 748,
        'nombre' => 'Villavicencio',
        'departamento_id' => 20,
    ),
    array( // row #748
        'id' => 749,
        'nombre' => 'Vista Hermosa',
        'departamento_id' => 20,
    ),
    array( // row #749
        'id' => 750,
        'nombre' => 'Albán (San José)',
        'departamento_id' => 21,
    ),
    array( // row #750
        'id' => 751,
        'nombre' => 'Aldana',
        'departamento_id' => 21,
    ),
    array( // row #751
        'id' => 752,
        'nombre' => 'Ancuya',
        'departamento_id' => 21,
    ),
    array( // row #752
        'id' => 753,
        'nombre' => 'Arboleda (Berruecos)',
        'departamento_id' => 21,
    ),
    array( // row #753
        'id' => 754,
        'nombre' => 'Barbacoas',
        'departamento_id' => 21,
    ),
    array( // row #754
        'id' => 755,
        'nombre' => 'Belén',
        'departamento_id' => 21,
    ),
    array( // row #755
        'id' => 756,
        'nombre' => 'Buesaco',
        'departamento_id' => 21,
    ),
    array( // row #756
        'id' => 757,
        'nombre' => 'Chachaguí',
        'departamento_id' => 21,
    ),
    array( // row #757
        'id' => 758,
        'nombre' => 'Colón (Génova)',
        'departamento_id' => 21,
    ),
    array( // row #758
        'id' => 759,
        'nombre' => 'Consaca',
        'departamento_id' => 21,
    ),
    array( // row #759
        'id' => 760,
        'nombre' => 'Contadero',
        'departamento_id' => 21,
    ),
    array( // row #760
        'id' => 761,
        'nombre' => 'Cuaspud (Carlosama)',
        'departamento_id' => 21,
    ),
    array( // row #761
        'id' => 762,
        'nombre' => 'Cumbal',
        'departamento_id' => 21,
    ),
    array( // row #762
        'id' => 763,
        'nombre' => 'Cumbitara',
        'departamento_id' => 21,
    ),
    array( // row #763
        'id' => 764,
        'nombre' => 'Córdoba',
        'departamento_id' => 21,
    ),
    array( // row #764
        'id' => 765,
        'nombre' => 'El Charco',
        'departamento_id' => 21,
    ),
    array( // row #765
        'id' => 766,
        'nombre' => 'El Peñol',
        'departamento_id' => 21,
    ),
    array( // row #766
        'id' => 767,
        'nombre' => 'El Rosario',
        'departamento_id' => 21,
    ),
    array( // row #767
        'id' => 768,
        'nombre' => 'El Tablón de Gómez',
        'departamento_id' => 21,
    ),
    array( // row #768
        'id' => 769,
        'nombre' => 'El Tambo',
        'departamento_id' => 21,
    ),
    array( // row #769
        'id' => 770,
        'nombre' => 'Francisco Pizarro',
        'departamento_id' => 21,
    ),
    array( // row #770
        'id' => 771,
        'nombre' => 'Funes',
        'departamento_id' => 21,
    ),
    array( // row #771
        'id' => 772,
        'nombre' => 'Guachavés',
        'departamento_id' => 21,
    ),
    array( // row #772
        'id' => 773,
        'nombre' => 'Guachucal',
        'departamento_id' => 21,
    ),
    array( // row #773
        'id' => 774,
        'nombre' => 'Guaitarilla',
        'departamento_id' => 21,
    ),
    array( // row #774
        'id' => 775,
        'nombre' => 'Gualmatán',
        'departamento_id' => 21,
    ),
    array( // row #775
        'id' => 776,
        'nombre' => 'Iles',
        'departamento_id' => 21,
    ),
    array( // row #776
        'id' => 777,
        'nombre' => 'Imúes',
        'departamento_id' => 21,
    ),
    array( // row #777
        'id' => 778,
        'nombre' => 'Ipiales',
        'departamento_id' => 21,
    ),
    array( // row #778
        'id' => 779,
        'nombre' => 'La Cruz',
        'departamento_id' => 21,
    ),
    array( // row #779
        'id' => 780,
        'nombre' => 'La Florida',
        'departamento_id' => 21,
    ),
    array( // row #780
        'id' => 781,
        'nombre' => 'La Llanada',
        'departamento_id' => 21,
    ),
    array( // row #781
        'id' => 782,
        'nombre' => 'La Tola',
        'departamento_id' => 21,
    ),
    array( // row #782
        'id' => 783,
        'nombre' => 'La Unión',
        'departamento_id' => 21,
    ),
    array( // row #783
        'id' => 784,
        'nombre' => 'Leiva',
        'departamento_id' => 21,
    ),
    array( // row #784
        'id' => 785,
        'nombre' => 'Linares',
        'departamento_id' => 21,
    ),
    array( // row #785
        'id' => 786,
        'nombre' => 'Magüi (Payán)',
        'departamento_id' => 21,
    ),
    array( // row #786
        'id' => 787,
        'nombre' => 'Mallama (Piedrancha)',
        'departamento_id' => 21,
    ),
    array( // row #787
        'id' => 788,
        'nombre' => 'Mosquera',
        'departamento_id' => 21,
    ),
    array( // row #788
        'id' => 789,
        'nombre' => 'Nariño',
        'departamento_id' => 21,
    ),
    array( // row #789
        'id' => 790,
        'nombre' => 'Olaya Herrera',
        'departamento_id' => 21,
    ),
    array( // row #790
        'id' => 791,
        'nombre' => 'Ospina',
        'departamento_id' => 21,
    ),
    array( // row #791
        'id' => 792,
        'nombre' => 'Policarpa',
        'departamento_id' => 21,
    ),
    array( // row #792
        'id' => 793,
        'nombre' => 'Potosí',
        'departamento_id' => 21,
    ),
    array( // row #793
        'id' => 794,
        'nombre' => 'Providencia',
        'departamento_id' => 21,
    ),
    array( // row #794
        'id' => 795,
        'nombre' => 'Puerres',
        'departamento_id' => 21,
    ),
    array( // row #795
        'id' => 796,
        'nombre' => 'Pupiales',
        'departamento_id' => 21,
    ),
    array( // row #796
        'id' => 797,
        'nombre' => 'Ricaurte',
        'departamento_id' => 21,
    ),
    array( // row #797
        'id' => 798,
        'nombre' => 'Roberto Payán (San José)',
        'departamento_id' => 21,
    ),
    array( // row #798
        'id' => 799,
        'nombre' => 'Samaniego',
        'departamento_id' => 21,
    ),
    array( // row #799
        'id' => 800,
        'nombre' => 'San Bernardo',
        'departamento_id' => 21,
    ),
    array( // row #800
        'id' => 801,
        'nombre' => 'San Juan de Pasto',
        'departamento_id' => 21,
    ),
    array( // row #801
        'id' => 802,
        'nombre' => 'San Lorenzo',
        'departamento_id' => 21,
    ),
    array( // row #802
        'id' => 803,
        'nombre' => 'San Pablo',
        'departamento_id' => 21,
    ),
    array( // row #803
        'id' => 804,
        'nombre' => 'San Pedro de Cartago',
        'departamento_id' => 21,
    ),
    array( // row #804
        'id' => 805,
        'nombre' => 'Sandoná',
        'departamento_id' => 21,
    ),
    array( // row #805
        'id' => 806,
        'nombre' => 'Santa Bárbara (Iscuandé)',
        'departamento_id' => 21,
    ),
    array( // row #806
        'id' => 807,
        'nombre' => 'Sapuyes',
        'departamento_id' => 21,
    ),
    array( // row #807
        'id' => 808,
        'nombre' => 'Sotomayor (Los Andes)',
        'departamento_id' => 21,
    ),
    array( // row #808
        'id' => 809,
        'nombre' => 'Taminango',
        'departamento_id' => 21,
    ),
    array( // row #809
        'id' => 810,
        'nombre' => 'Tangua',
        'departamento_id' => 21,
    ),
    array( // row #810
        'id' => 811,
        'nombre' => 'Tumaco',
        'departamento_id' => 21,
    ),
    array( // row #811
        'id' => 812,
        'nombre' => 'Túquerres',
        'departamento_id' => 21,
    ),
    array( // row #812
        'id' => 813,
        'nombre' => 'Yacuanquer',
        'departamento_id' => 21,
    ),
    array( // row #813
        'id' => 814,
        'nombre' => 'Arboledas',
        'departamento_id' => 22,
    ),
    array( // row #814
        'id' => 815,
        'nombre' => 'Bochalema',
        'departamento_id' => 22,
    ),
    array( // row #815
        'id' => 816,
        'nombre' => 'Bucarasica',
        'departamento_id' => 22,
    ),
    array( // row #816
        'id' => 817,
        'nombre' => 'Chinácota',
        'departamento_id' => 22,
    ),
    array( // row #817
        'id' => 818,
        'nombre' => 'Chitagá',
        'departamento_id' => 22,
    ),
    array( // row #818
        'id' => 819,
        'nombre' => 'Convención',
        'departamento_id' => 22,
    ),
    array( // row #819
        'id' => 820,
        'nombre' => 'Cucutilla',
        'departamento_id' => 22,
    ),
    array( // row #820
        'id' => 821,
        'nombre' => 'Cáchira',
        'departamento_id' => 22,
    ),
    array( // row #821
        'id' => 822,
        'nombre' => 'Cácota',
        'departamento_id' => 22,
    ),
    array( // row #822
        'id' => 823,
        'nombre' => 'Cúcuta',
        'departamento_id' => 22,
    ),
    array( // row #823
        'id' => 824,
        'nombre' => 'Durania',
        'departamento_id' => 22,
    ),
    array( // row #824
        'id' => 825,
        'nombre' => 'El Carmen',
        'departamento_id' => 22,
    ),
    array( // row #825
        'id' => 826,
        'nombre' => 'El Tarra',
        'departamento_id' => 22,
    ),
    array( // row #826
        'id' => 827,
        'nombre' => 'El Zulia',
        'departamento_id' => 22,
    ),
    array( // row #827
        'id' => 828,
        'nombre' => 'Gramalote',
        'departamento_id' => 22,
    ),
    array( // row #828
        'id' => 829,
        'nombre' => 'Hacarí',
        'departamento_id' => 22,
    ),
    array( // row #829
        'id' => 830,
        'nombre' => 'Herrán',
        'departamento_id' => 22,
    ),
    array( // row #830
        'id' => 831,
        'nombre' => 'La Esperanza',
        'departamento_id' => 22,
    ),
    array( // row #831
        'id' => 832,
        'nombre' => 'La Playa',
        'departamento_id' => 22,
    ),
    array( // row #832
        'id' => 833,
        'nombre' => 'Labateca',
        'departamento_id' => 22,
    ),
    array( // row #833
        'id' => 834,
        'nombre' => 'Los Patios',
        'departamento_id' => 22,
    ),
    array( // row #834
        'id' => 835,
        'nombre' => 'Lourdes',
        'departamento_id' => 22,
    ),
    array( // row #835
        'id' => 836,
        'nombre' => 'Mutiscua',
        'departamento_id' => 22,
    ),
    array( // row #836
        'id' => 837,
        'nombre' => 'Ocaña',
        'departamento_id' => 22,
    ),
    array( // row #837
        'id' => 838,
        'nombre' => 'Pamplona',
        'departamento_id' => 22,
    ),
    array( // row #838
        'id' => 839,
        'nombre' => 'Pamplonita',
        'departamento_id' => 22,
    ),
    array( // row #839
        'id' => 840,
        'nombre' => 'Puerto Santander',
        'departamento_id' => 22,
    ),
    array( // row #840
        'id' => 841,
        'nombre' => 'Ragonvalia',
        'departamento_id' => 22,
    ),
    array( // row #841
        'id' => 842,
        'nombre' => 'Salazar',
        'departamento_id' => 22,
    ),
    array( // row #842
        'id' => 843,
        'nombre' => 'San Calixto',
        'departamento_id' => 22,
    ),
    array( // row #843
        'id' => 844,
        'nombre' => 'San Cayetano',
        'departamento_id' => 22,
    ),
    array( // row #844
        'id' => 845,
        'nombre' => 'Santiago',
        'departamento_id' => 22,
    ),
    array( // row #845
        'id' => 846,
        'nombre' => 'Sardinata',
        'departamento_id' => 22,
    ),
    array( // row #846
        'id' => 847,
        'nombre' => 'Silos',
        'departamento_id' => 22,
    ),
    array( // row #847
        'id' => 848,
        'nombre' => 'Teorama',
        'departamento_id' => 22,
    ),
    array( // row #848
        'id' => 849,
        'nombre' => 'Tibú',
        'departamento_id' => 22,
    ),
    array( // row #849
        'id' => 850,
        'nombre' => 'Toledo',
        'departamento_id' => 22,
    ),
    array( // row #850
        'id' => 851,
        'nombre' => 'Villa Caro',
        'departamento_id' => 22,
    ),
    array( // row #851
        'id' => 852,
        'nombre' => 'Villa del Rosario',
        'departamento_id' => 22,
    ),
    array( // row #852
        'id' => 853,
        'nombre' => 'Ábrego',
        'departamento_id' => 22,
    ),
    array( // row #853
        'id' => 854,
        'nombre' => 'Colón',
        'departamento_id' => 23,
    ),
    array( // row #854
        'id' => 855,
        'nombre' => 'Mocoa',
        'departamento_id' => 23,
    ),
    array( // row #855
        'id' => 856,
        'nombre' => 'Orito',
        'departamento_id' => 23,
    ),
    array( // row #856
        'id' => 857,
        'nombre' => 'Puerto Asís',
        'departamento_id' => 23,
    ),
    array( // row #857
        'id' => 858,
        'nombre' => 'Puerto Caicedo',
        'departamento_id' => 23,
    ),
    array( // row #858
        'id' => 859,
        'nombre' => 'Puerto Guzmán',
        'departamento_id' => 23,
    ),
    array( // row #859
        'id' => 860,
        'nombre' => 'Puerto Leguízamo',
        'departamento_id' => 23,
    ),
    array( // row #860
        'id' => 861,
        'nombre' => 'San Francisco',
        'departamento_id' => 23,
    ),
    array( // row #861
        'id' => 862,
        'nombre' => 'San Miguel',
        'departamento_id' => 23,
    ),
    array( // row #862
        'id' => 863,
        'nombre' => 'Santiago',
        'departamento_id' => 23,
    ),
    array( // row #863
        'id' => 864,
        'nombre' => 'Sibundoy',
        'departamento_id' => 23,
    ),
    array( // row #864
        'id' => 865,
        'nombre' => 'Valle del Guamuez',
        'departamento_id' => 23,
    ),
    array( // row #865
        'id' => 866,
        'nombre' => 'Villagarzón',
        'departamento_id' => 23,
    ),
    array( // row #866
        'id' => 867,
        'nombre' => 'Armenia',
        'departamento_id' => 24,
    ),
    array( // row #867
        'id' => 868,
        'nombre' => 'Buenavista',
        'departamento_id' => 24,
    ),
    array( // row #868
        'id' => 869,
        'nombre' => 'Calarcá',
        'departamento_id' => 24,
    ),
    array( // row #869
        'id' => 870,
        'nombre' => 'Circasia',
        'departamento_id' => 24,
    ),
    array( // row #870
        'id' => 871,
        'nombre' => 'Cordobá',
        'departamento_id' => 24,
    ),
    array( // row #871
        'id' => 872,
        'nombre' => 'Filandia',
        'departamento_id' => 24,
    ),
    array( // row #872
        'id' => 873,
        'nombre' => 'Génova',
        'departamento_id' => 24,
    ),
    array( // row #873
        'id' => 874,
        'nombre' => 'La Tebaida',
        'departamento_id' => 24,
    ),
    array( // row #874
        'id' => 875,
        'nombre' => 'Montenegro',
        'departamento_id' => 24,
    ),
    array( // row #875
        'id' => 876,
        'nombre' => 'Pijao',
        'departamento_id' => 24,
    ),
    array( // row #876
        'id' => 877,
        'nombre' => 'Quimbaya',
        'departamento_id' => 24,
    ),
    array( // row #877
        'id' => 878,
        'nombre' => 'Salento',
        'departamento_id' => 24,
    ),
    array( // row #878
        'id' => 879,
        'nombre' => 'Apía',
        'departamento_id' => 25,
    ),
    array( // row #879
        'id' => 880,
        'nombre' => 'Balboa',
        'departamento_id' => 25,
    ),
    array( // row #880
        'id' => 881,
        'nombre' => 'Belén de Umbría',
        'departamento_id' => 25,
    ),
    array( // row #881
        'id' => 882,
        'nombre' => 'Dos Quebradas',
        'departamento_id' => 25,
    ),
    array( // row #882
        'id' => 883,
        'nombre' => 'Guática',
        'departamento_id' => 25,
    ),
    array( // row #883
        'id' => 884,
        'nombre' => 'La Celia',
        'departamento_id' => 25,
    ),
    array( // row #884
        'id' => 885,
        'nombre' => 'La Virginia',
        'departamento_id' => 25,
    ),
    array( // row #885
        'id' => 886,
        'nombre' => 'Marsella',
        'departamento_id' => 25,
    ),
    array( // row #886
        'id' => 887,
        'nombre' => 'Mistrató',
        'departamento_id' => 25,
    ),
    array( // row #887
        'id' => 888,
        'nombre' => 'Pereira',
        'departamento_id' => 25,
    ),
    array( // row #888
        'id' => 889,
        'nombre' => 'Pueblo Rico',
        'departamento_id' => 25,
    ),
    array( // row #889
        'id' => 890,
        'nombre' => 'Quinchía',
        'departamento_id' => 25,
    ),
    array( // row #890
        'id' => 891,
        'nombre' => 'Santa Rosa de Cabal',
        'departamento_id' => 25,
    ),
    array( // row #891
        'id' => 892,
        'nombre' => 'Santuario',
        'departamento_id' => 25,
    ),
    array( // row #892
        'id' => 893,
        'nombre' => 'Providencia',
        'departamento_id' => 26,
    ),
    array( // row #893
        'id' => 894,
        'nombre' => 'Aguada',
        'departamento_id' => 27,
    ),
    array( // row #894
        'id' => 895,
        'nombre' => 'Albania',
        'departamento_id' => 27,
    ),
    array( // row #895
        'id' => 896,
        'nombre' => 'Aratoca',
        'departamento_id' => 27,
    ),
    array( // row #896
        'id' => 897,
        'nombre' => 'Barbosa',
        'departamento_id' => 27,
    ),
    array( // row #897
        'id' => 898,
        'nombre' => 'Barichara',
        'departamento_id' => 27,
    ),
    array( // row #898
        'id' => 899,
        'nombre' => 'Barrancabermeja',
        'departamento_id' => 27,
    ),
    array( // row #899
        'id' => 900,
        'nombre' => 'Betulia',
        'departamento_id' => 27,
    ),
    array( // row #900
        'id' => 901,
        'nombre' => 'Bolívar',
        'departamento_id' => 27,
    ),
    array( // row #901
        'id' => 902,
        'nombre' => 'Bucaramanga',
        'departamento_id' => 27,
    ),
    array( // row #902
        'id' => 903,
        'nombre' => 'Cabrera',
        'departamento_id' => 27,
    ),
    array( // row #903
        'id' => 904,
        'nombre' => 'California',
        'departamento_id' => 27,
    ),
    array( // row #904
        'id' => 905,
        'nombre' => 'Capitanejo',
        'departamento_id' => 27,
    ),
    array( // row #905
        'id' => 906,
        'nombre' => 'Carcasí',
        'departamento_id' => 27,
    ),
    array( // row #906
        'id' => 907,
        'nombre' => 'Cepita',
        'departamento_id' => 27,
    ),
    array( // row #907
        'id' => 908,
        'nombre' => 'Cerrito',
        'departamento_id' => 27,
    ),
    array( // row #908
        'id' => 909,
        'nombre' => 'Charalá',
        'departamento_id' => 27,
    ),
    array( // row #909
        'id' => 910,
        'nombre' => 'Charta',
        'departamento_id' => 27,
    ),
    array( // row #910
        'id' => 911,
        'nombre' => 'Chima',
        'departamento_id' => 27,
    ),
    array( // row #911
        'id' => 912,
        'nombre' => 'Chipatá',
        'departamento_id' => 27,
    ),
    array( // row #912
        'id' => 913,
        'nombre' => 'Cimitarra',
        'departamento_id' => 27,
    ),
    array( // row #913
        'id' => 914,
        'nombre' => 'Concepción',
        'departamento_id' => 27,
    ),
    array( // row #914
        'id' => 915,
        'nombre' => 'Confines',
        'departamento_id' => 27,
    ),
    array( // row #915
        'id' => 916,
        'nombre' => 'Contratación',
        'departamento_id' => 27,
    ),
    array( // row #916
        'id' => 917,
        'nombre' => 'Coromoro',
        'departamento_id' => 27,
    ),
    array( // row #917
        'id' => 918,
        'nombre' => 'Curití',
        'departamento_id' => 27,
    ),
    array( // row #918
        'id' => 919,
        'nombre' => 'El Carmen',
        'departamento_id' => 27,
    ),
    array( // row #919
        'id' => 920,
        'nombre' => 'El Guacamayo',
        'departamento_id' => 27,
    ),
    array( // row #920
        'id' => 921,
        'nombre' => 'El Peñon',
        'departamento_id' => 27,
    ),
    array( // row #921
        'id' => 922,
        'nombre' => 'El Playón',
        'departamento_id' => 27,
    ),
    array( // row #922
        'id' => 923,
        'nombre' => 'Encino',
        'departamento_id' => 27,
    ),
    array( // row #923
        'id' => 924,
        'nombre' => 'Enciso',
        'departamento_id' => 27,
    ),
    array( // row #924
        'id' => 925,
        'nombre' => 'Floridablanca',
        'departamento_id' => 27,
    ),
    array( // row #925
        'id' => 926,
        'nombre' => 'Florián',
        'departamento_id' => 27,
    ),
    array( // row #926
        'id' => 927,
        'nombre' => 'Galán',
        'departamento_id' => 27,
    ),
    array( // row #927
        'id' => 928,
        'nombre' => 'Girón',
        'departamento_id' => 27,
    ),
    array( // row #928
        'id' => 929,
        'nombre' => 'Guaca',
        'departamento_id' => 27,
    ),
    array( // row #929
        'id' => 930,
        'nombre' => 'Guadalupe',
        'departamento_id' => 27,
    ),
    array( // row #930
        'id' => 931,
        'nombre' => 'Guapota',
        'departamento_id' => 27,
    ),
    array( // row #931
        'id' => 932,
        'nombre' => 'Guavatá',
        'departamento_id' => 27,
    ),
    array( // row #932
        'id' => 933,
        'nombre' => 'Guepsa',
        'departamento_id' => 27,
    ),
    array( // row #933
        'id' => 934,
        'nombre' => 'Gámbita',
        'departamento_id' => 27,
    ),
    array( // row #934
        'id' => 935,
        'nombre' => 'Hato',
        'departamento_id' => 27,
    ),
    array( // row #935
        'id' => 936,
        'nombre' => 'Jesús María',
        'departamento_id' => 27,
    ),
    array( // row #936
        'id' => 937,
        'nombre' => 'Jordán',
        'departamento_id' => 27,
    ),
    array( // row #937
        'id' => 938,
        'nombre' => 'La Belleza',
        'departamento_id' => 27,
    ),
    array( // row #938
        'id' => 939,
        'nombre' => 'La Paz',
        'departamento_id' => 27,
    ),
    array( // row #939
        'id' => 940,
        'nombre' => 'Landázuri',
        'departamento_id' => 27,
    ),
    array( // row #940
        'id' => 941,
        'nombre' => 'Lebrija',
        'departamento_id' => 27,
    ),
    array( // row #941
        'id' => 942,
        'nombre' => 'Los Santos',
        'departamento_id' => 27,
    ),
    array( // row #942
        'id' => 943,
        'nombre' => 'Macaravita',
        'departamento_id' => 27,
    ),
    array( // row #943
        'id' => 944,
        'nombre' => 'Matanza',
        'departamento_id' => 27,
    ),
    array( // row #944
        'id' => 945,
        'nombre' => 'Mogotes',
        'departamento_id' => 27,
    ),
    array( // row #945
        'id' => 946,
        'nombre' => 'Molagavita',
        'departamento_id' => 27,
    ),
    array( // row #946
        'id' => 947,
        'nombre' => 'Málaga',
        'departamento_id' => 27,
    ),
    array( // row #947
        'id' => 948,
        'nombre' => 'Ocamonte',
        'departamento_id' => 27,
    ),
    array( // row #948
        'id' => 949,
        'nombre' => 'Oiba',
        'departamento_id' => 27,
    ),
    array( // row #949
        'id' => 950,
        'nombre' => 'Onzaga',
        'departamento_id' => 27,
    ),
    array( // row #950
        'id' => 951,
        'nombre' => 'Palmar',
        'departamento_id' => 27,
    ),
    array( // row #951
        'id' => 952,
        'nombre' => 'Palmas del Socorro',
        'departamento_id' => 27,
    ),
    array( // row #952
        'id' => 953,
        'nombre' => 'Pie de Cuesta',
        'departamento_id' => 27,
    ),
    array( // row #953
        'id' => 954,
        'nombre' => 'Pinchote',
        'departamento_id' => 27,
    ),
    array( // row #954
        'id' => 955,
        'nombre' => 'Puente Nacional',
        'departamento_id' => 27,
    ),
    array( // row #955
        'id' => 956,
        'nombre' => 'Puerto Parra',
        'departamento_id' => 27,
    ),
    array( // row #956
        'id' => 957,
        'nombre' => 'Puerto Wilches',
        'departamento_id' => 27,
    ),
    array( // row #957
        'id' => 958,
        'nombre' => 'Páramo',
        'departamento_id' => 27,
    ),
    array( // row #958
        'id' => 959,
        'nombre' => 'Rio Negro',
        'departamento_id' => 27,
    ),
    array( // row #959
        'id' => 960,
        'nombre' => 'Sabana de Torres',
        'departamento_id' => 27,
    ),
    array( // row #960
        'id' => 961,
        'nombre' => 'San Andrés',
        'departamento_id' => 27,
    ),
    array( // row #961
        'id' => 962,
        'nombre' => 'San Benito',
        'departamento_id' => 27,
    ),
    array( // row #962
        'id' => 963,
        'nombre' => 'San Gíl',
        'departamento_id' => 27,
    ),
    array( // row #963
        'id' => 964,
        'nombre' => 'San Joaquín',
        'departamento_id' => 27,
    ),
    array( // row #964
        'id' => 965,
        'nombre' => 'San José de Miranda',
        'departamento_id' => 27,
    ),
    array( // row #965
        'id' => 966,
        'nombre' => 'San Miguel',
        'departamento_id' => 27,
    ),
    array( // row #966
        'id' => 967,
        'nombre' => 'San Vicente del Chucurí',
        'departamento_id' => 27,
    ),
    array( // row #967
        'id' => 968,
        'nombre' => 'Santa Bárbara',
        'departamento_id' => 27,
    ),
    array( // row #968
        'id' => 969,
        'nombre' => 'Santa Helena del Opón',
        'departamento_id' => 27,
    ),
    array( // row #969
        'id' => 970,
        'nombre' => 'Simacota',
        'departamento_id' => 27,
    ),
    array( // row #970
        'id' => 971,
        'nombre' => 'Socorro',
        'departamento_id' => 27,
    ),
    array( // row #971
        'id' => 972,
        'nombre' => 'Suaita',
        'departamento_id' => 27,
    ),
    array( // row #972
        'id' => 973,
        'nombre' => 'Sucre',
        'departamento_id' => 27,
    ),
    array( // row #973
        'id' => 974,
        'nombre' => 'Suratá',
        'departamento_id' => 27,
    ),
    array( // row #974
        'id' => 975,
        'nombre' => 'Tona',
        'departamento_id' => 27,
    ),
    array( // row #975
        'id' => 976,
        'nombre' => 'Valle de San José',
        'departamento_id' => 27,
    ),
    array( // row #976
        'id' => 977,
        'nombre' => 'Vetas',
        'departamento_id' => 27,
    ),
    array( // row #977
        'id' => 978,
        'nombre' => 'Villanueva',
        'departamento_id' => 27,
    ),
    array( // row #978
        'id' => 979,
        'nombre' => 'Vélez',
        'departamento_id' => 27,
    ),
    array( // row #979
        'id' => 980,
        'nombre' => 'Zapatoca',
        'departamento_id' => 27,
    ),
    array( // row #980
        'id' => 981,
        'nombre' => 'Buenavista',
        'departamento_id' => 28,
    ),
    array( // row #981
        'id' => 982,
        'nombre' => 'Caimito',
        'departamento_id' => 28,
    ),
    array( // row #982
        'id' => 983,
        'nombre' => 'Chalán',
        'departamento_id' => 28,
    ),
    array( // row #983
        'id' => 984,
        'nombre' => 'Colosó (Ricaurte)',
        'departamento_id' => 28,
    ),
    array( // row #984
        'id' => 985,
        'nombre' => 'Corozal',
        'departamento_id' => 28,
    ),
    array( // row #985
        'id' => 986,
        'nombre' => 'Coveñas',
        'departamento_id' => 28,
    ),
    array( // row #986
        'id' => 987,
        'nombre' => 'El Roble',
        'departamento_id' => 28,
    ),
    array( // row #987
        'id' => 988,
        'nombre' => 'Galeras (Nueva Granada)',
        'departamento_id' => 28,
    ),
    array( // row #988
        'id' => 989,
        'nombre' => 'Guaranda',
        'departamento_id' => 28,
    ),
    array( // row #989
        'id' => 990,
        'nombre' => 'La Unión',
        'departamento_id' => 28,
    ),
    array( // row #990
        'id' => 991,
        'nombre' => 'Los Palmitos',
        'departamento_id' => 28,
    ),
    array( // row #991
        'id' => 992,
        'nombre' => 'Majagual',
        'departamento_id' => 28,
    ),
    array( // row #992
        'id' => 993,
        'nombre' => 'Morroa',
        'departamento_id' => 28,
    ),
    array( // row #993
        'id' => 994,
        'nombre' => 'Ovejas',
        'departamento_id' => 28,
    ),
    array( // row #994
        'id' => 995,
        'nombre' => 'Palmito',
        'departamento_id' => 28,
    ),
    array( // row #995
        'id' => 996,
        'nombre' => 'Sampués',
        'departamento_id' => 28,
    ),
    array( // row #996
        'id' => 997,
        'nombre' => 'San Benito Abad',
        'departamento_id' => 28,
    ),
    array( // row #997
        'id' => 998,
        'nombre' => 'San Juan de Betulia',
        'departamento_id' => 28,
    ),
    array( // row #998
        'id' => 999,
        'nombre' => 'San Marcos',
        'departamento_id' => 28,
    ),
    array( // row #999
        'id' => 1000,
        'nombre' => 'San Onofre',
        'departamento_id' => 28,
    ),

          ));
       }
}
