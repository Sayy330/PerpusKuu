@extends('layout')

@section('content')
<h3>Detail Kategori</h3>

<div class="card p-3">
    <h5>Nama: {{ $category->name }}</h5>
    <p>Dibuat: {{ $category->created_at->format('d M Y H:i') }}</p>
</div>

<a href="{{ route('categories.index') }}" class="btn btn-link mt-3">Kembali</a>
@endsection
