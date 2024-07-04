<?php

namespace Database\Seeders;

use App\Models\Citie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CitieSeeder extends Seeder
{
    public function run(): void
    {
        $json = File::get(database_path('data/cities.json'));
        $city = json_decode($json, true);

        $cityCollection=collect($city);
        $cityCollection->each(function ($data) {
            Citie::create([
                'city' => $data['city']
            ]);
        });
    }
}
