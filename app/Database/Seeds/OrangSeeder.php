<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class OrangSeeder extends Seeder
{
    public function run()
    {
        // $data = [
        //     [
        //         'nama' => 'Rasendriya',
        //         'alamat'    => 'jl kanari kekew buloka 2 nomor 4',
        //         'created_at' => time::now(),
        //         'updated_at' => time::now()
        //     ],
        //     [
        //         'nama' => 'Lagnalog',
        //         'alamat'    => 'jl kekew buloka 2 nomor 1',
        //         'created_at' => time::now(),
        //         'updated_at' => time::now()
        //     ],
        //     [
        //         'nama' => 'Kaka bahan',
        //         'alamat'    => 'jl kaka buloka 2 nomor 4',
        //         'created_at' => time::now(),
        //         'updated_at' => time::now()
        //     ]
        // ];

        // menggunakan faker
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 50; $i++) {

            $data = [
                'nama' => $faker->name,
                'alamat'    => $faker->address,
                'created_at' => Time::createFromTimestamp($faker->unixTime()),
                'updated_at' => time::now()
            ];
            $this->db->table('orang')->insert($data);
        }

        // Simple Queries
        // $this->db->query('INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)', $data);

        // Using Query Builder
        // $this->db->table('orang')->insert($data);

        // Using Query Builder insert all
        // $this->db->table('orang')->insertBatch($data);
    }
}
