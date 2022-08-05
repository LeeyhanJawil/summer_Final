<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KdramaDetail;

class KdramaDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kdrama_details = [
            [
                'kdrama_id' => 1,
                'director' => 'Leeyhan',
                'cast' => 'edcel, Roxsan, Borj',
                'genre' => 'Actioin',
                'year' => '2019',
            ],
            [
                'kdrama_id' => 2,
                'director' => 'Zyra',
                'cast' => 'Nino, Aina, Loige',
                'genre' => 'Horror',
                'year' => '2020',
            ],
        ];
        foreach($kdrama_details as $kd) {
            KdramaDetail::create($kd);
        }
    }
}
