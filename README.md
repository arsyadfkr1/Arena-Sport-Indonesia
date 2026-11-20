# Proyek UTS Pemrograman Web — PT ARENA SPORT INDONESIA

Website Profil Usaha & Katalog Dinamis Toko Perlengkapan Sepak Bola, Futsal, & Minisoccer berbasis **Laravel 12**.

---

## 📋 Informasi Proyek
- **Mata Kuliah**: Pemrograman Web (Ujian Tengah Semester)
- **Nama Perusahaan**: **PT ARENA SPORT INDONESIA** (Inisial 'A')
- **Bidang Usaha**: UMKM Retail & Grosir Perlengkapan Sepak Bola, Futsal, dan Minisoccer
- **Tech Stack**:
  - **Framework Backend**: Laravel 12 (PHP 8.2+)
  - **Database**: MySQL (MariaDB) / XAMPP (Port 3307 / 3306)
  - **Frontend / Styling**: Tailwind CSS (Desain Responsif & Modern Dark Navy/Electric Blue)
  - **Font**: Google Fonts (Poppins & Inter)

---

## 🎯 Pemenuhan 8 Butir Ketentuan Wajib UTS

| No | Syarat Dosen / Ketentuan UTS | Realisasi Implementasi di Proyek | Status |
|:---:|:---|:---|:---:|
| 1 | **Project Laravel baru berjalan** (`php artisan serve` tanpa error) | Laravel 12 fresh install berjalan mulus di `http://127.0.0.1:8000` tanpa error. | ✅ Tuntas |
| 2 | **Database + Migration min. 2 tabel berelasi** | 2 Tabel berelasi: `categories` (one) berelasi dengan `products` (many) via foreign key `category_id` (onDelete cascade). | ✅ Tuntas |
| 3 | **Model + Relasi Eloquent dipanggil di Controller** | Model `Category` (`hasMany`) & `Product` (`belongsTo`). Controller memanggil data via Eloquent: `Product::with('category')`, `Category::withCount('products')`. | ✅ Tuntas |
| 4 | **Halaman Dinamis Publik & Admin**: | | |
| | a. **Halaman Publik**: Daftar produk dari DB + Detail per item | - Beranda: Hero Banner interaktif, Kategori, Produk Unggulan & Terbaru.<br>- Katalog: Filter kategori instan, Search pencarian nama/brand, Pengurutan harga/nama.<br>- Detail: Foto produk, badge sol lapangan, stok real-time, tombol pemesanan WhatsApp otomatis. | ✅ Tuntas |
| | b. **Halaman Admin**: CRUD Sederhana (Tambah, Ubah, Hapus, Daftar Data) | Halaman admin lengkap di `/admin/products`: Dashboard ringkasan stok, tabel data berpaginasi, Form Create, Form Edit, dan Aksi Delete. | ✅ Tuntas |
| 5 | **Upload foto/gambar disimpan di storage/public** | Upload gambar produk via form admin disimpan di `storage/app/public/products` dan dapat diakses publik via symlink `php artisan storage:link`. Saat produk diupdate/dihapus, file lama otomatis terhapus dari storage. | ✅ Tuntas |
| 6 | **Validasi form server-side min. 3 aturan** | Menggunakan Form Validation Laravel dengan 5+ aturan:<br>1. **Wajib diisi**: `required`<br>2. **Maksimal karakter / file size**: `max:255` (nama), `max:100` (brand), `max:2048` (file foto 2MB)<br>3. **Tipe data**: `numeric` (harga), `integer` (stok), `image`, `mimes:jpeg,png,jpg,webp`. | ✅ Tuntas |
| 7 | **Tampilan responsif (Bootstrap / Tailwind / CSS)** | Dibuat dengan Tailwind CSS mobile-first (grid responsif di mobile 2 kolom, tablet 2-3 kolom, desktop 4 kolom). | ✅ Tuntas |
| 8 | **Seeder minimal 5 data contoh** | Seeder `CategorySeeder` (7 kategori olahraga lengkap) dan `ProductSeeder` (30 produk realistis dengan foto studio e-commerce). | ✅ Tuntas |
| + | **Nama PT & Logo** | Nama: **PT ARENA SPORT INDONESIA**, Logo sport modern beridentitas huruf A & stadion bola, lengkap dengan Favicon browser. | ✅ Tuntas |
| + | **Deskripsi Usaha di Website** | Section "Dedikasi Terbaik untuk Komunitas Sepak Bola & Futsal" di Beranda & Halaman khusus `/tentang-kami`. | ✅ Tuntas |

---

## 🚀 Panduan Menjalankan Proyek (Setup & Run)

Bagi Dosen Penguji / Asisten Praktikum yang ingin menjalankan proyek ini dari awal:

### 1. Prasyarat:
- PHP >= 8.2
- Composer
- MySQL (XAMPP / Laragon)

### 2. Langkah Cepat:
```powershell
# 1. Masuk ke direktori proyek
cd "UTS WEB"

# 2. Install dependensi (jika baru clone/download)
composer install

# 3. Buat file .env dan generate app key
cp .env.example .env
php artisan key:generate

# 4. Pastikan konfigurasi database di .env sudah sesuai
# (Contoh XAMPP: DB_HOST=127.0.0.1, DB_PORT=3307 atau 3306, DB_DATABASE=arena_sport, DB_USERNAME=root, DB_PASSWORD=)

# 5. Jalankan migrasi dan seeder data otomatis
php artisan migrate:fresh --seed

# 6. Buat tautan penyimpanan gambar produk
php artisan storage:link

# 7. Jalankan web server lokal
php artisan serve
```

---

## 🌐 Daftar Rute URL Halaman

| Halaman | Rute URL | Deskripsi |
|:---|:---|:---|
| 🏠 **Beranda (Home)** | `http://127.0.0.1:8000/` | Hero banner aksi futsal, tab kategori, katalog unggulan, profil PT Arena Sport |
| 📦 **Katalog Produk** | `http://127.0.0.1:8000/katalog` | Filter per kategori, search pencarian produk, sorting harga termurah/termahal |
| 🔍 **Detail Produk** | `http://127.0.0.1:8000/produk/{slug}` | Foto produk resolusi tinggi, informasi stok, deskripsi, tombol beli WhatsApp |
| ℹ️ **Tentang Kami** | `http://127.0.0.1:8000/tentang-kami` | Sejarah PT, Visi, Misi, pilar jenis sol lapangan (FG/TF/IN), kontak |
| ⚙️ **Admin Panel** | `http://127.0.0.1:8000/admin/products` | Dashboard statistik produk, daftar tabel, dan aksi kelola produk |
| ➕ **Tambah Produk** | `http://127.0.0.1:8000/admin/products/create` | Form upload gambar + validasi server-side |
| ✏️ **Edit Produk** | `http://127.0.0.1:8000/admin/products/{id}/edit` | Form update data produk & ganti foto |
