<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->delete();

        $post =
        [
            [
                'name' => 'Wireless Mouse',
                'description' => 'Mouse nirkabel dengan koneksi Bluetooth dan desain ergonomis.',
                'price' => 250000,
                'stock' => 100,
                'category' => 'Elektronik',
            ],
            [
                'name' => 'Running Shoes',
                'description' => 'Sepatu lari ringan dan tahan lama untuk olahraga harian.',
                'price' => 750000,
                'stock' => 50,
                'category' => 'Olahraga',
            ],
            [
                'name' => 'Coffee Maker',
                'description' => 'Mesin pembuat kopi otomatis dengan fitur timer.',
                'price' => 1200000,
                'stock' => 30,
                'category' => 'Peralatan Rumah',
            ],
            [
                'name' => 'Bluetooth Speaker',
                'description' => 'Speaker portabel dengan suara jernih dan baterai tahan lama.',
                'price' => 500000,
                'stock' => 80,
                'category' => 'Elektronik',
            ],
            [
                'name' => 'Notebook A5',
                'description' => 'Buku catatan ukuran A5 dengan kertas tebal dan sampul kulit.',
                'price' => 45000,
                'stock' => 200,
                'category' => 'Alat Tulis',
            ],
        ];
        DB::table('product')->insert($post);
    }
}
