@extends('layouts.app')

@section('content')

<h2>Data Produk</h2>

<a href="/produk/create" class="btn btn-primary mb-3">
    Tambah Produk
</a>

<table class="table table-bordered">

<tr>
    <th>ID</th>
    <th>Nama Produk</th>
    <th>Kategori</th>
    <th>Stok</th>
    <th>Harga</th>
    <th>Aksi</th>
</tr>

@foreach($produk as $p)

<tr>
    <td>{{ $p->id }}</td>
    <td>{{ $p->nama_produk }}</td>
    <td>{{ $p->category->nama_kategori }}</td>
    <td>{{ $p->stok }}</td>
    <td>Rp {{ number_format($p->harga) }}</td>

    <td>

        <a href="/produk/{{ $p->id }}/edit"
           class="btn btn-warning">
            Edit
        </a>

        <form action="/produk/{{ $p->id }}"
              method="POST"
              style="display:inline">

            @csrf
            @method('DELETE')

            <button class="btn btn-danger">
                Hapus
            </button>

        </form>

    </td>

</tr>

@endforeach

</table>

@endsection