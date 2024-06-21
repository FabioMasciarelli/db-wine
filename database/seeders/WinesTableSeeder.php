<?php

namespace Database\Seeders;

use App\Models\Wine;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class WinesTableSeeder extends Seeder
{
    /**
     * 
     */
    public function run(): void
    {
        $response = Http::withOptions(['verify' => false])->get('https://api.sampleapis.com/wines/reds');
        $data = $response->json();


        foreach ($data as $index => $wine) {
            if ($index < 10) {
                $newWine = new Wine();
                $newWine->winery = $wine['winery'] ?? null;
                $newWine->name = $wine['wine'] ?? null;
                $newWine->rating = $wine['rating']['average'] ?? null;
                
                if (isset($wine['rating']['reviews'])) {
                    $rating_count = str_replace(' ratings', '', $wine['rating']['reviews']);
                    $newWine->rating_count = (int) $rating_count;
                } else {
                    $newWine->rating_count = null;
                }

                $newWine->price = $wine['price'] ?? null;

                
                
                $newWine->save();
            }
        }

        dd($data);
        
    }
}
