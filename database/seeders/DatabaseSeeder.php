<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            DataAkademikSeeder::class,
            PenggunaSeeder::class,
            PerusahaanLowonganSeeder::class,
            PengalamanMahasiswaSeeder::class,
            PengajuanMagangSeeder::class,
            LokasiSeeder::class,
            SPKSeeder::class,
            FeedbackSpkSeeder::class,
        ]);
    }
}
