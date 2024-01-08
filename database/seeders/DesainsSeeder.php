<?php

namespace Database\Seeders;

use App\Models\Desains;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DesainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Desains::create([
            'templateProduct' => 'iclik',
            'deskripsi' => 'ickiooehjj',
        ]);
    }
}
