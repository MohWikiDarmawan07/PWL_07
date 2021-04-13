<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matkul = [
            [   'nama_matkul' =>  'Pemrograman Berbasis Objek',
                'sks' =>3,
                'jam' =>6,
                'semester' =>4,
            ],
            [   'nama_matkul' =>  'Pemrograman Web lanjut',
                'sks' =>3,
                'jam' =>6,
                'semester' =>4,
            ],
            [   'nama_matkul' =>  'Basis Data lanjut',
                'sks' =>3,
                'jam' =>4,
                'semester' =>4,
            ],
            [   'nama_matkul' =>  'Praktikum Basis Data Lanjut',
                'sks' =>3,
                'jam' =>6,
                'semester' =>4,
            ],
        ];

        DB::table('Matakuliah')->insert($matkul);
        
    }
}
