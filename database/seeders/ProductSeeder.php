<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            // ======================== SEPATU FUTSAL (cat 1) ========================
            [
                'category' => 'Sepatu Futsal', 'name' => 'Ortuseight Catalyst Legion IN',
                'brand' => 'Ortuseight', 'price' => 549000, 'stock' => 20,
                'is_featured' => true, 'image' => 'products/shoe_futsal_1.jpg',
                'description' => 'Sepatu futsal unggulan Ortuseight dengan teknologi sol Legion IN ultra-grip. Cocok untuk lapangan vinyl dan parquette. Tersedia ukuran 38-44.',
            ],
            [
                'category' => 'Sepatu Futsal', 'name' => 'Hills Holi Futsal Cyan/Navy',
                'brand' => 'Hills', 'price' => 429000, 'stock' => 15,
                'is_featured' => false, 'image' => 'products/shoe_futsal_2.jpg',
                'description' => 'Sepatu futsal Hills edisi warna Cyan/Navy. Sol rubber anti-selip, ringan dan nyaman untuk permainan cepat di lapangan indoor.',
            ],
            [
                'category' => 'Sepatu Futsal', 'name' => 'Specs Metasala Mucho IN',
                'brand' => 'Specs', 'price' => 389000, 'stock' => 25,
                'is_featured' => false, 'image' => 'products/shoe_futsal_3.jpg',
                'description' => 'Specs Metasala Mucho edisi terbaru. Sol IN tipis dan responsif, upper mesh breathable. Pilihan ekonomis berkualitas lokal.',
            ],
            [
                'category' => 'Sepatu Futsal', 'name' => 'Nike Tiempo Legend 10 Pro IC',
                'brand' => 'Nike', 'price' => 1250000, 'stock' => 8,
                'is_featured' => true, 'image' => 'products/shoe_futsal_4.jpg',
                'description' => 'Nike Tiempo Legend 10 Pro versi IC (Indoor Court). Bahan premium leather, kontrol bola kelas atas untuk pemain profesional.',
            ],
            [
                'category' => 'Sepatu Futsal', 'name' => 'Adidas Copa Pure.2 IN',
                'brand' => 'Adidas', 'price' => 1150000, 'stock' => 10,
                'is_featured' => false, 'image' => 'products/shoe_futsal_5.jpg',
                'description' => 'Adidas Copa Pure.2 versi indoor. Upper Hybridtouch leather sintetis premium, sol Adiwear indoor tangguh.',
            ],

            // ======================== SEPATU MINISOCCER (cat 2) ========================
            [
                'category' => 'Sepatu Minisoccer', 'name' => 'Specs Lightspeed Reborn FG Blue',
                'brand' => 'Specs', 'price' => 599000, 'stock' => 18,
                'is_featured' => true, 'image' => 'products/shoe_tf_1.jpg',
                'description' => 'Specs Lightspeed Reborn sol TF untuk lapangan rumput sintetis minisoccer. Upper mesh+TPU ringan, cengkraman optimal.',
            ],
            [
                'category' => 'Sepatu Minisoccer', 'name' => 'Ortuseight Lagoon V2 Minisoccer TF',
                'brand' => 'Ortuseight', 'price' => 489000, 'stock' => 20,
                'is_featured' => false, 'image' => 'products/shoe_tf_2.jpg',
                'description' => 'Sepatu minisoccer Ortuseight Lagoon V2 dengan sol TF rubber outsole. Desain ramping dan aerodinamis untuk rumput sintetis.',
            ],
            [
                'category' => 'Sepatu Minisoccer', 'name' => 'Nike Mercurial Vapor 15 Club TF',
                'brand' => 'Nike', 'price' => 950000, 'stock' => 12,
                'is_featured' => false, 'image' => 'products/shoe_tf_3.jpg',
                'description' => 'Nike Mercurial Vapor 15 Club TF. Desain sprint-focused dengan sol TF multi-stud optimal untuk turf minisoccer.',
            ],
            [
                'category' => 'Sepatu Minisoccer', 'name' => 'Puma Future 7 Play TF',
                'brand' => 'Puma', 'price' => 875000, 'stock' => 14,
                'is_featured' => true, 'image' => 'products/shoe_tf_4.jpg',
                'description' => 'Puma Future 7 Play versi TF. FUZIONFIT+ upper adaptif mengikuti bentuk kaki, sol TF untuk cengkeraman maksimal.',
            ],
            [
                'category' => 'Sepatu Minisoccer', 'name' => 'Calci Calmanto TF',
                'brand' => 'Calci', 'price' => 299000, 'stock' => 30,
                'is_featured' => false, 'image' => 'products/shoe_tf_5.jpg',
                'description' => 'Sepatu minisoccer Calci entry-level terjangkau. Sol TF karet, upper sintetis tahan lama untuk pemain komunitas.',
            ],

            // ======================== SEPATU SEPAK BOLA (cat 3) ========================
            [
                'category' => 'Sepatu Sepak Bola', 'name' => 'Adidas Predator Elite FG',
                'brand' => 'Adidas', 'price' => 2850000, 'stock' => 5,
                'is_featured' => true, 'image' => 'products/shoe_fg_1.jpg',
                'description' => 'Adidas Predator Elite FG edisi terbaru. Engineered Zone zona grip di upper untuk kontrol bola maksimal di lapangan rumput alami.',
            ],
            [
                'category' => 'Sepatu Sepak Bola', 'name' => 'Nike Phantom GX II Academy FG/MG',
                'brand' => 'Nike', 'price' => 1450000, 'stock' => 8,
                'is_featured' => false, 'image' => 'products/shoe_fg_2.jpg',
                'description' => 'Nike Phantom GX II Academy dual-fit FG/MG. Sol hybrid cocok untuk rumput alami dan sintetis panjang.',
            ],
            [
                'category' => 'Sepatu Sepak Bola', 'name' => 'Specs Swervo Thunderstruck FG',
                'brand' => 'Specs', 'price' => 650000, 'stock' => 15,
                'is_featured' => false, 'image' => 'products/shoe_fg_3.jpg',
                'description' => 'Specs Swervo Thunderstruck sol FG untuk lapangan rumput alami. Bahan upper sintetis ringan dan awet.',
            ],

            // ======================== BOLA (cat 4) ========================
            [
                'category' => 'Bola', 'name' => 'Molten Vantaggio 5000 FIFA Quality Pro',
                'brand' => 'Molten', 'price' => 899000, 'stock' => 10,
                'is_featured' => true, 'image' => 'products/ball_1.jpg',
                'description' => 'Bola sepak Molten Vantaggio 5000 berlisensi FIFA Quality Pro. Kulit PU premium, 32 panel presisi untuk laga resmi.',
            ],
            [
                'category' => 'Bola', 'name' => 'Specs Tormenta Futsal Pro',
                'brand' => 'Specs', 'price' => 279000, 'stock' => 25,
                'is_featured' => false, 'image' => 'products/ball_2.jpg',
                'description' => 'Bola futsal Specs Tormenta Pro ukuran 4. Kulit sintetis matte anti-pantul tinggi untuk kompetisi futsal indoor.',
            ],
            [
                'category' => 'Bola', 'name' => 'Mitre Impel Max Training Ball',
                'brand' => 'Mitre', 'price' => 189000, 'stock' => 40,
                'is_featured' => false, 'image' => 'products/ball_3.jpg',
                'description' => 'Bola latihan Mitre Impel Max ukuran 5. Daya tahan tinggi untuk sesi latihan intensif di segala permukaan.',
            ],
            [
                'category' => 'Bola', 'name' => 'Nike Strike Football Sz 5',
                'brand' => 'Nike', 'price' => 450000, 'stock' => 20,
                'is_featured' => false, 'image' => 'products/ball_4.jpg',
                'description' => 'Bola Nike Strike ukuran 5. Desain visual kontras tinggi, butyl bladder mempertahankan tekanan angin optimal.',
            ],

            // ======================== JERSEY & APPAREL (cat 5) ========================
            [
                'category' => 'Jersey & Apparel', 'name' => 'Jersey Timnas Indonesia Home 2024',
                'brand' => 'Nike', 'price' => 850000, 'stock' => 30,
                'is_featured' => true, 'image' => 'products/jersey_1.jpg',
                'description' => 'Jersey resmi Timnas Indonesia edisi Home merah. Teknologi Dri-FIT ADV, bahan ringan dan cepat menyerap keringat.',
            ],
            [
                'category' => 'Jersey & Apparel', 'name' => 'Ortuseight Training Shirt Raglan',
                'brand' => 'Ortuseight', 'price' => 189000, 'stock' => 50,
                'is_featured' => false, 'image' => 'products/jersey_2.jpg',
                'description' => 'Kaos latihan raglan Ortuseight. Bahan polyester moisture-wicking 100%, adem dan nyaman untuk latihan rutin.',
            ],
            [
                'category' => 'Jersey & Apparel', 'name' => 'Specs Training Shorts Pro',
                'brand' => 'Specs', 'price' => 149000, 'stock' => 45,
                'is_featured' => false, 'image' => 'products/jersey_3.jpg',
                'description' => 'Celana training pendek Specs Pro elastis. Bahan polyester stretch dengan saku samping.',
            ],
            [
                'category' => 'Jersey & Apparel', 'name' => 'Nike Dri-FIT Park 20 Training Vest',
                'brand' => 'Nike', 'price' => 320000, 'stock' => 20,
                'is_featured' => false, 'image' => 'products/jersey_4.jpg',
                'description' => 'Rompi latihan Nike Park 20 warna terang pembeda tim saat simulasi tanding. Bahan jaring breathable.',
            ],
            [
                'category' => 'Jersey & Apparel', 'name' => 'Calci Goalkeeper Jersey Pro',
                'brand' => 'Calci', 'price' => 275000, 'stock' => 15,
                'is_featured' => false, 'image' => 'products/jersey_5.jpg',
                'description' => 'Jersey kiper Calci Pro dengan bantalan busa siku pelindung benturan. Lengan panjang manset rib.',
            ],

            // ======================== PERLENGKAPAN PEMAIN (cat 6) ========================
            [
                'category' => 'Perlengkapan Pemain', 'name' => 'AB Shin Guard Pro + Grip Sock',
                'brand' => 'AB Sport', 'price' => 129000, 'stock' => 60,
                'is_featured' => true, 'image' => 'products/gear_1.jpg',
                'description' => 'Paket pelindung tulang kering (shin guard) + kaos kaki grip anti-slip. EVA foam tebal untuk proteksi maksimal.',
            ],
            [
                'category' => 'Perlengkapan Pemain', 'name' => 'Reusch Attrakt Gold X GK Gloves',
                'brand' => 'Reusch', 'price' => 650000, 'stock' => 10,
                'is_featured' => false, 'image' => 'products/gear_2.jpg',
                'description' => 'Sarung tangan kiper Reusch Attrakt Gold X. Palm latex super-sticky grip, backhand empuk dengan strap pergelangan.',
            ],
            [
                'category' => 'Perlengkapan Pemain', 'name' => 'Ortuseight Compression Deker Leg',
                'brand' => 'Ortuseight', 'price' => 95000, 'stock' => 80,
                'is_featured' => false, 'image' => 'products/gear_3.jpg',
                'description' => 'Deker leg sleeve kompresi Ortuseight. Melancarkan sirkulasi darah otot betis dan menahan deker tetap stabil.',
            ],
            [
                'category' => 'Perlengkapan Pemain', 'name' => 'Joma Grip Socks Elite Anti-Slip',
                'brand' => 'Joma', 'price' => 75000, 'stock' => 100,
                'is_featured' => false, 'image' => 'products/gear_4.jpg',
                'description' => 'Kaos kaki grip anti-slip Joma Elite. Titik silikon di telapak mencegah kaki tergelincir di dalam sepatu.',
            ],

            // ======================== PERLENGKAPAN LATIHAN (cat 7) ========================
            [
                'category' => 'Perlengkapan Latihan', 'name' => 'Agility Ladder 6m + Cone Set',
                'brand' => 'Generic Sport', 'price' => 189000, 'stock' => 25,
                'is_featured' => false, 'image' => 'products/train_1.jpg',
                'description' => 'Paket tangga kelincahan 6 meter + 10 cone marker untuk drill kecepatan kaki dan koordinasi pemain.',
            ],
            [
                'category' => 'Perlengkapan Latihan', 'name' => 'Marker Cone Mangkok 50pcs',
                'brand' => 'Generic Sport', 'price' => 125000, 'stock' => 40,
                'is_featured' => false, 'image' => 'products/train_2.jpg',
                'description' => '50 buah cone mangkok warna-warni cerah plus stand besi jinjing. Tahan diinjak dan fleksibel.',
            ],
            [
                'category' => 'Perlengkapan Latihan', 'name' => 'Pompa Bola Double Action + Jarum',
                'brand' => 'Molten', 'price' => 65000, 'stock' => 50,
                'is_featured' => false, 'image' => 'products/train_3.jpg',
                'description' => 'Pompa bola double action Molten. Mengisi udara saat dorong dan tarik secara efisien.',
            ],
            [
                'category' => 'Perlengkapan Latihan', 'name' => 'Speed Rebounder Reboundnet Mini',
                'brand' => 'Kwik Goal', 'price' => 450000, 'stock' => 8,
                'is_featured' => false, 'image' => 'products/train_4.jpg',
                'description' => 'Jaring rebounder mini untuk latihan passing dan first touch bola secara mandiri.',
            ],
        ];

        foreach ($products as $data) {
            $category = Category::where('name', $data['category'])->first();
            if (!$category) continue;

            Product::create([
                'category_id' => $category->id,
                'name'         => $data['name'],
                'slug'         => \Illuminate\Support\Str::slug($data['name']),
                'brand'        => $data['brand'],
                'price'        => $data['price'],
                'stock'        => $data['stock'],
                'description'  => $data['description'],
                'is_featured'  => $data['is_featured'],
                'image'        => $data['image'] ?? null,
            ]);
        }
    }
}
