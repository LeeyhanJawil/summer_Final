<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kdrama;

class KdramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kdramas = [
            [
                'title' => 'The Bride',
                'episodes' => '1,2,3,4,5,6,7',
            ],

            [
                'title' => 'Vampire',
                'episodes' => '1,2,3,4,5,6,7,8,9',
            ]
        ];
        foreach($kdramas as $k) {
            Kdrama::create($k);
        }
    }
}
