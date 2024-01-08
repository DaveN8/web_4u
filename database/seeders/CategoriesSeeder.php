<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Categories::create([
            'nama_categories' => 'Basic',
            'harga' => '65.000',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        ]);
        Categories::create([
            'nama_categories' => 'Elite',
            'harga' => '85.000',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        ]);
        Categories::create([
            'nama_categories' => 'Ultra',
            'harga' => '109.000',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        ]);
    }
}
