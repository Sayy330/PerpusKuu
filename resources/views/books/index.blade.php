@extends('layout')

@section('content')
<h2 class="mb-3">Daftar Buku</h2>
<a href="{{ route('books.create') }}" class="btn btn-success mb-3">+ Tambah Buku</a>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Penulis</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <!-- Nanti diisi looping data -->
    </tbody>
</table>
@endsection
