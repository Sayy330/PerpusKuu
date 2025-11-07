@extends('layout')

@section('content')
<div class="text-center">
    <h1 class="fw-bold text-success mb-4">Selamat Datang di Perpusku</h1>
    <p class="mb-5">Sistem Manajemen Buku Perpustakaan Mini Sekolah</p>

    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card shadow-sm p-3">
                <h5>Total Buku</h5>
                <h3 class="text-success">120</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm p-3">
                <h5>Total Siswa</h5>
                <h3 class="text-success">58</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm p-3">
                <h5>Peminjaman Aktif</h5>
                <h3 class="text-success">23</h3>
            </div>
        </div>
    </div>
</div>
@endsection
