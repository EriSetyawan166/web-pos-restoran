<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->insert([[
            'nama_kategori' => 'Minuman',
            'foto_kategori' => '1679328380-minuman.jpg'
        ],
        [
            'nama_kategori' => 'Makanan',
            'foto_kategori' => '1679328872-makanan.jpg'
        ], 
        [
            'nama_kategori' => 'Makanan Ringan',
            'foto_kategori' => '1679328905-makanan_ringan.jpg'
        ],

        ]);

        DB::table('produk')->insert([[
            'kategori_id' => 1,
            'kode_produk' => 'PR00001',
            'nama_produk' => 'Es Teh',
            'foto_produk' => '1679365504-es_teh.jpg',
            'harga'       => 5000,
            'status'      => 'Tersedia'
        ],
        [
            'kategori_id' => 1,
            'kode_produk' => 'PR00002',
            'nama_produk' => 'Susu Dingin',
            'foto_produk' => '1679365528-susu dingin.jpeg',
            'harga'       => 7000,
            'status'      => 'Kosong'
        ], 
        [
            'kategori_id' => 1,
            'kode_produk' => 'PR00003',
            'nama_produk' => 'Boba',
            'foto_produk' => '1679365545-boba.jpg',
            'harga'       => 10000,
            'status'      => 'Tersedia'
            
        ],

        [
            'kategori_id' => 1,
            'kode_produk' => 'PR00004',
            'nama_produk' => 'Capcin',
            'foto_produk' => '1679365565-capucino cincau.jpeg',
            'harga'       => 10000,
            'status'      => 'Tersedia'
            
        ],

        [
            'kategori_id' => 1,
            'kode_produk' => 'PR00005',
            'nama_produk' => 'Pop Ice',
            'foto_produk' => '1679365582-pop_ice.jpg',
            'harga'       => 5000,
            'status'      => 'Tersedia'
            
        ],

        [
            'kategori_id' => 2,
            'kode_produk' => 'PR00006',
            'nama_produk' => 'Bubur',
            'foto_produk' => '1679365658-bubur.jpg',
            'harga'       => 12000,
            'status'      => 'Tersedia'
            
        ]


        ]);
    }
}
