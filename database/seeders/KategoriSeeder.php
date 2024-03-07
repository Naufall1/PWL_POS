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
                'kategori_kode' => 'KTG001',
                'kategori_nama' => 'Smartphone',
            ],
            [
                'kategori_kode' => 'KTG002',
                'kategori_nama' => 'Laptop',
            ],
            [
                'kategori_kode' => 'KTG003',
                'kategori_nama' => 'Tablet',
            ],
            [
                'kategori_kode' => 'KTG004',
                'kategori_nama' => 'TV',
            ],
            [
                'kategori_kode' => 'KTG005',
                'kategori_nama' => 'Kamera',
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
