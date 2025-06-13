# Laravel Frontend 


### 1. Install Laravel
```bash
laravel new example-app
```
> Ini akan membuat folder dengan nama `example-app` (atau nama yang Anda tentukan)

### 2. Buka kode di VS Code
```bash
cd example-app
code .
```

### 3. Install Dependencies
Buka terminal VS code

#### Cara sesuai dokumentasi Laravel:
```bash
npm install && npm run build
composer run dev
```

#### Cara Alternatif
```bash
set NODE_OPTIONS=--max-old-space-size=4096
npm install
npm run build
npm run dev
```

## Konfigurasi .env

### 4. Ubah Session Driver
Ubah baris berikut di .env

```env
SESSION_DRIVER=file
```

### 5. Tambahkan API Base URL
Tambahkan di file `.env`
```env
API_BASE_URL=http://localhost:8080
```

### 6. Konfigurasi Services
Edit file `config/services.php` dan tambahkan:
```php
'api' => [
    'api_base_url' => env('API_BASE_URL'),
],
```

### 7. Buat Controllers
Buka terminal VS Code dan buat controller dengan command :
```bash
php artisan make:controller MahasiswaController
php artisan make:controller MatkulController
php artisan make:controller DashboardController
```

### 8. Buat Routes
Buat route untuk dashboard, mahasiswa dan matakuliah.
```bash
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('pages.dashboard');
});


Route::get('/dashboard', [DashboardController::class, 'index']);


Route::get('/mahasiswa',[MahasiswaController::class, 'index']);
Route::get('/mahasiswa/create',[MahasiswaController::class, 'create']);
Route::post('/mahasiswa/store',[MahasiswaController::class, 'store']);
Route::get('/mahasiswa/edit/{nim}',[MahasiswaController::class, 'edit']);
Route::put('/mahasiswa/update',[MahasiswaController::class, 'update']);
Route::delete('/mahasiswa/delete/{nim}',[MahasiswaController::class, 'destroy']);
```
Lakukan juga untuk Route mata kuliah.


### 9. Buat Folder dan File Views
```
resources/
├── views/
    ├── layout/
    │   └── app.blade.php
    ├── pages/
    │   └── dashboard.blade.php
    └── mahasiswa/
    │   ├── index.blade.php
    │   ├── create.blade.php
    │   └── edit.blade.php
    └── matakuliah/
        ├── index.blade.php
        ├── create.blade.php
        └── edit.blade.php
```

## Menjalankan Aplikasi

### 10. Jalankan terlebih dahulu API backend
Pastikan API backend sudah berjalan di `http://localhost:8080`

### 11. Start Development Server
Buka terminal VS Code dan jalankan :
```bash
php artisan serve
```

Aplikasi akan berjalan di `http://localhost:8000`. Cara alternatif menuju link form output dengan ctrl+klik link `http://localhost:8000` di terminal VS Code setelah develop server berhasil dijalankan

# 📝 Penutup
Dengan panduan ini, kamu bisa menjalankan frontend berbasis Laravel yang dinamis dengan koneksi API CodeIgniter backend dengan fungsi lengkap: create, read, update, delete untuk Mahasiswa dan Matkul.

