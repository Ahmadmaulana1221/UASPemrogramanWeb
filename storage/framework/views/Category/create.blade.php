@extends('layouts.app')

@section('title','Tambah Kategori')

@section('content')

<div class="row justify-content-center">

<div class="col-md-7">

<div class="card shadow border-0">

<div class="card-header bg-primary text-white">

<h4>

<i class="fas fa-plus-circle"></i>

Tambah Kategori

</h4>

</div>

<div class="card-body">

<form action="{{ route('categories.store') }}" method="POST">

@csrf

<div class="mb-3">

<label class="form-label">

Nama Kategori

</label>

<input type="text"
name="nama_kategori"
class="form-control"
placeholder="Masukkan Nama Kategori">

</div>

<div class="text-end">

<a href="{{ route('categories.index') }}"
class="btn btn-secondary">

Kembali

</a>

<button class="btn btn-primary">

<i class="fas fa-save"></i>

Simpan

</button>

</div>

</form>

</div>

</div>

</div>

</div>

@endsection