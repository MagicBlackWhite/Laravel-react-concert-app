<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Concert;

class ConcertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Concert::factory()
            ->count(20)
            ->hasArtists(5)
            ->create();


        Concert::factory()
            ->count(10)
            ->hasArtists(1)
            ->create();

        Concert::factory()
            ->count(5)
            ->hasArtists(15)
            ->create();
    }
}
