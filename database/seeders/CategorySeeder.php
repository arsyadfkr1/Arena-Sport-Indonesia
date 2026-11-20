<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Sepatu Futsal',         'slug' => 'sepatu-futsal',       'icon' => '👟', 'description' => 'Sepatu khusus futsal dengan sol IN (Indoor) untuk lapangan vinyl, kayu, dan semen.'],
            ['name' => 'Sepatu Minisoccer',      'slug' => 'sepatu-minisoccer',   'icon' => '👟', 'description' => 'Sepatu dengan sol TF (Turf) untuk lapangan rumput sintetis minisoccer dan turf outdoor.'],
            ['name' => 'Sepatu Sepak Bola',      'slug' => 'sepatu-sepak-bola',   'icon' => '⚽', 'description' => 'Sepatu sol FG (Firm Ground) untuk lapangan rumput alami standar.'],
            ['name' => 'Bola',                   'slug' => 'bola',                'icon' => '⚽', 'description' => 'Bola sepak, futsal, dan minisoccer berlisensi FIFA dan lokal berkualitas.'],
            ['name' => 'Jersey & Apparel',       'slug' => 'jersey-apparel',      'icon' => '👕', 'description' => 'Jersey tim, training shirt, celana, dan pakaian olahraga sepak bola.'],
            ['name' => 'Perlengkapan Pemain',    'slug' => 'perlengkapan-pemain', 'icon' => '🧤', 'description' => 'Deker, shin guard, kaos kaki grip, sarung tangan kiper, dan aksesori pemain.'],
            ['name' => 'Perlengkapan Latihan',   'slug' => 'perlengkapan-latihan','icon' => '🏃', 'description' => 'Agility ladder, cone marker, rompi latihan, dan peralatan penunjang fisik.'],
        ];

        foreach ($categories as $cat) {
            Category::create($cat);
        }
    }
}
