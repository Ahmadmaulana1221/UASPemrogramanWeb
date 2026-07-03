@extends('layouts.app')

@section('content')

<h2>Tambah Produk</h2>

<form action="/produk" method="POST">

@csrf

<div class="mb-3">
    <label>Nama Produk</label>
    <input type="text" name="nama_produk" class="form-control">
</div>

<div class="mb-3">
    <label>Kategori</label>

    <select name="category_id" class="form-control">

        @foreach($kategori as $k)

        <option value="{{ $k->id }}">
            {{ $k->nama_kategori }}
        </option>

        @endforeach

    </select>

</div>

<div class="mb-3">
    <label>Stok</label>
    <input type="number" name="stok" class="form-control">
</div>

<div class="mb-3">
    <label>Harga</label>
    <input type="number" name="harga" class="form-control">
</div>

<button class="btn btn-success">
    Simpan
</button>

</form>

@endsection