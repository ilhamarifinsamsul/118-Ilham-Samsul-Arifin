<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama_kategori' => 'Banjir',
            ],
            [
                'nama_kategori' => 'Longsor',
            ],
            [
                'nama_kategori' => 'Gempa Bumi',
            ],
            [
                'nama_kategori' => 'Kebakaran',
            ]

        ];

        DB::table('tb_kategori_bencana')->insert($data);
    }
}
