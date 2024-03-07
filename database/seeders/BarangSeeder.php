<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'barang_kode' => 'SM001',
                'barang_nama' => 'Samsung Galaxy S21',
                'harga_beli' => 10000000,
                'harga_jual' => 12000000,
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'IP001',
                'barang_nama' => 'iPhone 13 Pro',
                'harga_beli' => 12000000,
                'harga_jual' => 14000000,
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'LT001',
                'barang_nama' => 'Dell XPS 13',
                'harga_beli' => 15000000,
                'harga_jual' => 17000000,
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'LT002',
                'barang_nama' => 'MacBook Pro 2021',
                'harga_beli' => 20000000,
                'harga_jual' => 22000000,
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'TB001',
                'barang_nama' => 'iPad Air',
                'harga_beli' => 8000000,
                'harga_jual' => 10000000,
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'TB002',
                'barang_nama' => 'Samsung Galaxy Tab S7',
                'harga_beli' => 9000000,
                'harga_jual' => 11000000,
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'TV001',
                'barang_nama' => 'Sony Bravia 55" 4K',
                'harga_beli' => 15000000,
                'harga_jual' => 17000000,
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'TV002',
                'barang_nama' => 'LG OLED C1 65"',
                'harga_beli' => 18000000,
                'harga_jual' => 20000000,
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'KM001',
                'barang_nama' => 'Canon EOS R5',
                'harga_beli' => 25000000,
                'harga_jual' => 27000000,
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'KM002',
                'barang_nama' => 'Sony Alpha A7III',
                'harga_beli' => 20000000,
                'harga_jual' => 22000000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
