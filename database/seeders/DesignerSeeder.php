<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designer')->insert([
            [
                'name' => 'Tetsuo Hara',
                'birthdate' => 1961,
                'nationality' => 'Japan',
                
            ],
            [
                'name' => 'Tsukasa Hōjō',
                'birthdate' => 1959,
                'nationality' => 'Japan',
             ],
            [
                'name' => 'Akira Toriyama',
                'birthdate' => 1955,
                'nationality' => 'Japan',
            ],
        ]);
    }
}