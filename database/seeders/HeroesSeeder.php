<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('heroes')->insert([
            [
                'name' => 'Ken',
                'year' => 1983,
                'related_cartoon' => 'Ken le survivant',
                'drawer' => 'Tetsuo Hara',
               
            ],
            [
                'name' => 'Nicky Larson',
                'year' => 1987,
                'related_cartoon' => 'City Hunter',
                'drawer' => 'Tsukasa Hōjō',
            ],
            [
                'name' => 'Vegeta',
                'year' => 1984,
                'related_cartoon' => 'Dragon Ball',
                'drawer' => 'Akira Toriyama',
            ],
        ]);
    }
}