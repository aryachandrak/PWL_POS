<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "penjualan_id" => 1,
                "user_id" => 3,
                "pembeli" => "Ahmad Ridho",
                "penjualan_kode" => "pnjl1",
                "penjualan_tanggal" => "2024-03-03",
            ],
            [
                "penjualan_id" => 2,
                "user_id" => 3,
                "pembeli" => "Fathir Rochman",
                "penjualan_kode" => "pnjl2",
                "penjualan_tanggal" => "2024-03-03",
            ],
            [
                "penjualan_id" => 3,
                "user_id" => 3,
                "pembeli" => "Firmasnsyah",
                "penjualan_kode" => "pnjl3",
                "penjualan_tanggal" => "2024-03-03",
            ],
            [
                "penjualan_id" => 4,
                "user_id" => 3,
                "pembeli" => "Ageng",
                "penjualan_kode" => "pnjl4",
                "penjualan_tanggal" => "2024-03-03",
            ],
            [
                "penjualan_id" => 5,
                "user_id" => 3,
                "pembeli" => "Rizky Arif",
                "penjualan_kode" => "pnjl5",
                "penjualan_tanggal" => "2024-03-03",
            ],
            [
                "penjualan_id" => 6,
                "user_id" => 3,
                "pembeli" => "Armand Maulana",
                "penjualan_kode" => "pnjl6",
                "penjualan_tanggal" => "2024-03-03",
            ],
            [
                "penjualan_id" => 7,
                "user_id" => 3,
                "pembeli" => "Jovan Faizan",
                "penjualan_kode" => "pnjl7",
                "penjualan_tanggal" => "2024-03-03",
            ],
            [
                "penjualan_id" => 8,
                "user_id" => 3,
                "pembeli" => "Miftahul Jannah",
                "penjualan_kode" => "pnjl8",
                "penjualan_tanggal" => "2024-03-03",
            ],
            [
                "penjualan_id" => 9,
                "user_id" => 3,
                "pembeli" => "Arya Chandra",
                "penjualan_kode" => "pnjl9",
                "penjualan_tanggal" => "2024-03-03",
            ],
            [
                "penjualan_id" => 10,
                "user_id" => 3,
                "pembeli" => "Riky Siang",
                "penjualan_kode" => "pnjl10",
                "penjualan_tanggal" => "2024-03-03",
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
