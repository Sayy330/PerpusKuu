@extends('layout')

@section('content')
<h3>Tambah Kategori</h3>

@include('partials.errors')

<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nama Kategori</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
    </div>

    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Batal</a>
    <button type="submit" class="btn btn-success">Simpan</button>
</form>
@endsection
