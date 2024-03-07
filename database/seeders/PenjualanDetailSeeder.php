<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Transaksi 1
            [1, 1, 12000000, 2],
            [1, 2, 14000000, 1],
            [1, 3, 17000000, 1],
            // Transaksi 2
            [2, 4, 22000000, 1],
            [2, 5, 10000000, 3],
            [2, 6, 11000000, 2],
            // Transaksi 3
            [3, 7, 17000000, 1],
            [3, 8, 20000000, 1],
            [3, 9, 27000000, 1],
            // Transaksi 4
            [4, 10, 22000000, 1],
            [4, 1, 12000000, 1],
            [4, 3, 17000000, 1],
            // Transaksi 5
            [5, 2, 14000000, 1],
            [5, 4, 20000000, 1],
            [5, 5, 10000000, 2],
            // Transaksi 6
            [6, 6, 11000000, 3],
            [6, 7, 17000000, 1],
            [6, 9, 25000000, 1],
            // Transaksi 7
            [7, 8, 20000000, 1],
            [7, 10, 22000000, 2],
            [7, 1, 12000000, 1],
            // Transaksi 8
            [8, 2, 14000000, 1],
            [8, 3, 17000000, 1],
            [8, 4, 22000000, 1],
            // Transaksi 9
            [9, 5, 10000000, 2],
            [9, 6, 11000000, 3],
            [9, 8, 20000000, 1],
            // Transaksi 10
            [10, 9, 27000000, 1],
            [10, 10, 22000000, 2],
            [10, 2, 14000000, 1],
        ];
        // DB::table('t_penjualan_detail')->insert($data);
        foreach ($data as $penjualanDetail) {
            DB::table('t_penjualan_detail')->insert([
                'penjualan_id' => $penjualanDetail[0],
                'barang_id' => $penjualanDetail[1],
                'harga' => $penjualanDetail[2],
                'jumlah' => $penjualanDetail[3],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
