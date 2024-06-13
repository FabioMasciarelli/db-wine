<?php

namespace Database\Seeders;

use App\Models\Wine;
use Dflydev\DotAccessData\Data;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class WinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $response = Http::withOptions(['verify' => false])->get('https://api.sampleapis.com/wines/reds');
        $data = $response->json();
        dd($data);
        foreach ($data['items'] as $Wine) {
            $newWine = new Wine();
            $newWine -> 
        }
            
    }
}
