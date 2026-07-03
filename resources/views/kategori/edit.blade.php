@extends('layouts.app')

@section('content')

<h2>Edit Produk</h2>

<form action="/produk/{{ $produk->id }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">
    <label>Nama Produk</label>

    <input type="text"
           name="nama_produk"
           class="form-control"
           value="{{ $produk->nama_produk }}">
</div>

<div class="mb-3">

<label>Kategori</label>

<select name="category_id" class="form-control">

@foreach($kategori as $k)

<option value="{{ $k->id }}"
@if($produk->category_id == $k->id) selected @endif>

{{ $k->nama_kategori }}

</option>

@endforeach

</select>

</div>

<div class="mb-3">
    <label>Stok</label>

    <input type="number"
           name="stok"
           class="form-control"
           value="{{ $produk->stok }}">
</div>

<div class="mb-3">
    <label>Harga</label>

    <input type="number"
           name="harga"
           class="form-control"
           value="{{ $produk->harga }}">
</div>

<button class="btn btn-primary">
    Update
</button>

</form>

@endsection