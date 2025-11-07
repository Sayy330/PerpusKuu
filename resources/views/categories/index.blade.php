@extends('layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Daftar Kategori</h3>
    <a href="{{ route('categories.create') }}" class="btn btn-success">+ Tambah Kategori</a>
</div>

@include('partials.alerts')

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th width="60">#</th>
            <th>Nama Kategori</th>
            <th width="180">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($categories as $i => $category)
        <tr>
            <td>{{ $categories->firstItem() + $i }}</td>
            <td>{{ $category->name }}</td>
            <td>
                <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-primary">Edit</a>

                <form action="{{ route('categories.destroy', $category) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus kategori ini?');">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="3" class="text-center">Belum ada kategori.</td>
        </tr>
        @endforelse
    </tbody>
</table>

<div class="mt-3">
    {{ $categories->links() }}
</div>
@endsection
