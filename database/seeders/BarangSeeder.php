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
                'barang_id' => 1,
                'kategori_id' => 2,
                'barang_kode' => 'mie',
                'barang_nama' => 'Indomie',
                'harga_beli' => 2000,
                'harga_jual' => 3000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 2,
                'barang_kode' => 'ngt',
                'barang_nama' => 'Nugget',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 1,
                'barang_kode' => 'tv',
                'barang_nama' => 'Televisi',
                'harga_beli' => 500000,
                'harga_jual' => 1000000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 1,
                'barang_kode' => 'klks',
                'barang_nama' => 'Kulkas',
                'harga_beli' => 1000000,
                'harga_jual' => 2000000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'indmlk',
                'barang_nama' => 'Indomilk',
                'harga_beli' => 2000,
                'harga_jual' => 3000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'aqua',
                'barang_nama' => 'Aqua',
                'harga_beli' => 2000,
                'harga_jual' => 3000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'meja',
                'barang_nama' => 'Meja',
                'harga_beli' => 50000,
                'harga_jual' => 100000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'krsi',
                'barang_nama' => 'Sofa',
                'harga_beli' => 100000,
                'harga_jual' => 200000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'kypth',
                'barang_nama' => 'Minyak Kayu Putih',
                'harga_beli' => 2000,
                'harga_jual' => 3000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'mnyktwn',
                'barang_nama' => 'Minyak Tawon',
                'harga_beli' => 2000,
                'harga_jual' => 3000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
