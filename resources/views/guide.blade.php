@extends('layouts.app')

@section('title', 'Panduan Sol & Ukuran Sepatu — PT Arena Sport Indonesia')

@section('content')

{{-- Header Banner --}}
<div class="hero-bg py-16 text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 right-10 w-72 h-72 bg-blue-600 rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 left-10 w-80 h-80 bg-blue-400 rounded-full blur-3xl"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center max-w-3xl">
        <div class="inline-flex items-center gap-2 bg-blue-500/20 border border-blue-400/30 rounded-full px-4 py-1.5 text-xs text-blue-300 font-semibold mb-4 backdrop-blur-md">
            <span>👟 FIELD &amp; SIZE GUIDE</span>
        </div>
        <h1 class="font-display text-3xl sm:text-5xl font-black mb-4 leading-tight">
            Panduan Jenis Sol Lapangan<br>
            <span class="text-gradient">&amp; Ukuran Sepatu Bola</span>
        </h1>
        <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
            Memilih jenis sol yang tepat adalah kunci performa terbaik dan mencegah risiko cedera lutut serta engkel. Pelajari perbedaan sol IN, TF, dan FG sebelum bertanding!
        </p>
    </div>
</div>

<div class="bg-slate-50 py-14">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- SECTION 1: PERBEDAAN SOL LAPANGAN --}}
        <div class="mb-16">
            <div class="text-center max-w-2xl mx-auto mb-10">
                <span class="text-blue-600 text-xs font-bold uppercase tracking-wider">Kenali Lapanganmu</span>
                <h2 class="font-display text-3xl font-extrabold text-slate-900 mt-1">3 Tipe Sol Berdasarkan Karakter Lapangan</h2>
                <p class="text-slate-500 text-sm mt-2">Pastikan sol sepatu Anda sesuai dengan jenis permukaan lapangan yang dimainkan.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                {{-- Sol IN --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200/90 shadow-sm hover:shadow-xl hover:border-cyan-400 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="w-12 h-12 rounded-2xl bg-cyan-100 text-cyan-700 flex items-center justify-center text-2xl font-bold">
                                👟
                            </span>
                            <span class="bg-cyan-50 border border-cyan-200 text-cyan-700 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                Sol IN (Indoor)
                            </span>
                        </div>
                        <h3 class="font-display font-bold text-xl text-slate-900 mb-2">Futsal Vinyl &amp; Parquette</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-4">
                            Didesain dengan sol karet datar (*flat gum rubber*) tanpa pul. Menggunakan karet non-marking yang tidak meninggalkan noda di lantai.
                        </p>
                        <div class="bg-slate-50 rounded-2xl p-4 space-y-2 mb-6 text-xs text-slate-700">
                            <div class="flex items-center gap-2">
                                <span class="text-emerald-500 font-bold">✓</span>
                                <span><strong>Permukaan:</strong> Vinyl, Kayu (Parquette), Semen Halus</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-emerald-500 font-bold">✓</span>
                                <span><strong>Kelebihan:</strong> Cengkeraman instan untuk manuver lincah</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-red-500 font-bold">✗</span>
                                <span><strong>Hindari:</strong> Rumput sintetis (bisa licin)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="{{ route('catalog.index', ['category' => 'sepatu-futsal']) }}" 
                           class="block text-center w-full bg-cyan-50 hover:bg-cyan-600 text-cyan-700 hover:text-white font-semibold rounded-xl py-3 text-xs transition-all border border-cyan-200">
                            Lihat Katalog Sepatu Futsal (IN) →
                        </a>
                    </div>
                </div>

                {{-- Sol TF --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200/90 shadow-sm hover:shadow-xl hover:border-emerald-400 transition-all duration-300 flex flex-col justify-between ring-2 ring-emerald-500/20">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-2xl font-bold">
                                ⚡
                            </span>
                            <span class="bg-emerald-50 border border-emerald-200 text-emerald-700 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                Sol TF (Turf)
                            </span>
                        </div>
                        <h3 class="font-display font-bold text-xl text-slate-900 mb-2">Minisoccer Rumput Sintetis</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-4">
                            Memiliki pul karet kecil yang sangat banyak (*multi-studs*). Paling ideal untuk lapangan rumput sintetis pendek yang sering keras di dasarnya.
                        </p>
                        <div class="bg-slate-50 rounded-2xl p-4 space-y-2 mb-6 text-xs text-slate-700">
                            <div class="flex items-center gap-2">
                                <span class="text-emerald-500 font-bold">✓</span>
                                <span><strong>Permukaan:</strong> Rumput Sintetis Minisoccer, Lapangan Kering</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-emerald-500 font-bold">✓</span>
                                <span><strong>Kelebihan:</strong> Meredam beban lutut &amp; engkel, tidak mudah selip</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-blue-500 font-bold">★</span>
                                <span><strong>Sangat Dianjurkan</strong> untuk pemain usia 25+ ke atas</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="{{ route('catalog.index', ['category' => 'sepatu-minisoccer']) }}" 
                           class="block text-center w-full bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-xl py-3 text-xs transition-all shadow-md shadow-emerald-500/20">
                            Lihat Katalog Sepatu Minisoccer (TF) →
                        </a>
                    </div>
                </div>

                {{-- Sol FG --}}
                <div class="bg-white rounded-3xl p-6 border border-slate-200/90 shadow-sm hover:shadow-xl hover:border-blue-400 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="w-12 h-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center text-2xl font-bold">
                                ⚽
                            </span>
                            <span class="bg-blue-50 border border-blue-200 text-blue-700 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                                Sol FG (Firm Ground)
                            </span>
                        </div>
                        <h3 class="font-display font-bold text-xl text-slate-900 mb-2">Sepak Bola Rumput Alami</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-4">
                            Dilengkapi pul runcing berbahan plastik TPU/nilon (11–13 pul). Menembus tanah rumput alami untuk memberikan dorongan akselerasi maksimal.
                        </p>
                        <div class="bg-slate-50 rounded-2xl p-4 space-y-2 mb-6 text-xs text-slate-700">
                            <div class="flex items-center gap-2">
                                <span class="text-emerald-500 font-bold">✓</span>
                                <span><strong>Permukaan:</strong> Lapangan Rumput Alami Kering / Sedang</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-emerald-500 font-bold">✓</span>
                                <span><strong>Kelebihan:</strong> Traksi sprint optimal saat duel lapangan besar</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-red-500 font-bold">✗</span>
                                <span><strong>Hindari:</strong> Rumput sintetis keras (bisa membuat pul patah/lutut sakit)</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="{{ route('catalog.index', ['category' => 'sepatu-sepak-bola']) }}" 
                           class="block text-center w-full bg-blue-50 hover:bg-blue-600 text-blue-700 hover:text-white font-semibold rounded-xl py-3 text-xs transition-all border border-blue-200">
                            Lihat Katalog Sepatu Bola (FG) →
                        </a>
                    </div>
                </div>

            </div>
        </div>

        {{-- SECTION 2: INTERACTIVE SIZE CALCULATOR & CHART --}}
        <div class="bg-white rounded-3xl p-8 sm:p-10 border border-slate-200/90 shadow-sm mb-16">
            <div class="max-w-3xl mb-8">
                <span class="text-blue-600 text-xs font-bold uppercase tracking-wider">Akurasi Ukuran</span>
                <h2 class="font-display text-2xl sm:text-3xl font-extrabold text-slate-900 mt-1">Panduan Ukuran Kaki (Size Chart)</h2>
                <p class="text-slate-500 text-sm mt-1">
                    Gunakan tabel di bawah ini untuk mengonversi panjang telapak kaki (Centimeter) ke ukuran sepatu standar brand Specs, Ortuseight, Nike, dan Adidas.
                </p>
            </div>

            {{-- Cara Mengukur Kaki --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                <div class="bg-blue-50/60 border border-blue-100 rounded-2xl p-4">
                    <div class="font-bold text-blue-700 text-sm mb-1">1. Letakkan Kertas di Lantai</div>
                    <p class="text-slate-600 text-xs">Posisikan kaki tegak di atas selembar kertas putih, tempelkan tumit ke dinding.</p>
                </div>
                <div class="bg-blue-50/60 border border-blue-100 rounded-2xl p-4">
                    <div class="font-bold text-blue-700 text-sm mb-1">2. Tandai Ujung Jari Terpanjang</div>
                    <p class="text-slate-600 text-xs">Gunakan pensil untuk menandai titik terluar tumit dan ujung jari kaki terpanjang.</p>
                </div>
                <div class="bg-blue-50/60 border border-blue-100 rounded-2xl p-4">
                    <div class="font-bold text-blue-700 text-sm mb-1">3. Ukur dengan Penggaris</div>
                    <p class="text-slate-600 text-xs">Ukur jarak kedua garis dalam CM, lalu tambahkan toleransi 0.5 cm untuk kaos kaki.</p>
                </div>
            </div>

            {{-- Table --}}
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="bg-slate-900 text-white rounded-xl">
                            <th class="text-left px-5 py-3.5 rounded-l-xl font-semibold">Panjang Kaki (CM)</th>
                            <th class="text-left px-5 py-3.5 font-semibold">Ukuran EU / Indonesia</th>
                            <th class="text-left px-5 py-3.5 font-semibold">Specs &amp; Ortuseight</th>
                            <th class="text-left px-5 py-3.5 font-semibold">Nike</th>
                            <th class="text-left px-5 py-3.5 rounded-r-xl font-semibold">Adidas</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @foreach([
                            ['24.5 cm', '39', '39 (Pas)', '39 (6.5 US)', '39 1/3 (6.5 US)'],
                            ['25.0 cm', '40', '40 (Rekomendasi)', '40 (7 US)', '40 (7 US)'],
                            ['25.5 cm', '41', '41 (Rekomendasi)', '41 (8 US)', '40 2/3 (7.5 US)'],
                            ['26.5 cm', '42', '42 (Rekomendasi)', '42 (8.5 US)', '42 (8.5 US)'],
                            ['27.0 cm', '43', '43 (Rekomendasi)', '43 (9.5 US)', '42 2/3 (9 US)'],
                            ['28.0 cm', '44', '44 (Rekomendasi)', '44 (10 US)', '44 (10 US)'],
                            ['28.5 cm', '45', '45 (Rekomendasi)', '45 (11 US)', '44 2/3 (10.5 US)'],
                        ] as [$cm, $eu, $local, $nike, $adidas])
                        <tr class="hover:bg-slate-50/80 transition-colors">
                            <td class="px-5 py-3.5 font-bold text-blue-600">{{ $cm }}</td>
                            <td class="px-5 py-3.5 font-semibold text-slate-800">{{ $eu }}</td>
                            <td class="px-5 py-3.5 text-slate-600">{{ $local }}</td>
                            <td class="px-5 py-3.5 text-slate-600">{{ $nike }}</td>
                            <td class="px-5 py-3.5 text-slate-600">{{ $adidas }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- SECTION 3: STORE LOCATION & JAM OPERASIONAL DI BANDAR LAMPUNG --}}
        <div class="bg-gradient-to-br from-[#07091A] to-[#0D1B3E] rounded-3xl p-8 sm:p-12 text-white shadow-2xl relative overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-7">
                    <span class="inline-block bg-blue-600/30 border border-blue-400/30 text-blue-300 text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-full mb-3">
                        📍 TOKO FISIK RESMI
                    </span>
                    <h2 class="font-display text-2xl sm:text-4xl font-black mb-3">
                        PT Arena Sport Indonesia — Bandar Lampung
                    </h2>
                    <p class="text-slate-300 text-sm leading-relaxed mb-6 max-w-xl">
                        Ingin mencoba langsung ukuran sepatu atau konsultasi sol lapangan bersama tim spesialis kami? Kunjungi offline store kami di Bandar Lampung!
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
                        <div class="bg-white/5 border border-white/10 rounded-2xl p-4">
                            <div class="text-blue-400 text-xs font-bold uppercase mb-1">Alamat Lengkap Toko</div>
                            <div class="text-white font-medium text-xs leading-relaxed">
                                Jl. ZA. Pagar Alam No. 88, Gedong Meneng, Kec. Rajabasa, Kota Bandar Lampung, Lampung 35145
                            </div>
                        </div>

                        <div class="bg-white/5 border border-white/10 rounded-2xl p-4">
                            <div class="text-blue-400 text-xs font-bold uppercase mb-1">Jam Operasional Toko</div>
                            <div class="text-white font-bold text-sm">Senin – Minggu</div>
                            <div class="text-emerald-400 font-semibold text-xs mt-0.5">08.00 – 22.00 WIB (Buka Setiap Hari)</div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5 flex flex-col gap-3">
                    <a href="https://wa.me/6281234567890?text=Halo%20PT%20Arena%20Sport%20Indonesia%20Bandar%20Lampung%2C%20saya%20ingin%20konsultasi%20ukuran%20sepatu%20dan%20cek%20stok" target="_blank"
                       class="btn-primary text-center text-white font-semibold rounded-2xl py-4 px-6 text-sm shadow-xl shadow-blue-600/30">
                        Chat WhatsApp Customer Service Bandar Lampung →
                    </a>
                    <a href="{{ route('catalog.index') }}" 
                       class="text-center bg-white/10 hover:bg-white/15 border border-white/20 text-white font-semibold rounded-2xl py-3.5 px-6 text-sm transition-all">
                        Belanja Online di Katalog →
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
