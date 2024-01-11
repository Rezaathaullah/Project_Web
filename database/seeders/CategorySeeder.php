<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'nama_kategori' => 'SENIOR',
                'keterangan' => 'Balap-Senior'
            ],
            [
                'nama_kategori' => 'JUNIOR',
                'keterangan' => 'Balap-Junior'
            ],
            [
                'nama_kategori' => 'TOPPLAYER',
                'keterangan' => 'Balap-Top-player'
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
