<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $bikes = [
            [
                'model' => 'VÉLO VTT ST 530 S NOIR ROUGE 27,5"',
                'price_per_hour' => 25,
                'image' => '/images/bikes/Toyota_Camry.jpg',
                'quantity' => 1,
                'status' => 'Available',
                'stars' => 5,
            ],
            [
                'model' => 'VÉLO VTT ST 100',
                'price_per_hour' => 12.5,
                'image' => '/images/bikes/Honda_Civic.jpg',
                'quantity' => 1,
                'status' => 'Available',
                'stars' => 5,
            ],
            [
                'model' => 'VTT ROCKRIDER',
                'price_per_hour' => 8,
                'image' => '/images/bikes/Ford_Mustang.jpg',
                'quantity' => 1,
                'status' => 'Available',
                'stars' => 5,
            ],
        ];

        foreach ($bikes as $bike) {
            DB::table('bikes')->insert([
                'model' => $bike['model'],
                'price_per_hour' => $bike['price_per_hour'],
                'image' => $bike['image'],
                'quantity' => $bike['quantity'],
                'status' => $bike['status'],
                'stars' => $bike['stars'],
            ]);
        }
    }
}