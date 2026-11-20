@extends('layouts.app')

@section('title', 'Tentang Kami — PT Arena Sport Indonesia')

@section('content')
<div class="hero-bg py-20 text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 right-10 w-72 h-72 bg-brand rounded-full blur-3xl"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center max-w-2xl mx-auto">
            <div class="w-20 h-20 bg-gradient-to-br from-brand to-brand-light rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-2xl">
                <img src="{{ asset('images/logo.png') }}" alt="Arena Sport Indonesia" class="w-16 h-16 object-contain drop-shadow-xl">
            </div>
            <h1 class="font-display text-4xl font-black mb-4">PT ARENA SPORT INDONESIA</h1>
            <p class="text-blue-200 text-lg">Pusat Perlengkapan Sepak Bola, Futsal & Minisoccer Terpercaya di Indonesia</p>
        </div>
    </div>
</div>

<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <div>
                <h2 class="font-display text-2xl font-bold text-slate-900 mb-4">Tentang Perusahaan</h2>
                <p class="text-slate-600 leading-relaxed mb-4">
                    <strong>PT Arena Sport Indonesia</strong> adalah perusahaan ritel perlengkapan olahraga bola kaki yang berfokus pada tiga cabang utama: Sepak Bola, Futsal, dan Minisoccer.
                </p>
                <p class="text-slate-600 leading-relaxed mb-4">
                    Didirikan dengan misi memenuhi kebutuhan komunitas olahraga yang terus berkembang di Indonesia, kami menyediakan produk berkualitas tinggi dari brand lokal unggulan (Specs, Ortuseight, Calci, Hills) maupun brand internasional (Nike, Adidas, Puma, Molten).
                </p>
                <p class="text-slate-600 leading-relaxed">
                    Kami percaya bahwa setiap pemain — dari level pemula hingga profesional — berhak mendapatkan perlengkapan yang tepat untuk jenis lapangan yang mereka mainkan.
                </p>
            </div>
            <div>
                <h2 class="font-display text-2xl font-bold text-slate-900 mb-4">Visi & Misi</h2>
                <div class="bg-slate-50 rounded-xl p-5 mb-4">
                    <h3 class="font-display font-semibold text-brand mb-2">🎯 Visi</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Menjadi toko perlengkapan sepak bola dan futsal paling terpercaya di Indonesia dengan layanan digital yang memudahkan setiap komunitas.</p>
                </div>
                <div class="bg-slate-50 rounded-xl p-5">
                    <h3 class="font-display font-semibold text-brand mb-3">🚀 Misi</h3>
                    <ul class="space-y-2 text-slate-600 text-sm">
                        <li class="flex gap-2"><span>✅</span> Menyediakan produk 100% original bergaransi resmi</li>
                        <li class="flex gap-2"><span>✅</span> Memberikan panduan pemilihan produk yang tepat sesuai jenis lapangan</li>
                        <li class="flex gap-2"><span>✅</span> Mendukung komunitas sepak bola dan futsal lokal Indonesia</li>
                        <li class="flex gap-2"><span>✅</span> Menghadirkan pengalaman belanja yang mudah dan transparan</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-5">
            @foreach([['⚽','Sepak Bola','FG — Firm Ground'],['👟','Futsal','IN — Indoor Court'],['🏟️','Minisoccer','TF — Turf Field'],['📦','30+ Produk','Siap Dikirim']] as [$icon,$label,$sub])
            <div class="bg-gradient-to-br from-brand/5 to-brand-light/10 border border-brand/20 rounded-2xl p-5 text-center">
                <div class="text-3xl mb-2">{{ $icon }}</div>
                <div class="font-display font-bold text-slate-800 text-sm">{{ $label }}</div>
                <div class="text-xs text-slate-500 mt-0.5">{{ $sub }}</div>
            </div>
            @endforeach
        </div>

        <div class="mt-12 bg-navy text-white rounded-2xl p-8" style="background: linear-gradient(135deg, #07091A, #0D1B3E)">
            <h3 class="font-display text-xl font-bold mb-4">📍 Toko Fisik Resmi — Bandar Lampung</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="text-slate-300 text-sm">
                    <strong class="text-white block mb-1">Alamat Offline Store</strong>
                    Jl. ZA. Pagar Alam No. 88, Gedong Meneng, Kec. Rajabasa, Kota Bandar Lampung, Lampung 35145
                </div>
                <div class="text-slate-300 text-sm">
                    <strong class="text-white block mb-1">Jam Operasional</strong>
                    <span class="text-emerald-400 font-semibold">Senin – Minggu</span><br>
                    08.00 – 22.00 WIB (Buka Setiap Hari)
                </div>
                <div class="text-slate-300 text-sm">
                    <strong class="text-white block mb-1">Kontak &amp; Konsultasi</strong>
                    WhatsApp: +62 812-3456-7890<br>
                    Email: info@arenasport.id
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
