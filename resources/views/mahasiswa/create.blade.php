@extends('layout.app')
@section('title', 'Dashboard')
@section('content')

 <!-- Salin navbar dari dashboard atau hapus jika tidak ingin -->
  <div class="container mt-5">
    <h2>Tambah Data Mahasiswa</h2>

    <form action="/mahasiswa/store" method="POST">
      @csrf
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" required>
      </div>
      <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" class="form-control" name="nim" id="nim" required>
      </div>
      <div class="mb-3">
        <label for="kelas_id" class="form-label">Kelas ID</label>
        <input type="kelas_id" class="form-control" name="kelas_id" id="kelas_id" required>
      </div>

      <button type="submit" class="btn btn-success">Simpan</button>
      <a href="/mahasiswa" class="btn btn-secondary">Kembali</a>
    </form>
  </div>

@endsection
