<?php

namespace Database\Seeders;

use App\Models\Kategori; //tambahkan ini jangan lupa
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kategori::create([
        //     "nama" => "test"
        // ]);
        $array = [
            ['nama' => 'utama'],
            ['nama' => 'kedua'],
            ['nama' => 'ketiga'],

        ];
        Kategori::insert($array);
    }
}
